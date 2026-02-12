<h1>📝 Texto</h1>
<p class="lead">Trabalhe com palavras, frases e caracteres - incluindo suporte completo a UTF-8!</p>

<span class="emoji-big">💬</span>

<h2>O que é texto?</h2>
<p>
    Texto (ou string) é qualquer sequência de caracteres entre aspas. Use para nomes, mensagens, e qualquer informação textual.
</p>

<div class="code-block">
<pre><span class="keyword">local</span> nome = <span class="string">"Maria"</span>
<span class="keyword">local</span> frase = <span class="string">"Olá, mundo!"</span>
<span class="keyword">local</span> emoji = <span class="string">"🎉"</span>  <span class="comment">-- UTF-8 funciona!</span></pre>
</div>

<h2>Aspas simples ou duplas</h2>

<div class="code-block">
<pre><span class="keyword">local</span> texto1 = <span class="string">"Isso é texto"</span>
<span class="keyword">local</span> texto2 = <span class="string">'Isso também'</span>
<span class="keyword">local</span> com_aspas = <span class="string">"Ele disse: 'Olá!'"</span></pre>
</div>

<h2>Concatenação (juntar textos)</h2>

<div class="code-block">
<pre><span class="keyword">local</span> primeiro = <span class="string">"João"</span>
<span class="keyword">local</span> sobrenome = <span class="string">"Silva"</span>
<span class="keyword">local</span> completo = primeiro .. <span class="string">" "</span> .. sobrenome
<span class="function">exiba</span>(completo)  <span class="comment">-- "João Silva"</span></pre>
</div>

<h2>Biblioteca Texto</h2>

<h3>Comprimento do texto</h3>

<div class="code-block">
<pre><span class="keyword">local</span> mensagem = <span class="string">"Olá!"</span>
<span class="function">exiba</span>(<span class="function">texto.obtenha_comprimento</span>(mensagem))  <span class="comment">-- 4</span>
<span class="function">exiba</span>(#mensagem)  <span class="comment">-- Atalho: também retorna 4</span></pre>
</div>

<h3>Maiúsculas e minúsculas</h3>

<div class="code-block">
<pre><span class="keyword">local</span> texto = <span class="string">"Olá Mundo"</span>
<span class="function">exiba</span>(<span class="function">texto.converta_para_maiúscula</span>(texto))  <span class="comment">-- "OLÁ MUNDO"</span>
<span class="function">exiba</span>(<span class="function">texto.converta_para_minúscula</span>(texto))  <span class="comment">-- "olá mundo"</span></pre>
</div>

<h3>Extrair parte do texto</h3>

<div class="code-block">
<pre><span class="keyword">local</span> frase = <span class="string">"Programar é legal"</span>
<span class="function">exiba</span>(<span class="function">texto.obtenha_subtexto</span>(frase, <span class="number">1</span>, <span class="number">9</span>))   <span class="comment">-- "Programar"</span>
<span class="function">exiba</span>(<span class="function">texto.obtenha_subtexto</span>(frase, <span class="number">14</span>))       <span class="comment">-- "legal" (até o fim)</span>
<span class="function">exiba</span>(<span class="function">texto.obtenha_subtexto</span>(frase, -<span class="number">5</span>))      <span class="comment">-- "legal" (últimos 5)</span></pre>
</div>

<h3>Repetir texto</h3>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="function">texto.repita</span>(<span class="string">"Ha"</span>, <span class="number">3</span>))  <span class="comment">-- "HaHaHa"</span>
<span class="function">exiba</span>(<span class="function">texto.repita</span>(<span class="string">"="</span>, <span class="number">20</span>))  <span class="comment">-- "===================="</span></pre>
</div>

<h3>Inverter texto</h3>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="function">texto.inverta</span>(<span class="string">"Sol"</span>))  <span class="comment">-- "loS"</span></pre>
</div>

<h3>Buscar e substituir</h3>

<div class="code-block">
<pre><span class="comment">-- Encontrar texto</span>
<span class="keyword">local</span> frase = <span class="string">"Eu amo programar"</span>
<span class="keyword">local</span> inicio, fim = <span class="function">texto.encontre</span>(frase, <span class="string">"amo"</span>)
<span class="function">exiba</span>(inicio, fim)  <span class="comment">-- 4, 6</span>

<span class="comment">-- Substituir texto</span>
<span class="keyword">local</span> novo = <span class="function">texto.substitua_globalmente</span>(frase, <span class="string">"amo"</span>, <span class="string">"adoro"</span>)
<span class="function">exiba</span>(novo)  <span class="comment">-- "Eu adoro programar"</span></pre>
</div>

<h3>Formatação de texto</h3>

<div class="code-block">
<pre><span class="comment">-- Formatar como printf em C</span>
<span class="keyword">local</span> nome = <span class="string">"Ana"</span>
<span class="keyword">local</span> idade = <span class="number">15</span>
<span class="keyword">local</span> mensagem = <span class="function">texto.formate</span>(<span class="string">"%s tem %d anos"</span>, nome, idade)
<span class="function">exiba</span>(mensagem)  <span class="comment">-- "Ana tem 15 anos"</span>

<span class="comment">-- Formatação de números</span>
<span class="function">exiba</span>(<span class="function">texto.formate</span>(<span class="string">"%.2f"</span>, <span class="number">3.14159</span>))  <span class="comment">-- "3.14"</span>
<span class="function">exiba</span>(<span class="function">texto.formate</span>(<span class="string">"%05d"</span>, <span class="number">42</span>))      <span class="comment">-- "00042"</span></pre>
</div>

<h3>Trabalhar com bytes</h3>

<div class="code-block">
<pre><span class="comment">-- Obter código ASCII/UTF-8 de caracteres</span>
<span class="function">exiba</span>(<span class="function">texto.obtenha_byte</span>(<span class="string">"A"</span>))     <span class="comment">-- 65</span>
<span class="function">exiba</span>(<span class="function">texto.obtenha_byte</span>(<span class="string">"ABC"</span>, <span class="number">2</span>))  <span class="comment">-- 66 (segundo caractere)</span>

<span class="comment">-- Criar texto a partir de códigos</span>
<span class="function">exiba</span>(<span class="function">texto.crie_caractere</span>(<span class="number">65</span>, <span class="number">66</span>, <span class="number">67</span>))  <span class="comment">-- "ABC"</span></pre>
</div>

<h3>Padrões (busca avançada)</h3>

<div class="code-block">
<pre><span class="comment">-- Combinar padrão</span>
<span class="keyword">local</span> email = <span class="string">"contato@exemplo.com"</span>
<span class="keyword">local</span> usuario = <span class="function">texto.combine</span>(email, <span class="string">"(.+)@"</span>)
<span class="function">exiba</span>(usuario)  <span class="comment">-- "contato"</span>

<span class="comment">-- Iterar sobre combinações</span>
<span class="keyword">para</span> palavra <span class="keyword">em</span> <span class="function">texto.combine_globalmente</span>(<span class="string">"um dois três"</span>, <span class="string">"%w+"</span>) <span class="keyword">faça</span>
    <span class="function">exiba</span>(palavra)
<span class="keyword">fim</span>
<span class="comment">-- Exibe: "um", "dois", "três"</span></pre>
</div>

<h2>Biblioteca UTF-8</h2>

<h3>Comprimento em caracteres UTF-8</h3>

<div class="code-block">
<pre><span class="keyword">local</span> texto = <span class="string">"Olá 👋"</span>
<span class="function">exiba</span>(#texto)  <span class="comment">-- 8 (bytes)</span>
<span class="function">exiba</span>(<span class="function">utf8.obtenha_comprimento</span>(texto))  <span class="comment">-- 5 (caracteres)</span></pre>
</div>

<h3>Iterar sobre caracteres UTF-8</h3>

<div class="code-block">
<pre><span class="keyword">local</span> texto = <span class="string">"Sol 🌞"</span>

<span class="keyword">para</span> posicao, codigo <span class="keyword">em</span> <span class="function">utf8.itere_códigos</span>(texto) <span class="keyword">faça</span>
    <span class="keyword">local</span> caractere = <span class="function">utf8.crie_caractere</span>(codigo)
    <span class="function">exiba</span>(posicao, codigo, caractere)
<span class="keyword">fim</span></pre>
</div>

<h3>Obter ponto de código</h3>

<div class="code-block">
<pre><span class="keyword">local</span> emoji = <span class="string">"😀"</span>
<span class="keyword">local</span> codigo = <span class="function">utf8.obtenha_ponto_código</span>(emoji, <span class="number">1</span>)
<span class="function">exiba</span>(codigo)  <span class="comment">-- 128512</span></pre>
</div>

<h3>Criar caractere UTF-8</h3>

<div class="code-block">
<pre><span class="comment">-- Criar emoji a partir do código</span>
<span class="keyword">local</span> emoji = <span class="function">utf8.crie_caractere</span>(<span class="number">128512</span>)
<span class="function">exiba</span>(emoji)  <span class="comment">-- "😀"</span></pre>
</div>

<h3>Padrão de caractere UTF-8</h3>

<div class="code-block">
<pre><span class="comment">-- Padrão para combinar um caractere UTF-8</span>
<span class="function">exiba</span>(utf8.padrão_caractere)  <span class="comment">-- "[\0-\x7F\xC2-\xFD][\x80-\xBF]*"</span></pre>
</div>

<h2>Exemplo: Validador de email</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">valida_email</span>(email)
    <span class="comment">-- Verifica se tem @ e ponto</span>
    <span class="keyword">local</span> tem_arroba = <span class="function">texto.encontre</span>(email, <span class="string">"@"</span>)
    <span class="keyword">local</span> tem_ponto = <span class="function">texto.encontre</span>(email, <span class="string">"%."</span>)
    
    <span class="keyword">se</span> tem_arroba <span class="keyword">então</span>
        <span class="keyword">se</span> tem_ponto <span class="keyword">então</span>
            <span class="keyword">retorne</span> <span class="keyword">verdadeiro</span>
        <span class="keyword">fim</span>
    <span class="keyword">fim</span>
    
    <span class="keyword">retorne</span> <span class="keyword">falso</span>
<span class="keyword">fim</span>

<span class="function">exiba</span>(<span class="function">valida_email</span>(<span class="string">"teste@exemplo.com"</span>))  <span class="comment">-- verdadeiro</span>
<span class="function">exiba</span>(<span class="function">valida_email</span>(<span class="string">"invalido"</span>))         <span class="comment">-- falso</span></pre>
</div>

<h2>Exemplo: Contador de palavras</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">conta_palavras</span>(texto)
    <span class="keyword">local</span> contador = <span class="number">0</span>
    <span class="keyword">para</span> palavra <span class="keyword">em</span> <span class="function">texto.combine_globalmente</span>(texto, <span class="string">"%w+"</span>) <span class="keyword">faça</span>
        contador = contador + <span class="number">1</span>
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> contador
<span class="keyword">fim</span>

<span class="keyword">local</span> frase = <span class="string">"Programar em Sol é divertido!"</span>
<span class="function">exiba</span>(<span class="string">"Palavras: "</span> .. <span class="function">conta_palavras</span>(frase))  <span class="comment">-- 5</span></pre>
</div>

<h2>Exemplo: Formatador de nome</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">formata_nome</span>(nome_completo)
    <span class="comment">-- Converte para minúsculas</span>
    <span class="keyword">local</span> minusculo = <span class="function">texto.converta_para_minúscula</span>(nome_completo)
    
    <span class="comment">-- Capitaliza primeira letra de cada palavra</span>
    <span class="keyword">local</span> formatado = <span class="function">texto.substitua_globalmente</span>(minusculo, <span class="string">"(%a)([%w]*)"</span>, 
        <span class="keyword">função</span>(primeira, resto)
            <span class="keyword">retorne</span> <span class="function">texto.converta_para_maiúscula</span>(primeira) .. resto
        <span class="keyword">fim</span>)
    
    <span class="keyword">retorne</span> formatado
<span class="keyword">fim</span>

<span class="function">exiba</span>(<span class="function">formata_nome</span>(<span class="string">"JOÃO DA SILVA"</span>))  <span class="comment">-- "João Da Silva"</span></pre>
</div>

<div class="success-box">
    Agora você domina texto em Sol! Use UTF-8 para trabalhar com emojis e caracteres internacionais.
</div>

<div class="mt-4">
    <a href="?page=tipo-tabelas" class="btn btn-sol">
        Próximo: Tabelas <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
