--[[
    teste_validacao_docs.sol - Valida LSP contra documentação
    
    Este teste valida que o código Sol funciona conforme a documentação.
    Se estes códigos funcionam, o LSP deve reconhecê-los.
    
    Baseado em: sol-linguagem/docs/pages/
]]

local passou = 0
local falhou = 0

local função teste(nome, fn)
    local ok, erro = chame_protegido(fn)
    se ok então
        passou = passou + 1
        exiba("✓ " .. nome)
    fim
    se não ok então
        falhou = falhou + 1
        exiba("✗ " .. nome .. " - " .. converta_para_texto(erro))
    fim
fim

-- ============================================================
-- SINTAXE: Palavras-chave (docs/pages/sintaxe.php)
-- ============================================================

exiba("\n=== SINTAXE: Palavras-chave ===")

teste("local - declara variável local", função()
    local x = 42
    afirme(x == 42, "local não funcionou")
fim)

teste("função - define subrotina", função()
    local função soma(a, b)
        retorne a + b
    fim
    afirme(soma(2, 3) == 5, "função não funcionou")
fim)

teste("se/então/fim - condicional", função()
    local x = 10
    local resultado = "nada"
    se x > 5 então
        resultado = "maior"
    fim
    afirme(resultado == "maior", "se/então não funcionou")
fim)

teste("para/faça/fim - loop numérico", função()
    local soma = 0
    para i = 1, 5 faça
        soma = soma + i
    fim
    afirme(soma == 15, "para numérico não funcionou")
fim)

teste("para/em/faça - iterador", função()
    local t = {"a", "b", "c"}
    local conta = 0
    para _, v em obtenha_pares_indexados(t) faça
        conta = conta + 1
    fim
    afirme(conta == 3, "para/em não funcionou")
fim)

teste("verdadeiro/falso - booleanos", função()
    local v = verdadeiro
    local f = falso
    afirme(v == verdadeiro, "verdadeiro não funcionou")
    afirme(f == falso, "falso não funcionou")
fim)

teste("nulo - valor nulo", função()
    local x = nulo
    afirme(x == nulo, "nulo não funcionou")
fim)

teste("e/ou/não - operadores lógicos", função()
    afirme(verdadeiro e verdadeiro == verdadeiro, "e não funcionou")
    afirme(falso ou verdadeiro == verdadeiro, "ou não funcionou")
    afirme(não falso == verdadeiro, "não funcionou")
fim)

teste("retorne - retorno de função", função()
    local função f()
        retorne 42
    fim
    afirme(f() == 42, "retorne não funcionou")
fim)

-- ============================================================
-- VARIÁVEIS: Escopo (docs/pages/variaveis.php)
-- ============================================================

exiba("\n=== VARIÁVEIS: Escopo ===")

teste("local dentro de se é invisível fora", função()
    se verdadeiro então
        local dentro = 123
    fim
    -- 'dentro' não existe aqui
    afirme(dentro == nulo, "variável vazou do bloco se")
fim)

teste("local dentro de para é invisível fora", função()
    para i = 1, 3 faça
        local temp = i
    fim
    -- 'i' e 'temp' não existem aqui
    afirme(i == nulo, "variável i vazou do loop")
    afirme(temp == nulo, "variável temp vazou do loop")
fim)

teste("parâmetro de função é invisível fora", função()
    local função f(param)
        retorne param * 2
    fim
    f(10)
    -- 'param' não existe aqui
    afirme(param == nulo, "parâmetro vazou da função")
fim)

-- ============================================================
-- FUNÇÕES (docs/pages/funcoes.php)
-- ============================================================

exiba("\n=== FUNÇÕES ===")

teste("função com múltiplos parâmetros", função()
    local função multi(a, b, c)
        retorne a + b + c
    fim
    afirme(multi(1, 2, 3) == 6, "múltiplos parâmetros falhou")
fim)

teste("função com múltiplos retornos", função()
    local função divide_resto(a, b)
        retorne a // b, a % b
    fim
    local q, r = divide_resto(17, 5)
    afirme(q == 3, "quociente incorreto")
    afirme(r == 2, "resto incorreto")
fim)

teste("função anônima", função()
    local dobro = função(x) retorne x * 2 fim
    afirme(dobro(5) == 10, "função anônima falhou")
fim)

teste("closure", função()
    local função cria_contador()
        local contagem = 0
        retorne função()
            contagem = contagem + 1
            retorne contagem
        fim
    fim
    local contador = cria_contador()
    afirme(contador() == 1, "closure falhou (1)")
    afirme(contador() == 2, "closure falhou (2)")
fim)

-- ============================================================
-- TABELAS (docs/pages/tabelas.php)
-- ============================================================

exiba("\n=== TABELAS ===")

teste("tabela como lista", função()
    local lista = {"a", "b", "c"}
    afirme(lista[1] == "a", "índice 1 incorreto")
    afirme(lista[2] == "b", "índice 2 incorreto")
    afirme(#lista == 3, "tamanho incorreto")
fim)

teste("tabela como dicionário", função()
    local pessoa = {
        nome = "Ana",
        idade = 25
    }
    afirme(pessoa.nome == "Ana", "campo nome incorreto")
    afirme(pessoa["idade"] == 25, "campo idade incorreto")
fim)

teste("tabela aninhada", função()
    local escola = {
        nome = "Escola Sol",
        alunos = {
            {nome = "Ana", nota = 9},
            {nome = "João", nota = 8}
        }
    }
    afirme(escola.alunos[1].nome == "Ana", "aninhamento falhou")
    afirme(escola.alunos[2].nota == 8, "aninhamento falhou (2)")
fim)

teste("obtenha_pares_indexados", função()
    local lista = {"x", "y", "z"}
    local indices = {}
    para i, v em obtenha_pares_indexados(lista) faça
        tabela.insira(indices, i)
    fim
    afirme(#indices == 3, "ipairs não iterou 3 elementos")
    afirme(indices[1] == 1, "primeiro índice deve ser 1")
fim)

teste("obtenha_pares", função()
    local dic = {a = 1, b = 2}
    local chaves = {}
    para k, v em obtenha_pares(dic) faça
        tabela.insira(chaves, k)
    fim
    afirme(#chaves == 2, "pairs não iterou 2 elementos")
fim)

-- ============================================================
-- RESULTADO
-- ============================================================

exiba("\n" .. texto.repita("=", 50))
exiba("RESULTADO: " .. passou .. " passou, " .. falhou .. " falhou")
exiba(texto.repita("=", 50))

se falhou > 0 então
    sistema_operacional.saia(1)
fim
