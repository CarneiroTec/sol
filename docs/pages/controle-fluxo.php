<h1>🚀 Controle de Fluxo</h1>
<p class="lead">Pule diretamente para outras partes do código usando rótulos!</p>

<span class="emoji-big">🚀</span>

<h2>O que é controle de fluxo?</h2>
<p>
    Às vezes você quer pular diretamente para outra parte do código, 
    sem usar condicionais ou loops. Para isso, usamos <strong>rótulos</strong> e o comando <code>execute</code>.
</p>

<h2>Rótulos (Marcadores)</h2>
<p>Rótulos são como placas sinalizadoras no seu código:</p>

<div class="code-block">
<pre><code class="language-sol">::nome_do_rotulo::
-- Qualquer código aqui...</code></pre>
</div>

<div class="tip-box">
    Rótulos ficam entre dois pares de dois-pontos <code>::nome::</code>
</div>

<h2>execute (goto)</h2>
<p>O comando <code>execute</code> pula para um rótulo:</p>

<div class="code-block">
<pre><code class="language-sol">exiba("Início")

execute ::fim::

exiba("Isso nunca aparece")  -- Pulado!

::fim::
exiba("Fim")</code></pre>
</div>

<p>Resultado:</p>
<div class="code-block" style="background: #1a1a2e;">
<pre>Início
Fim</pre>
</div>

<h2>Exemplo: Loop com execute</h2>
<p>Você pode criar loops usando rótulos:</p>

<div class="code-block">
<pre><code class="language-sol">local contador = 0

::loop::
    contador = contador + 1
    exiba(contador)
    
    se contador < 5 então
        execute ::loop::
    fim

exiba("Fim!")</code></pre>
</div>

<p>Resultado: 1, 2, 3, 4, 5, Fim!</p>

<h2>Exemplo: Menu interativo</h2>

<div class="code-block">
<pre><code class="language-sol">::menu::
exiba("===== MENU =====")
exiba("1. Jogar")
exiba("2. Opções")
exiba("3. Sair")

local escolha = 2  -- Simulando entrada

se escolha == 1 então
    exiba("Iniciando jogo...")
    execute ::menu::
fim

se escolha == 2 então
    exiba("Abrindo opções...")
    execute ::menu::
fim

se escolha == 3 então
    exiba("Tchau!")
fim</code></pre>
</div>

<h2>Exemplo: Pular código de erro</h2>

<div class="code-block">
<pre><code class="language-sol">local sucesso = falso

se não sucesso então
    exiba("Algo deu errado!")
    execute ::limpar::
fim

exiba("Processamento normal...")

::limpar::
exiba("Limpando recursos...")</code></pre>
</div>

<div class="warning-box">
    Use <code>execute</code> com moderação! Muitos desvios deixam o código difícil de entender. 
    Prefira loops (<code>para</code>) quando possível.
</div>

<h2>Quando usar execute?</h2>
<ul>
    <li>✅ Sair de loops aninhados profundos</li>
    <li>✅ Pular para código de limpeza/encerramento</li>
    <li>✅ Máquinas de estado simples</li>
    <li>❌ Substituir loops normais</li>
    <li>❌ Substituir funções</li>
</ul>

<div class="success-box">
    Rótulos e execute são Úteis em casos específicos, mas use com cuidado!
</div>

<div class="mt-4">
    <a href="?page=repeticoes" class="btn btn-sol">
        Próximo: Repetições <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>





