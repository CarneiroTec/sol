<h1>🔄 Biblioteca: Corrotinas</h1>
<p class="lead">Crie programas que podem pausar e continuar sua execução!</p>

<span class="emoji-big">⚡</span>

<h2>O que são Corrotinas?</h2>
<p>
    Corrotinas são como funções que podem pausar sua execução e depois continuar de onde pararam.
    Isso é útil para criar programas que fazem várias coisas "ao mesmo tempo" de forma cooperativa.
</p>

<h2>Criar Corrotina</h2>

<div class="code-block">
<pre><span class="comment">-- Criar corrotina a partir de uma função</span>
<span class="keyword">função</span> <span class="function">tarefa</span>()
    <span class="function">exiba</span>(<span class="string">"Início"</span>)
    <span class="function">corrotina.ceda</span>()
    <span class="function">exiba</span>(<span class="string">"Meio"</span>)
    <span class="function">corrotina.ceda</span>()
    <span class="function">exiba</span>(<span class="string">"Fim"</span>)
<span class="keyword">fim</span>

<span class="keyword">local</span> co = <span class="function">corrotina.crie</span>(tarefa)</pre>
</div>

<h2>Retomar Execução</h2>

<div class="code-block">
<pre><span class="comment">-- Retomar corrotina</span>
<span class="keyword">local</span> sucesso, resultado = <span class="function">corrotina.retome</span>(co)
<span class="comment">-- Exibe: "Início"</span>

<span class="function">corrotina.retome</span>(co)
<span class="comment">-- Exibe: "Meio"</span>

<span class="function">corrotina.retome</span>(co)
<span class="comment">-- Exibe: "Fim"</span>

<span class="comment">-- Verificar sucesso</span>
<span class="keyword">se</span> <span class="keyword">não</span> sucesso <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Erro: "</span> .. resultado)
<span class="keyword">fim</span></pre>
</div>

<h2>Ceder Execução</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">contador</span>()
    <span class="keyword">para</span> i = 1, 5 <span class="keyword">faça</span>
        <span class="function">exiba</span>(<span class="string">"Contando: "</span> .. i)
        <span class="function">corrotina.ceda</span>(i)  <span class="comment">-- Retorna valor ao ceder</span>
    <span class="keyword">fim</span>
<span class="keyword">fim</span>

<span class="keyword">local</span> co = <span class="function">corrotina.crie</span>(contador)

<span class="keyword">enquanto</span> <span class="keyword">verdadeiro</span> <span class="keyword">faça</span>
    <span class="keyword">local</span> ok, valor = <span class="function">corrotina.retome</span>(co)
    <span class="keyword">se</span> <span class="keyword">não</span> ok <span class="keyword">ou</span> <span class="keyword">não</span> valor <span class="keyword">então</span>
        <span class="keyword">interrompa</span>
    <span class="keyword">fim</span>
    <span class="function">exiba</span>(<span class="string">"Recebido: "</span> .. valor)
<span class="keyword">fim</span></pre>
</div>

<h2>Verificar Estado</h2>

<div class="code-block">
<pre><span class="keyword">local</span> co = <span class="function">corrotina.crie</span>(<span class="keyword">função</span>()
    <span class="function">corrotina.ceda</span>()
<span class="keyword">fim</span>)

<span class="comment">-- Verificar estado</span>
<span class="keyword">local</span> estado = <span class="function">corrotina.obtenha_estado</span>(co)
<span class="function">exiba</span>(estado)  <span class="comment">-- "suspenso"</span>

<span class="function">corrotina.retome</span>(co)
<span class="function">exiba</span>(<span class="function">corrotina.obtenha_estado</span>(co))  <span class="comment">-- "suspenso"</span>

<span class="function">corrotina.retome</span>(co)
<span class="function">exiba</span>(<span class="function">corrotina.obtenha_estado</span>(co))  <span class="comment">-- "morto"</span>

<span class="comment">-- Estados possíveis:</span>
<span class="comment">-- "executando" - está executando agora</span>
<span class="comment">-- "suspenso" - pausada, pode ser retomada</span>
<span class="comment">-- "normal" - ativa mas não executando</span>
<span class="comment">-- "morto" - terminou execução</span></pre>
</div>

<h2>Obter Corrotina Atual</h2>

<div class="code-block">
<pre><span class="comment">-- Obter corrotina em execução</span>
<span class="keyword">local</span> co_atual, eh_principal = <span class="function">corrotina.obtenha_executando</span>()

<span class="keyword">se</span> eh_principal <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Executando na thread principal"</span>)
<span class="keyword">fim</span>

<span class="keyword">se</span> <span class="keyword">não</span> eh_principal <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Executando em corrotina"</span>)
<span class="keyword">fim</span></pre>
</div>

<h2>Verificar se Pode Ceder</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">pode_pausar</span>()
    <span class="keyword">se</span> <span class="function">corrotina.verifique_pode_ceder</span>() <span class="keyword">então</span>
        <span class="function">exiba</span>(<span class="string">"Posso pausar aqui"</span>)
        <span class="function">corrotina.ceda</span>()
    <span class="keyword">fim</span>
    
    <span class="keyword">se</span> <span class="keyword">não</span> <span class="function">corrotina.verifique_pode_ceder</span>() <span class="keyword">então</span>
        <span class="function">exiba</span>(<span class="string">"Não posso pausar (não estou em corrotina)"</span>)
    <span class="keyword">fim</span>
<span class="keyword">fim</span>

<span class="comment">-- Na thread principal</span>
<span class="function">pode_pausar</span>()  <span class="comment">-- "Não posso pausar"</span>

<span class="comment">-- Em corrotina</span>
<span class="keyword">local</span> co = <span class="function">corrotina.crie</span>(pode_pausar)
<span class="function">corrotina.retome</span>(co)  <span class="comment">-- "Posso pausar aqui"</span></pre>
</div>

<h2>Envolver Corrotina</h2>

<div class="code-block">
<pre><span class="comment">-- Criar função que automaticamente retoma</span>
<span class="keyword">função</span> <span class="function">gerador</span>()
    <span class="keyword">para</span> i = 1, 3 <span class="keyword">faça</span>
        <span class="function">corrotina.ceda</span>(i * 10)
    <span class="keyword">fim</span>
<span class="keyword">fim</span>

<span class="keyword">local</span> proxima = <span class="function">corrotina.envolva</span>(gerador)

<span class="comment">-- Chamar como função normal</span>
<span class="function">exiba</span>(<span class="function">proxima</span>())  <span class="comment">-- 10</span>
<span class="function">exiba</span>(<span class="function">proxima</span>())  <span class="comment">-- 20</span>
<span class="function">exiba</span>(<span class="function">proxima</span>())  <span class="comment">-- 30</span></pre>
</div>

<h2>Fechar Corrotina</h2>

<div class="code-block">
<pre><span class="keyword">local</span> co = <span class="function">corrotina.crie</span>(<span class="keyword">função</span>()
    <span class="keyword">local</span> recurso = <span class="string">"aberto"</span>
    <span class="function">corrotina.ceda</span>()
    <span class="function">exiba</span>(<span class="string">"Limpando recurso"</span>)
<span class="keyword">fim</span>)

<span class="function">corrotina.retome</span>(co)

<span class="comment">-- Fechar corrotina (executa limpeza)</span>
<span class="keyword">local</span> sucesso, erro = <span class="function">corrotina.feche</span>(co)
<span class="keyword">se</span> sucesso <span class="keyword">então</span>
    <span class="function">exiba</span>(<span class="string">"Corrotina fechada"</span>)
<span class="keyword">fim</span></pre>
</div>

<h2>Exemplo: Produtor-Consumidor</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">produtor</span>()
    <span class="keyword">para</span> i = 1, 5 <span class="keyword">faça</span>
        <span class="function">exiba</span>(<span class="string">"Produzindo item "</span> .. i)
        <span class="function">corrotina.ceda</span>(i)
    <span class="keyword">fim</span>
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">consumidor</span>(prod)
    <span class="keyword">enquanto</span> <span class="keyword">verdadeiro</span> <span class="keyword">faça</span>
        <span class="keyword">local</span> ok, item = <span class="function">corrotina.retome</span>(prod)
        <span class="keyword">se</span> <span class="keyword">não</span> ok <span class="keyword">ou</span> <span class="keyword">não</span> item <span class="keyword">então</span>
            <span class="keyword">interrompa</span>
        <span class="keyword">fim</span>
        <span class="function">exiba</span>(<span class="string">"Consumindo item "</span> .. item)
    <span class="keyword">fim</span>
<span class="keyword">fim</span>

<span class="keyword">local</span> prod = <span class="function">corrotina.crie</span>(produtor)
<span class="function">consumidor</span>(prod)</pre>
</div>

<h2>Exemplo: Iterador Customizado</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">fibonacci</span>(n)
    <span class="keyword">retorne</span> <span class="function">corrotina.envolva</span>(<span class="keyword">função</span>()
        <span class="keyword">local</span> a, b = 0, 1
        <span class="keyword">para</span> i = 1, n <span class="keyword">faça</span>
            <span class="function">corrotina.ceda</span>(a)
            a, b = b, a + b
        <span class="keyword">fim</span>
    <span class="keyword">fim</span>)
<span class="keyword">fim</span>

<span class="comment">-- Usar como iterador</span>
<span class="keyword">local</span> fib = <span class="function">fibonacci</span>(10)
<span class="keyword">para</span> i = 1, 10 <span class="keyword">faça</span>
    <span class="function">exiba</span>(<span class="function">fib</span>())
<span class="keyword">fim</span>
<span class="comment">-- Saída: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34</span></pre>
</div>

<h2>Exemplo: Máquina de Estados</h2>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">maquina_estados</span>()
    <span class="function">exiba</span>(<span class="string">"Estado: INICIALIZANDO"</span>)
    <span class="function">corrotina.ceda</span>(<span class="string">"inicializado"</span>)
    
    <span class="function">exiba</span>(<span class="string">"Estado: PROCESSANDO"</span>)
    <span class="function">corrotina.ceda</span>(<span class="string">"processando"</span>)
    
    <span class="function">exiba</span>(<span class="string">"Estado: FINALIZANDO"</span>)
    <span class="function">corrotina.ceda</span>(<span class="string">"finalizado"</span>)
    
    <span class="function">exiba</span>(<span class="string">"Estado: COMPLETO"</span>)
<span class="keyword">fim</span>

<span class="keyword">local</span> maquina = <span class="function">corrotina.crie</span>(maquina_estados)

<span class="keyword">enquanto</span> <span class="function">corrotina.obtenha_estado</span>(maquina) ~= <span class="string">"morto"</span> <span class="keyword">faça</span>
    <span class="keyword">local</span> ok, estado = <span class="function">corrotina.retome</span>(maquina)
    <span class="keyword">se</span> estado <span class="keyword">então</span>
        <span class="function">exiba</span>(<span class="string">"→ Transição para: "</span> .. estado)
    <span class="keyword">fim</span>
<span class="keyword">fim</span></pre>
</div>

<div class="tip-box">
    Corrotinas são diferentes de threads! Elas são cooperativas, não preemptivas. Só trocam de contexto quando você chama <code>ceda()</code>.
</div>

<div class="warning-box">
    Não confunda corrotinas com paralelismo real. Apenas uma corrotina executa por vez!
</div>

<div class="success-box">
    Corrotinas são perfeitas para criar iteradores, máquinas de estado e código assíncrono cooperativo!
</div>

<div class="mt-4">
    <a href="?page=lib-assincrono" class="btn btn-sol">
        Próximo: Biblioteca Assíncrona <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>