<div class="container">
<h1>🚀 Condicionais</h1>
<p class="lead">Faça seu programa tomar decisões!</p>

<span class="emoji-big">🚀</span>

<h2>O que são condicionais?</h2>
<p>
    Na vida real, você toma decisões o tempo todo: 
    "Se estiver chovendo, levo guarda-chuva."
</p>
<p>
    No Sol, usamos <code>se</code> para fazer o programa decidir o que fazer!
</p>

<h2>O comando SE</h2>
<div class="code-block">
<pre><code class="language-sol">local idade = 15

se idade >= 18 então
    exiba("Você é maior de idade!")
fim</code></pre>
</div>

<p>Como funciona:</p>
<ol>
    <li>O Sol olha se <code>idade >= 18</code> é verdadeiro ou falso</li>
    <li>Se for <strong>verdadeiro</strong>, executa o que tem dentro</li>
    <li>Se for <strong>falso</strong>, pula para depois do <code>fim</code></li>
</ol>

<h2>Operadores de comparação</h2>

<table class="table table-dark table-bordered">
    <thead><tr><th>Operador</th><th>Significado</th><th>Exemplo</th></tr></thead>
    <tbody>
        <tr><td><code>==</code></td><td>Igual</td><td><code>x == 10</code></td></tr>
        <tr><td><code>~=</code></td><td>Diferente</td><td><code>x ~= 10</code></td></tr>
        <tr><td><code>></code></td><td>Maior</td><td><code>x > 10</code></td></tr>
        <tr><td><code><</code></td><td>Menor</td><td><code>x < 10</code></td></tr>
        <tr><td><code>>=</code></td><td>Maior ou igual</td><td><code>x >= 10</code></td></tr>
        <tr><td><code><=</code></td><td>Menor ou igual</td><td><code>x <= 10</code></td></tr>
    </tbody>
</table>

<h2>E se for falso?</h2>
<p>Você pode ter outro caminho usando duas verificações:</p>

<div class="code-block">
<pre><code class="language-sol">local nota = 7

se nota >= 7 então
    exiba("Aprovado! 🚀")
fim

se nota < 7 então
    exiba("Estude mais! 🚀")
fim</code></pre>
</div>

<h2>Exemplo: Verificador de idade</h2>
<div class="code-block">
<pre><code class="language-sol">local idade = 10

se idade < 12 então
    exiba("Você é criança!")
fim

se idade >= 12 e idade < 18 então
    exiba("Você é adolescente!")
fim

se idade >= 18 então
    exiba("Você é adulto!")
fim</code></pre>
</div>

<h2>Combinando condições</h2>

<h3>E (ambas devem ser verdadeiras)</h3>
<div class="code-block">
<pre><code class="language-sol">local tem_ingresso = verdadeiro
local tem_idade = verdadeiro

se tem_ingresso e tem_idade então
    exiba("Pode entrar! 🚀")
fim</code></pre>
</div>

<h3>OU (pelo menos uma deve ser verdadeira)</h3>
<div class="code-block">
<pre><code class="language-sol">se dia == "sábado" ou dia == "domingo" então
    exiba("É fim de semana! 🚀")
fim</code></pre>
</div>

<h3>NÃO (inverte o valor)</h3>
<div class="code-block">
<pre><code class="language-sol">local chovendo = falso

se não chovendo então
    exiba("Dia lindo! 🚀")
fim</code></pre>
</div>

<h2>Exemplo: Calculadora simples</h2>

<div class="code-block">
<pre><code class="language-sol">local a = 10
local b = 5
local operacao = "+"

se operacao == "+" então
    exiba(a + b)
fim

se operacao == "-" então
    exiba(a - b)
fim

se operacao == "*" então
    exiba(a * b)
fim

se operacao == "/" então
    exiba(a / b)
fim</code></pre>
</div>

<div class="success-box">
    Agora seu programa pode tomar decisões! é como se ele pensasse sozinho.
</div>
</div>