<h1>🔄 Repetições e Iterações</h1>
<p class="lead">Faça o computador repetir coisas automaticamente!</p>

<span class="emoji-big">🔄</span>

<h2>Tabela de Referência Rápida</h2>

<table class="table table-dark table-striped">
    <thead>
        <tr><th>Tipo</th><th>Sintaxe</th><th>Retorna</th><th>Quando usar</th></tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>Numérico simples</strong></td>
            <td><code>para i = 1, 10 faça</code></td>
            <td>contador</td>
            <td>Contar de X até Y</td>
        </tr>
        <tr>
            <td><strong>Numérico com passo</strong></td>
            <td><code>para i = 0, 100, 10 faça</code></td>
            <td>contador</td>
            <td>Pular valores (de 10 em 10)</td>
        </tr>
        <tr>
            <td><strong>Regressivo</strong></td>
            <td><code>para i = 10, 1, -1 faça</code></td>
            <td>contador</td>
            <td>Contagem regressiva</td>
        </tr>
        <tr>
            <td><strong>Array/Lista</strong></td>
            <td><code>para i, v em obtenha_pares_indexados(t) faça</code></td>
            <td>índice, valor</td>
            <td>Listas ordenadas {1, 2, 3}</td>
        </tr>
        <tr>
            <td><strong>Mapa/Objeto</strong></td>
            <td><code>para k, v em obtenha_pares(t) faça</code></td>
            <td>chave, valor</td>
            <td>Dicionários {nome="Ana"}</td>
        </tr>
    </tbody>
</table>

<h2>Sintaxe do PARA</h2>

<h3>Forma numérica</h3>
<div class="code-block">
<pre><code class="language-sol">para variável = início, fim [, passo] faça
    -- código a repetir
fim</code></pre>
</div>

<table class="table table-dark table-bordered">
    <thead><tr><th>Parte</th><th>Obrigatório?</th><th>Descrição</th></tr></thead>
    <tbody>
        <tr><td><code>variável</code></td><td>✅ Sim</td><td>Nome do contador (geralmente <code>i</code>)</td></tr>
        <tr><td><code>início</code></td><td>✅ Sim</td><td>Valor inicial do contador</td></tr>
        <tr><td><code>fim</code></td><td>✅ Sim</td><td>Valor final (inclusivo)</td></tr>
        <tr><td><code>passo</code></td><td>❌ Opcional</td><td>Incremento (padrão: 1)</td></tr>
    </tbody>
</table>

<h3>Forma genérica (iteradores)</h3>
<div class="code-block">
<pre><code class="language-sol">para variável1 [, variável2, ...] em iterador(tabela) faça
    -- código a repetir
fim</code></pre>
</div>

<table class="table table-dark table-bordered">
    <thead><tr><th>Parte</th><th>Obrigatório?</th><th>Descrição</th></tr></thead>
    <tbody>
        <tr><td><code>variável1</code></td><td>✅ Sim</td><td>Primeira variável retornada pelo iterador</td></tr>
        <tr><td><code>variável2</code></td><td>❌ Opcional</td><td>Segunda variável (e mais, se o iterador retornar)</td></tr>
        <tr><td><code>iterador</code></td><td>✅ Sim</td><td>Função que gera os valores (<code>obtenha_pares</code>, <code>obtenha_pares_indexados</code>, etc.)</td></tr>
    </tbody>
</table>

<div class="tip-box">
    💡 Se você não precisa de uma variável, use <code>_</code> (sublinhado) para ignorá-la:
    <code>para _, valor em obtenha_pares_indexados(lista) faça</code>
</div>

<h2>Iteração Numérica</h2>

<h3>Contagem simples</h3>
<div class="code-block">
<pre><code class="language-sol">-- Conta de 1 até 5
para i = 1, 5 faça
    exiba(i)
fim
-- Resultado: 1, 2, 3, 4, 5</code></pre>
</div>

<h3>Contagem com passo</h3>
<div class="code-block">
<pre><code class="language-sol">-- De 0 a 100, pulando de 10 em 10
para i = 0, 100, 10 faça
    exiba(i)
fim
-- Resultado: 0, 10, 20, 30, ..., 100</code></pre>
</div>

<h3>Contagem regressiva</h3>
<div class="code-block">
<pre><code class="language-sol">-- De 5 até 1 (passo negativo!)
para i = 5, 1, -1 faça
    exiba(i)
fim
exiba("🚀 Decolar!")
-- Resultado: 5, 4, 3, 2, 1, 🚀 Decolar!</code></pre>
</div>

<div class="warning-box">
    ⚠️ <strong>Passo obrigatório para regressiva:</strong> Se o início for maior que o fim, você <strong>deve</strong> especificar um passo negativo, senão o loop não executa!
</div>

<h2>Entendendo Tabelas em Sol</h2>

<p>Em Sol, <strong>tabelas são a única estrutura de dados</strong>. Mas elas podem ser usadas de várias formas:</p>

<table class="table table-dark table-striped">
    <thead><tr><th>Uso</th><th>Exemplo</th><th>Característica</th></tr></thead>
    <tbody>
        <tr>
            <td><strong>Array/Lista</strong></td>
            <td><code>{"a", "b", "c"}</code></td>
            <td>Índices numéricos: 1, 2, 3...</td>
        </tr>
        <tr>
            <td><strong>Mapa/Dicionário</strong></td>
            <td><code>{nome="Ana", idade=15}</code></td>
            <td>Chaves nomeadas</td>
        </tr>
        <tr>
            <td><strong>Objeto</strong></td>
            <td><code>{dados={}, metodo=função() fim}</code></td>
            <td>Dados + funções</td>
        </tr>
        <tr>
            <td><strong>Mista</strong></td>
            <td><code>{"item1", nome="teste"}</code></td>
            <td>Índices + chaves</td>
        </tr>
    </tbody>
</table>

<p>A forma de iterar depende de <strong>como você está usando</strong> a tabela:</p>

<h2>Iteradores: Quando usar cada um</h2>

<h3>obtenha_pares_indexados() — Para Arrays/Listas</h3>

<p>Use quando sua tabela é uma <strong>lista ordenada</strong> com índices numéricos (1, 2, 3...):</p>

<div class="code-block">
<pre><code class="language-sol">local frutas = {"Maçã", "Banana", "Uva"}

para indice, fruta em obtenha_pares_indexados(frutas) faça
    exiba(indice .. ": " .. fruta)
fim
-- 1: Maçã
-- 2: Banana
-- 3: Uva</code></pre>
</div>

<div class="tip-box">
    <strong>Características:</strong>
    <ul>
        <li>✅ Itera em <strong>ordem</strong> (1, 2, 3...)</li>
        <li>✅ Para no primeiro <code>nulo</code> encontrado</li>
        <li>❌ <strong>Ignora</strong> chaves nomeadas</li>
    </ul>
</div>

<h3>obtenha_pares() — Para Mapas/Objetos</h3>

<p>Use quando sua tabela tem <strong>chaves nomeadas</strong> ou você precisa ver <strong>tudo</strong>:</p>

<div class="code-block">
<pre><code class="language-sol">local pessoa = {nome = "Ana", idade = 15, cidade = "São Paulo"}

para chave, valor em obtenha_pares(pessoa) faça
    exiba(chave .. " = " .. converta_para_texto(valor))
fim
-- nome = Ana
-- idade = 15
-- cidade = São Paulo</code></pre>
</div>

<div class="warning-box">
    <strong>Atenção:</strong> <code>obtenha_pares()</code> <strong>não garante ordem!</strong> A ordem de iteração pode variar.
</div>

<h3>Comparação Visual</h3>

<div class="code-block">
<pre><code class="language-sol">local mista = {
    "primeiro",           -- índice 1
    "segundo",            -- índice 2
    nome = "Tabela",      -- chave nomeada
    valor = 42            -- chave nomeada
}

exiba("--- obtenha_pares_indexados ---")
para i, v em obtenha_pares_indexados(mista) faça
    exiba(i, v)
fim
-- 1    primeiro
-- 2    segundo
-- (chaves nomeadas ignoradas!)

exiba("--- obtenha_pares ---")
para k, v em obtenha_pares(mista) faça
    exiba(k, v)
fim
-- 1       primeiro
-- 2       segundo
-- nome    Tabela
-- valor   42
-- (tudo, mas sem ordem garantida)</code></pre>
</div>

<h2>Cenários Práticos</h2>

<h3>Lista de compras (Array)</h3>
<div class="code-block">
<pre><code class="language-sol">local compras = {"Pão", "Leite", "Ovos"}

para i, item em obtenha_pares_indexados(compras) faça
    exiba(i .. ". [ ] " .. item)
fim
-- 1. [ ] Pão
-- 2. [ ] Leite
-- 3. [ ] Ovos</code></pre>
</div>

<h3>Ficha de cadastro (Mapa)</h3>
<div class="code-block">
<pre><code class="language-sol">local usuario = {
    nome = "João Silva",
    email = "joao@email.com",
    ativo = verdadeiro
}

exiba("=== Dados do Usuário ===")
para campo, valor em obtenha_pares(usuario) faça
    exiba(campo .. ": " .. converta_para_texto(valor))
fim</code></pre>
</div>

<h3>Calcular média (Array numérico)</h3>
<div class="code-block">
<pre><code class="language-sol">local notas = {8, 7, 9, 6, 10}

local soma = 0
para _, nota em obtenha_pares_indexados(notas) faça
    soma = soma + nota
fim

local media = soma / #notas
exiba("Média: " .. media)  -- Média: 8</code></pre>
</div>

<h3>Tabuada (Numérico simples)</h3>
<div class="code-block">
<pre><code class="language-sol">local numero = 7

exiba("Tabuada do " .. numero)
para i = 1, 10 faça
    exiba(numero .. " x " .. i .. " = " .. (numero * i))
fim</code></pre>
</div>

<h2>Controlando o Loop</h2>

<h3>Interromper o loop (interrompa)</h3>
<div class="code-block">
<pre><code class="language-sol">local numeros = {1, 2, 3, 4, 5}

para _, n em obtenha_pares_indexados(numeros) faça
    se n == 3 então
        exiba("Encontrei o 3! Parando.")
        interrompa
    fim
    exiba(n)
fim
-- 1
-- 2
-- Encontrei o 3! Parando.</code></pre>
</div>

<div class="warning-box">
    <strong>Atenção:</strong> Por questões de performance e design, não é permitido colocar um loop <code>para</code> dentro de outro <code>para</code>.
    Se precisar fazer isso, isole o loop interno em uma função separada.
</div>

<h2>Erros Comuns</h2>

<table class="table table-dark table-bordered">
    <thead><tr><th>❌ Erro</th><th>✅ Correto</th><th>Por quê?</th></tr></thead>
    <tbody>
        <tr>
            <td><code>para i = 10, 1 faça</code></td>
            <td><code>para i = 10, 1, -1 faça</code></td>
            <td>Falta o passo negativo</td>
        </tr>
        <tr>
            <td><code>para k em obtenha_pares(t) faça</code></td>
            <td><code>para k, v em obtenha_pares(t) faça</code></td>
            <td><code>obtenha_pares</code> retorna 2 valores</td>
        </tr>
        <tr>
            <td>Usar <code>obtenha_pares_indexados</code> em mapa</td>
            <td>Usar <code>obtenha_pares</code></td>
            <td>Chaves nomeadas são ignoradas</td>
        </tr>
        <tr>
            <td>Usar <code>obtenha_pares</code> + esperar ordem</td>
            <td>Usar <code>obtenha_pares_indexados</code></td>
            <td><code>obtenha_pares</code> não garante ordem</td>
        </tr>
    </tbody>
</table>

<div class="success-box">
    🎉 Agora você domina iterações em Sol! Use <code>obtenha_pares_indexados</code> para listas e <code>obtenha_pares</code> para mapas/objetos.
</div>

<div class="mt-4">
    <a href="?page=funcoes" class="btn btn-sol">
        Próximo: Funções <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
