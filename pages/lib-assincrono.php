<h1>⚡ Biblioteca: Filamento</h1>
<p class="lead">Execute tarefas em paralelo sem bloquear o programa principal!</p>

<span class="emoji-big">🔄</span>

<h2>O que é programação assíncrona?</h2>
<p>
    Normalmente, seu programa executa uma linha de cada vez. Com assíncrono, você pode iniciar tarefas que rodam "ao mesmo tempo" sem esperar elas terminarem.
    Perfeito para operações que demoram, como baixar arquivos ou processar dados grandes.
</p>
<p>
    <strong>Diferença de tarefas:</strong> "Tarefas" é um conceito geral de operações assíncronas (como promises em outras linguagens).
    Esta biblioteca implementa tarefas assíncronas usando corrotinas leves, permitindo execução concorrente sem threads pesadas.
</p>

<h2>Iniciando uma tarefa assíncrona</h2>

<div class="code-block">
<pre><span class="function">filamento.tarefa</span>(<span class="keyword">função</span>()
    <span class="function">exiba</span>(<span class="string">"Esta tarefa roda em paralelo!"</span>)
    <span class="function">filamento.durma</span>(<span class="number">1000</span>)  <span class="comment">-- Espera 1 segundo</span>
    <span class="function">exiba</span>(<span class="string">"Tarefa terminou!"</span>)
<span class="keyword">fim</span>)

<span class="function">exiba</span>(<span class="string">"Programa principal continua..."</span>)</pre>
</div>

<h2>Iniciando o loop de eventos</h2>
<p>
    Para que as tarefas assíncronas sejam executadas, você precisa iniciar o loop de eventos:
</p>

<div class="code-block">
<pre><span class="function">filamento.inicie_loop</span>()</pre>
</div>

<div class="tip-box">
    O loop de eventos é como um "gerente" que coordena todas as tarefas assíncronas. Ele roda até todas as tarefas terminarem.
</div>

<h2>Exemplo: Download simulado</h2>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="string">"Iniciando downloads..."</span>)

<span class="function">filamento.tarefa</span>(<span class="keyword">função</span>()
    <span class="function">exiba</span>(<span class="string">"📥 Baixando arquivo 1..."</span>)
    <span class="function">filamento.durma</span>(<span class="number">2000</span>)
    <span class="function">exiba</span>(<span class="string">"✅ Arquivo 1 baixado!"</span>)
<span class="keyword">fim</span>)

<span class="function">filamento.tarefa</span>(<span class="keyword">função</span>()
    <span class="function">exiba</span>(<span class="string">"📥 Baixando arquivo 2..."</span>)
    <span class="function">filamento.durma</span>(<span class="number">1500</span>)
    <span class="function">exiba</span>(<span class="string">"✅ Arquivo 2 baixado!"</span>)
<span class="keyword">fim</span>)

<span class="function">exiba</span>(<span class="string">"Aguardando downloads..."</span>)
<span class="function">filamento.inicie_loop</span>()
<span class="function">exiba</span>(<span class="string">"Todos os downloads terminaram!"</span>)</pre>
</div>

<div class="warning-box">
    Lembre-se de chamar <code>filamento.inicie_loop()</code> no final para executar as tarefas!
</div>

<h2>Exemplo: Simulando tarefas com callbacks</h2>
<p>
    Embora não haja uma biblioteca "tarefa" separada, você pode simular tarefas assíncronas usando corrotinas e callbacks:
</p>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">tarefa_simulada</span>(acao, callback)
    <span class="function">filamento.tarefa</span>(<span class="keyword">função</span>()
        <span class="keyword">local</span> resultado = acao()  <span class="comment">-- Executa a ação</span>
        <span class="keyword">se</span> callback <span class="keyword">então</span>
            callback(resultado)  <span class="comment">-- Chama o callback com o resultado</span>
        <span class="keyword">fim</span>
    <span class="keyword">fim</span>)
<span class="keyword">fim</span>

<span class="comment">-- Usando</span>
<span class="function">tarefa_simulada</span>(
    <span class="keyword">função</span>() 
        <span class="function">filamento.durma</span>(<span class="number">1000</span>)
        <span class="keyword">retorne</span> <span class="string">"Download concluído!"</span> 
    <span class="keyword">fim</span>,
    <span class="keyword">função</span>(resultado) 
        <span class="function">exiba</span>(resultado) 
    <span class="keyword">fim</span>
)

<span class="function">filamento.inicie_loop</span>()</pre>
</div>

<div class="tip-box">
    Esta biblioteca fornece as ferramentas básicas. Para APIs mais avançadas como promises, você pode construir sobre ela!
</div>

<div class="success-box">
    Com assíncrono, seus programas podem fazer múltiplas coisas ao mesmo tempo!
</div>

<div class="mt-4">
    <a href="?page=corrotinas" class="btn btn-sol">
        Próximo: Corrotinas <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>