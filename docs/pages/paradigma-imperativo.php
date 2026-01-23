<h1>⚙️ Programação Imperativa</h1>
<p class="lead">Controle direto do fluxo de execução - simule até mesmo assembly!</p>

<span class="emoji-big">🔧</span>

<h2>O que é programação imperativa?</h2>
<p>
    Programação imperativa é sobre dar comandos diretos ao computador: "faça isso, depois aquilo".
    Você controla exatamente como o programa executa, passo a passo.
</p>

<h2>Características</h2>
<ul>
    <li>Sequência de comandos</li>
    <li>Mudança de estado (variáveis mutáveis)</li>
    <li>Controle de fluxo explícito</li>
    <li>Uso de loops e condicionais</li>
</ul>

<h2>Exemplo básico: Contador</h2>

<div class="code-block">
<pre><span class="comment">-- Estado mutável</span>
<span class="keyword">local</span> contador = <span class="number">0</span>

<span class="comment">-- Sequência de comandos</span>
contador = contador + <span class="number">1</span>
<span class="function">exiba</span>(<span class="string">"Contador: "</span> .. contador)

contador = contador + <span class="number">1</span>
<span class="function">exiba</span>(<span class="string">"Contador: "</span> .. contador)

contador = contador + <span class="number">1</span>
<span class="function">exiba</span>(<span class="string">"Contador: "</span> .. contador)</pre>
</div>

<h2>Simulando Assembly com execute</h2>

<p>
    Com <code>execute</code> (goto) e rótulos, você pode simular programação em assembly,
    com saltos diretos e controle de fluxo de baixo nível.
</p>

<h3>Exemplo: Máquina de estados simples</h3>

<div class="code-block">
<pre><span class="comment">-- Registradores (variáveis)</span>
<span class="keyword">local</span> reg_a = <span class="number">0</span>
<span class="keyword">local</span> reg_b = <span class="number">10</span>
<span class="keyword">local</span> resultado = <span class="number">0</span>

<span class="comment">-- Programa em estilo assembly</span>
::inicio::
    <span class="function">exiba</span>(<span class="string">"REG_A: "</span> .. reg_a .. <span class="string">", REG_B: "</span> .. reg_b)
    
    <span class="comment">-- ADD: resultado = reg_a + reg_b</span>
    resultado = reg_a + reg_b
    
    <span class="comment">-- INC: incrementa reg_a</span>
    reg_a = reg_a + <span class="number">1</span>
    
    <span class="comment">-- CMP e JMP: compara e pula</span>
    <span class="keyword">se</span> reg_a < <span class="number">5</span> <span class="keyword">então</span>
        <span class="keyword">execute</span> ::inicio::  <span class="comment">-- JMP inicio</span>
    <span class="keyword">fim</span>
    
::fim::
    <span class="function">exiba</span>(<span class="string">"Resultado final: "</span> .. resultado)</pre>
</div>

<h3>Exemplo: Loop com saltos condicionais</h3>

<div class="code-block">
<pre><span class="keyword">local</span> i = <span class="number">0</span>
<span class="keyword">local</span> soma = <span class="number">0</span>

::loop_inicio::
    <span class="comment">-- Condição de saída</span>
    <span class="keyword">se</span> i >= <span class="number">10</span> <span class="keyword">então</span>
        <span class="keyword">execute</span> ::loop_fim::
    <span class="keyword">fim</span>
    
    <span class="comment">-- Corpo do loop</span>
    soma = soma + i
    i = i + <span class="number">1</span>
    
    <span class="comment">-- Volta ao início</span>
    <span class="keyword">execute</span> ::loop_inicio::

::loop_fim::
    <span class="function">exiba</span>(<span class="string">"Soma: "</span> .. soma)  <span class="comment">-- 45</span></pre>
</div>

<h3>Exemplo: Calculadora com "instruções"</h3>

<div class="code-block">
<pre><span class="keyword">local</span> acumulador = <span class="number">0</span>
<span class="keyword">local</span> operando = <span class="number">0</span>
<span class="keyword">local</span> instrucao = <span class="string">""</span>

<span class="comment">-- Programa</span>
::programa::
    instrucao = <span class="string">"LOAD"</span>
    operando = <span class="number">10</span>
    <span class="keyword">execute</span> ::executar::

::adicionar::
    instrucao = <span class="string">"ADD"</span>
    operando = <span class="number">5</span>
    <span class="keyword">execute</span> ::executar::

::multiplicar::
    instrucao = <span class="string">"MUL"</span>
    operando = <span class="number">2</span>
    <span class="keyword">execute</span> ::executar::

::mostrar::
    instrucao = <span class="string">"PRINT"</span>
    <span class="keyword">execute</span> ::executar::

::parar::
    <span class="keyword">execute</span> ::fim::

<span class="comment">-- Interpretador de instruções</span>
::executar::
    <span class="keyword">se</span> instrucao == <span class="string">"LOAD"</span> <span class="keyword">então</span>
        acumulador = operando
        <span class="keyword">execute</span> ::adicionar::
    <span class="keyword">fim</span>
    
    <span class="keyword">se</span> instrucao == <span class="string">"ADD"</span> <span class="keyword">então</span>
        acumulador = acumulador + operando
        <span class="keyword">execute</span> ::multiplicar::
    <span class="keyword">fim</span>
    
    <span class="keyword">se</span> instrucao == <span class="string">"MUL"</span> <span class="keyword">então</span>
        acumulador = acumulador * operando
        <span class="keyword">execute</span> ::mostrar::
    <span class="keyword">fim</span>
    
    <span class="keyword">se</span> instrucao == <span class="string">"PRINT"</span> <span class="keyword">então</span>
        <span class="function">exiba</span>(<span class="string">"Acumulador: "</span> .. acumulador)
        <span class="keyword">execute</span> ::parar::
    <span class="keyword">fim</span>

::fim::
<span class="comment">-- Resultado: 30 (10 + 5 = 15, 15 * 2 = 30)</span></pre>
</div>

<h2>Quando usar programação imperativa?</h2>

<ul>
    <li>✅ Scripts simples e diretos</li>
    <li>✅ Algoritmos que precisam de controle fino</li>
    <li>✅ Manipulação direta de estado</li>
    <li>✅ Prototipagem rápida</li>
    <li>⚠️ Cuidado: código imperativo puro pode ficar difícil de manter</li>
</ul>

<div class="tip-box">
    <strong>Dica:</strong> Use <code>execute</code> com moderação! É poderoso mas pode tornar o código difícil de seguir.
    Para a maioria dos casos, use estruturas de controle normais (<code>se</code>, <code>para</code>).
</div>

<div class="success-box">
    Programação imperativa em Sol é direta e poderosa. Com <code>execute</code>, você tem controle total do fluxo!
</div>

<div class="mt-4">
    <a href="?page=paradigma-procedural" class="btn btn-sol">
        Próximo: Procedural <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
