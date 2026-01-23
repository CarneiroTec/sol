<div class="container">
    <h1 class="mb-4"><i class="bi bi-diagram-2 me-2"></i>Concorrência e Paralelismo</h1>
    <p class="lead text-secondary">A Sol implementa a "Trindade da Concorrência", oferecendo as ferramentas exatas para cada problema.</p>

    <section class="mt-5">
        <h2>Qual Escolher?</h2>
        <div class="table-responsive">
            <table class="table table-dark table-hover border border-secondary">
                <thead class="table-active">
                    <tr>
                        <th>Ferramenta</th>
                        <th>Tipo de Execução</th>
                        <th>Cenário Ideal</th>
                        <th>Memária</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong class="text-info">Corrotina</strong></td>
                        <td>Cooperativa (Pausa/Retoma)</td>
                        <td>Máquinas de estado, Iteradores.</td>
                        <td>Compartilhada</td>
                    </tr>
                    <tr>
                        <td><strong class="text-success">Tarefa</strong></td>
                        <td>Assíncrona (Event Loop)</td>
                        <td>I/O (Rede, Arquivo).</td>
                        <td>Compartilhada</td>
                    </tr>
                    <tr>
                        <td><strong class="text-danger">Processo</strong></td>
                        <td>Paralela (Multi-core)</td>
                        <td>Cálculos pesados, CPU Bound.</td>
                        <td>ISOLADA</td>
                    </tr>
                    <tr>
                        <td><strong class="text-warning">Canal</strong></td>
                        <td>Sincronização</td>
                        <td>Troca de mensagens.</td>
                        <td>Bufferizada</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mt-5">
        <div class="row g-4">
            <div class="col-lg-6">
                <h3><i class="bi bi-person-walking text-info me-2"></i>Corrotinas</h3>
                <p>Pausam e retomam na mesma thread.</p>
                <div class="code-block">
<pre><span class="keyword">local</span> co = <span class="function">corrotina.crie</span>(<span class="keyword">função</span>()
    <span class="function">exiba</span>(<span class="string">"Passo 1"</span>)
    <span class="function">corrotina.ceda</span>()
    <span class="function">exiba</span>(<span class="string">"Passo 2"</span>)
<span class="keyword">fim</span>)

<span class="function">corrotina.retome</span>(co) <span class="comment">-- Passo 1</span>
<span class="function">corrotina.retome</span>(co) <span class="comment">-- Passo 2</span></pre>
                </div>
            </div>

            <div class="col-lg-6">
                <h3><i class="bi bi-clock-history text-success me-2"></i>Tarefas</h3>
                <p>Ideais para operações I/O sem travar.</p>
                <div class="code-block">
<pre><span class="keyword">local</span> t = <span class="function">tarefa.nova</span>(<span class="keyword">função</span>()
    <span class="function">sistema.durma</span>(<span class="number">2000</span>)
    <span class="keyword">retorne</span> <span class="string">"Download Concluído"</span>
<span class="keyword">fim</span>)

<span class="function">t:então</span>(<span class="keyword">função</span>(res)
    <span class="function">exiba</span>(res)
<span class="keyword">fim</span>)</pre>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <h2 class="text-danger border-bottom border-danger pb-2">Paralelismo Real</h2>
        <p>Threads reais do SO, memória isolada. Use Canais para comunicação.</p>

        <div class="code-block mt-3">
<pre><span class="keyword">local</span> canal_jobs = <span class="function">paralelismo.canal</span>()
<span class="keyword">local</span> canal_resultados = <span class="function">paralelismo.canal</span>()

<span class="keyword">para</span> i = <span class="number">1</span>, <span class="number">4</span> <span class="keyword">faça</span>
    <span class="comment">-- 'execute' é palavra reservada, usamos strings</span>
    <span class="function">paralelismo</span>[<span class="string">"execute"</span>](<span class="string">[[
        local canal_in = ...
        ::aguarde::
            local job = paralelismo.receba(canal_in)
            -- Lógica do worker aqui
            -- (Comunicação de volta requer outro canal passado)
            execute aguarde
    ]]</span>, canal_jobs)
<span class="keyword">fim</span>


