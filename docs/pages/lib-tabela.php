<h1>🚀 Biblioteca: Tabela</h1>
<p class="lead">Funções para organizar e manipular suas listas!</p>

<span class="emoji-big">🚀</span>

<h2>Criando tabelas</h2>

<div class="code-block">
<pre><span class="comment">-- Criar tabela com tamanho pré-alocado</span>
<span class="keyword">local</span> lista = <span class="function">tabela.crie</span>(<span class="number">10</span>)  <span class="comment">-- Cria tabela para 10 elementos sequenciais</span>
<span class="keyword">local</span> mapa = <span class="function">tabela.crie</span>(<span class="number">0</span>, <span class="number">5</span>)   <span class="comment">-- Cria tabela para 5 pares chave-valor</span></pre>
</div>

<h2>Adicionando itens</h2>

<div class="code-block">
<pre><span class="keyword">local</span> lista = {<span class="string">"A"</span>, <span class="string">"B"</span>}

<span class="comment">-- Adiciona no final</span>
<span class="function">tabela.insira</span>(lista, <span class="string">"C"</span>)
<span class="comment">-- Agora: {"A", "B", "C"}</span>

<span class="comment">-- Adiciona numa posição específica (no meio!)</span>
<span class="function">tabela.insira</span>(lista, <span class="number">2</span>, <span class="string">"X"</span>)
<span class="comment">-- Agora: {"A", "X", "B", "C"}</span></pre>
</div>

<h2>Removendo itens</h2>

<div class="code-block">
<pre><span class="keyword">local</span> numeros = {<span class="number">10</span>, <span class="number">20</span>, <span class="number">30</span>, <span class="number">40</span>}

<span class="comment">-- Remove o último</span>
<span class="keyword">local</span> removido = <span class="function">tabela.remova</span>(numeros)
<span class="function">exiba</span>(removido)   <span class="comment">-- Mostra: 40</span>

<span class="comment">-- Remove da posição 1</span>
<span class="function">tabela.remova</span>(numeros, <span class="number">1</span>)
<span class="comment">-- Agora: {20, 30}</span></pre>
</div>

<h2>Ordenando</h2>
<p>Coloca tudo em ordem!</p>

<div class="code-block">
<pre><span class="keyword">local</span> notas = {<span class="number">7</span>, <span class="number">3</span>, <span class="number">9</span>, <span class="number">1</span>, <span class="number">5</span>}

<span class="function">tabela.ordene</span>(notas)
<span class="comment">-- Agora: {1, 3, 5, 7, 9}</span>

<span class="keyword">para</span> i, nota <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(notas) <span class="keyword">faça</span>
    <span class="function">exiba</span>(nota)
<span class="keyword">fim</span></pre>
</div>

<h2>Juntando textos</h2>
<p>Transforma uma lista em uma única frase:</p>

<div class="code-block">
<pre><span class="keyword">local</span> palavras = {<span class="string">"Sol"</span>, <span class="string">"é"</span>, <span class="string">"legal"</span>}

<span class="comment">-- Junta com espaço</span>
<span class="keyword">local</span> frase = <span class="function">tabela.concatene</span>(palavras, <span class="string">" "</span>)
<span class="function">exiba</span>(frase)   <span class="comment">-- Mostra: Sol é legal</span>

<span class="comment">-- Junta com vírgula</span>
<span class="keyword">local</span> frutas = {<span class="string">"Maçã"</span>, <span class="string">"Banana"</span>, <span class="string">"Uva"</span>}
<span class="function">exiba</span>(<span class="function">tabela.concatene</span>(frutas, <span class="string">", "</span>))
<span class="comment">-- Mostra: Maçã, Banana, Uva</span></pre>
</div>

<h2>Movendo elementos</h2>

<div class="code-block">
<pre><span class="keyword">local</span> origem = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>}
<span class="keyword">local</span> destino = {}

<span class="comment">-- Move elementos 2 a 4 para o destino na posição 1</span>
<span class="function">tabela.mova</span>(origem, <span class="number">2</span>, <span class="number">4</span>, <span class="number">1</span>, destino)
<span class="comment">-- destino agora: {2, 3, 4}</span>

<span class="comment">-- Mover dentro da mesma tabela</span>
<span class="keyword">local</span> lista = {<span class="string">"a"</span>, <span class="string">"b"</span>, <span class="string">"c"</span>, <span class="string">"d"</span>}
<span class="function">tabela.mova</span>(lista, <span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>)
<span class="comment">-- lista agora: {"c", "a", "b", "d"}</span></pre>
</div>

<h2>Empacotamento e desempacotamento</h2>

<div class="code-block">
<pre><span class="comment">-- Empacotar valores em uma tabela</span>
<span class="keyword">local</span> pacote = <span class="function">tabela.empacote</span>(<span class="number">10</span>, <span class="number">20</span>, <span class="number">30</span>)
<span class="comment">-- pacote = {10, 20, 30, n = 3}</span>
<span class="function">exiba</span>(pacote.n)  <span class="comment">-- 3 (número de elementos)</span>

<span class="comment">-- Desempacotar tabela em valores individuais</span>
<span class="keyword">local</span> valores = {<span class="number">5</span>, <span class="number">10</span>, <span class="number">15</span>}
<span class="function">exiba</span>(<span class="function">tabela.desempacote</span>(valores))  <span class="comment">-- 5, 10, 15</span>

<span class="comment">-- Desempacotar intervalo específico</span>
<span class="function">exiba</span>(<span class="function">tabela.desempacote</span>(valores, <span class="number">2</span>, <span class="number">3</span>))  <span class="comment">-- 10, 15</span></pre>
</div>

<h2>Encontrando coisas</h2>

<div class="code-block">
<pre><span class="keyword">local</span> cores = {<span class="string">"Vermelho"</span>, <span class="string">"Verde"</span>, <span class="string">"Azul"</span>}

<span class="keyword">função</span> <span class="function">tem_na_lista</span>(lista, item)
    <span class="keyword">para</span> i, valor <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(lista) <span class="keyword">faça</span>
        <span class="keyword">se</span> valor == item <span class="keyword">então</span>
            <span class="keyword">retorne</span> <span class="keyword">verdadeiro</span>
        <span class="keyword">fim</span>
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> <span class="keyword">falso</span>
<span class="keyword">fim</span>

<span class="keyword">se</span> <span class="function">tem_na_lista</span>(cores, <span class="string">"Verde"</span>) <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Tem verde! ?"</span>)
<span class="keyword">fim</span></pre>
</div>

<h2>Exemplo: Fila de atendimento</h2>

<div class="code-block">
<pre><span class="keyword">local</span> fila = {}

<span class="comment">-- Pessoas chegando</span>
<span class="function">tabela.insira</span>(fila, <span class="string">"Maria"</span>)
<span class="function">tabela.insira</span>(fila, <span class="string">"João"</span>)
<span class="function">tabela.insira</span>(fila, <span class="string">"Ana"</span>)

<span class="comment">-- Atendendo (tira o primeiro)</span>
<span class="keyword">local</span> atendido = <span class="function">tabela.remova</span>(fila, <span class="number">1</span>)
<span class="function">exiba</span>(<span class="string">"Atendendo: "</span> .. atendido)   <span class="comment">-- Maria</span>

<span class="keyword">local</span> atendido = <span class="function">tabela.remova</span>(fila, <span class="number">1</span>)
<span class="function">exiba</span>(<span class="string">"Atendendo: "</span> .. atendido)   <span class="comment">-- João</span></pre>
</div>

<div class="success-box">
    Com a biblioteca de tabela, você pode criar listas, filas, pilhas e muito mais!
</div>

<div class="mt-4">
    <a href="?page=lib-entrada-saida" class="btn btn-sol">
        Próximo: Entrada/Saída <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
