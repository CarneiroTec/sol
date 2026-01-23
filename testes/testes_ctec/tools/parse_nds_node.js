#!/usr/bin/env node
// parse_nds_node.js
// Lê arquivo flattened NDS e reconstrói estrutura, emite NDS reconstituído

const fs = require('fs');
const path = require('path');

const file = process.argv[2] || path.join(__dirname, '..', 'output_completion_easy.nds');
const raw = fs.readFileSync(file, 'utf8');

function parseFlattened(src) {
  const out = {};
  for (const line of src.split(/\r?\n/)) {
    const m = line.match(/^\s*([^=]+)=\s*(.*)$/);
    if (!m) continue;
    let key = m[1].trim();
    let val = m[2].trim();
    if (val.startsWith('"') && val.endsWith('"')) {
      val = val.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
    } else if (/^%d$/.test(val) || /^\d+$/.test(val)) {
      val = Number(val);
    } else if (val === 'true' || val === 'false') {
      val = (val === 'true');
    }
    const parts = key.split('_');
    let cur = out;
    for (let i = 0; i < parts.length; i++) {
      const p = parts[i];
      const nextIsIndex = /^\d+$/.test(parts[i+1]);
      if (i === parts.length - 1) {
        // assign
        if (/^\d+$/.test(p)) {
          cur[Number(p)-1] = val;
        } else {
          cur[p] = val;
        }
      } else {
        const isIndex = /^\d+$/.test(p);
        if (isIndex) {
          const idx = Number(p)-1;
          cur[idx] = cur[idx] || {};
          cur = cur[idx];
        } else {
          cur[p] = cur[p] || {};
          cur = cur[p];
        }
      }
    }
  }
  return out;
}

function serializeNds(obj, pretty=false, indent=''){
  if (obj === null) return 'nulo';
  if (typeof obj === 'string') return '"' + obj.replace(/\\/g,'\\\\').replace(/"/g,'\\"') + '"';
  if (typeof obj === 'number') return String(obj);
  if (typeof obj === 'boolean') return obj ? 'true' : 'false';
  if (Array.isArray(obj)){
    const items = obj.map(v => serializeNds(v, pretty, indent + '  '));
    if (pretty) return '{ ' + items.join(', ') + ' }';
    return '{ ' + items.join(', ') + ' }';
  }
  // object
  const keys = Object.keys(obj);
  const parts = keys.map(k => k + ' = ' + serializeNds(obj[k], pretty, indent + '  '));
  if (pretty) return '{\n' + indent + '  ' + parts.join(',\n' + indent + '  ') + '\n' + indent + '}';
  return '{ ' + parts.join(', ') + ' }';
}

const parsed = parseFlattened(raw);
// print flattened back for verification
console.log('# Flattened input file:', file);
console.log(raw);
console.log('\n# Reconstructed NDS (compact)');
console.log(serializeNds(parsed, false));
console.log('\n# Reconstructed NDS (pretty)');
console.log(serializeNds(parsed, true));

// Also emit a minimal response wrapper that LSP would expect (id + resultado)
const response = { id: 1, resultado: parsed.resultado || parsed };
console.log('\n# LSP-like response (compact)');
console.log(serializeNds(response, false));
