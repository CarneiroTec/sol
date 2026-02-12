<h1>🧪 Biblioteca: Teste</h1>
<p class="lead">Framework de testes unitários extraordinário integrado à linguagem!</p>

<span class="emoji-big">✅</span>

<h2>Por que testar?</h2>
<p>
    Testes são como redes de segurança: você escreve uma vez e eles protegem seu código para sempre.
    Com a biblioteca <code>teste</code>, você pode validar que seu código funciona corretamente!
</p>

<h2>Seu primeiro teste</h2>

<div class="code-block">
<pre><span class="function">teste.grupo</span>(<span class="string">"Calculadora"</span>, <span class="keyword">função</span>()
    <span class="function">teste.descreva</span>(<span class="string">"operações matemáticas básicas"</span>)
    
    <span class="function">teste.caso</span>(<span class="string">"deve somar dois números"</span>, <span class="keyword">função</span>()
        <span class="function">teste.afirme_igual</span>(<span class="number">5</span>, <span class="number">2</span> + <span class="number">3</span>)
    <span class="keyword">fim</span>)
<span class="keyword">fim</span>)

<span class="function">teste.relatorio</span>()</pre>
</div>

<div class="tip-box">
    O relatório mostra ✓ para testes que passaram e ✗ para falhos!
</div>

<h2>Estrutura de Grupos</h2>
<p>Organize seus testes em grupos lógicos que podem ser aninhados:</p>

<div class="code-block">
<pre><span class="function">teste.grupo</span>(<span class="string">"Usuários"</span>, <span class="keyword">função</span>()
    <span class="function">teste.descreva</span>(<span class="string">"gerencia usuários do sistema"</span>)
    
    <span class="function">teste.grupo</span>(<span class="string">"Criação"</span>, <span class="keyword">função</span>()
        <span class="function">teste.caso</span>(<span class="string">"cria usuário válido"</span>, <span class="keyword">função</span>()
            <span class="comment">-- seu teste aqui</span>
        <span class="keyword">fim</span>)
    <span class="keyword">fim</span>)
    
    <span class="function">teste.grupo</span>(<span class="string">"Exclusão"</span>, <span class="keyword">função</span>()
        <span class="function">teste.caso</span>(<span class="string">"remove usuário"</span>, <span class="keyword">função</span>()
            <span class="comment">-- seu teste aqui</span>
        <span class="keyword">fim</span>)
    <span class="keyword">fim</span>)
<span class="keyword">fim</span>)</pre>
</div>

<h2>Hooks de Ciclo de Vida</h2>
<p>Execute código antes e depois dos testes:</p>

<div class="code-block">
<pre><span class="function">teste.grupo</span>(<span class="string">"Banco de Dados"</span>, <span class="keyword">função</span>()
    <span class="keyword">local</span> conexao
    
    <span class="function">teste.antes_de_todos</span>(<span class="keyword">função</span>()
        <span class="comment">-- Executado UMA vez antes de todos os testes</span>
        conexao = banco.conecte()
    <span class="keyword">fim</span>)
    
    <span class="function">teste.antes_de_cada</span>(<span class="keyword">função</span>()
        <span class="comment">-- Executado ANTES de cada teste</span>
        conexao:limpe()
    <span class="keyword">fim</span>)
    
    <span class="function">teste.depois_de_cada</span>(<span class="keyword">função</span>()
        <span class="comment">-- Executado DEPOIS de cada teste</span>
    <span class="keyword">fim</span>)
    
    <span class="function">teste.depois_de_todos</span>(<span class="keyword">função</span>()
        <span class="comment">-- Executado UMA vez depois de todos os testes</span>
        conexao:feche()
    <span class="keyword">fim</span>)
    
    <span class="function">teste.caso</span>(<span class="string">"insere registro"</span>, <span class="keyword">função</span>()
        <span class="comment">-- A conexão já está pronta!</span>
    <span class="keyword">fim</span>)
<span class="keyword">fim</span>)</pre>
</div>

<h2>Asserções</h2>

<h3>Igualdade e Diferença</h3>
<div class="code-block">
<pre><span class="function">teste.afirme_igual</span>(<span class="number">42</span>, resultado)       <span class="comment">-- esperado == atual</span>
<span class="function">teste.afirme_diferente</span>(a, b)            <span class="comment">-- a != b</span></pre>
</div>

<h3>Valores Booleanos e Nulos</h3>
<div class="code-block">
<pre><span class="function">teste.afirme</span>(condicao)                  <span class="comment">-- condição é verdadeira</span>
<span class="function">teste.afirme_verdadeiro</span>(valor)          <span class="comment">-- valor == verdadeiro</span>
<span class="function">teste.afirme_falso</span>(valor)               <span class="comment">-- valor == falso</span>
<span class="function">teste.afirme_nulo</span>(valor)                <span class="comment">-- valor == nulo</span>
<span class="function">teste.afirme_não_nulo</span>(valor)            <span class="comment">-- valor != nulo</span></pre>
</div>

<h3>Tipos</h3>
<div class="code-block">
<pre><span class="function">teste.afirme_tipo</span>(<span class="string">"número"</span>, <span class="number">42</span>)          <span class="comment">-- valida tipo</span>
<span class="function">teste.afirme_tipo</span>(<span class="string">"texto"</span>, <span class="string">"Sol"</span>)
<span class="function">teste.afirme_tipo</span>(<span class="string">"tabela"</span>, {})
<span class="function">teste.afirme_tipo</span>(<span class="string">"função"</span>, <span class="keyword">função</span>() <span class="keyword">fim</span>)</pre>
</div>

<h3>Comparações</h3>
<div class="code-block">
<pre><span class="function">teste.afirme_maior</span>(<span class="number">10</span>, <span class="number">5</span>)               <span class="comment">-- 10 > 5</span>
<span class="function">teste.afirme_menor</span>(<span class="number">5</span>, <span class="number">10</span>)               <span class="comment">-- 5 < 10</span>
<span class="function">teste.afirme_maior_igual</span>(<span class="number">10</span>, <span class="number">10</span>)        <span class="comment">-- 10 >= 10</span>
<span class="function">teste.afirme_menor_igual</span>(<span class="number">5</span>, <span class="number">10</span>)         <span class="comment">-- 5 <= 10</span></pre>
</div>

<h3>Coleções</h3>
<div class="code-block">
<pre><span class="function">teste.afirme_contem</span>({<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>}, <span class="number">2</span>)      <span class="comment">-- tabela contém valor</span>
<span class="function">teste.afirme_tamanho</span>(<span class="number">3</span>, {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>})     <span class="comment">-- tamanho == 3</span>
<span class="function">teste.afirme_vazio</span>({})                  <span class="comment">-- tabela está vazia</span></pre>
</div>

<h3>Erros</h3>
<div class="code-block">
<pre><span class="function">teste.afirme_erro</span>(<span class="keyword">função</span>()
    lance_erro(<span class="string">"boom!"</span>)
<span class="keyword">fim</span>)  <span class="comment">-- deve lançar erro</span>

<span class="function">teste.afirme_sem_erro</span>(<span class="keyword">função</span>()
    <span class="keyword">local</span> x = <span class="number">1</span> + <span class="number">1</span>
<span class="keyword">fim</span>)  <span class="comment">-- não deve lançar erro</span></pre>
</div>

<h3>Controle</h3>
<div class="code-block">
<pre><span class="function">teste.falhe</span>(<span class="string">"não deveria chegar aqui"</span>)  <span class="comment">-- força falha</span>
<span class="function">teste.pule</span>(<span class="string">"funcionalidade pendente"</span>)   <span class="comment">-- pula teste</span></pre>
</div>

<h3>Execução e Controle</h3>
<div class="code-block">
<pre><span class="function">teste.execute</span>()                           <span class="comment">-- executa todos os testes pendentes</span>
<span class="function">teste.reinicie</span>()                          <span class="comment">-- reinicia contadores de teste</span></pre>
</div>

<h2>Relatório</h2>
<p>No final, chame <code>teste.relatorio()</code> para ver um resumo visual:</p>

<div class="code-block">
<pre>╔══════════════════════════════════════════════════════════╗
║                    RELATÓRIO DE TESTES                   ║
╠══════════════════════════════════════════════════════════╣
║  Total: 11 | ✓ Passou: 10 | ✗ Falhou: 1 | ○ Pulados: 0   ║
║  Tempo: 0.013s                                           ║
╚══════════════════════════════════════════════════════════╝</pre>
</div>

<div class="success-box">
    Testes são a base de um código confiável. Use a biblioteca <code>teste</code> em todos os seus projetos!
</div>

<div class="mt-4">
    <a href="?page=lib-matematica" class="btn btn-sol">
        Próximo: Matemática <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
