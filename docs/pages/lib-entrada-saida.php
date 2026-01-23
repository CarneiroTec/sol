<h1>🚀 Biblioteca: Terminal</h1>
<p class="lead">Interaja com o terminal: leia entrada, exiba saída e trabalhe com arquivos!</p>

<span class="emoji-big">🚀</span>

<h2>Funções do Módulo Terminal</h2>

<h3>Entrada e Saída Padrão</h3>

<div class="code-block">
<pre><span class="comment">-- Ler uma linha da entrada padrão</span>
<span class="keyword">local</span> nome = <span class="function">terminal.leia</span>()

<span class="comment">-- Escrever na saída padrão</span>
<span class="function">terminal.escreva</span>(<span class="string">"Olá, mundo!\n"</span>)

<span class="comment">-- Forçar gravação imediata (flush)</span>
<span class="function">terminal.despeje</span>()</pre>
</div>

<h3>Abrir e Gerenciar Arquivos</h3>

<div class="code-block">
<pre><span class="comment">-- Abrir arquivo para leitura</span>
<span class="keyword">local</span> arquivo = <span class="function">terminal.abra</span>(<span class="string">"dados.txt"</span>, <span class="string">"r"</span>)

<span class="comment">-- Abrir arquivo para escrita</span>
<span class="keyword">local</span> arquivo = <span class="function">terminal.abra</span>(<span class="string">"saida.txt"</span>, <span class="string">"w"</span>)

<span class="comment">-- Abrir arquivo para adicionar ao final</span>
<span class="keyword">local</span> arquivo = <span class="function">terminal.abra</span>(<span class="string">"log.txt"</span>, <span class="string">"a"</span>)

<span class="comment">-- Fechar arquivo</span>
<span class="function">terminal.feche</span>(arquivo)</pre>
</div>

<h3>Definir Entrada/Saída Padrão</h3>

<div class="code-block">
<pre><span class="comment">-- Redirecionar entrada padrão</span>
<span class="keyword">local</span> arquivo = <span class="function">terminal.abra</span>(<span class="string">"entrada.txt"</span>, <span class="string">"r"</span>)
<span class="function">terminal.defina_entrada</span>(arquivo)

<span class="comment">-- Redirecionar saída padrão</span>
<span class="keyword">local</span> arquivo = <span class="function">terminal.abra</span>(<span class="string">"saida.txt"</span>, <span class="string">"w"</span>)
<span class="function">terminal.defina_saída</span>(arquivo)</pre>
</div>

<h3>Iterar Sobre Linhas</h3>

<div class="code-block">
<pre><span class="comment">-- Iterar sobre linhas de um arquivo</span>
<span class="keyword">para</span> linha <span class="keyword">em</span> <span class="function">terminal.itere_linhas</span>(<span class="string">"dados.txt"</span>) <span class="keyword">faça</span>
    <span class="function">exiba</span>(linha)
<span class="keyword">fim</span>

<span class="comment">-- Iterar com formato específico</span>
<span class="keyword">para</span> numero <span class="keyword">em</span> <span class="function">terminal.itere_linhas</span>(<span class="string">"numeros.txt"</span>, <span class="string">"*n"</span>) <span class="keyword">faça</span>
    <span class="function">exiba</span>(numero * 2)
<span class="keyword">fim</span></pre>
</div>

<h3>Processos e Arquivos Temporários</h3>

<div class="code-block">
<pre><span class="comment">-- Abrir processo (executar comando)</span>
<span class="keyword">local</span> processo = <span class="function">terminal.abra_processo</span>(<span class="string">"ls -la"</span>, <span class="string">"r"</span>)
<span class="keyword">local</span> saida = processo:leia(<span class="string">"*a"</span>)
processo:feche()

<span class="comment">-- Criar arquivo temporário</span>
<span class="keyword">local</span> temp = <span class="function">terminal.crie_arquivo_temporário</span>()
temp:escreva(<span class="string">"dados temporários"</span>)
temp:feche()

<span class="comment">-- Verificar tipo de arquivo</span>
<span class="keyword">local</span> tipo = <span class="function">terminal.obtenha_tipo</span>(arquivo)
<span class="function">exiba</span>(tipo)  <span class="comment">-- "file" ou "closed file"</span></pre>
</div>

<h2>Métodos de Arquivo</h2>

<h3>Leitura</h3>

<div class="code-block">
<pre><span class="keyword">local</span> arquivo = <span class="function">terminal.abra</span>(<span class="string">"dados.txt"</span>, <span class="string">"r"</span>)

<span class="comment">-- Ler tudo</span>
<span class="keyword">local</span> tudo = arquivo:<span class="function">leia</span>(<span class="string">"*a"</span>)

<span class="comment">-- Ler uma linha</span>
<span class="keyword">local</span> linha = arquivo:<span class="function">leia</span>(<span class="string">"*l"</span>)

<span class="comment">-- Ler um número</span>
<span class="keyword">local</span> numero = arquivo:<span class="function">leia</span>(<span class="string">"*n"</span>)

<span class="comment">-- Ler N bytes</span>
<span class="keyword">local</span> bytes = arquivo:<span class="function">leia</span>(100)

arquivo:<span class="function">feche</span>()</pre>
</div>

<h3>Escrita</h3>

<div class="code-block">
<pre><span class="keyword">local</span> arquivo = <span class="function">terminal.abra</span>(<span class="string">"saida.txt"</span>, <span class="string">"w"</span>)

<span class="comment">-- Escrever texto</span>
arquivo:<span class="function">escreva</span>(<span class="string">"Linha 1\n"</span>)
arquivo:<span class="function">escreva</span>(<span class="string">"Linha 2\n"</span>)

<span class="comment">-- Forçar gravação</span>
arquivo:<span class="function">despeje</span>()

arquivo:<span class="function">feche</span>()</pre>
</div>

<h3>Navegação e Configuração</h3>

<div class="code-block">
<pre><span class="keyword">local</span> arquivo = <span class="function">terminal.abra</span>(<span class="string">"dados.bin"</span>, <span class="string">"r"</span>)

<span class="comment">-- Buscar posição no arquivo</span>
arquivo:<span class="function">busque</span>(<span class="string">"set"</span>, 100)  <span class="comment">-- Ir para byte 100</span>
arquivo:<span class="function">busque</span>(<span class="string">"cur"</span>, 10)   <span class="comment">-- Avançar 10 bytes</span>
arquivo:<span class="function">busque</span>(<span class="string">"end"</span>, -50)  <span class="comment">-- 50 bytes antes do fim</span>

<span class="comment">-- Definir buffer</span>
arquivo:<span class="function">defina_vbuf</span>(<span class="string">"full"</span>, 4096)  <span class="comment">-- Buffer completo</span>
arquivo:<span class="function">defina_vbuf</span>(<span class="string">"line"</span>)         <span class="comment">-- Buffer por linha</span>
arquivo:<span class="function">defina_vbuf</span>(<span class="string">"no"</span>)           <span class="comment">-- Sem buffer</span>

<span class="comment">-- Iterar sobre linhas do arquivo</span>
<span class="keyword">para</span> linha <span class="keyword">em</span> arquivo:<span class="function">itere_linhas</span>() <span class="keyword">faça</span>
    <span class="function">exiba</span>(linha)
<span class="keyword">fim</span>

arquivo:<span class="function">feche</span>()</pre>
</div>

<h2>Exemplo: Sistema de Log</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">registre_log</span>(mensagem)
    <span class="keyword">local</span> arquivo = <span class="function">terminal.abra</span>(<span class="string">"sistema.log"</span>, <span class="string">"a"</span>)
    <span class="keyword">se</span> arquivo <span class="keyword">então</span>
        <span class="keyword">local</span> timestamp = <span class="function">sistema_operacional.obtenha_data</span>(<span class="string">"%Y-%m-%d %H:%M:%S"</span>)
        arquivo:<span class="function">escreva</span>(timestamp .. <span class="string">" - "</span> .. mensagem .. <span class="string">"\n"</span>)
        arquivo:<span class="function">feche</span>()
    <span class="keyword">fim</span>
<span class="keyword">fim</span>

<span class="function">registre_log</span>(<span class="string">"Aplicação iniciada"</span>)
<span class="function">registre_log</span>(<span class="string">"Usuário fez login"</span>)</pre>
</div>

<h2>Exemplo: Processamento de Arquivo Grande</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">processe_arquivo_grande</span>(nome_arquivo)
    <span class="keyword">local</span> entrada = <span class="function">terminal.abra</span>(nome_arquivo, <span class="string">"r"</span>)
    <span class="keyword">local</span> saida = <span class="function">terminal.abra</span>(<span class="string">"processado.txt"</span>, <span class="string">"w"</span>)
    
    <span class="keyword">se</span> <span class="keyword">não</span> entrada <span class="keyword">então</span>
        <span class="function">exiba</span>(<span class="string">"Erro ao abrir arquivo!"</span>)
        <span class="keyword">retorne</span>
    <span class="keyword">fim</span>
    
    <span class="keyword">local</span> contador = 0
    <span class="keyword">para</span> linha <span class="keyword">em</span> entrada:<span class="function">itere_linhas</span>() <span class="keyword">faça</span>
        contador = contador + 1
        saida:<span class="function">escreva</span>(contador .. <span class="string">": "</span> .. linha .. <span class="string">"\n"</span>)
    <span class="keyword">fim</span>
    
    entrada:<span class="function">feche</span>()
    saida:<span class="function">feche</span>()
    <span class="function">exiba</span>(<span class="string">"Processadas "</span> .. contador .. <span class="string">" linhas"</span>)
<span class="keyword">fim</span></pre>
</div>

<div class="warning-box">
    Sempre feche arquivos com <code>:feche()</code>! Arquivos não fechados podem causar perda de dados.
</div>

<div class="success-box">
    A biblioteca Terminal oferece controle completo sobre entrada/saída e manipulação de arquivos!
</div>

<div class="mt-4">
    <a href="?page=lib-sistema" class="btn btn-sol">
        Próximo: Biblioteca de Sistema <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
