<h1>🔀 Biblioteca: Paralelismo</h1>
<p class="lead">Execute código em processos separados para máxima performance!</p>

<span class="emoji-big">⚡</span>

<h2>O que é paralelismo?</h2>
<p>
    A biblioteca de paralelismo permite criar threads reais (workers) do sistema operacional.
    Diferente de corrotinas (que rodam na mesma thread), o paralelismo usa múltiplos núcleos da CPU.
    Cada "worker" tem seu próprio estado Lua/Sol isolado e se comunica via canais.
</p>

<div class="alert alert-warning">
    <strong>Atenção:</strong> Como cada worker é isolado, variáveis globais não são compartilhadas. Use canais para comunicação.
</div>

<h2>Funções Disponíveis</h2>

<div class="api-item">
    <h3 class="api-signature">paralelismo.execute (script, [args...])</h3>
    <div class="api-description">
        <p>Inicia uma nova thread (worker) executando o script fornecido.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>script</code>: Texto - O código Sol a ser executado.</li>
                    <li><code>args</code>: Variável (opcional) - Argumentos passados para o script (recebidos via `...`).</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Verdadeiro se iniciou com sucesso.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">paralelismo.execute([[
    exiba("Olá de outra thread!")
]])</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">paralelismo.canal ()</h3>
    <div class="api-description">
        <p>Cria um novo canal de comunicação thread-safe.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Um objeto Canal (userdata).</p>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">paralelismo.envie (canal, mensagem)</h3>
    <div class="api-description">
        <p>Envia uma mensagem (texto) para um canal. Bloqueia se o canal estiver cheio (embora a implementação atual pareça ter buffer fixo).</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>canal</code>: Canal - O canal destino.</li>
                    <li><code>mensagem</code>: Texto - A mensagem a enviar.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">paralelismo.envie(canal, "Dados prontos")</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">paralelismo.receba (canal)</h3>
    <div class="api-description">
        <p>Recebe uma mensagem de um canal. Bloqueia a execução até que haja dados disponíveis.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>canal</code>: Canal - O canal de onde receber.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Texto com a mensagem recebida.</p>
            </div>
        </div>
    </div>
</div>

<h2>Exemplo Completo: Produtor-Consumidor</h2>

<div class="code-block">
<pre><code class="language-lua">-- Cria canal de comunicação
local canal = paralelismo.canal()

-- Inicia worker (Consumidor)
paralelismo.execute([[
    local c = ... -- Recebe o canal como argumento
    enquanto verdadeiro faça
        local msg = paralelismo.receba(c)
        exiba("[Worker] Processando: " .. msg)
        se msg == "FIM" então pare fim
    fim
    exiba("[Worker] Encerrando...")
]], canal)

-- Thread principal (Produtor)
exiba("[Main] Enviando tarefas...")
paralelismo.envie(canal, "Tarefa 1")
paralelismo.envie(canal, "Tarefa 2")
paralelismo.envie(canal, "Tarefa 3")
paralelismo.envie(canal, "FIM")

exiba("[Main] Tudo enviado!")</code></pre>
</div>

<div class="success-box">
    Use paralelismo para tarefas pesadas de CPU, como processamento de imagem, cálculos matemáticos complexos, etc.
</div>

<div class="mt-4">
    <a href="?page=canais" class="btn btn-sol">
        Próximo: Canais (Go-style) <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>