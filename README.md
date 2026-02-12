# SOL — Linguagem de Programação

SOL é uma linguagem de programação moderna, com sintaxe em português, voltada para scripts, automação, prototipagem e integração de bibliotecas nativas.

## Características
- Sintaxe clara e intuitiva, toda em português
- Estruturas de controle simples: condicionais, loops, rótulos e desvio
- Sistema de módulos e pacotes para organização e reutilização de código
- Suporte a bibliotecas nativas (DLL/SO) e integração com C/C++

---

## Instalação

Para instalar o SOL, basta compilar o projeto usando o `make`:

```sh
make
```

Para limpar arquivos temporários e recompilar, use:

```sh
make clean
make
```

Após a compilação, o executável estará disponível na pasta do projeto.

## Sintaxe Básica

### Palavras-chave
- `se`, `então`, `fim` — Condicionais
- `faça`, `para` — Blocos e loops
- `função`, `retorne` — Definição de funções
- `local` — Declaração de variáveis
- `execute` — Desvio incondicional (goto)
- `verdadeiro`, `falso`, `nulo` — Valores especiais

### Operadores
- Aritméticos: `+`, `-`, `*`, `/`, `//`, `%`, `^`
- Comparação: `==`, `~=`, `<`, `>`
- Lógicos: `e`, `ou`, `não`

### Comentários
- Linha: `-- comentário`
- Bloco: `--[[ comentário ]]`

---

## Controle de Fluxo

### Condicionais
```sol
se x > 10 então
    exiba("Maior que 10")
fim
```

### Rótulos e Desvio
```sol
::inicio::
exiba("Começo")
execute fim
exiba("Pulado!")
::fim::
exiba("Fim")
```

---

## Repetições e Iterações

### Loop Numérico
```sol
para i = 1, 5 faça
    exiba(i)
fim
```

### Loop com Passo
```sol
para i = 0, 100, 10 faça
    exiba(i)
fim
```

### Iteração sobre Tabelas
```sol
local frutas = {"Maçã", "Banana", "Uva"}
para indice, fruta em obtenha_pares_indexados(frutas) faça
    exiba(indice .. ": " .. fruta)
fim
```

### Iteração sobre Mapas
```sol
local pessoa = {nome = "Ana", idade = 15}
para chave, valor em obtenha_pares(pessoa) faça
    exiba(chave .. " = " .. valor)
fim
```

---

## Sistema de Módulos e Pacotes

SOL organiza código em módulos (`.sol`, `.dll`, `.so`) e usa a biblioteca global `pacote` para gerenciar carregamento.

### Importando Módulos
```sol
local texto = importe("texto")
local utils = importe("lib.utils")
```

### Variáveis do Pacote
- `pacote.caminho`: Caminhos de busca para módulos `.sol`
- `pacote.caminho_c`: Caminhos de busca para DLLs/SOs
- `pacote.carregados`: Cache de módulos já carregados
- `pacote.precarga`: Módulos pré-carregados (sem arquivo)
- `pacote.buscadores`: Funções de busca de módulos

### Criando um Módulo
```sol
-- meu_modulo.sol
local M = {}
função M.saudacao(nome)
    retorne "Olá, " .. nome
fim
M.VERSAO = "1.0.0"
retorne M
```

### Usando o Módulo
```sol
local meu = importe("meu_modulo")
exiba(meu.saudacao("Maria"))  -- "Olá, Maria"
exiba(meu.VERSAO)              -- "1.0.0"
```

---

## Bibliotecas Nativas (DLL/SO)

- Módulos C/C++ devem exportar a função `solopen_nome`.
- Caminhos para DLLs/SOs são configurados em `pacote.caminho_c`.

```sol
pacote.caminho_c = pacote.caminho_c .. ";./bin/?.dll"
```

---

## Erros Comuns
- **module not found**: Caminho não configurado corretamente.
- **loop or previous error loading module**: Importação circular detectada.
- **Para regressiva**: Especifique passo negativo: `para i = 10, 1, -1 faça`

---

## Exemplos e Dicas
- Use `obtenha_pares_indexados` para listas ordenadas.
- Use `obtenha_pares` para mapas/objetos.
- Evite loops aninhados diretamente; use funções para isolar.
- Use `execute` com moderação.

---

## Referências
- [docs/pages/sintaxe.php](docs/pages/sintaxe.php)
- [docs/pages/controle-fluxo.php](docs/pages/controle-fluxo.php)
- [docs/pages/repeticoes.php](docs/pages/repeticoes.php)
- [docs/pages/modulos.php](docs/pages/modulos.php)
- [docs/pages/lib-package.php](docs/pages/lib-package.php)

---

SOL facilita a criação de scripts, automação e integração de bibliotecas, tudo em português!
---

