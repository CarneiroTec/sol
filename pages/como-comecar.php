<div class="container py-5">
    <h1>🚀 Como Começar</h1>
    <p class="lead">Vamos escrever seu primeiro programa em Sol! É mais fácil do que você imagina.</p>

    <h2><span class="step-number">1</span> O que é programar?</h2>
    <p>
        Programar é como dar instruções para um robô muito obediente. 
        Você escreve o que quer que ele faça, e ele faz <strong>exatamente</strong> isso!
    </p>
    
    <div class="tip-box">
        O computador não adivinha nada. Você precisa explicar cada passo, como uma receita de bolo!
    </div>

    <h2><span class="step-number">2</span> Seu primeiro programa</h2>
    <p>Todo programador começa assim. Vamos fazer o computador dizer "Olá, Mundo!":</p>
    
    <div class="code-block">
<pre><code class="language-sol">exiba("Olá, Mundo!")</code></pre>
    </div>
    
    <p>É só isso! Uma linha. Vamos entender:</p>
    <ul>
        <li><code>exiba</code> → É um comando que mostra algo na tela</li>
        <li><code>("Olá, Mundo!")</code> → O que você quer mostrar (entre aspas porque é um texto)</li>
    </ul>

    <div class="success-box">
        <strong>Parabéns!</strong> Você acabou de aprender seu primeiro comando em Sol! 🎉
    </div>

    <h2><span class="step-number">3</span> Vamos fazer contas!</h2>
    <p>O computador é ótimo em matemática. Veja:</p>
    
    <div class="code-block">
<pre><code class="language-sol">exiba(2 + 2)     -- Mostra: 4
exiba(10 * 5)    -- Mostra: 50
exiba(100 / 4)   -- Mostra: 25</code></pre>
    </div>

    <div class="tip-box">
        O símbolo <code>*</code> significa multiplicação e <code>/</code> significa divisão!
    </div>

    <h2><span class="step-number">4</span> Guardando informações</h2>
    <p>
        Às vezes, queremos guardar uma informação para usar depois. 
        Para isso, usamos <strong>variáveis</strong> - são como caixinhas com nomes!
    </p>
    
    <div class="code-block">
<pre><code class="language-sol">local nome = "Maria"
local idade = 10

exiba("Olá, " .. nome)
exiba("Você tem " .. idade .. " anos!")</code></pre>
    </div>

    <p>Resultado na tela:</p>
    <div class="code-block" style="background: #1a1a2e;">
<pre>Olá, Maria
Você tem 10 anos!</pre>
    </div>

    <h2><span class="step-number">5</span> Próximos passos</h2>
    <p>Você já sabe o básico! Agora escolha o que quer aprender:</p>
    
    <div class="row g-3 mt-3">
        <div class="col-md-4">
            <a href="?page=variaveis" class="text-decoration-none">
                <div class="feature-card text-center">
                    <i class="bi bi-box-fill"></i>
                    <h4>Variáveis</h4>
                    <p class="text-secondary mb-0">Aprenda a guardar informações</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="?page=condicionais" class="text-decoration-none">
                <div class="feature-card text-center">
                    <i class="bi bi-signpost-split-fill"></i>
                    <h4>Condicionais</h4>
                    <p class="text-secondary mb-0">Faça o programa tomar decisões</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="?page=repeticoes" class="text-decoration-none">
                <div class="feature-card text-center">
                    <i class="bi bi-arrow-repeat"></i>
                    <h4>Repetições</h4>
                    <p class="text-secondary mb-0">Repita ações automaticamente</p>
                </div>
            </a>
        </div>
    </div>
</div>
