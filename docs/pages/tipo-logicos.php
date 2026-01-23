<h1>✅ Lógicos</h1>
<p class="lead">Valores de verdade: verdadeiro, falso e nulo!</p>

<span class="emoji-big">🔘</span>

<h2>Os três valores lógicos</h2>

<div class="code-block">
<pre><span class="keyword">local</span> sim = <span class="keyword">verdadeiro</span>
<span class="keyword">local</span> nao = <span class="keyword">falso</span>
<span class="keyword">local</span> vazio = <span class="keyword">nulo</span></pre>
</div>

<h2>Uso em condicionais</h2>

<div class="code-block">
<pre><span class="keyword">se</span> <span class="keyword">verdadeiro</span> <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Isso sempre executa"</span>)
<span class="keyword">fim</span>

<span class="keyword">se</span> <span class="keyword">falso</span> <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Isso nunca executa"</span>)
<span class="keyword">fim</span></pre>
</div>

<h2>Operadores lógicos</h2>

<h3>E (ambos devem ser verdadeiros)</h3>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="keyword">verdadeiro</span> <span class="keyword">e</span> <span class="keyword">verdadeiro</span>)  <span class="comment">-- verdadeiro</span>
<span class="function">exiba</span>(<span class="keyword">verdadeiro</span> <span class="keyword">e</span> <span class="keyword">falso</span>)      <span class="comment">-- falso</span>
<span class="function">exiba</span>(<span class="keyword">falso</span> <span class="keyword">e</span> <span class="keyword">verdadeiro</span>)      <span class="comment">-- falso</span></pre>
</div>

<h3>OU (pelo menos um deve ser verdadeiro)</h3>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="keyword">verdadeiro</span> <span class="keyword">ou</span> <span class="keyword">falso</span>)   <span class="comment">-- verdadeiro</span>
<span class="function">exiba</span>(<span class="keyword">falso</span> <span class="keyword">ou</span> <span class="keyword">verdadeiro</span>)   <span class="comment">-- verdadeiro</span>
<span class="function">exiba</span>(<span class="keyword">falso</span> <span class="keyword">ou</span> <span class="keyword">falso</span>)        <span class="comment">-- falso</span></pre>
</div>

<h3>NÃO (inverte o valor)</h3>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="keyword">não</span> <span class="keyword">verdadeiro</span>)  <span class="comment">-- falso</span>
<span class="function">exiba</span>(<span class="keyword">não</span> <span class="keyword">falso</span>)       <span class="comment">-- verdadeiro</span></pre>
</div>

<h2>Valores que são considerados falsos</h2>

<p>Em Sol, apenas <code>falso</code> e <code>nulo</code> são considerados falsos. TODO o resto é verdadeiro!</p>

<div class="code-block">
<pre><span class="keyword">se</span> <span class="number">0</span> <span class="keyword">então</span> <span class="function">exiba</span>(<span class="string">"0 é verdadeiro!"</span>) <span class="keyword">fim</span>
<span class="keyword">se</span> <span class="string">""</span> <span class="keyword">então</span> <span class="function">exiba</span>(<span class="string">"String vazia é verdadeira!"</span>) <span class="keyword">fim</span>
<span class="keyword">se</span> {} <span class="keyword">então</span> <span class="function">exiba</span>(<span class="string">"Tabela vazia é verdadeira!"</span>) <span class="keyword">fim</span></pre>
</div>

<h2>Exemplo: Validação</h2>

<div class="code-block">
<pre><span class="keyword">local</span> idade = <span class="number">16</span>
<span class="keyword">local</span> tem_permissao = <span class="keyword">verdadeiro</span>

<span class="keyword">se</span> idade >= <span class="number">18</span> <span class="keyword">e</span> tem_permissao <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Pode entrar"</span>)
<span class="keyword">fim</span>

<span class="keyword">se</span> <span class="keyword">não</span> (idade >= <span class="number">18</span> <span class="keyword">e</span> tem_permissao) <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Não pode entrar"</span>)
<span class="keyword">fim</span></pre>
</div>

<div class="success-box">
    Valores lógicos são fundamentais para controle de fluxo!
</div>

<div class="mt-4">
    <a href="?page=metamethods" class="btn btn-sol">
        Próximo: Metamétodos <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
