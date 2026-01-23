-- Paradigma Orientado a Objetos: Classes com tabelas e metamétodos

-- CLASSE: é o "molde"
local Pessoa = {}
Pessoa.__índice = Pessoa

-- Método com ego (self)
função Pessoa.apresente(ego)
    exiba("Olá, sou " .. ego.nome)
fim

função Pessoa.caminhe(ego, passos)
    exiba(ego.nome .. " caminhou " .. passos .. " passos")
fim

-- Construtor com __chame
defina_metatabela(Pessoa, {
    __chame = função(classe, nome, idade)
        local ego = defina_metatabela({}, classe)
        ego.nome = nome
        ego.idade = idade
        retorne ego
    fim
})

-- Criando instâncias
local ana = Pessoa("Ana", 25)
local joao = Pessoa("João", 30)

-- Chamando métodos com :
ana:apresente()
joao:apresente()
ana:caminhe(10)

-- HERANÇA
local Estudante = {}
Estudante.__índice = Estudante
defina_metatabela(Estudante, {__índice = Pessoa})

função Estudante.estude(ego, horas)
    exiba(ego.nome .. " estudou " .. horas .. " horas")
fim

defina_metatabela(Estudante, {
    __chame = função(classe, nome, idade, curso)
        local ego = Pessoa(nome, idade)
        defina_metatabela(ego, classe)
        ego.curso = curso
        retorne ego
    fim
})

local maria = Estudante("Maria", 20, "Computação")
maria:apresente()
maria:estude(4)
