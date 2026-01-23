<h1>🔢 Números</h1>
<p class="lead">Trabalhe com números inteiros e decimais, faça cálculos e use funções matemáticas!</p>

<span class="emoji-big">🧮</span>

<h2>O que são números?</h2>
<p>
    Números são usados para contar, medir e fazer cálculos. No Sol, você pode usar:
</p>
<ul>
    <li><strong>Inteiros</strong>: 1, 2, 3, -5, 100</li>
    <li><strong>Decimais</strong>: 3.14, -2.5, 0.001</li>
</ul>

<h2>Criando números</h2>

<div class="code-block">
<pre><span class="keyword">local</span> idade = <span class="number">15</span>
<span class="keyword">local</span> altura = <span class="number">1.75</span>
<span class="keyword">local</span> temperatura = -<span class="number">10</span>
<span class="keyword">local</span> pi = <span class="number">3.14159</span></pre>
</div>

<h2>Operações básicas</h2>

<div class="code-block">
<pre><span class="keyword">local</span> a = <span class="number">10</span>
<span class="keyword">local</span> b = <span class="number">3</span>

<span class="function">exiba</span>(a + b)   <span class="comment">-- Soma: 13</span>
<span class="function">exiba</span>(a - b)   <span class="comment">-- Subtração: 7</span>
<span class="function">exiba</span>(a * b)   <span class="comment">-- Multiplicação: 30</span>
<span class="function">exiba</span>(a / b)   <span class="comment">-- Divisão: 3.333...</span>
<span class="function">exiba</span>(a // b)  <span class="comment">-- Divisão inteira: 3</span>
<span class="function">exiba</span>(a % b)   <span class="comment">-- Resto: 1</span>
<span class="function">exiba</span>(a ^ b)   <span class="comment">-- Potência: 1000</span></pre>
</div>

<h2>Biblioteca Matemática</h2>

<h3>Constantes especiais</h3>

<div class="code-block">
<pre><span class="function">exiba</span>(matemática.pi)              <span class="comment">-- 3.14159... (π)</span>
<span class="function">exiba</span>(matemática.enorme)          <span class="comment">-- Infinito</span>
<span class="function">exiba</span>(matemática.inteiro_máximo)  <span class="comment">-- Maior inteiro possível</span>
<span class="function">exiba</span>(matemática.inteiro_mínimo)  <span class="comment">-- Menor inteiro possível</span></pre>
</div>

<h3>Valor absoluto e arredondamento</h3>

<div class="code-block">
<pre><span class="comment">-- Valor absoluto (remove sinal negativo)</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_valor_absoluto</span>(-<span class="number">10</span>))  <span class="comment">-- 10</span>

<span class="comment">-- Arredondar para baixo</span>
<span class="function">exiba</span>(<span class="function">matemática.arredonde_para_piso</span>(<span class="number">3.7</span>))  <span class="comment">-- 3</span>

<span class="comment">-- Arredondar para cima</span>
<span class="function">exiba</span>(<span class="function">matemática.arredonde_para_teto</span>(<span class="number">3.2</span>))  <span class="comment">-- 4</span></pre>
</div>

<h3>Máximo e mínimo</h3>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="function">matemática.obtenha_máximo</span>(<span class="number">5</span>, <span class="number">10</span>, <span class="number">3</span>, <span class="number">8</span>))  <span class="comment">-- 10</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_mínimo</span>(<span class="number">5</span>, <span class="number">10</span>, <span class="number">3</span>, <span class="number">8</span>))  <span class="comment">-- 3</span></pre>
</div>

<h3>Raiz quadrada e potência</h3>

<div class="code-block">
<pre><span class="comment">-- Raiz quadrada</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_raiz_quadrada</span>(<span class="number">16</span>))  <span class="comment">-- 4</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_raiz_quadrada</span>(<span class="number">25</span>))  <span class="comment">-- 5</span>

<span class="comment">-- Potência (também pode usar ^)</span>
<span class="function">exiba</span>(<span class="number">2</span> ^ <span class="number">8</span>)  <span class="comment">-- 256</span></pre>
</div>

<h3>Funções trigonométricas</h3>

<div class="code-block">
<pre><span class="comment">-- Seno, cosseno, tangente (em radianos)</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_seno</span>(<span class="number">0</span>))     <span class="comment">-- 0</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_cosseno</span>(<span class="number">0</span>))   <span class="comment">-- 1</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_tangente</span>(<span class="number">0</span>))  <span class="comment">-- 0</span>

<span class="comment">-- Funções inversas</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_arco_seno</span>(<span class="number">0.5</span>))
<span class="function">exiba</span>(<span class="function">matemática.obtenha_arco_cosseno</span>(<span class="number">0.5</span>))
<span class="function">exiba</span>(<span class="function">matemática.obtenha_arco_tangente</span>(<span class="number">1</span>))</pre>
</div>

<h3>Conversão entre graus e radianos</h3>

<div class="code-block">
<pre><span class="comment">-- Graus para radianos</span>
<span class="keyword">local</span> radianos = <span class="function">matemática.converta_para_radianos</span>(<span class="number">180</span>)
<span class="function">exiba</span>(radianos)  <span class="comment">-- 3.14159... (π)</span>

<span class="comment">-- Radianos para graus</span>
<span class="keyword">local</span> graus = <span class="function">matemática.converta_para_graus</span>(matemática.pi)
<span class="function">exiba</span>(graus)  <span class="comment">-- 180</span></pre>
</div>

<h3>Logaritmo e exponencial</h3>

<div class="code-block">
<pre><span class="comment">-- Exponencial (e^x)</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_exponencial</span>(<span class="number">1</span>))  <span class="comment">-- 2.71828... (e)</span>

<span class="comment">-- Logaritmo natural (base e)</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_logaritmo</span>(<span class="number">10</span>))  <span class="comment">-- 2.302...</span>

<span class="comment">-- Logaritmo em outra base</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_logaritmo</span>(<span class="number">100</span>, <span class="number">10</span>))  <span class="comment">-- 2 (log₁₀ 100)</span></pre>
</div>

<h3>Números aleatórios 🎲</h3>

<div class="code-block">
<pre><span class="comment">-- Definir semente (para resultados reproduzíveis)</span>
<span class="function">matemática.defina_semente_aleatória</span>(<span class="number">12345</span>)

<span class="comment">-- Número aleatório entre 0 e 1</span>
<span class="function">exiba</span>(<span class="function">matemática.gere_aleatório</span>())

<span class="comment">-- Número aleatório entre 1 e 6 (dado)</span>
<span class="keyword">local</span> dado = <span class="function">matemática.gere_aleatório</span>(<span class="number">1</span>, <span class="number">6</span>)
<span class="function">exiba</span>(<span class="string">"Você tirou: "</span> .. dado)</pre>
</div>

<h3>Outras funções úteis</h3>

<div class="code-block">
<pre><span class="comment">-- Converter para inteiro</span>
<span class="function">exiba</span>(<span class="function">matemática.converta_para_inteiro</span>(<span class="number">3.7</span>))  <span class="comment">-- 3</span>

<span class="comment">-- Resto de divisão flutuante</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_resto_flutuante</span>(<span class="number">7.5</span>, <span class="number">2</span>))  <span class="comment">-- 1.5</span>

<span class="comment">-- Separar parte inteira e fracionária</span>
<span class="keyword">local</span> inteira, fracao = <span class="function">matemática.separe_fração_inteiro</span>(<span class="number">3.75</span>)
<span class="function">exiba</span>(inteira, fracao)  <span class="comment">-- 3, 0.75</span>

<span class="comment">-- Verificar tipo de número</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_tipo</span>(<span class="number">10</span>))    <span class="comment">-- "inteiro"</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_tipo</span>(<span class="number">10.5</span>))  <span class="comment">-- "flutuante"</span></pre>
</div>

<h2>Conversão de tipos</h2>

<div class="code-block">
<pre><span class="comment">-- Texto para número</span>
<span class="keyword">local</span> numero = <span class="function">converta_para_número</span>(<span class="string">"42"</span>)
<span class="function">exiba</span>(numero + <span class="number">8</span>)  <span class="comment">-- 50</span>

<span class="comment">-- Número para texto</span>
<span class="keyword">local</span> texto = <span class="function">converta_para_texto</span>(<span class="number">123</span>)
<span class="function">exiba</span>(<span class="string">"Número: "</span> .. texto)</pre>
</div>

<h2>Exemplo: Calculadora de área</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">area_circulo</span>(raio)
    <span class="keyword">retorne</span> matemática.pi * raio ^ <span class="number">2</span>
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">area_triangulo</span>(base, altura)
    <span class="keyword">retorne</span> (base * altura) / <span class="number">2</span>
<span class="keyword">fim</span>

<span class="function">exiba</span>(<span class="string">"Área do círculo (raio 5): "</span> .. <span class="function">area_circulo</span>(<span class="number">5</span>))
<span class="function">exiba</span>(<span class="string">"Área do triângulo (base 10, altura 6): "</span> .. <span class="function">area_triangulo</span>(<span class="number">10</span>, <span class="number">6</span>))</pre>
</div>

<h2>Exemplo: Jogo de adivinhação</h2>

<div class="code-block">
<pre><span class="comment">-- Gera número secreto entre 1 e 100</span>
<span class="keyword">local</span> secreto = <span class="function">matemática.gere_aleatório</span>(<span class="number">1</span>, <span class="number">100</span>)
<span class="keyword">local</span> tentativas = <span class="number">0</span>

<span class="function">exiba</span>(<span class="string">"Adivinhe o número entre 1 e 100!"</span>)

<span class="keyword">para</span> i = <span class="number">1</span>, <span class="number">10</span> <span class="keyword">faça</span>
    <span class="keyword">local</span> palpite = <span class="function">converta_para_número</span>(<span class="function">terminal.leia</span>())
    tentativas = tentativas + <span class="number">1</span>
    
    <span class="keyword">se</span> palpite == secreto <span class="keyword">então</span>
        <span class="function">exiba</span>(<span class="string">"🎉 Parabéns! Acertou em "</span> .. tentativas .. <span class="string">" tentativas!"</span>)
        <span class="keyword">interrompa</span>
    <span class="keyword">fim</span>
    
    <span class="keyword">se</span> palpite < secreto <span class="keyword">então</span>
        <span class="function">exiba</span>(<span class="string">"📈 Muito baixo!"</span>)
    <span class="keyword">fim</span>
    
    <span class="keyword">se</span> palpite > secreto <span class="keyword">então</span>
        <span class="function">exiba</span>(<span class="string">"📉 Muito alto!"</span>)
    <span class="keyword">fim</span>
<span class="keyword">fim</span></pre>
</div>

<div class="success-box">
    Agora você domina números em Sol! Use a biblioteca matemática para cálculos avançados.
</div>

<div class="mt-4">
    <a href="?page=tipo-texto" class="btn btn-sol">
        Próximo: Texto <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
