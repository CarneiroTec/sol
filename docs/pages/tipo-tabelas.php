<h1>📋 Tabelas</h1>
<p class="lead">Estruturas de dados versáteis - use como arrays, dicionários ou objetos!</p>

<span class="emoji-big">📦</span>

<h2>O que são tabelas?</h2>
<p>
    Tabelas são a ÚNICA estrutura de dados em Sol. Elas podem ser usadas como:
</p>
<ul>
    <li><strong>Arrays</strong>: Listas ordenadas [1, 2, 3]</li>
    <li><strong>Dicionários</strong>: Pares chave-valor {nome="Ana", idade=15}</li>
    <li><strong>Objetos</strong>: Com métodos e propriedades</li>
</ul>

<h2>Criando tabelas</h2>

<h3>Array (lista)</h3>
<div class="code-block">
<pre><span class="keyword">local</span> frutas = {<span class="string">"Maçã"</span>, <span class="string">"Banana"</span>, <span class="string">"Uva"</span>}
<span class="function">exiba</span>(frutas[<span class="number">1</span>])  <span class="comment">-- "Maçã" (índices começam em 1!)</span>
<span class="function">exiba</span>(frutas[<span class="number">2</span>])  <span class="comment">-- "Banana"</span></pre>
</div>

<h3>Dicionário (chave-valor)</h3>
<div class="code-block">
<pre><span class="keyword">local</span> pessoa = {
    nome = <span class="string">"João"</span>,
    idade = <span class="number">15</span>,
    cidade = <span class="string">"São Paulo"</span>
}
<span class="function">exiba</span>(pessoa.nome)   <span class="comment">-- "João"</span>
<span class="function">exiba</span>(pessoa[<span class="string">"idade"</span>])  <span class="comment">-- 15 (acesso alternativo)</span></pre>
</div>

<h3>Tabela mista</h3>
<div class="code-block">
<pre><span class="keyword">local</span> mista = {
    <span class="string">"primeiro"</span>,  <span class="comment">-- índice 1</span>
    <span class="string">"segundo"</span>,   <span class="comment">-- índice 2</span>
    nome = <span class="string">"Tabela"</span>,
    valor = <span class="number">42</span>
}</pre>
</div>

<h2>Acessar e modificar</h2>

<div class="code-block">
<pre><span class="keyword">local</span> dados = {<span class="number">10</span>, <span class="number">20</span>, <span class="number">30</span>}

<span class="comment">-- Ler</span>
<span class="function">exiba</span>(dados[<span class="number">1</span>])  <span class="comment">-- 10</span>

<span class="comment">-- Modificar</span>
dados[<span class="number">1</span>] = <span class="number">100</span>
<span class="function">exiba</span>(dados[<span class="number">1</span>])  <span class="comment">-- 100</span>

<span class="comment">-- Adicionar novo</span>
dados[<span class="number">4</span>] = <span class="number">40</span>
dados.novo = <span class="string">"valor"</span></pre>
</div>

<h2>Tamanho da tabela</h2>

<div class="code-block">
<pre><span class="keyword">local</span> lista = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>}
<span class="function">exiba</span>(#lista)  <span class="comment">-- 5</span></pre>
</div>

<h2>Biblioteca Tabela</h2>

<h3>Criar tabela com tamanho pré-alocado</h3>

<div class="code-block">
<pre><span class="comment">-- Criar tabela otimizada (sequencial, hash)</span>
<span class="keyword">local</span> t = <span class="function">tabela.crie</span>(<span class="number">100</span>, <span class="number">10</span>)  <span class="comment">-- 100 elementos array, 10 hash</span></pre>
</div>

<h3>Inserir elementos</h3>

<div class="code-block">
<pre><span class="keyword">local</span> lista = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>}

<span class="comment">-- Inserir no final</span>
<span class="function">tabela.insira</span>(lista, <span class="number">4</span>)
<span class="comment">-- lista = {1, 2, 3, 4}</span>

<span class="comment">-- Inserir em posição específica</span>
<span class="function">tabela.insira</span>(lista, <span class="number">2</span>, <span class="number">99</span>)
<span class="comment">-- lista = {1, 99, 2, 3, 4}</span></pre>
</div>

<h3>Remover elementos</h3>

<div class="code-block">
<pre><span class="keyword">local</span> lista = {<span class="number">10</span>, <span class="number">20</span>, <span class="number">30</span>, <span class="number">40</span>}

<span class="comment">-- Remover do final</span>
<span class="keyword">local</span> removido = <span class="function">tabela.remova</span>(lista)
<span class="function">exiba</span>(removido)  <span class="comment">-- 40</span>

<span class="comment">-- Remover de posição específica</span>
<span class="keyword">local</span> removido = <span class="function">tabela.remova</span>(lista, <span class="number">2</span>)
<span class="function">exiba</span>(removido)  <span class="comment">-- 20</span></pre>
</div>

<h3>Concatenar elementos</h3>

<div class="code-block">
<pre><span class="keyword">local</span> palavras = {<span class="string">"Sol"</span>, <span class="string">"é"</span>, <span class="string">"legal"</span>}
<span class="keyword">local</span> frase = <span class="function">tabela.concatene</span>(palavras, <span class="string">" "</span>)
<span class="function">exiba</span>(frase)  <span class="comment">-- "Sol é legal"</span>

<span class="keyword">local</span> numeros = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>}
<span class="function">exiba</span>(<span class="function">tabela.concatene</span>(numeros, <span class="string">", "</span>))  <span class="comment">-- "1, 2, 3"</span></pre>
</div>

<h3>Ordenar tabela</h3>

<div class="code-block">
<pre><span class="keyword">local</span> numeros = {<span class="number">5</span>, <span class="number">2</span>, <span class="number">8</span>, <span class="number">1</span>, <span class="number">9</span>}
<span class="function">tabela.ordene</span>(numeros)
<span class="comment">-- numeros = {1, 2, 5, 8, 9}</span>

<span class="comment">-- Ordenar com função customizada (decrescente)</span>
<span class="function">tabela.ordene</span>(numeros, <span class="keyword">função</span>(a, b) <span class="keyword">retorne</span> a > b <span class="keyword">fim</span>)
<span class="comment">-- numeros = {9, 8, 5, 2, 1}</span></pre>
</div>

<h3>Empacotar e desempacotar</h3>

<div class="code-block">
<pre><span class="comment">-- Empacotar valores em tabela</span>
<span class="keyword">local</span> t = <span class="function">tabela.empacote</span>(<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>)
<span class="comment">-- t = {1, 2, 3, 4, n=4}</span>

<span class="comment">-- Desempacotar tabela em valores</span>
<span class="function">exiba</span>(<span class="function">tabela.desempacote</span>(t))  <span class="comment">-- 1, 2, 3, 4</span>
<span class="function">exiba</span>(<span class="function">tabela.desempacote</span>(t, <span class="number">2</span>, <span class="number">3</span>))  <span class="comment">-- 2, 3 (intervalo)</span></pre>
</div>

<h3>Mover elementos</h3>

<div class="code-block">
<pre><span class="keyword">local</span> origem = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>}
<span class="keyword">local</span> destino = {<span class="number">10</span>, <span class="number">20</span>, <span class="number">30</span>}

<span class="comment">-- Mover elementos 2-4 de origem para posição 2 de destino</span>
<span class="function">tabela.mova</span>(origem, <span class="number">2</span>, <span class="number">4</span>, <span class="number">2</span>, destino)
<span class="comment">-- destino = {10, 2, 3, 4, 30}</span></pre>
</div>

<h2>Iterar sobre tabelas</h2>

<h3>Array (com índices numéricos)</h3>

<div class="code-block">
<pre><span class="keyword">local</span> frutas = {<span class="string">"Maçã"</span>, <span class="string">"Banana"</span>, <span class="string">"Uva"</span>}

<span class="keyword">para</span> indice, fruta <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(frutas) <span class="keyword">faça</span>
    <span class="function">exiba</span>(indice, fruta)
<span class="keyword">fim</span>
<span class="comment">-- 1 Maçã</span>
<span class="comment">-- 2 Banana</span>
<span class="comment">-- 3 Uva</span></pre>
</div>

<h3>Dicionário (todas as chaves)</h3>

<div class="code-block">
<pre><span class="keyword">local</span> pessoa = {nome=<span class="string">"Ana"</span>, idade=<span class="number">15</span>, cidade=<span class="string">"Rio"</span>}

<span class="keyword">para</span> chave, valor <span class="keyword">em</span> <span class="function">obtenha_pares</span>(pessoa) <span class="keyword">faça</span>
    <span class="function">exiba</span>(chave, valor)
<span class="keyword">fim</span></pre>
</div>

<h2>Metamétodos para Tabelas</h2>

<p>Metamétodos permitem customizar o comportamento de tabelas:</p>

<h3>__índice - Valores padrão</h3>

<div class="code-block">
<pre><span class="keyword">local</span> padroes = {cor = <span class="string">"azul"</span>, tamanho = <span class="string">"médio"</span>}
<span class="keyword">local</span> config = {tamanho = <span class="string">"grande"</span>}

<span class="function">defina_metatabela</span>(config, {__índice = padroes})

<span class="function">exiba</span>(config.tamanho)  <span class="comment">-- "grande" (tem na tabela)</span>
<span class="function">exiba</span>(config.cor)      <span class="comment">-- "azul" (busca no padrão)</span></pre>
</div>

<h3>__comprimento - Tamanho customizado</h3>

<div class="code-block">
<pre><span class="keyword">local</span> tabela_especial = {a=<span class="number">1</span>, b=<span class="number">2</span>, c=<span class="number">3</span>}

<span class="function">defina_metatabela</span>(tabela_especial, {
    __comprimento = <span class="keyword">função</span>(t)
        <span class="keyword">local</span> count = <span class="number">0</span>
        <span class="keyword">para</span> _ <span class="keyword">em</span> <span class="function">obtenha_pares</span>(t) <span class="keyword">faça</span>
            count = count + <span class="number">1</span>
        <span class="keyword">fim</span>
        <span class="keyword">retorne</span> count
    <span class="keyword">fim</span>
})

<span class="function">exiba</span>(#tabela_especial)  <span class="comment">-- 3</span></pre>
</div>

<h3>__soma - Somar tabelas</h3>

<div class="code-block">
<pre><span class="keyword">local</span> Vetor = {}
Vetor.__índice = Vetor

<span class="keyword">função</span> <span class="function">Vetor.novo</span>(x, y)
    <span class="keyword">retorne</span> <span class="function">defina_metatabela</span>({x=x, y=y}, Vetor)
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">Vetor.__soma</span>(a, b)
    <span class="keyword">retorne</span> <span class="function">Vetor.novo</span>(a.x + b.x, a.y + b.y)
<span class="keyword">fim</span>

<span class="keyword">local</span> v1 = <span class="function">Vetor.novo</span>(<span class="number">3</span>, <span class="number">4</span>)
<span class="keyword">local</span> v2 = <span class="function">Vetor.novo</span>(<span class="number">1</span>, <span class="number">2</span>)
<span class="keyword">local</span> v3 = v1 + v2
<span class="function">exiba</span>(v3.x, v3.y)  <span class="comment">-- 4, 6</span></pre>
</div>

<h2>Exemplo: Lista de tarefas</h2>

<div class="code-block">
<pre><span class="keyword">local</span> tarefas = {}

<span class="keyword">função</span> <span class="function">adiciona_tarefa</span>(descricao)
    <span class="function">tabela.insira</span>(tarefas, {
        descricao = descricao,
        concluida = <span class="keyword">falso</span>
    })
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">lista_tarefas</span>()
    <span class="keyword">para</span> i, tarefa <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(tarefas) <span class="keyword">faça</span>
        <span class="keyword">local</span> status = tarefa.concluida <span class="keyword">e</span> <span class="string">"✓"</span> <span class="keyword">ou</span> <span class="string">" "</span>
        <span class="function">exiba</span>(<span class="function">texto.formate</span>(<span class="string">"[%s] %d. %s"</span>, status, i, tarefa.descricao))
    <span class="keyword">fim</span>
<span class="keyword">fim</span>

<span class="function">adiciona_tarefa</span>(<span class="string">"Estudar Sol"</span>)
<span class="function">adiciona_tarefa</span>(<span class="string">"Fazer exercícios"</span>)
tarefas[<span class="number">1</span>].concluida = <span class="keyword">verdadeiro</span>

<span class="function">lista_tarefas</span>()
<span class="comment">-- [✓] 1. Estudar Sol</span>
<span class="comment">-- [ ] 2. Fazer exercícios</span></pre>
</div>

<div class="success-box">
    Tabelas são a estrutura de dados mais poderosa do Sol! Use-as para tudo: listas, objetos, classes e muito mais.
</div>

<div class="mt-4">
    <a href="?page=tipo-logicos" class="btn btn-sol">
        Próximo: Lógicos <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
