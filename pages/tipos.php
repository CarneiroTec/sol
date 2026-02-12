<h1>🚀 Tipos de Dados</h1>
<p class="lead">Assim como no mundo real, no Sol existem diferentes tipos de coisas!</p>

<h2>O que são tipos?</h2>
<p>
    Pense assim: você não guarda água numa caixa de papelão, certo? 
    Cada coisa tem seu lugar. No Sol, cada informação tem seu <strong>tipo</strong>.
</p>

<h2>Os tipos básicos</h2>

<div class="row g-4 mt-3">
    <div class="col-md-6">
        <div class="type-card">
            <h3><i class="bi bi-123 text-danger me-2"></i>Número</h3>
            <p class="text-secondary">Para contas e quantidades</p>
            <div class="code-block">
<pre><span class="keyword">local</span> idade = <span class="number">10</span>
<span class="keyword">local</span> altura = <span class="number">1.65</span>
<span class="keyword">local</span> temperatura = -<span class="number">5</span></pre>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="type-card">
            <h3><i class="bi bi-chat-quote text-success me-2"></i>Texto</h3>
            <p class="text-secondary">Para palavras e frases (sempre com aspas!)</p>
            <div class="code-block">
<pre><span class="keyword">local</span> nome = <span class="string">"Maria"</span>
<span class="keyword">local</span> frase = <span class="string">"Olá, mundo!"</span></pre>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="type-card">
            <h3><i class="bi bi-toggle-on text-info me-2"></i>Lógico</h3>
            <p class="text-secondary">Sim ou Não (verdadeiro ou falso)</p>
            <div class="code-block">
<pre><span class="keyword">local</span> esta_sol = <span class="keyword">verdadeiro</span>
<span class="keyword">local</span> ta_frio = <span class="keyword">falso</span></pre>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="type-card">
            <h3><i class="bi bi-x-circle text-secondary me-2"></i>Nulo</h3>
            <p class="text-secondary">Quando não tem nada (vazio)</p>
            <div class="code-block">
<pre><span class="keyword">local</span> nada = <span class="keyword">nulo</span></pre>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="type-card">
            <h3><i class="bi bi-braces text-primary me-2"></i>Função</h3>
            <p class="text-secondary">Funções são valores! Podem ser guardadas em variáveis.</p>
            <div class="code-block">
<pre><span class="keyword">local</span> dobro = <span class="keyword">função</span>(x) 
    <span class="keyword">retorne</span> x * <span class="number">2</span> 
<span class="keyword">fim</span>
<span class="function">exiba</span>(<span class="function">dobro</span>(<span class="number">5</span>))  <span class="comment">-- 10</span></pre>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="type-card">
            <h3><i class="bi bi-table text-warning me-2"></i>Tabela</h3>
            <p class="text-secondary">Listas e dicionários</p>
            <div class="code-block">
<pre><span class="keyword">local</span> lista = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>}
<span class="keyword">local</span> pessoa = {nome=<span class="string">"Ana"</span>}</pre>
            </div>
        </div>
    </div>
</div>

<h2>Tipos Avançados</h2>

<div class="row g-4 mt-3">
    <div class="col-md-6">
        <div class="type-card border-info">
            <h3><i class="bi bi-person-walking text-info me-2"></i>Corrotina</h3>
            <p class="text-secondary">Uma função que pode pausar e continuar</p>
            <div class="code-block">
<pre><span class="keyword">local</span> co = <span class="function">corrotina.crie</span>(<span class="keyword">função</span>()
    <span class="function">exiba</span>(<span class="string">"Olá!"</span>)
<span class="keyword">fim</span>)</pre>
            </div>
            <p class="small text-muted mt-2">Veja mais em <a href="?page=corrotinas">Corrotinas</a></p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="type-card border-warning">
            <h3><i class="bi bi-box-seam text-warning me-2"></i>Objeto Externo</h3>
            <p class="text-secondary">Dados criados em CTEC (ponteiros opacos)</p>
            <div class="code-block">
<pre><span class="comment">-- Exemplo: arquivo aberto</span>
<span class="keyword">local</span> arq = <span class="function">terminal.abra</span>(<span class="string">"x.txt"</span>)
<span class="function">exiba</span>(<span class="function">obtenha_tipo</span>(arq))
<span class="comment">-- Mostra: objeto externo</span></pre>
            </div>
        </div>
    </div>
</div>

<div class="tip-box">
    <strong>Objeto Externo</strong> aparece quando você usa bibliotecas que criam objetos especiais, 
    como arquivos abertos, conexões de banco de dados ou janelas gráficas. 
    Você não precisa entender como funcionam por dentro, apenas como usar!
</div>

<h2>Descobrindo o tipo</h2>
<p>Quer saber que tipo é uma variável? Use <code>obtenha_tipo</code>:</p>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="function">obtenha_tipo</span>(<span class="number">42</span>))          <span class="comment">-- número</span>
<span class="function">exiba</span>(<span class="function">obtenha_tipo</span>(<span class="string">"Sol"</span>))       <span class="comment">-- texto</span>
<span class="function">exiba</span>(<span class="function">obtenha_tipo</span>(<span class="keyword">verdadeiro</span>)) <span class="comment">-- lógico</span>
<span class="function">exiba</span>(<span class="function">obtenha_tipo</span>({<span class="number">1</span>,<span class="number">2</span>,<span class="number">3</span>}))    <span class="comment">-- tabela</span>
<span class="function">exiba</span>(<span class="function">obtenha_tipo</span>(<span class="function">exiba</span>))      <span class="comment">-- função</span></pre>
</div>

<h2>Conversão de tipos</h2>
<p>Às vezes você precisa transformar um tipo em outro:</p>

<div class="code-block">
<pre><span class="comment">-- Número para texto</span>
<span class="keyword">local</span> idade = <span class="number">10</span>
<span class="keyword">local</span> texto_idade = <span class="function">converta_para_texto</span>(idade)
<span class="function">exiba</span>(<span class="string">"Tenho "</span> .. texto_idade .. <span class="string">" anos"</span>)

<span class="comment">-- Texto para número</span>
<span class="keyword">local</span> numero_texto = <span class="string">"42"</span>
<span class="keyword">local</span> numero = <span class="function">converta_para_número</span>(numero_texto)
<span class="function">exiba</span>(numero + <span class="number">8</span>)   <span class="comment">-- 50</span></pre>
</div>

<h2>Exemplo prático: Validando entrada do usuário</h2>
<p>
    Quando você lê entrada do terminal, ela sempre vem como texto. 
    Use <code>obtenha_tipo</code> para verificar o tipo e <code>converta_para_número</code> para tentar transformar em número.
</p>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="string">"Digite algo:"</span>)
<span class="keyword">local</span> entrada = <span class="function">terminal.leia</span>()

<span class="comment">-- Verifica o tipo da entrada</span>
<span class="keyword">local</span> tipo = <span class="function">obtenha_tipo</span>(entrada)
<span class="function">exiba</span>(<span class="string">"Tipo da entrada: "</span> .. tipo)  <span class="comment">-- Sempre "texto"</span>

<span class="comment">-- Tenta converter para número</span>
<span class="keyword">local</span> numero = <span class="function">converta_para_número</span>(entrada)

<span class="keyword">se</span> numero <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"É um número válido: "</span> .. numero)
<span class="keyword">fim</span>

<span class="keyword">se</span> <span class="keyword">não</span> numero <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Não é um número, é texto: "</span> .. entrada)
<span class="keyword">fim</span></pre>
</div>

<div class="tip-box">
    <code>converta_para_número</code> retorna <code>nulo</code> se não conseguir converter. Use isso para validar entradas numéricas!
</div>

<h2>Exemplo: Calculadora com validação</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">leia_numero</span>(mensagem)
    <span class="function">exiba</span>(mensagem)
    <span class="keyword">local</span> entrada = <span class="function">terminal.leia</span>()
    <span class="keyword">local</span> numero = <span class="function">converta_para_número</span>(entrada)
    
    <span class="keyword">se</span> numero <span class="keyword">então</span>
        <span class="keyword">retorne</span> numero
    <span class="keyword">fim</span>

    <span class="function">exiba</span>(<span class="string">"Erro: Digite um número válido!"</span>)
    <span class="keyword">retorne</span> <span class="function">leia_numero</span>(mensagem)  <span class="comment">-- Tenta novamente</span>
<span class="keyword">fim</span>

<span class="keyword">local</span> a = <span class="function">leia_numero</span>(<span class="string">"Primeiro número:"</span>)
<span class="keyword">local</span> b = <span class="function">leia_numero</span>(<span class="string">"Segundo número:"</span>)

<span class="function">exiba</span>(<span class="string">"Soma: "</span> .. (a + b))</pre>
</div>

<div class="success-box">
    Você agora conhece todos os tipos de dados do Sol e como trabalhar com eles de forma segura!
</div>

<div class="mt-4">
    <a href="?page=condicionais" class="btn btn-sol">
        Próximo: Condicionais <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>






