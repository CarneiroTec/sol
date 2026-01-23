-- Paradigma Imperativo: Controle direto do fluxo

-- Estado mutável
local contador = 0

-- Sequência de comandos
contador = contador + 1
exiba("Contador: " .. contador)

-- Simulando Assembly com execute (goto)
local reg_a = 0
local reg_b = 10
local resultado = 0

::inicio::
    exiba("REG_A: " .. reg_a .. ", REG_B: " .. reg_b)
    resultado = reg_a + reg_b
    reg_a = reg_a + 1
    se reg_a < 5 então
        execute ::inicio::
    fim

::fim_loop::
    exiba("Resultado final: " .. resultado)

-- Loop com saltos condicionais
local i = 0
local soma = 0

::loop_inicio::
    se i >= 10 então
        execute ::loop_fim::
    fim
    soma = soma + i
    i = i + 1
    execute ::loop_inicio::

::loop_fim::
    exiba("Soma: " .. soma)
