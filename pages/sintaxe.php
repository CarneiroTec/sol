<div class="container">
    <h1 class="text-warning mb-4"><i class="bi bi-code-slash me-2"></i>Sintaxe</h1>
    
    <section class="mt-5">
        <h2>Palavras-Chave</h2>
        <p>O Sol utiliza palavras-chave em português. Estas palavras são reservadas.</p>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><code>e</code> - Operador lógico AND</li>
                    <li class="list-group-item"><code>execute</code> - Desvio incondicional (GOTO)</li>
                    <li class="list-group-item"><code>faça</code> - Início de bloco</li>
                    <li class="list-group-item"><code>se</code> - Condicional</li>
                    <li class="list-group-item"><code>fim</code> - Encerra blocos</li>
                    <li class="list-group-item"><code>falso</code> - Valor booleano</li>
                    <li class="list-group-item"><code>local</code> - Declaração de variável</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><code>função</code> - Define subrotinas</li>
                    <li class="list-group-item"><code>n?o</code> - Negação lógica</li>
                    <li class="list-group-item"><code>ou</code> - Operador lógico OR</li>
                    <li class="list-group-item"><code>retorne</code> - Sai da função</li>
                    <li class="list-group-item"><code>então</code> - Inicia bloco condicional</li>
                    <li class="list-group-item"><code>verdadeiro</code> - Valor booleano</li>
                    <li class="list-group-item"><code>nulo</code> - Valor nulo</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <h2>Operadores</h2>
        <h4 class="text-secondary mt-4">Aritméticos</h4>
        <div class="code-block">
<pre><span class="keyword">local</span> a = <span class="number">10</span> + <span class="number">5</span>  <span class="comment">-- Soma: 15</span>
<span class="keyword">local</span> b = <span class="number">10</span> - <span class="number">5</span>  <span class="comment">-- Subtração: 5</span>
<span class="keyword">local</span> c = <span class="number">10</span> * <span class="number">5</span>  <span class="comment">-- Multiplicação: 50</span>
<span class="keyword">local</span> d = <span class="number">10</span> / <span class="number">5</span>  <span class="comment">-- Divisão: 2.0</span>
<span class="keyword">local</span> e = <span class="number">10</span> // <span class="number">3</span> <span class="comment">-- Divisão inteira: 3</span>
<span class="keyword">local</span> f = <span class="number">10</span> % <span class="number">3</span>  <span class="comment">-- Módulo: 1</span>
<span class="keyword">local</span> g = <span class="number">2</span> ^ <span class="number">10</span>  <span class="comment">-- Potência: 1024</span></pre>
        </div>

        <h4 class="text-secondary mt-4">Comparação</h4>
        <div class="code-block">
<pre><span class="keyword">local</span> igual = (<span class="number">5</span> == <span class="number">5</span>)       <span class="comment">-- verdadeiro</span>
<span class="keyword">local</span> diferente = (<span class="number">5</span> ~= <span class="number">3</span>)   <span class="comment">-- verdadeiro</span>
<span class="keyword">local</span> menor = (<span class="number">3</span> < <span class="number">5</span>)         <span class="comment">-- verdadeiro</span></pre>
        </div>

        <h4 class="text-secondary mt-4">Lógicos</h4>
        <div class="code-block">
<pre><span class="keyword">local</span> x = <span class="keyword">verdadeiro</span> <span class="keyword">e</span> <span class="keyword">falso</span> <span class="comment">-- falso</span>
<span class="keyword">local</span> y = <span class="keyword">verdadeiro</span> <span class="keyword">ou</span> <span class="keyword">falso</span> <span class="comment">-- verdadeiro</span>
<span class="keyword">local</span> z = <span class="keyword">não</span> <span class="keyword">verdadeiro</span>      <span class="comment">-- falso</span></pre>
        </div>
    </section>

    <section class="mt-5">
        <h2>Comentários</h2>
        <div class="code-block">
<pre><span class="comment">-- Este É um comentário de linha</span>

<span class="comment">--[[
    Este É um comentário
    de múltiplas linhas
]]</span></pre>
        </div>
    </section>
</div>




