-- Laço PARA: Todas as sintaxes suportadas em Sol

-- ============================================
-- 1. NUMÉRICO SIMPLES: para i = início, fim faça
-- ============================================
para i = 1, 5 faça
    exiba(i)
fim
-- Resultado: 1, 2, 3, 4, 5

-- ============================================
-- 2. NUMÉRICO COM PASSO: para i = início, fim, passo faça
-- ============================================
para i = 0, 100, 10 faça
    exiba(i)
fim
-- Resultado: 0, 10, 20, 30, ..., 100

-- ============================================
-- 3. REGRESSIVO: para i = início, fim, -passo faça
-- ============================================
para i = 5, 1, -1 faça
    exiba(i)
fim
exiba("🚀 Decolar!")
-- Resultado: 5, 4, 3, 2, 1, 🚀 Decolar!

-- ============================================
-- 4. ARRAY/LISTA: para i, v em obtenha_pares_indexados(t) faça
-- ============================================
local frutas = {"Maçã", "Banana", "Uva"}
para indice, fruta em obtenha_pares_indexados(frutas) faça
    exiba(indice .. ": " .. fruta)
fim
-- 1: Maçã
-- 2: Banana
-- 3: Uva

-- ============================================
-- 5. MAPA/OBJETO: para k, v em obtenha_pares(t) faça
-- ============================================
local pessoa = {nome = "Ana", idade = 15, cidade = "São Paulo"}
para chave, valor em obtenha_pares(pessoa) faça
    exiba(chave .. " = " .. converta_para_texto(valor))
fim
-- nome = Ana (ordem não garantida)

-- ============================================
-- 6. IGNORAR VARIÁVEL: para _, v em ... faça
-- ============================================
local notas = {8, 7, 9, 6, 10}
local soma = 0
para _, nota em obtenha_pares_indexados(notas) faça
    soma = soma + nota
fim
-- Usa _ para ignorar o índice

-- ============================================
-- 7. TABELA MISTA: índices + chaves
-- ============================================
local mista = {
    "primeiro",           -- índice 1
    "segundo",            -- índice 2
    nome = "Tabela",      -- chave nomeada
    valor = 42            -- chave nomeada
}

-- obtenha_pares_indexados só pega índices numéricos
para i, v em obtenha_pares_indexados(mista) faça
    exiba(i, v)  -- 1, 2 apenas
fim

-- obtenha_pares pega tudo (sem ordem garantida)
para k, v em obtenha_pares(mista) faça
    exiba(k, v)  -- 1, 2, nome, valor
fim

-- ============================================
-- 8. INTERROMPA: sair do loop
-- ============================================
local numeros = {1, 2, 3, 4, 5}
para _, n em obtenha_pares_indexados(numeros) faça
    se n == 3 então
        exiba("Encontrei o 3! Parando.")
        interrompa
    fim
    exiba(n)
fim

-- ============================================
-- 9. TABUADA: exemplo prático numérico
-- ============================================
local numero = 7
exiba("Tabuada do " .. numero)
para i = 1, 10 faça
    exiba(numero .. " x " .. i .. " = " .. (numero * i))
fim

-- ============================================
-- 10. CALCULAR MÉDIA: exemplo prático iterador
-- ============================================
local valores = {8, 7, 9, 6, 10}
local total = 0
para _, v em obtenha_pares_indexados(valores) faça
    total = total + v
fim
local media = total / #valores
exiba("Média: " .. media)
