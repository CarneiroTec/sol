-- Testes de Protocolo LSP
-- Valida que o LSP gera e consome formatos corretos
-- Usa os mesmos arquivos de contrato que os testes JS

local nds = importe("nds")
local teste = importe("teste")

local DADOS_DIR = "..\\sol-vscode\\testes\\dados\\"

-- ============================================================
-- Funções auxiliares
-- ============================================================

local função carregue_arquivo(caminho)
    local arquivo = terminal.abra(caminho, "r")
    se arquivo então
        local conteudo = arquivo:leia("*a")
        arquivo:feche()
        retorne conteudo
    fim
    retorne nulo
fim

local função parse_protocolo(arquivo)
    local conteudo = carregue_arquivo(DADOS_DIR .. arquivo)
    se não conteudo então
        retorne nulo, "arquivo não encontrado: " .. arquivo
    fim
    local resultado, erro = nds.carregue(conteudo)
    se não resultado então
        retorne nulo, "erro ao parsear: " .. (erro ou "desconhecido")
    fim
    -- nds.carregue retorna array, pega primeiro elemento
    se obtenha_tipo(resultado) == "tabela" e resultado[1] então
        retorne resultado[1]
    fim
    retorne resultado
fim

-- ============================================================
-- Contadores
-- ============================================================

local total = 0
local passou = 0
local falhou = 0

local função teste_ok(nome, detalhes)
    total = total + 1
    passou = passou + 1
    exiba("  ✓ " .. nome .. (detalhes e " - " .. detalhes ou ""))
fim

local função teste_falhou(nome, erro)
    total = total + 1
    falhou = falhou + 1
    exiba("  ✗ " .. nome)
    exiba("    Erro: " .. erro)
fim

local função teste_exec(nome, fn)
    local ok, resultado = chame_protegido(fn)
    se ok então
        se resultado então
            teste_ok(nome, resultado)
        senão
            teste_ok(nome)
        fim
    senão
        teste_falhou(nome, resultado ou "erro desconhecido")
    fim
fim

-- ============================================================
-- TESTES: Formato de Request (o que Extension envia)
-- ============================================================

exiba("\n📤 Formato Request (Extension → LSP)")

teste_exec("ESPERADO - request inicializar tem campos corretos", função()
    local msg = parse_protocolo("protocolo_inicializar_request.txt")
    afirme(msg, "falha ao carregar arquivo")
    afirme(msg.id, "falta campo id")
    afirme(msg.metodo == "inicializar", "metodo deve ser 'inicializar'")
    afirme(msg.parametros, "falta campo parametros")
    afirme(msg.parametros.rootUri, "falta rootUri em parametros")
    retorne "id=" .. msg.id .. ", metodo=" .. msg.metodo
fim)

teste_exec("ESPERADO - request completion tem posição", função()
    local msg = parse_protocolo("protocolo_completion_request.txt")
    afirme(msg, "falha ao carregar arquivo")
    afirme(msg.id, "falta id")
    afirme(msg.metodo == "textDocument/completion", "metodo errado")
    afirme(msg.parametros.position, "falta position")
    afirme(msg.parametros.position.line ~= nulo, "falta line")
    afirme(msg.parametros.position.character ~= nulo, "falta character")
    retorne "line=" .. msg.parametros.position.line
fim)

teste_exec("ESPERADO - notificação didOpen não tem id", função()
    local msg = parse_protocolo("protocolo_didOpen_notificacao.txt")
    afirme(msg, "falha ao carregar arquivo")
    afirme(msg.id == nulo, "notificação não deve ter id")
    afirme(msg.metodo == "textDocument/didOpen", "metodo errado")
    afirme(msg.parametros.textDocument, "falta textDocument")
    afirme(msg.parametros.textDocument.uri, "falta uri")
    afirme(msg.parametros.textDocument.text, "falta text")
    retorne "uri presente"
fim)

teste_exec("NAO_ESPERADO - request sem metodo falha", função()
    local msg_ruim = "id = 1\nparametros = {}"
    local resultado = nds.carregue(msg_ruim)
    afirme(resultado, "parse deve funcionar")
    local parsed = resultado[1] ou resultado
    afirme(parsed.metodo == nulo, "metodo deve ser nulo")
    retorne "metodo ausente detectado"
fim)

teste_exec("NULO - string vazia retorna tabela vazia", função()
    local resultado = nds.carregue("")
    afirme(resultado, "deve retornar algo")
    retorne "resultado: " .. obtenha_tipo(resultado)
fim)

-- ============================================================
-- TESTES: Formato de Response (o que LSP retorna)
-- ============================================================

exiba("\n📥 Formato Response (LSP → Extension)")

teste_exec("ESPERADO - response inicializar tem capacidades", função()
    local msg = parse_protocolo("protocolo_inicializar_response.txt")
    afirme(msg, "falha ao carregar arquivo")
    afirme(msg.id, "falta id")
    afirme(msg.resultado, "falta resultado")
    afirme(msg.resultado.capacidades, "falta capacidades")
    retorne "capacidades presente"
fim)

teste_exec("ESPERADO - response completion tem items", função()
    local msg = parse_protocolo("protocolo_completion_response.txt")
    afirme(msg, "falha ao carregar arquivo")
    afirme(msg.id, "falta id")
    afirme(msg.resultado, "falta resultado")
    -- resultado é tabela com índices numéricos
    local count = 0
    para k, v em obtenha_pares(msg.resultado) faça
        count = count + 1
        afirme(v.label, "item deve ter label")
        afirme(v.kind, "item deve ter kind")
    fim
    afirme(count > 0, "deve ter pelo menos 1 item")
    retorne count .. " items"
fim)

teste_exec("ESPERADO - diagnostic tem range e message", função()
    local msg = parse_protocolo("protocolo_diagnostics_notificacao.txt")
    afirme(msg, "falha ao carregar arquivo")
    afirme(msg.metodo == "textDocument/publishDiagnostics", "metodo errado")
    afirme(msg.parametros.diagnostics, "falta diagnostics")
    para k, diag em obtenha_pares(msg.parametros.diagnostics) faça
        afirme(diag.range, "diagnostic deve ter range")
        afirme(diag.range.start, "range deve ter start")
        afirme(diag.range.start.line ~= nulo, "start deve ter line")
        afirme(diag.message, "diagnostic deve ter message")
    fim
    retorne "estrutura válida"
fim)

-- ============================================================
-- TESTES: Serialização roundtrip
-- ============================================================

exiba("\n🔄 Roundtrip (parse → serialize → parse)")

teste_exec("ESPERADO - roundtrip request mantém dados", função()
    local original = parse_protocolo("protocolo_inicializar_request.txt")
    afirme(original, "falha ao carregar")
    
    local serializado = nds.serialize(original)
    afirme(serializado, "falha ao serializar")
    
    local reparsed = nds.carregue(serializado)
    afirme(reparsed, "falha ao reparasear")
    local final = reparsed[1] ou reparsed
    
    afirme(final.id == original.id, "id deve sobreviver")
    afirme(final.metodo == original.metodo, "metodo deve sobreviver")
    retorne "roundtrip OK"
fim)

teste_exec("ESPERADO - roundtrip response mantém resultado", função()
    local original = parse_protocolo("protocolo_completion_response.txt")
    afirme(original, "falha ao carregar")
    
    local serializado = nds.serialize(original)
    local reparsed = nds.carregue(serializado)
    local final = reparsed[1] ou reparsed
    
    afirme(final.resultado, "resultado deve sobreviver")
    retorne "roundtrip OK"
fim)

-- ============================================================
-- TESTES: Compatibilidade de tipos
-- ============================================================

exiba("\n🔢 Tipos de dados")

teste_exec("ESPERADO - número inteiro é preservado", função()
    local msg = {id = 42}
    local s = nds.serialize(msg)
    local p = nds.carregue(s)
    local r = p[1] ou p
    afirme(r.id == 42, "id deve ser 42")
    afirme(obtenha_tipo(r.id) == "numero", "deve ser numero")
    retorne "tipo numero OK"
fim)

teste_exec("ESPERADO - booleano verdadeiro é preservado", função()
    local msg = {ativo = verdadeiro}
    local s = nds.serialize(msg)
    afirme(texto.encontre(s, "verdadeiro"), "deve conter 'verdadeiro'")
    local p = nds.carregue(s)
    local r = p[1] ou p
    afirme(r.ativo == verdadeiro, "deve ser true")
    retorne "verdadeiro OK"
fim)

teste_exec("ESPERADO - booleano falso é preservado", função()
    local msg = {ativo = falso}
    local s = nds.serialize(msg)
    afirme(texto.encontre(s, "falso"), "deve conter 'falso'")
    local p = nds.carregue(s)
    local r = p[1] ou p
    afirme(r.ativo == falso, "deve ser false")
    retorne "falso OK"
fim)

teste_exec("ESPERADO - nulo é preservado", função()
    local msg = {valor = nulo}
    local s = nds.serialize(msg)
    -- nulo não aparece como campo, mas não deve quebrar
    local p = nds.carregue(s)
    retorne "nulo tratado"
fim)

teste_exec("NAO_ESPERADO - true inglês não é booleano", função()
    local s = "flag = true"
    local p = nds.carregue(s)
    local r = p[1] ou p
    -- 'true' deve ser tratado como string/identifier, não booleano
    afirme(r.flag ~= verdadeiro ou obtenha_tipo(r.flag) == "texto", "true não deve virar booleano")
    retorne "true inglês rejeitado"
fim)

-- ============================================================
-- TESTES: Estouro e limites
-- ============================================================

exiba("\n💥 Estouro e limites")

teste_exec("ESTOURO - tabela grande é serializada", função()
    local grande = {resultado = {}}
    para i = 1, 1000 faça
        grande.resultado[i] = {label = "item" .. i, kind = 6}
    fim
    local s = nds.serialize(grande)
    afirme(#s > 10000, "serialização deve ser grande")
    retorne #s .. " bytes"
fim)

teste_exec("ESTOURO - string grande é preservada", função()
    local grande = texto.repita("x", 100000)
    local msg = {texto = grande}
    local s = nds.serialize(msg)
    local p = nds.carregue(s)
    local r = p[1] ou p
    afirme(#r.texto == 100000, "tamanho deve ser preservado")
    retorne "100KB OK"
fim)

teste_exec("ESTOURO - aninhamento profundo", função()
    local profundo = {a = {b = {c = {d = {e = {f = {g = {h = "fim"}}}}}}}}
    local s = nds.serialize(profundo)
    local p = nds.carregue(s)
    local r = p[1] ou p
    afirme(r.a.b.c.d.e.f.g.h == "fim", "aninhamento deve sobreviver")
    retorne "8 níveis OK"
fim)

-- ============================================================
-- Resumo
-- ============================================================

exiba("\n" .. texto.repita("=", 50))
exiba("📊 RESUMO: " .. passou .. "/" .. total .. " testes passaram")
se falhou > 0 então
    exiba("❌ " .. falhou .. " testes falharam")
    sistema_operacional.saia(1)
senão
    exiba("✅ Todos os testes passaram!")
fim
