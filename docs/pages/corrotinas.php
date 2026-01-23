<h1>🚀 Corrotinas</h1>
<p class="lead">Funções que podem pausar no meio e continuar depois!</p>

<span class="emoji-big">🚀</span>

<div class="warning-box">
    Esta é uma seção <strong>avançada</strong>. Se você ainda está começando, volte depois!
</div>

<h2>O que são corrotinas?</h2>
<p>
    Imagine um filme: você pode pausar, ir pegar pipoca, e depois continuar de onde parou.
    Corrotinas fazem isso com funções!
</p>

<h2>Criando uma corrotina</h2>

<div class="code-block">
<pre><span class="keyword">local</span> co = <span class="function">corrotina.crie</span>(<span class="keyword">função</span>()
    <span class="function">exiba</span>(<span class="string">"Passo 1"</span>)
    <span class="function">corrotina.ceda</span>()    <span class="comment">-- 🚀 Pausa aqui!</span>
    <span class="function">exiba</span>(<span class="string">"Passo 2"</span>)
    <span class="function">corrotina.ceda</span>()    <span class="comment">-- 🚀 Pausa aqui!</span>
    <span class="function">exiba</span>(<span class="string">"Passo 3"</span>)
<span class="keyword">fim</span>)</pre>
</div>

<h2>Rodando a corrotina</h2>

<div class="code-block">
<pre><span class="function">corrotina.retome</span>(co)   <span class="comment">-- Mostra: Passo 1</span>
<span class="function">exiba</span>(<span class="string">"Fazendo outra coisa..."</span>)
<span class="function">corrotina.retome</span>(co)   <span class="comment">-- Mostra: Passo 2</span>
<span class="function">exiba</span>(<span class="string">"Mais trabalho..."</span>)
<span class="function">corrotina.retome</span>(co)   <span class="comment">-- Mostra: Passo 3</span></pre>
</div>

<h2>Passando valores</h2>
<p>Corrotinas podem enviar e receber valores durante a pausa:</p>

<div class="code-block">
<pre><span class="keyword">local</span> co = <span class="function">corrotina.crie</span>(<span class="keyword">função</span>()
    <span class="keyword">local</span> nome = <span class="function">corrotina.ceda</span>()
    <span class="function">exiba</span>(<span class="string">"Olá, "</span> .. nome .. <span class="string">"!"</span>)
<span class="keyword">fim</span>)

<span class="function">corrotina.retome</span>(co)             <span class="comment">-- Inicia</span>
<span class="function">corrotina.retome</span>(co, <span class="string">"Maria"</span>)   <span class="comment">-- Passa "Maria", mostra: Olá, Maria!</span></pre>
</div>

<h2>Verificando o estado</h2>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="function">corrotina.estado</span>(co))
<span class="comment">-- Pode ser: "suspenso", "rodando", "morto"</span></pre>
</div>

<h2>Exemplo: Gerador de números</h2>

<div class="code-block">
<pre><span class="keyword">local</span> gerador = <span class="function">corrotina.crie</span>(<span class="keyword">função</span>()
    <span class="keyword">local</span> n = <span class="number">0</span>
    
    <span class="label">::proximo::</span>
        n = n + <span class="number">1</span>
        <span class="function">corrotina.ceda</span>(n)
        <span class="keyword">execute</span> proximo
<span class="keyword">fim</span>)

<span class="keyword">para</span> i = <span class="number">1</span>, <span class="number">5</span> <span class="keyword">faça</span>
    <span class="keyword">local</span> ok, numero = <span class="function">corrotina.retome</span>(gerador)
    <span class="function">exiba</span>(numero)
<span class="keyword">fim</span>
<span class="comment">-- Mostra: 1, 2, 3, 4, 5</span></pre>
</div>

<div class="tip-box">
    Corrotinas são Ótimas para: iteradores customizados, máquinas de estado, e programação cooperativa!
</div>

<div class="success-box">
    Corrotinas permitem controle fino sobre a execução do código!
</div>

<div class="mt-4">
    <a href="?page=tarefas" class="btn btn-sol">
        Próximo: Tarefas <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>




