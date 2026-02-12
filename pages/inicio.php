<section class="hero">
        <div class="container">
            <h1 class="display-1 fw-bold mb-4">Sol</h1>
            <p class="lead mb-5">Uma linguagem de programação moderna, brasileira e completa.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="?page=como-comecar" class="btn btn-sol btn-lg rounded-pill"><i class="bi bi-book-fill me-2"></i>Aprender</a>
                <a href="https://github.com/sol-lang" target="_blank" class="btn btn-outline-light btn-lg rounded-pill"><i class="bi bi-github me-2"></i>GitHub</a>
            </div>
        </div>
    </section>

    <div class="container my-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <i class="bi bi-lightning-charge-fill"></i>
                    <h3>Síncrona &amp; Assíncrona</h3>
                    <p class="text-secondary">Corrotinas, Assíncrono, Canais e Paralelismo. Escolha a ferramenta certa para cada desafio.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <i class="bi bi-translate"></i>
                    <h3>Em Português</h3>
                    <p class="text-secondary">Sintaxe 100% em português. Palavras-chave intuitivas como <code>se</code>, <code>faça</code>, <code>função</code>.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <i class="bi bi-cpu-fill"></i>
                    <h3>Controle Total</h3>
                    <p class="text-secondary">Gerenciamento de memória eficiente e tipagem dinâmica forte.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <h2 class="text-center mb-5">Sintaxe Elegante</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="code-block">
<pre><code class="language-sol">-- Exemplo de Concorrência
local canal = canal.novo()

tarefa.nova(função()
    sistema.durma(1000)
    canal:envie("Olá do Futuro!")
fim)

exiba("Esperando...")
local msg = canal:receba()
exiba(msg)</code></pre>
                </div>
            </div>
        </div>
    </div>
