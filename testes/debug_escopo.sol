local meu_sol = importe("lsp")

local lsp = meu_sol.criar_lsp()

-- Código de teste
local codigo = [[função f(x)
  retorne x
fim
]]

local uri = "file:///teste.sol"
meu_sol.adicionar_documento(lsp, uri, codigo)
meu_sol.analisar_documento(lsp, uri)

-- Lista variáveis
local vars = meu_sol.listar_variaveis(lsp, uri)
se vars então
    para i, v em obtenha_pares_indexados(vars) faça
        exiba("Var: " .. v.nome .. " linha=" .. v.linha .. " scopeStart=" .. v.escopoInicio .. " scopeFim=" .. v.escopoFim)
    fim
senão
    exiba("Nenhuma variável")
fim
