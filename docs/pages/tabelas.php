<h1>🚀 Tabelas</h1>
<p class="lead">Tabelas são como listas ou cadernos onde você organiza várias coisas!</p>

<span class="emoji-big">🚀</span>

<h2>O que é uma tabela?</h2>
<p>
    Imagine sua lista de compras: pão, leite, ovos, queijo. 
    No Sol, você guarda isso numa <strong>tabela</strong>!
</p>

<h2>Criando uma lista</h2>

<div class="code-block">
<pre><span class="keyword">local</span> compras = {<span class="string">"Pão"</span>, <span class="string">"Leite"</span>, <span class="string">"Ovos"</span>, <span class="string">"Queijo"</span>}

<span class="function">exiba</span>(compras[<span class="number">1</span>])   <span class="comment">-- Pão</span>
<span class="function">exiba</span>(compras[<span class="number">2</span>])   <span class="comment">-- Leite</span>
<span class="function">exiba</span>(compras[<span class="number">3</span>])   <span class="comment">-- Ovos</span></pre>
</div>

<div class="tip-box">
    No Sol, a contagem começa do 1 (não do 0). O primeiro item é o número 1!
</div>

<h2>Tabelas como dicionário</h2>
<p>Você também pode dar nomes aos itens (chaves):</p>

<div class="code-block">
<pre><span class="keyword">local</span> pessoa = {
    nome = <span class="string">"Ana"</span>,
    idade = <span class="number">12</span>,
    cidade = <span class="string">"São Paulo"</span>
}

<span class="function">exiba</span>(pessoa.nome)     <span class="comment">-- Ana</span>
<span class="function">exiba</span>(pessoa.idade)    <span class="comment">-- 12</span>
<span class="function">exiba</span>(pessoa["cidade"]) <span class="comment">-- São Paulo (outra forma)</span></pre>
</div>

<h2>🔄 Percorrendo tabelas: obtenha_pares_indexados() vs obtenha_pares()</h2>
<p>Existem duas formas de percorrer tabelas. A diferença é importante!</p>

<h3>obtenha_pares_indexados() - Para listas numeradas</h3>
<p>Use quando sua tabela é uma lista (índices 1, 2, 3...):</p>

<div class="code-block">
<pre><span class="keyword">local</span> frutas = {<span class="string">"Maçã"</span>, <span class="string">"Banana"</span>, <span class="string">"Uva"</span>}

<span class="keyword">para</span> indice, fruta <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(frutas) <span class="keyword">faça</span>
    <span class="function">exiba</span>(indice .. <span class="string">": "</span> .. fruta)
<span class="keyword">fim</span>
<span class="comment">-- 1: Maçã
-- 2: Banana
-- 3: Uva</span></pre>
</div>

<h3>obtenha_pares() - Para dicionários</h3>
<p>Use quando sua tabela tem chaves com nomes:</p>

<div class="code-block">
<pre><span class="keyword">local</span> pessoa = {nome = <span class="string">"Ana"</span>, idade = <span class="number">12</span>, cidade = <span class="string">"SP"</span>}

<span class="keyword">para</span> chave, valor <span class="keyword">em</span> <span class="function">obtenha_pares</span>(pessoa) <span class="keyword">faça</span>
    <span class="function">exiba</span>(chave .. <span class="string">" = "</span> .. valor)
<span class="keyword">fim</span>
<span class="comment">-- nome = Ana
-- idade = 12
-- cidade = SP</span></pre>
</div>

<div class="warning-box">
    <code>obtenha_pares_indexados()</code> só percorre índices numéricos em ordem! Campos nomeados são ignorados.
    Use <code>obtenha_pares()</code> para ver tudo.
</div>

<h2>Adicionando e removendo</h2>

<div class="code-block">
<pre><span class="keyword">local</span> lista = {<span class="string">"A"</span>, <span class="string">"B"</span>}

<span class="comment">-- Adiciona no final</span>
<span class="function">tabela.insira</span>(lista, <span class="string">"C"</span>)

<span class="comment">-- Remove da posição 1</span>
<span class="function">tabela.remova</span>(lista, <span class="number">1</span>)

<span class="comment">-- Tamanho da lista</span>
<span class="function">exiba</span>(#lista)   <span class="comment">-- 2</span></pre>
</div>

<h2>Tabelas dentro de tabelas</h2>
<p>Tabelas podem conter outras tabelas!</p>

<div class="code-block">
<pre><span class="keyword">local</span> escola = {
    nome = <span class="string">"Escola Sol"</span>,
    alunos = {
        {nome = <span class="string">"Ana"</span>, nota = <span class="number">9</span>},
        {nome = <span class="string">"João"</span>, nota = <span class="number">8</span>},
        {nome = <span class="string">"Maria"</span>, nota = <span class="number">10</span>}
    }
}

<span class="comment">-- Acessando dados aninhados</span>
<span class="function">exiba</span>(escola.nome)                <span class="comment">-- Escola Sol</span>
<span class="function">exiba</span>(escola.alunos[<span class="number">1</span>].nome)     <span class="comment">-- Ana</span>
<span class="function">exiba</span>(escola.alunos[<span class="number">3</span>].nota)     <span class="comment">-- 10</span>

<span class="comment">-- Listando todos os alunos</span>
<span class="keyword">para</span> i, aluno <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(escola.alunos) <span class="keyword">faça</span>
    <span class="function">exiba</span>(aluno.nome .. <span class="string">": "</span> .. aluno.nota)
<span class="keyword">fim</span></pre>
</div>

<h2>Exemplo: Calculando média</h2>

<div class="code-block">
<pre><span class="keyword">local</span> notas = {<span class="number">8</span>, <span class="number">7</span>, <span class="number">9</span>, <span class="number">6</span>, <span class="number">10</span>}

<span class="keyword">local</span> soma = <span class="number">0</span>
<span class="keyword">para</span> i, nota <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(notas) <span class="keyword">faça</span>
    soma = soma + nota
<span class="keyword">fim</span>

<span class="keyword">local</span> media = soma / #notas
<span class="function">exiba</span>(<span class="string">"Média: "</span> .. media)   <span class="comment">-- Média: 8</span></pre>
</div>

<div class="success-box">
    Tabelas são a estrutura de dados mais poderosa do Sol! Use para listas, objetos, configurações e muito mais.
</div>

<div class="mt-4">
    <a href="?page=metamethods" class="btn btn-sol">
        Próximo: Metamétodos <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>





