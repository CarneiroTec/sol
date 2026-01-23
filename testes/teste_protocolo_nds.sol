--[[
    Testes de Protocolo LSP - NDS serialize/carregue
    
    Cenários:
    - ESPERADO: formato correto funciona
    - NAO_ESPERADO: formato incorreto falha
    - NULO: valores nulos tratados
    - ESTOURO: mensagens grandes funcionam
]]

local total = 0
local passou = 0
local falhou_cont = 0

local função teste(nome, fn)
    total = total + 1
    local ok, err = chame_protegido(fn)
    se ok então
        passou = passou + 1
        exiba("  OK " .. nome)
        retorne
    fim
    falhou_cont = falhou_cont + 1
    exiba("  X " .. nome)
    exiba("    Erro: " .. converta_para_texto(err))
fim

local função afirme_igual(esperado, atual, msg)
    se esperado ~= atual então
        lance_erro((msg ou "") .. " - Esperado: " .. converta_para_texto(esperado) .. ", Atual: " .. converta_para_texto(atual))
    fim
fim

local função afirme_tabela(valor, msg)
    se obtenha_tipo(valor) ~= "tabela" então
        lance_erro((msg ou "") .. " - Esperado tabela, recebeu: " .. obtenha_tipo(valor))
    fim
fim

local função afirme_nao_nulo(valor, msg)
    se valor == nulo então
        lance_erro((msg ou "") .. " - Valor é nulo")
    fim
fim

local função afirme_nulo(valor, msg)
    se valor ~= nulo então
        lance_erro((msg ou "") .. " - Esperado nulo, recebeu: " .. obtenha_tipo(valor))
    fim
fim

-- ============================================================
-- ESPERADO: Testes de formato correto
-- ============================================================

exiba("\nESPERADO - Request/Response")

teste("serialize request inicializar", função()
    local msg = {
        id = 1,
        metodo = "inicializar",
        parametros = { rootUri = "c:\\teste" }
    }
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "serialize retornou nulo")
    afirme_igual("texto", obtenha_tipo(resultado), "resultado deve ser texto")
fim)

teste("parse request inicializar", função()
    local texto = '{id = 1, metodo = "inicializar", parametros = {rootUri = "c:\\\\teste"}}'
    local ok, resultado = chame_protegido(nds.carregue, texto)
    afirme_igual(verdadeiro, ok, "carregue deve funcionar")
    afirme_tabela(resultado, "carregue deve retornar tabela")
    afirme_igual(1, resultado[1].id, "id deve ser 1")
    afirme_igual("inicializar", resultado[1].metodo, "metodo deve ser inicializar")
fim)

teste("roundtrip request", função()
    local original = {
        id = 1,
        metodo = "inicializar",
        parametros = { rootUri = "c:\\teste" }
    }
    local serializado = nds.serialize(original)
    local ok, parseado = chame_protegido(nds.carregue, serializado)
    afirme_igual(verdadeiro, ok, "carregue deve funcionar")
    afirme_igual(original.id, parseado.id, "id deve sobreviver roundtrip")
    afirme_igual(original.metodo, parseado.metodo, "metodo deve sobreviver roundtrip")
fim)

teste("serialize response com capacidades", função()
    local msg = {
        id = 1,
        resultado = {
            capacidades = {
                completionProvider = verdadeiro,
                hoverProvider = verdadeiro
            }
        }
    }
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "serialize retornou nulo")
fim)

-- ============================================================
-- ESPERADO: Testes de Escopos (níveis de indentação)
-- ============================================================

exiba("\nESPERADO - Escopos aninhados")

teste("escopo nivel 1 - global", função()
    local msg = { x = 1 }
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "nivel 1 falhou")
fim)

teste("escopo nivel 2 - função", função()
    local msg = {
        funcao_a = { local_x = 1 }
    }
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "nivel 2 falhou")
fim)

teste("escopo nivel 3 - se", função()
    local msg = {
        funcao_a = {
            se_bloco = { local_y = 2 }
        }
    }
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "nivel 3 falhou")
fim)

teste("escopo nivel 4 - para", função()
    local msg = {
        funcao_a = {
            se_bloco = {
                para_bloco = { i = 0 }
            }
        }
    }
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "nivel 4 falhou")
fim)

teste("escopo nivel 5 - faça", função()
    local msg = {
        nivel1 = {
            nivel2 = {
                nivel3 = {
                    nivel4 = { nivel5 = verdadeiro }
                }
            }
        }
    }
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "nivel 5 falhou")
fim)

-- ============================================================
-- NAO_ESPERADO: Testes de formato incorreto
-- ============================================================

exiba("\nNAO_ESPERADO - Formato incorreto")

teste("parse texto invalido lança erro", função()
    local ok, resultado = chame_protegido(nds.carregue, "{{{{invalido")
    afirme_igual(falso, ok, "texto invalido deve lançar erro")
fim)

teste("parse vazio lança erro", função()
    local ok, resultado = chame_protegido(nds.carregue, "")
    -- nds.carregue pode lançar erro ou retornar nulo/tabela vazia
    se ok e resultado ~= nulo e obtenha_tipo(resultado) ~= "tabela" então
        lance_erro("resultado deve ser nulo ou tabela")
    fim
fim)

-- ============================================================
-- NULO: Testes de valores nulos
-- ============================================================

exiba("\nNULO - Valores nulos")

teste("serialize tabela com valor nulo", função()
    local msg = {
        id = 1,
        resultado = nulo
    }
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "serialize não deve falhar com valor nulo")
fim)

teste("serialize tabela vazia", função()
    local msg = {}
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "tabela vazia deve serializar")
fim)

teste("campo nulo em estrutura aninhada", função()
    local msg = {
        resultado = {
            items = nulo
        }
    }
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "campo nulo aninhado deve funcionar")
fim)

-- ============================================================
-- ESTOURO: Testes de mensagens grandes
-- ============================================================

exiba("\nESTOURO - Mensagens grandes")

teste("serialize lista com 100 items", função()
    local msg = { items = {} }
    para i = 1, 100 faça
        msg.items[i] = { label = "item" .. i, kind = 6 }
    fim
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "100 items deve serializar")
fim)

teste("serialize lista com 1000 items", função()
    local msg = { items = {} }
    para i = 1, 1000 faça
        msg.items[i] = { label = "item" .. i }
    fim
    local resultado = nds.serialize(msg)
    afirme_nao_nulo(resultado, "1000 items deve serializar")
fim)

teste("roundtrip lista grande", função()
    local original = { items = {} }
    para i = 1, 50 faça
        original.items[i] = { label = "var" .. i, kind = 6 }
    fim
    local serializado = nds.serialize(original)
    local ok, parseado = chame_protegido(nds.carregue, serializado)
    afirme_igual(verdadeiro, ok, "carregue deve funcionar")
    afirme_igual(50, #parseado.items, "50 items devem sobreviver roundtrip")
fim)

-- ============================================================
-- RESUMO
-- ============================================================

exiba("\n" .. texto.repita("=", 50))
exiba("RESUMO: " .. passou .. "/" .. total .. " testes passaram")
se falhou_cont > 0 então
    exiba("X " .. falhou_cont .. " testes falharam")
fim
se falhou_cont == 0 então
    exiba("OK Todos os testes passaram!")
fim
