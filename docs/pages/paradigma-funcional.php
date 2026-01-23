<h1>🚀 Programação Funcional</h1>
<p class="lead">Funções como valores, composição e conceitos funcionais!</p>

<span class="emoji-big">🔮</span>

<h2>O que é programação funcional?</h2>
<p>
    Programação funcional trata funções como <strong>cidadãos de primeira classe</strong>:
    você pode passar funções como argumentos, retornar funções, e compor funções.
</p>

<h2>Características</h2>
<ul>
    <li>Funções como valores</li>
    <li>Funções de alta ordem (recebem/retornam funções)</li>
    <li>Imutabilidade (evitar mudança de estado)</li>
    <li>Composição de funções</li>
    <li>Recursão (incluindo TCO - Tail Call Optimization)</li>
</ul>

<h2>Funções anônimas (lambdas)</h2>

<div class="code-block">
<pre><span class="comment">-- Função anônima simples</span>
<span class="keyword">local</span> dobro = <span class="keyword">função</span>(x) <span class="keyword">retorne</span> x * <span class="number">2</span> <span class="keyword">fim</span>
<span class="function">exiba</span>(<span class="function">dobro</span>(<span class="number">5</span>))  <span class="comment">-- 10</span>

<span class="comment">-- Passando função como argumento</span>
<span class="keyword">função</span> <span class="function">aplique</span>(f, valor)
    <span class="keyword">retorne</span> <span class="function">f</span>(valor)
<span class="keyword">fim</span>

<span class="function">exiba</span>(<span class="function">aplique</span>(<span class="keyword">função</span>(x) <span class="keyword">retorne</span> x ^ <span class="number">2</span> <span class="keyword">fim</span>, <span class="number">5</span>))  <span class="comment">-- 25</span></pre>
</div>

<h2>Funções de alta ordem</h2>

<h3>Map (transformar lista)</h3>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">map</span>(lista, f)
    <span class="keyword">local</span> resultado = {}
    <span class="keyword">para</span> i, valor <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(lista) <span class="keyword">faça</span>
        <span class="function">tabela.insira</span>(resultado, <span class="function">f</span>(valor))
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> resultado
<span class="keyword">fim</span>

<span class="keyword">local</span> numeros = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>}
<span class="keyword">local</span> quadrados = <span class="function">map</span>(numeros, <span class="keyword">função</span>(x) <span class="keyword">retorne</span> x ^ <span class="number">2</span> <span class="keyword">fim</span>)
<span class="comment">-- quadrados = {1, 4, 9, 16, 25}</span></pre>
</div>

<h3>Filter (filtrar lista)</h3>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">filter</span>(lista, predicado)
    <span class="keyword">local</span> resultado = {}
    <span class="keyword">para</span> i, valor <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(lista) <span class="keyword">faça</span>
        <span class="keyword">se</span> <span class="function">predicado</span>(valor) <span class="keyword">então</span>
            <span class="function">tabela.insira</span>(resultado, valor)
        <span class="keyword">fim</span>
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> resultado
<span class="keyword">fim</span>

<span class="keyword">local</span> numeros = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>, <span class="number">6</span>}
<span class="keyword">local</span> pares = <span class="function">filter</span>(numeros, <span class="keyword">função</span>(x) <span class="keyword">retorne</span> x % <span class="number">2</span> == <span class="number">0</span> <span class="keyword">fim</span>)
<span class="comment">-- pares = {2, 4, 6}</span></pre>
</div>

<h3>Reduce (agregar lista)</h3>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">reduce</span>(lista, f, inicial)
    <span class="keyword">local</span> acumulador = inicial
    <span class="keyword">para</span> i, valor <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(lista) <span class="keyword">faça</span>
        acumulador = <span class="function">f</span>(acumulador, valor)
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> acumulador
<span class="keyword">fim</span>

<span class="keyword">local</span> numeros = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>}
<span class="keyword">local</span> soma = <span class="function">reduce</span>(numeros, <span class="keyword">função</span>(a, b) <span class="keyword">retorne</span> a + b <span class="keyword">fim</span>, <span class="number">0</span>)
<span class="comment">-- soma = 15</span>

<span class="keyword">local</span> produto = <span class="function">reduce</span>(numeros, <span class="keyword">função</span>(a, b) <span class="keyword">retorne</span> a * b <span class="keyword">fim</span>, <span class="number">1</span>)
<span class="comment">-- produto = 120</span></pre>
</div>

<h2>Composição de funções</h2>

<div class="code-block">
<pre><span class="comment">-- Compor duas funções</span>
<span class="keyword">função</span> <span class="function">componha</span>(f, g)
    <span class="keyword">retorne</span> <span class="keyword">função</span>(x)
        <span class="keyword">retorne</span> <span class="function">f</span>(<span class="function">g</span>(x))
    <span class="keyword">fim</span>
<span class="keyword">fim</span>

<span class="keyword">local</span> dobro = <span class="keyword">função</span>(x) <span class="keyword">retorne</span> x * <span class="number">2</span> <span class="keyword">fim</span>
<span class="keyword">local</span> incremento = <span class="keyword">função</span>(x) <span class="keyword">retorne</span> x + <span class="number">1</span> <span class="keyword">fim</span>

<span class="keyword">local</span> dobro_e_incremento = <span class="function">componha</span>(incremento, dobro)
<span class="function">exiba</span>(<span class="function">dobro_e_incremento</span>(<span class="number">5</span>))  <span class="comment">-- 11 (5*2 + 1)</span></pre>
</div>

<h2>Currying (aplicação parcial)</h2>

<div class="code-block">
<pre><span class="comment">-- Função que retorna função</span>
<span class="keyword">função</span> <span class="function">some</span>(a)
    <span class="keyword">retorne</span> <span class="keyword">função</span>(b)
        <span class="keyword">retorne</span> a + b
    <span class="keyword">fim</span>
<span class="keyword">fim</span>

<span class="keyword">local</span> some_5 = <span class="function">some</span>(<span class="number">5</span>)
<span class="function">exiba</span>(<span class="function">some_5</span>(<span class="number">3</span>))   <span class="comment">-- 8</span>
<span class="function">exiba</span>(<span class="function">some_5</span>(<span class="number">10</span>))  <span class="comment">-- 15</span>

<span class="comment">-- Currying genérico</span>
<span class="keyword">função</span> <span class="function">curry</span>(f, a)
    <span class="keyword">retorne</span> <span class="keyword">função</span>(b)
        <span class="keyword">retorne</span> <span class="function">f</span>(a, b)
    <span class="keyword">fim</span>
<span class="keyword">fim</span>

<span class="keyword">local</span> multiplique = <span class="keyword">função</span>(a, b) <span class="keyword">retorne</span> a * b <span class="keyword">fim</span>
<span class="keyword">local</span> dobre = <span class="function">curry</span>(multiplique, <span class="number">2</span>)
<span class="function">exiba</span>(<span class="function">dobre</span>(<span class="number">7</span>))  <span class="comment">-- 14</span></pre>
</div>

<h2>Recursão com TCO (Tail Call Optimization)</h2>

<p>Sol otimiza chamadas de cauda (tail calls) - quando a última operação é chamar outra função.</p>

<h3>Fatorial com TCO</h3>

<div class="code-block">
<pre><span class="comment">-- Versão com TCO (não estoura pilha)</span>
<span class="keyword">função</span> <span class="function">fatorial</span>(n, acumulador)
    acumulador = acumulador <span class="keyword">ou</span> <span class="number">1</span>
    <span class="keyword">se</span> n <= <span class="number">1</span> <span class="keyword">então</span>
        <span class="keyword">retorne</span> acumulador
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> <span class="function">fatorial</span>(n - <span class="number">1</span>, n * acumulador)  <span class="comment">-- Tail call!</span>
<span class="keyword">fim</span>

<span class="function">exiba</span>(<span class="function">fatorial</span>(<span class="number">5</span>))     <span class="comment">-- 120</span>
<span class="function">exiba</span>(<span class="function">fatorial</span>(<span class="number">10000</span>))  <span class="comment">-- Não estoura a pilha!</span></pre>
</div>

<h3>Fibonacci com TCO</h3>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">fibonacci</span>(n, a, b)
    a = a <span class="keyword">ou</span> <span class="number">0</span>
    b = b <span class="keyword">ou</span> <span class="number">1</span>
    <span class="keyword">se</span> n == <span class="number">0</span> <span class="keyword">então</span>
        <span class="keyword">retorne</span> a
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> <span class="function">fibonacci</span>(n - <span class="number">1</span>, b, a + b)  <span class="comment">-- Tail call!</span>
<span class="keyword">fim</span>

<span class="function">exiba</span>(<span class="function">fibonacci</span>(<span class="number">10</span>))  <span class="comment">-- 55</span>
<span class="function">exiba</span>(<span class="function">fibonacci</span>(<span class="number">50</span>))  <span class="comment">-- 12586269025</span></pre>
</div>

<h2>Exemplo completo: Pipeline funcional</h2>

<div class="code-block">
<pre><span class="comment">-- Funções utilitárias</span>
<span class="keyword">função</span> <span class="function">map</span>(lista, f)
    <span class="keyword">local</span> resultado = {}
    <span class="keyword">para</span> i, v <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(lista) <span class="keyword">faça</span>
        <span class="function">tabela.insira</span>(resultado, <span class="function">f</span>(v))
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> resultado
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">filter</span>(lista, pred)
    <span class="keyword">local</span> resultado = {}
    <span class="keyword">para</span> i, v <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(lista) <span class="keyword">faça</span>
        <span class="keyword">se</span> <span class="function">pred</span>(v) <span class="keyword">então</span> <span class="function">tabela.insira</span>(resultado, v) <span class="keyword">fim</span>
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> resultado
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">reduce</span>(lista, f, inicial)
    <span class="keyword">local</span> acc = inicial
    <span class="keyword">para</span> i, v <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(lista) <span class="keyword">faça</span>
        acc = <span class="function">f</span>(acc, v)
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> acc
<span class="keyword">fim</span>

<span class="comment">-- Pipeline: pegar números, filtrar pares, dobrar, somar</span>
<span class="keyword">local</span> numeros = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>, <span class="number">6</span>, <span class="number">7</span>, <span class="number">8</span>, <span class="number">9</span>, <span class="number">10</span>}

<span class="keyword">local</span> resultado = <span class="function">reduce</span>(
    <span class="function">map</span>(
        <span class="function">filter</span>(numeros, <span class="keyword">função</span>(x) <span class="keyword">retorne</span> x % <span class="number">2</span> == <span class="number">0</span> <span class="keyword">fim</span>),
        <span class="keyword">função</span>(x) <span class="keyword">retorne</span> x * <span class="number">2</span> <span class="keyword">fim</span>
    ),
    <span class="keyword">função</span>(a, b) <span class="keyword">retorne</span> a + b <span class="keyword">fim</span>,
    <span class="number">0</span>
)

<span class="function">exiba</span>(resultado)  <span class="comment">-- 60 (2+4+6+8+10 = 30, dobrado = 60)</span></pre>
</div>

<h2>Closures (captura de variáveis)</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">crie_contador</span>()
    <span class="keyword">local</span> count = <span class="number">0</span>
    <span class="keyword">retorne</span> <span class="keyword">função</span>()
        count = count + <span class="number">1</span>
        <span class="keyword">retorne</span> count
    <span class="keyword">fim</span>
<span class="keyword">fim</span>

<span class="keyword">local</span> contador1 = <span class="function">crie_contador</span>()
<span class="keyword">local</span> contador2 = <span class="function">crie_contador</span>()

<span class="function">exiba</span>(<span class="function">contador1</span>())  <span class="comment">-- 1</span>
<span class="function">exiba</span>(<span class="function">contador1</span>())  <span class="comment">-- 2</span>
<span class="function">exiba</span>(<span class="function">contador2</span>())  <span class="comment">-- 1 (contador independente)</span></pre>
</div>

<h2>Vantagens da programação funcional</h2>

<ul>
    <li>✅ Código mais conciso e expressivo</li>
    <li>✅ Menos bugs (imutabilidade)</li>
    <li>✅ Mais fácil de testar (funções puras)</li>
    <li>✅ Composição poderosa</li>
    <li>✅ TCO permite recursão profunda</li>
</ul>

<div class="tip-box">
    <strong>TCO:</strong> Sol otimiza tail calls automaticamente! Use recursão de cauda para evitar estouro de pilha.
</div>

<div class="success-box">
    Sol suporta programação funcional completa: funções de alta ordem, closures, composição e TCO!
</div>

<div class="mt-4">
    <a href="?page=paradigma-imperativo" class="btn btn-sol">
        Voltar: Imperativo <i class="bi bi-arrow-left ms-2"></i>
    </a>
</div>
