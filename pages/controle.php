<div class="container">
    <h1 class="text-warning mb-4">Controle de Fluxo</h1>
    
    <section class="mt-5">
        <h2>Condicional (Se)</h2>
        <p>Sol simplifica condicionais. Utilize blocos aninhados ou lógica reestruturada para fluxos complexos.</p>
        <div class="code-block">
<pre><span class="keyword">local</span> idade = <span class="number">18</span>

<span class="keyword">se</span> idade >= <span class="number">18</span> <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Maior de idade"</span>)
<span class="keyword">fim</span>

<span class="comment">-- Para fluxo alternativo, inverta a lógica ou use retorno:</span>
<span class="keyword">se</span> idade < <span class="number">18</span> <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Menor de idade"</span>)
<span class="keyword">fim</span></pre>
        </div>
    </section>

    <section class="mt-5">
        <h2>Loop Numérico (Para)</h2>
        <div class="code-block">
<pre><span class="comment">-- De 1 a 10</span>
<span class="keyword">para</span> i = <span class="number">1</span>, <span class="number">10</span> <span class="keyword">faça</span>
    <span class="function">exiba</span>(i)
<span class="keyword">fim</span>

<span class="comment">-- Com passo (de 10 a 1, passo -2)</span>
<span class="keyword">para</span> i = <span class="number">10</span>, <span class="number">1</span>, -<span class="number">2</span> <span class="keyword">faça</span>
    <span class="function">exiba</span>(i)
<span class="keyword">fim</span></pre>
        </div>
    </section>

    <section class="mt-5">
        <h2>Loop Genérico (Para-Em)</h2>
        <div class="code-block">
<pre><span class="keyword">local</span> frutas = {<span class="string">"Maçã"</span>, <span class="string">"Banana"</span>, <span class="string">"Uva"</span>}

<span class="keyword">para</span> index, valor <span class="keyword">em</span> <span class="function">ipairs</span>(frutas) <span class="keyword">faça</span>
    <span class="function">exiba</span>(index, valor)
<span class="keyword">fim</span></pre>
        </div>
    </section>

    <section class="mt-5">
        <h2>Desvio (execute/Rótulos)</h2>
        <div class="code-block">
<pre><span class="keyword">local</span> x = <span class="number">0</span>

<span class="label">::inicio::</span>
x = x + <span class="number">1</span>
<span class="function">exiba</span>(x)

<span class="keyword">se</span> x < <span class="number">5</span> <span class="keyword">então</span>
    <span class="keyword">execute</span> <span class="label">::inicio::</span>
<span class="keyword">fim</span></pre>
        </div>
    </section>
</div>




