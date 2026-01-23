-- Verificar estrutura de nds.carregue
local t = nds.carregue('{id=1}')
exiba("tipo:", obtenha_tipo(t))
exiba("t.id:", t.id)
exiba("t[1]:", t[1])
exiba("#t:", #t)
