-- Exemplo de MÓDULO: arquivo .sol que exporta funcionalidades
-- Um módulo é o CÓDIGO que você escreve e importa

local M = {}

-- Funções exportadas pelo módulo
função M.saudacao(nome)
    retorne "Olá, " .. nome
fim

função M.soma(a, b)
    retorne a + b
fim

-- Constantes do módulo
M.versao = "1.0.0"
M.autor = "Exemplo"

-- Retorna a tabela do módulo
retorne M
