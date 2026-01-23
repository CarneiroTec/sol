<div class="container">
<h1>📦 Variáveis</h1>
<p class="lead">Variáveis locais vs globais: entenda o escopo e o ciclo de vida.</p>

<span class="emoji-big">📦</span>

<h2>Tipos de Escopo</h2>

<p>Em Sol, existem dois tipos principais de variáveis: <strong>locais</strong> e <strong>globais</strong>. A diferença está em "quem pode ver" a variável.</p>

<table class="table table-dark table-striped">
    <thead>
        <tr><th>Tipo</th><th>Declaração</th><th>Visibilidade</th><th>Ciclo de Vida</th></tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>Local</strong></td>
            <td><code>local x = 10</code></td>
            <td>Apenas no bloco ou arquivo onde foi criada</td>
            <td>Morre quando o bloco/função termina</td>
        </tr>
        <tr>
            <td><strong>Global</strong></td>
            <td><code>x = 10</code> (sem local)</td>
            <td>Todo o programa (todos os arquivos!)</td>
            <td>Dura até o programa fechar</td>
        </tr>
    </tbody>
</table>

<h2>Variáveis Locais (Recomendado)</h2>
<p>
    Variáveis locais são mais rápidas e seguras. Use <code>local</code> sempre que possível!
</p>

<h3>Escopo de Bloco</h3>
<p>Elas só existem dentro do bloco (<code>se</code>, <code>para</code>, <code>função</code>) onde foram criadas:</p>

<div class="code-block">
<pre><code class="language-sol">se verdadeiro então
    local segredo = "1234"
    exiba(segredo)  -- Funciona: "1234"
fim

exiba(segredo)      -- Erro/Nulo! 'segredo' não existe aqui fora</code></pre>
</div>

<h3>Escopo de Arquivo</h3>
<p>Se você criar uma variável <code>local</code> fora de qualquer função, ela é visível em <strong>todo o arquivo</strong>, mas não em outros arquivos:</p>

<div class="code-block">
<pre><code class="language-sol">-- arquivo_a.sol
local apenas_aqui = 10
global_visivel = 20</code></pre>
</div>

<div class="code-block">
<pre><code class="language-sol">-- arquivo_b.sol
importe("arquivo_a")

exiba(global_visivel)  -- 20 (Funciona!)
exiba(apenas_aqui)     -- nulo (Invisível!)</code></pre>
</div>

<h2>Variáveis Globais</h2>
<p>
    Qualquer variável criada sem <code>local</code> é global. Ela é armazenada na tabela especial <code>_G</code>.
</p>

<div class="code-block">
<pre><code class="language-sol">pontos = 100
exiba(_G["pontos"])  -- 100
exiba(_G.pontos)     -- 100</code></pre>
</div>

<div class="warning-box">
    <strong>⚠️ Cuidado:</strong> Variáveis globais podem ser alteradas por qualquer arquivo do seu projeto. 
    Isso pode causar bugs difíceis de achar. Prefira retornar valores de módulos em vez de usar globais.
</div>

<h2>Boas Práticas</h2>

<ul>
    <li>✅ Use <code>local</code> por padrão.</li>
    <li>✅ Use variáveis locais no topo do arquivo para compartilhar dados entre funções do mesmo arquivo.</li>
    <li>❌ Evite globais, exceto para configurações de todo o sistema.</li>
    <li>❌ Não esqueça o <code>local</code> dentro de funções, ou a variável vazará para o programa todo!</li>
</ul>
</div>
