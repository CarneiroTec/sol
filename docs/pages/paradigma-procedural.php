<h1>📦 Programação Procedural</h1>
<p class="lead">Organize código em procedimentos reutilizáveis!</p>

<span class="emoji-big">🔨</span>

<h2>O que é programação procedural?</h2>
<p>
    Programação procedural organiza código em <strong>funções</strong> (procedimentos) que podem ser chamadas
    múltiplas vezes. É uma evolução da programação imperativa, adicionando modularidade e reutilização.
</p>

<h2>Características</h2>
<ul>
    <li>Código organizado em funções</li>
    <li>Reutilização através de chamadas de função</li>
    <li>Parâmetros e valores de retorno</li>
    <li>Escopo local de variáveis</li>
</ul>

<h2>Exemplo básico: Funções utilitárias</h2>

<div class="code-block">
<pre><span class="comment">-- Procedimento simples</span>
<span class="keyword">função</span> <span class="function">saudacao</span>(nome)
    <span class="function">exiba</span>(<span class="string">"Olá, "</span> .. nome .. <span class="string">"!"</span>)
<span class="keyword">fim</span>

<span class="comment">-- Função com retorno</span>
<span class="keyword">função</span> <span class="function">soma</span>(a, b)
    <span class="keyword">retorne</span> a + b
<span class="keyword">fim</span>

<span class="comment">-- Usando as funções</span>
<span class="function">saudacao</span>(<span class="string">"Maria"</span>)
<span class="keyword">local</span> resultado = <span class="function">soma</span>(<span class="number">10</span>, <span class="number">20</span>)
<span class="function">exiba</span>(resultado)  <span class="comment">-- 30</span></pre>
</div>

<h2>Exemplo: Calculadora modular</h2>

<div class="code-block">
<pre><span class="comment">-- Operações básicas</span>
<span class="keyword">função</span> <span class="function">adicione</span>(a, b)
    <span class="keyword">retorne</span> a + b
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">subtraia</span>(a, b)
    <span class="keyword">retorne</span> a - b
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">multiplique</span>(a, b)
    <span class="keyword">retorne</span> a * b
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">divida</span>(a, b)
    <span class="keyword">se</span> b == <span class="number">0</span> <span class="keyword">então</span>
        <span class="keyword">retorne</span> <span class="keyword">nulo</span>, <span class="string">"Divisão por zero!"</span>
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> a / b
<span class="keyword">fim</span>

<span class="comment">-- Função de alto nível</span>
<span class="keyword">função</span> <span class="function">calcule</span>(operacao, a, b)
    <span class="keyword">se</span> operacao == <span class="string">"+"</span> <span class="keyword">então</span> <span class="keyword">retorne</span> <span class="function">adicione</span>(a, b) <span class="keyword">fim</span>
    <span class="keyword">se</span> operacao == <span class="string">"-"</span> <span class="keyword">então</span> <span class="keyword">retorne</span> <span class="function">subtraia</span>(a, b) <span class="keyword">fim</span>
    <span class="keyword">se</span> operacao == <span class="string">"*"</span> <span class="keyword">então</span> <span class="keyword">retorne</span> <span class="function">multiplique</span>(a, b) <span class="keyword">fim</span>
    <span class="keyword">se</span> operacao == <span class="string">"/"</span> <span class="keyword">então</span> <span class="keyword">retorne</span> <span class="function">divida</span>(a, b) <span class="keyword">fim</span>
    <span class="keyword">retorne</span> <span class="keyword">nulo</span>, <span class="string">"Operação inválida"</span>
<span class="keyword">fim</span>

<span class="comment">-- Usando</span>
<span class="function">exiba</span>(<span class="function">calcule</span>(<span class="string">"+"</span>, <span class="number">10</span>, <span class="number">5</span>))   <span class="comment">-- 15</span>
<span class="function">exiba</span>(<span class="function">calcule</span>(<span class="string">"*"</span>, <span class="number">3</span>, <span class="number">7</span>))    <span class="comment">-- 21</span></pre>
</div>

<h2>Exemplo: Processamento de lista</h2>

<div class="code-block">
<pre><span class="comment">-- Função para filtrar números pares</span>
<span class="keyword">função</span> <span class="function">filtre_pares</span>(lista)
    <span class="keyword">local</span> resultado = {}
    <span class="keyword">para</span> i, valor <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(lista) <span class="keyword">faça</span>
        <span class="keyword">se</span> valor % <span class="number">2</span> == <span class="number">0</span> <span class="keyword">então</span>
            <span class="function">tabela.insira</span>(resultado, valor)
        <span class="keyword">fim</span>
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> resultado
<span class="keyword">fim</span>

<span class="comment">-- Função para somar lista</span>
<span class="keyword">função</span> <span class="function">some_lista</span>(lista)
    <span class="keyword">local</span> soma = <span class="number">0</span>
    <span class="keyword">para</span> i, valor <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(lista) <span class="keyword">faça</span>
        soma = soma + valor
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> soma
<span class="keyword">fim</span>

<span class="comment">-- Função para exibir lista</span>
<span class="keyword">função</span> <span class="function">exiba_lista</span>(lista)
    <span class="function">exiba</span>(<span class="function">tabela.concatene</span>(lista, <span class="string">", "</span>))
<span class="keyword">fim</span>

<span class="comment">-- Pipeline de processamento</span>
<span class="keyword">local</span> numeros = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>, <span class="number">6</span>, <span class="number">7</span>, <span class="number">8</span>, <span class="number">9</span>, <span class="number">10</span>}
<span class="keyword">local</span> pares = <span class="function">filtre_pares</span>(numeros)
<span class="keyword">local</span> soma = <span class="function">some_lista</span>(pares)

<span class="function">exiba</span>(<span class="string">"Números pares:"</span>)
<span class="function">exiba_lista</span>(pares)  <span class="comment">-- 2, 4, 6, 8, 10</span>
<span class="function">exiba</span>(<span class="string">"Soma: "</span> .. soma)  <span class="comment">-- 30</span></pre>
</div>

<h2>Exemplo: Sistema de validação</h2>

<div class="code-block">
<pre><span class="comment">-- Validadores</span>
<span class="keyword">função</span> <span class="function">valide_email</span>(email)
    <span class="keyword">retorne</span> <span class="function">texto.encontre</span>(email, <span class="string">"@"</span>) <span class="keyword">e</span> <span class="function">texto.encontre</span>(email, <span class="string">"%."</span>)
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">valide_idade</span>(idade)
    <span class="keyword">retorne</span> idade >= <span class="number">0</span> <span class="keyword">e</span> idade <= <span class="number">150</span>
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">valide_nome</span>(nome)
    <span class="keyword">retorne</span> <span class="function">texto.obtenha_comprimento</span>(nome) >= <span class="number">2</span>
<span class="keyword">fim</span>

<span class="comment">-- Função principal de validação</span>
<span class="keyword">função</span> <span class="function">valide_usuario</span>(nome, idade, email)
    <span class="keyword">se</span> <span class="keyword">não</span> <span class="function">valide_nome</span>(nome) <span class="keyword">então</span>
        <span class="keyword">retorne</span> <span class="keyword">falso</span>, <span class="string">"Nome inválido"</span>
    <span class="keyword">fim</span>
    
    <span class="keyword">se</span> <span class="keyword">não</span> <span class="function">valide_idade</span>(idade) <span class="keyword">então</span>
        <span class="keyword">retorne</span> <span class="keyword">falso</span>, <span class="string">"Idade inválida"</span>
    <span class="keyword">fim</span>
    
    <span class="keyword">se</span> <span class="keyword">não</span> <span class="function">valide_email</span>(email) <span class="keyword">então</span>
        <span class="keyword">retorne</span> <span class="keyword">falso</span>, <span class="string">"Email inválido"</span>
    <span class="keyword">fim</span>
    
    <span class="keyword">retorne</span> <span class="keyword">verdadeiro</span>, <span class="string">"Válido"</span>
<span class="keyword">fim</span>

<span class="comment">-- Testando</span>
<span class="keyword">local</span> ok, msg = <span class="function">valide_usuario</span>(<span class="string">"Ana"</span>, <span class="number">25</span>, <span class="string">"ana@exemplo.com"</span>)
<span class="function">exiba</span>(ok, msg)  <span class="comment">-- verdadeiro, "Válido"</span></pre>
</div>

<h2>Vantagens da programação procedural</h2>

<ul>
    <li>✅ Código reutilizável</li>
    <li>✅ Mais fácil de testar (funções isoladas)</li>
    <li>✅ Mais fácil de manter</li>
    <li>✅ Reduz duplicação de código</li>
    <li>✅ Facilita trabalho em equipe</li>
</ul>

<div class="success-box">
    Programação procedural é a base para código organizado e manutenível!
</div>

<div class="mt-4">
    <a href="?page=paradigma-oo" class="btn btn-sol">
        Próximo: Orientação a Objetos <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
