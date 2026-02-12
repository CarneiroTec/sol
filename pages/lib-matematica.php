<h1>🚀 Biblioteca: Matemática</h1>
<p class="lead">Funções prontas para fazer contas e trabalhar com números!</p>

<span class="emoji-big">🚀</span>

<h2>Números especiais</h2>

<div class="code-block">
<pre><span class="function">exiba</span>(matemática.pi)              <span class="comment">-- 3.14159... (o famoso p)</span>
<span class="function">exiba</span>(matemática.enorme)          <span class="comment">-- Infinito!</span>
<span class="function">exiba</span>(matemática.inteiro_máximo)  <span class="comment">-- Maior inteiro possível</span>
<span class="function">exiba</span>(matemática.inteiro_mínimo)  <span class="comment">-- Menor inteiro possível</span></pre>
</div>

<h2>Operações básicas</h2>

<h3>Valor absoluto</h3>
<p>Transforma números negativos em positivos:</p>
<div class="code-block">
<pre><span class="function">exiba</span>(<span class="function">matemática.obtenha_valor_absoluto</span>(-<span class="number">10</span>))   <span class="comment">-- Mostra: 10</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_valor_absoluto</span>(<span class="number">5</span>))     <span class="comment">-- Mostra: 5</span></pre>
</div>

<h3>Arredondar</h3>
<div class="code-block">
<pre><span class="comment">-- Para baixo</span>
<span class="function">exiba</span>(<span class="function">matemática.arredonde_para_piso</span>(<span class="number">3.7</span>))      <span class="comment">-- Mostra: 3</span>

<span class="comment">-- Para cima</span>
<span class="function">exiba</span>(<span class="function">matemática.arredonde_para_teto</span>(<span class="number">3.2</span>))      <span class="comment">-- Mostra: 4</span></pre>
</div>

<h3>Maior e menor</h3>
<div class="code-block">
<pre><span class="function">exiba</span>(<span class="function">matemática.obtenha_máximo</span>(<span class="number">5</span>, <span class="number">10</span>, <span class="number">3</span>))   <span class="comment">-- Mostra: 10</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_mínimo</span>(<span class="number">5</span>, <span class="number">10</span>, <span class="number">3</span>))   <span class="comment">-- Mostra: 3</span></pre>
</div>

<h2>Raiz quadrada e potência</h2>

<div class="code-block">
<pre><span class="comment">-- Raiz quadrada (qual número x número = isso?)</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_raiz_quadrada</span>(<span class="number">16</span>))   <span class="comment">-- Mostra: 4</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_raiz_quadrada</span>(<span class="number">25</span>))   <span class="comment">-- Mostra: 5</span>

<span class="comment">-- Potência (2 elevado a 8)</span>
<span class="function">exiba</span>(<span class="number">2</span> ^ <span class="number">8</span>)   <span class="comment">-- Mostra: 256</span></pre>
</div>

<h2>Números aleatórios 🚀</h2>
<p>Ótimo para jogos!</p>

<div class="code-block">
<pre><span class="comment">-- Número aleatório entre 1 e 6 (como um dado!)</span>
<span class="keyword">local</span> dado = <span class="function">matemática.gere_aleatório</span>(<span class="number">1</span>, <span class="number">6</span>)
<span class="function">exiba</span>(<span class="string">"Você tirou: "</span> .. dado)

<span class="comment">-- Número entre 1 e 100</span>
<span class="keyword">local</span> sorte = <span class="function">matemática.gere_aleatório</span>(<span class="number">1</span>, <span class="number">100</span>)
<span class="function">exiba</span>(<span class="string">"Seu número da sorte: "</span> .. sorte)

<span class="function">matemática.defina_semente_aleatória</span>(<span class="number">42</span>)</pre>
</div>

<h2>Trigonometria</h2>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="function">matemática.obtenha_seno</span>(<span class="number">0</span>))         <span class="comment">-- 0</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_cosseno</span>(<span class="number">0</span>))      <span class="comment">-- 1</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_tangente</span>(<span class="number">0</span>))     <span class="comment">-- 0</span>

<span class="comment">-- Funções inversas</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_arco_seno</span>(<span class="number">0.5</span>))
<span class="function">exiba</span>(<span class="function">matemática.obtenha_arco_cosseno</span>(<span class="number">0.5</span>))
<span class="function">exiba</span>(<span class="function">matemática.obtenha_arco_tangente</span>(<span class="number">1</span>))</pre>
</div>

<h2>Conversão de Ângulos</h2>

<div class="code-block">
<pre><span class="comment">-- Converter radianos para graus</span>
<span class="function">exiba</span>(<span class="function">matemática.converta_para_graus</span>(matemática.pi))  <span class="comment">-- 180</span>

<span class="comment">-- Converter graus para radianos</span>
<span class="function">exiba</span>(<span class="function">matemática.converta_para_radianos</span>(<span class="number">180</span>))  <span class="comment">-- 3.14159...</span></pre>
</div>

<h2>Funções avançadas</h2>

<h3>Logaritmo e exponencial</h3>
<div class="code-block">
<pre><span class="function">exiba</span>(<span class="function">matemática.obtenha_exponencial</span>(<span class="number">1</span>))     <span class="comment">-- e^1 é 2.718</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_logaritmo</span>(<span class="number">10</span>))      <span class="comment">-- ln(10)</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_logaritmo</span>(<span class="number">100</span>, <span class="number">10</span>))  <span class="comment">-- log base 10 de 100 = 2</span></pre>
</div>

<h3>Resto e separação</h3>
<div class="code-block">
<pre><span class="comment">-- Resto da divisão (módulo para números reais)</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_resto_flutuante</span>(<span class="number">5.5</span>, <span class="number">2</span>))  <span class="comment">-- 1.5</span>

<span class="comment">-- Separar parte inteira e fracionária</span>
<span class="keyword">local</span> inteiro, fracao = <span class="function">matemática.separe_fração_inteiro</span>(<span class="number">3.7</span>)
<span class="function">exiba</span>(inteiro, fracao)  <span class="comment">-- 3, 0.7</span></pre>
</div>

<h3>Conversão e verificação</h3>
<div class="code-block">
<pre><span class="comment">-- Converter para inteiro (retorna nil se não for possível)</span>
<span class="function">exiba</span>(<span class="function">matemática.converta_para_inteiro</span>(<span class="number">3.0</span>))   <span class="comment">-- 3</span>
<span class="function">exiba</span>(<span class="function">matemática.converta_para_inteiro</span>(<span class="number">3.5</span>))   <span class="comment">-- nil</span>

<span class="comment">-- Verificar tipo de número</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_tipo</span>(<span class="number">5</span>))      <span class="comment">-- "integer"</span>
<span class="function">exiba</span>(<span class="function">matemática.obtenha_tipo</span>(<span class="number">5.5</span>))    <span class="comment">-- "Real"</span></pre>
</div>

<h2>Exemplo: Jogo de adivinhação</h2>

<div class="code-block">
<pre><span class="keyword">local</span> numero_secreto = <span class="function">matemática.gere_aleatério</span>(<span class="number">1</span>, <span class="number">10</span>)
<span class="keyword">local</span> tentativa = <span class="number">5</span>  <span class="comment">-- Finge que o jogador chutou 5</span>

<span class="keyword">se</span> tentativa == numero_secreto <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"🚀 Acertou!"</span>)
<span class="keyword">fim</span>

<span class="keyword">se</span> tentativa ~= numero_secreto <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Errou! Era "</span> .. numero_secreto)
<span class="keyword">fim</span></pre>
</div>

<div class="success-box">
    A biblioteca de matemática tem tudo que você precisa para fazer contas!
</div>

<div class="mt-4">
    <a href="?page=lib-texto" class="btn btn-sol">
        Próximo: Biblioteca de Texto <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
