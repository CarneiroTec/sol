-- Paradigma Procedural: Código organizado em funções

-- Procedimento simples
função saudacao(nome)
    exiba("Olá, " .. nome .. "!")
fim

-- Função com retorno
função soma(a, b)
    retorne a + b
fim

-- Operações básicas da calculadora
função adicione(a, b)
    retorne a + b
fim

função subtraia(a, b)
    retorne a - b
fim

função multiplique(a, b)
    retorne a * b
fim

função divida(a, b)
    se b == 0 então
        retorne nulo, "Divisão por zero!"
    fim
    retorne a / b
fim

-- Função de alto nível
função calcule(operacao, a, b)
    se operacao == "+" então retorne adicione(a, b) fim
    se operacao == "-" então retorne subtraia(a, b) fim
    se operacao == "*" então retorne multiplique(a, b) fim
    se operacao == "/" então retorne divida(a, b) fim
    retorne nulo, "Operação inválida"
fim

-- Processamento de lista
função filtre_pares(lista)
    local resultado = {}
    para i, valor em obtenha_pares_indexados(lista) faça
        se valor % 2 == 0 então
            tabela.insira(resultado, valor)
        fim
    fim
    retorne resultado
fim

função some_lista(lista)
    local soma = 0
    para i, valor em obtenha_pares_indexados(lista) faça
        soma = soma + valor
    fim
    retorne soma
fim

-- Validadores
função valide_email(email)
    retorne texto.encontre(email, "@") e texto.encontre(email, "%.")
fim

função valide_idade(idade)
    retorne idade >= 0 e idade <= 150
fim

função valide_nome(nome)
    retorne texto.obtenha_comprimento(nome) >= 2
fim

função valide_usuario(nome, idade, email)
    se não valide_nome(nome) então
        retorne falso, "Nome inválido"
    fim
    se não valide_idade(idade) então
        retorne falso, "Idade inválida"
    fim
    se não valide_email(email) então
        retorne falso, "Email inválido"
    fim
    retorne verdadeiro, "Válido"
fim
