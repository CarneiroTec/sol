<h1>🚀 Canais</h1>
<p class="lead">Comunicação segura entre Paralelismo, Assíncrono e Corrotinas!</p>

<span class="emoji-big">🚀</span>

<div class="warning-box">
    Esta É uma seção <strong>avançada</strong>. Canais são usados com Paralelismo e Assíncrono.
</div>

<h2>O que são canais?</h2>
<p>
    Canais são como tubos de mensagem. Você coloca algo de um lado, 
    e sai do outro lado! Perfeito para processos conversarem.
</p>

<h2>Criando um canal</h2>

<div class="code-block">
<pre><span class="keyword">local</span> meu_canal = <span class="function">canal.novo</span>()</pre>
</div>

<h2>Enviando e recebendo</h2>

<div class="code-block">
<pre><span class="keyword">local</span> c = <span class="function">canal.novo</span>()

<span class="comment">-- Em um processo/tarefa:</span>
<span class="function">c:envie</span>(<span class="string">"Olá!"</span>)
<span class="function">c:envie</span>(<span class="number">42</span>)
<span class="function">c:envie</span>({nome = <span class="string">"Sol"</span>})

<span class="comment">-- Em outro lugar:</span>
<span class="keyword">local</span> msg1 = <span class="function">c:receba</span>()   <span class="comment">-- "Olá!"</span>
<span class="keyword">local</span> msg2 = <span class="function">c:receba</span>()   <span class="comment">-- 42</span>
<span class="keyword">local</span> msg3 = <span class="function">c:receba</span>()   <span class="comment">-- {nome = "Sol"}</span></pre>
</div>

<div class="tip-box">
    <code>:receba()</code> <strong>espera</strong> até haver uma mensagem. O programa pausa até chegar algo!
</div>

<h2>Canal com buffer</h2>
<p>Você pode criar um canal que guarda várias mensagens:</p>

<div class="code-block">
<pre><span class="comment">-- Canal que guarda até 10 mensagens</span>
<span class="keyword">local</span> c = <span class="function">canal.novo</span>(<span class="number">10</span>)

<span class="comment">-- Pode enviar várias sem ninguém receber ainda</span>
<span class="function">c:envie</span>(<span class="string">"Msg 1"</span>)
<span class="function">c:envie</span>(<span class="string">"Msg 2"</span>)
<span class="function">c:envie</span>(<span class="string">"Msg 3"</span>)</pre>
</div>

<h2>Padrão Produtor-Consumidor</h2>

<div class="code-block">
<pre><span class="keyword">local</span> canal_trabalhos = <span class="function">canal.novo</span>()
<span class="keyword">local</span> canal_resultados = <span class="function">canal.novo</span>()

<span class="comment">-- Trabalhador (em outro processo)</span>
<span class="function">processo.novo</span>(<span class="keyword">função</span>()
    <span class="label">::aguarde::</span>
        <span class="keyword">local</span> trabalho = <span class="function">canal_trabalhos:receba</span>()
        <span class="keyword">local</span> resultado = trabalho * <span class="number">2</span>
        <span class="function">canal_resultados:envie</span>(resultado)
        <span class="keyword">execute</span> aguarde
<span class="keyword">fim</span>)

<span class="comment">-- Enviando trabalhos</span>
<span class="function">canal_trabalhos:envie</span>(<span class="number">10</span>)
<span class="function">canal_trabalhos:envie</span>(<span class="number">20</span>)

<span class="comment">-- Recebendo resultados</span>
<span class="function">exiba</span>(<span class="function">canal_resultados:receba</span>())  <span class="comment">-- 20</span>
<span class="function">exiba</span>(<span class="function">canal_resultados:receba</span>())  <span class="comment">-- 40</span></pre>
</div>

<h2>Exemplo: Chat simples</h2>

<div class="code-block">
<pre><span class="keyword">local</span> mensagens = <span class="function">canal.novo</span>(<span class="number">100</span>)

<span class="comment">-- Quem envia</span>
<span class="keyword">função</span> <span class="function">enviar</span>(usuario, texto)
    <span class="function">mensagens:envie</span>({
        de = usuario,
        texto = texto,
        hora = <span class="function">sistema_operacional.data</span>(<span class="string">"%H:%M"</span>)
    })
<span class="keyword">fim</span>

<span class="comment">-- Quem recebe</span>
<span class="keyword">função</span> <span class="function">exibir_mensagens</span>()
    <span class="keyword">local</span> msg = <span class="function">mensagens:receba</span>()
    <span class="function">exiba</span>(<span class="string">"["</span> .. msg.hora .. <span class="string">"] "</span> .. msg.de .. <span class="string">": "</span> .. msg.texto)
<span class="keyword">fim</span>

<span class="function">enviar</span>(<span class="string">"Ana"</span>, <span class="string">"Olá!"</span>)
<span class="function">exibir_mensagens</span>()  <span class="comment">-- [11:36] Ana: Olá!</span></pre>
</div>

<div class="success-box">
    Canais tornam a comunicação entre partes do seu programa segura e organizada!
</div>

<div class="mt-4 text-center">
    <p class="text-secondary">🚀 Parabéns! Você completou toda a documentação do Sol!</p>
    <a href="?page=inicio" class="btn btn-sol btn-lg">
        <i class="bi bi-house me-2"></i>Voltar ao Início
    </a>
</div>




