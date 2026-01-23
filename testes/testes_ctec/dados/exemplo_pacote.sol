-- Exemplo de uso do PACOTE: biblioteca que gerencia carregamento
-- Pacote é o GERENCIADOR que sabe onde encontrar e como carregar módulos

-- Verificar caminho de busca de módulos .sol
exiba(pacote.caminho)

-- Adicionar novo caminho de busca
pacote.caminho = pacote.caminho .. ";./meus_modulos/?.sol"

-- Verificar caminho de busca de bibliotecas nativas (.dll/.so)
exiba(pacote.caminho_c)

-- Verificar se módulo já está carregado (cache)
se pacote.carregados["meu_modulo"] então
    exiba("Módulo já carregado!")
fim

-- Forçar recarregamento (limpar cache)
pacote.carregados["meu_modulo"] = nulo
local m = importe("meu_modulo")

-- Registrar módulo virtual (sem arquivo físico)
pacote.precarga["virtual"] = função()
    local V = {}
    função V.ola()
        retorne "Módulo virtual!"
    fim
    retorne V
fim

-- Usar módulo virtual
local virtual = importe("virtual")
exiba(virtual.ola())

-- Adicionar buscador personalizado
tabela.insira(pacote.buscadores, 2, função(nome)
    se nome == "especial" então
        retorne função()
            retorne {tipo = "especial", versao = "1.0"}
        fim
    fim
fim)

-- Verificar configuração do sistema
exiba(pacote.config)
