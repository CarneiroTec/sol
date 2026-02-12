<h1>🚀 Biblioteca: Texto</h1>
<p class="lead">Funções para brincar com palavras e frases!</p>

<span class="emoji-big">🚀</span>

<h2>Tamanho do texto</h2>

<div class="code-block">
<pre><span class="keyword">local</span> nome = <span class="string">"Sol"</span>
<span class="function">exiba</span>(<span class="function">texto.obtenha_comprimento</span>(nome))    <span class="comment">-- Mostra: 3 (três letras!)</span>
<span class="comment">-- Ou use o operador #</span>
<span class="function">exiba</span>(#nome)    <span class="comment">-- Mostra: 3</span>

<span class="keyword">local</span> frase = <span class="string">"Programar é divertido"</span>
<span class="function">exiba</span>(#frase)   <span class="comment">-- Mostra: 22</span></pre>
</div>

<h2>Maiúsculas e minúsculas</h2>

<div class="code-block">
<pre><span class="keyword">local</span> palavra = <span class="string">"sol"</span>

<span class="comment">-- Tudo maiúsculo</span>
<span class="function">exiba</span>(<span class="function">texto.converta_para_maiúscula</span>(palavra))   <span class="comment">-- Mostra: SOL</span>

<span class="comment">-- Tudo minúsculo</span>
<span class="function">exiba</span>(<span class="function">texto.converta_para_minúscula</span>(<span class="string">"OLÁ MUNDO"</span>))   <span class="comment">-- Mostra: olá mundo</span></pre>
</div>

<h2>Pegando pedaços</h2>
<p>Extraia parte de um texto:</p>

<div class="code-block">
<pre><span class="keyword">local</span> frase = <span class="string">"Bom dia, mundo!"</span>

<span class="comment">-- Pega do caractere 5 ao 7</span>
<span class="function">exiba</span>(<span class="function">texto.obtenha_subtexto</span>(frase, <span class="number">5</span>, <span class="number">7</span>))   <span class="comment">-- Mostra: dia</span>

<span class="comment">-- Pega do 10 até o fim</span>
<span class="function">exiba</span>(<span class="function">texto.obtenha_subtexto</span>(frase, <span class="number">10</span>))     <span class="comment">-- Mostra: mundo!</span></pre>
</div>

<h2>Encontrando palavras</h2>

<div class="code-block">
<pre><span class="keyword">local</span> texto = <span class="string">"O gato pulou o muro"</span>

<span class="comment">-- Onde está "gato"?</span>
<span class="keyword">local</span> inicio, fim = <span class="function">texto.encontre</span>(texto, <span class="string">"gato"</span>)
<span class="function">exiba</span>(inicio, fim)   <span class="comment">-- Mostra: 3, 6</span></pre>
</div>

<h2>Substituindo texto</h2>

<div class="code-block">
<pre><span class="keyword">local</span> frase = <span class="string">"Eu gosto de maçã"</span>

<span class="comment">-- Troca maçã por banana</span>
<span class="keyword">local</span> nova = <span class="function">texto.substitua_globalmente</span>(frase, <span class="string">"maçã"</span>, <span class="string">"banana"</span>)
<span class="function">exiba</span>(nova)   <span class="comment">-- Mostra: Eu gosto de banana</span></pre>
</div>

<h2>Repetindo texto</h2>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="function">texto.repita</span>(<span class="string">"Ha"</span>, <span class="number">3</span>))     <span class="comment">-- Mostra: HaHaHa</span>
<span class="function">exiba</span>(<span class="function">texto.repita</span>(<span class="string">"==="</span>, <span class="number">5</span>))   <span class="comment">-- Mostra: ===============</span></pre>
</div>

<h2>Invertendo texto</h2>

<div class="code-block">
<pre><span class="function">exiba</span>(<span class="function">texto.inverta</span>(<span class="string">"Sol"</span>))    <span class="comment">-- Mostra: loS</span>
<span class="function">exiba</span>(<span class="function">texto.inverta</span>(<span class="string">"amor"</span>))   <span class="comment">-- Mostra: roma</span></pre>
</div>

<div class="tip-box">
    Palavras que são iguais de três pra frente se chamam <strong>palíndromos</strong>! Exemplo: "asa", "ovo", "arara".
</div>

<h2>Formatação de texto</h2>

<div class="code-block">
<pre><span class="comment">-- Formatar texto com valores</span>
<span class="keyword">local</span> nome = <span class="string">"Maria"</span>
<span class="keyword">local</span> idade = <span class="number">25</span>
<span class="keyword">local</span> mensagem = <span class="function">texto.formate</span>(<span class="string">"Olá, %s! Você tem %d anos."</span>, nome, idade)
<span class="function">exiba</span>(mensagem)  <span class="comment">-- Olá, Maria! Você tem 25 anos.</span></pre>
</div>

<h2>Trabalhando com bytes</h2>

<div class="code-block">
<pre><span class="comment">-- Obter código do caractere</span>
<span class="function">exiba</span>(<span class="function">texto.obtenha_byte</span>(<span class="string">"A"</span>))  <span class="comment">-- 65</span>

<span class="comment">-- Criar caractere a partir do código</span>
<span class="function">exiba</span>(<span class="function">texto.crie_caractere</span>(<span class="number">65</span>))  <span class="comment">-- A</span>
<span class="function">exiba</span>(<span class="function">texto.crie_caractere</span>(<span class="number">65</span>, <span class="number">66</span>, <span class="number">67</span>))  <span class="comment">-- ABC</span></pre>
</div>

<h2>Busca com padrões</h2>

<div class="code-block">
<pre><span class="comment">-- Encontrar padrão</span>
<span class="keyword">local</span> texto = <span class="string">"Meu email é teste@exemplo.com"</span>
<span class="keyword">local</span> email = <span class="function">texto.combine</span>(texto, <span class="string">"[%w%.]+@[%w%.]+"</span>)
<span class="function">exiba</span>(email)  <span class="comment">-- teste@exemplo.com</span>

<span class="comment">-- Iterar sobre todas as ocorrências</span>
<span class="keyword">para</span> palavra <span class="keyword">em</span> <span class="function">texto.combine_globalmente</span>(<span class="string">"Sol é legal"</span>, <span class="string">"%w+"</span>) <span class="keyword">faça</span>
    <span class="function">exiba</span>(palavra)  <span class="comment">-- Sol, é, legal</span>
<span class="keyword">fim</span></pre>
</div>

<h2>Empacotamento binário</h2>

<div class="code-block">
<pre><span class="comment">-- Empacotar dados em formato binário</span>
<span class="keyword">local</span> dados = <span class="function">texto.empacote</span>(<span class="string">"i4 i4"</span>, <span class="number">10</span>, <span class="number">20</span>)

<span class="comment">-- Desempacotar dados binários</span>
<span class="keyword">local</span> a, b = <span class="function">texto.desempacote</span>(<span class="string">"i4 i4"</span>, dados)
<span class="function">exiba</span>(a, b)  <span class="comment">-- 10, 20</span>

<span class="comment">-- Obter tamanho do pacote</span>
<span class="keyword">local</span> tamanho = <span class="function">texto.obtenha_tamanho_pacote</span>(<span class="string">"i4 i4"</span>)
<span class="function">exiba</span>(tamanho)  <span class="comment">-- 8 bytes</span></pre>
</div>

<h2>Exemplo: Verificador de palêndromo</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">eh_palindromo</span>(palavra)
    <span class="keyword">local</span> limpa = <span class="function">texto.converta_para_minúscula</span>(palavra)
    <span class="keyword">local</span> invertida = <span class="function">texto.inverta</span>(limpa)
    <span class="keyword">retorne</span> limpa == invertida
<span class="keyword">fim</span>

<span class="keyword">se</span> <span class="function">eh_palindromo</span>(<span class="string">"Arara"</span>) <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"É palíndromo! 🚀"</span>)
<span class="keyword">fim</span></pre>
</div>

<div class="success-box">
    Agora você pode manipular textos como um profissional!
</div>

<div class="mt-4">
    <a href="?page=lib-tabela" class="btn btn-sol">
        Próximo: Biblioteca de Tabela <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
