<h1>🎯 Funções</h1>
<p class="lead">Funções são como receitas: você cria uma vez e usa quantas vezes quiser!</p>

<span class="emoji-big">🎯</span>

<h2>O que é uma função?</h2>
<p>
    Imagine que você quer fazer bolo de chocolate várias vezes. 
    Seria chato lembrar da receita toda vez, né?
</p>
<p>
    Com funções, você escreve as instruções uma vez e depois é só chamar pelo nome!
</p>

<h2>Criando sua primeira função</h2>

<div class="code-block">
<pre><code class="language-sol">função diga_oi()
    exiba("Olá! 👋")
fim

-- Agora vamos usar!
diga_oi()    -- Mostra: Olá! 👋
diga_oi()    -- Mostra: Olá! 👋</code></pre>
</div>

<h2>Funções com parâmetros</h2>
<p>Funções podem receber informações:</p>

<div class="code-block">
<pre><code class="language-sol">função diga_oi_para(nome)
    exiba("Olá, " .. nome .. "!")
fim

diga_oi_para("Maria")   -- Mostra: Olá, Maria!</code></pre>
</div>

<h2>Funções que devolvem algo (retorno)</h2>

<div class="code-block">
<pre><code class="language-sol">função soma(a, b)
    retorne a + b
fim

local resultado = soma(5, 3)
exiba(resultado)    -- Mostra: 8</code></pre>
</div>

<h2>Múltiplos retornos</h2>
<p>No Sol, funções podem devolver várias coisas de uma vez!</p>

<div class="code-block">
<pre><code class="language-sol">função divide_com_resto(a, b)
    local quociente = a // b
    local resto = a % b
    retorne quociente, resto
fim

local q, r = divide_com_resto(17, 5)
exiba("17 ÷ 5 = " .. q .. " resto " .. r)
-- Mostra: 17 ÷ 5 = 3 resto 2</code></pre>
</div>

<h2>Argumentos variáveis (...)</h2>
<p>Quer receber qualquer quantidade de valores? Use <code>...</code>:</p>

<div class="code-block">
<pre><code class="language-sol">função soma_tudo(...)
    local args = {...}
    local total = 0
    para i, v em obtenha_pares_indexados(args) faça
        total = total + v
    fim
    retorne total
fim

exiba(soma_tudo(1, 2, 3))           -- 6
exiba(soma_tudo(10, 20, 30, 40))   -- 100</code></pre>
</div>

<h2>Funções anônimas</h2>
<p>Funções sem nome! Úteis para passar como argumento:</p>

<div class="code-block">
<pre><code class="language-sol">-- Função normal
função dobro(x) retorne x * 2 fim

-- Mesma coisa, mas anônima guardada em variável
local dobro = função(x) retorne x * 2 fim

exiba(dobro(5))    -- 10</code></pre>
</div>

<h2>Closures (Funções que lembram)</h2>
<p>Uma closure é uma função que "lembra" das variáveis de onde foi criada:</p>

<div class="code-block">
<pre><code class="language-sol">função cria_contador()
    local contagem = 0
    
    retorne função()
        contagem = contagem + 1
        retorne contagem
    fim
fim

local contador = cria_contador()

exiba(contador())   -- 1
exiba(contador())   -- 2
exiba(contador())   -- 3</code></pre>
</div>

<div class="tip-box">
    A função interna "lembra" da variável <code>contagem</code> mesmo depois que <code>cria_contador</code> terminou!
</div>

<h3>Exemplo prático: Fábrica de multiplicadores</h3>

<div class="code-block">
<pre><code class="language-sol">função cria_multiplicador(fator)
    retorne função(numero)
        retorne numero * fator
    fim
fim

local dobro = cria_multiplicador(2)
local triplo = cria_multiplicador(3)

exiba(dobro(5))    -- 10
exiba(triplo(5))   -- 15</code></pre>
</div>

<div class="success-box">
    Funções são super poderosas no Sol! Closures permitem criar código flexível e reutilizável.
</div>

<div class="mt-4">
    <a href="?page=tipo-tabelas" class="btn btn-sol">
        Próximo: Tabelas <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
