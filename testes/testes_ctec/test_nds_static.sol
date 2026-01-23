-- Teste LSP: ler arquivo NDS estático e simular request de completion
local nds = importe('nds')
local caminho_req = 'C:/Users/Anildo/Documents/Projetos/Lua/sol-vscode/testdata_completion_request.nds'
local caminho_resp = 'C:/Users/Anildo/Documents/Projetos/Lua/sol-vscode/testdata_completion_response.nds'

local função carregue_arquivo(caminho)
	local arquivo = terminal.abra(caminho, "r")
	se arquivo então
		local conteudo = arquivo:leia("*a")
		arquivo:feche()
		retorne conteudo
	fim
	retorne nulo
fim

local req, err1 = nds.carregue_arquivo(caminho_req)
exiba('Arquivo de request NDS (carregado via nds.carregue_arquivo)')
se req então
	exiba('OK - tipo: ' .. (obtenha_tipo(req) ou 'nulo'))
fim
se não req então
	exiba('ERRO ao carregar request: ' .. (err1 ou 'erro desconhecido'))
fim

local parsed = req
exiba('\nTabela Sol parseada:')
exiba(obtenha_tipo(parsed))

local resp, err2 = nds.carregue_arquivo(caminho_resp)
exiba('\nArquivo de response NDS (carregado via nds.carregue_arquivo)')
se resp então
	exiba('OK - tipo: ' .. (obtenha_tipo(resp) ou 'nulo'))
fim
se não resp então
	exiba('ERRO ao carregar response: ' .. (err2 ou 'erro desconhecido'))
fim

local parsedResp = resp
exiba('\nTabela Sol parseada (resposta):')
exiba(obtenha_tipo(parsedResp))
