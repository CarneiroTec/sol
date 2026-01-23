-- parse_nds_lua.lua
-- Lê arquivo flattened NDS e reconstrói estrutura, emite NDS reconstituído

local path = arg[1] or (debug.getinfo(1).source:match('@(.*[/\\])') or '.') .. '../output_completion_easy.nds'
local f = io.open(path, 'r')
if not f then
  io.stderr:write('Cannot open ' .. path .. '\n')
  os.exit(1)
end
local raw = f:read('*a')
f:close()

local function split(s, sep)
  local t = {}
  for part in string.gmatch(s, '([^'..sep..']+)') do table.insert(t, part) end
  return t
end

local function parseFlattened(src)
  local out = {}
  for line in src:gmatch('([^\r\n]+)') do
    local k,v = string.match(line, '^%s*([^=]+)=%s*(.*)$')
    if k then
      k = k:gsub('^%s+',''):gsub('%s+$','')
      v = v:gsub('^%s+',''):gsub('%s+$','')
      if v:match('^".*"$') then
        v = v:sub(2,-2):gsub('\\"','"'):gsub('\\\\','\\')
      elseif tonumber(v) then
        v = tonumber(v)
      elseif v == 'true' then v = true
      elseif v == 'false' then v = false end
      local parts = split(k, '_')
      local cur = out
      for i=1,#parts do
        local p = parts[i]
        if i == #parts then
          if tonumber(p) then
            cur[tonumber(p)-1] = v
          else
            cur[p] = v
          end
        else
          if tonumber(p) then
            local idx = tonumber(p)-1
            cur[idx] = cur[idx] or {}
            cur = cur[idx]
          else
            cur[p] = cur[p] or {}
            cur = cur[p]
          end
        end
      end
    end
  end
  return out
end

local function serializeNds(obj, pretty, indent)
  indent = indent or ''
  local t = type(obj)
  if obj == nil then return 'nulo' end
  if t == 'string' then return '"' .. obj:gsub('\\','\\\\'):gsub('"','\\"') .. '"' end
  if t == 'number' then return tostring(obj) end
  if t == 'boolean' then return obj and 'true' or 'false' end
  if t == 'table' then
    local max = 0; local count = 0; local keys = {}
    for k in pairs(obj) do
      if type(k) == 'number' then
        max = math.max(max,k); count = count + 1
      end
      table.insert(keys, k)
    end
    local isSeq = (count>0 and max == count)
    if isSeq then
      local parts = {}
      for i=1,max do table.insert(parts, serializeNds(obj[i], pretty, indent..'  ')) end
      return '{ ' .. table.concat(parts, ', ') .. ' }'
    else
      local parts = {}
      for _,k in ipairs(keys) do
        table.insert(parts, tostring(k) .. ' = ' .. serializeNds(obj[k], pretty, indent..'  '))
      end
      if pretty then
        return '{\n' .. indent .. '  ' .. table.concat(parts, ',\n' .. indent .. '  ') .. '\n' .. indent .. '}'
      end
      return '{ ' .. table.concat(parts, ', ') .. ' }'
    end
  end
  return '""'
end

local parsed = parseFlattened(raw)
print('# Flattened input file: ' .. path)
print(raw)
print('\n# Reconstructed NDS (compact)')
print(serializeNds(parsed, false))
print('\n# Reconstructed NDS (pretty)')
print(serializeNds(parsed, true))

local response = { id = 1, resultado = parsed.resultado or parsed }
print('\n# LSP-like response (compact)')
print(serializeNds(response, false))
