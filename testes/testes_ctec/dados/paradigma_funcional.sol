-- Paradigma Funcional: Funções anônimas (lambdas)
local dobro = função(x) retorne x * 2 fim

-- Passando função como argumento
função aplique(f, valor)
    retorne f(valor)
fim

-- Funções de alta ordem: Map
função map(lista, f)
    local resultado = {}
    para i, valor em obtenha_pares_indexados(lista) faça
        tabela.insira(resultado, f(valor))
    fim
    retorne resultado
fim

-- Funções de alta ordem: Filter
função filter(lista, predicado)
    local resultado = {}
    para i, valor em obtenha_pares_indexados(lista) faça
        se predicado(valor) então
            tabela.insira(resultado, valor)
        fim
    fim
    retorne resultado
fim

-- Funções de alta ordem: Reduce
função reduce(lista, f, inicial)
    local acumulador = inicial
    para i, valor em obtenha_pares_indexados(lista) faça
        acumulador = f(acumulador, valor)
    fim
    retorne acumulador
fim

-- Composição de funções
função componha(f, g)
    retorne função(x)
        retorne f(g(x))
    fim
fim

-- Currying
função some(a)
    retorne função(b)
        retorne a + b
    fim
fim

-- Recursão com TCO
função fatorial(n, acumulador)
    acumulador = acumulador ou 1
    se n <= 1 então
        retorne acumulador
    fim
    retorne fatorial(n - 1, n * acumulador)
fim
