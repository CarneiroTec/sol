<h1>📚 Referência Rápida</h1>
<p class="lead">Documentação concisa para programadores experientes</p>

<div class="alert alert-info">
    <strong>💡 Dica:</strong> Esta é a documentação de referência. Para tutoriais detalhados, veja a <a href="?page=como-comecar">documentação didática</a>.
</div>

<h2>Palavras-chave</h2>

<table class="table table-dark table-striped">
    <thead>
        <tr><th>Palavra-chave</th><th>Uso</th><th>Exemplo</th></tr>
    </thead>
    <tbody>
        <tr><td><code>local</code></td><td>Variável local</td><td><code>local x = 10</code></td></tr>
        <tr><td><code>global</code></td><td>Variável global</td><td><code>global y = 20</code></td></tr>
        <tr><td><code>função</code></td><td>Declarar função</td><td><code>função f() fim</code></td></tr>
        <tr><td><code>retorne</code></td><td>Retornar valor</td><td><code>retorne x + 1</code></td></tr>
        <tr><td><code>se...então...fim</code></td><td>Condicional</td><td><code>se x > 0 então ... fim</code></td></tr>
        <tr><td><code>para...faça...fim</code></td><td>Loop</td><td><code>para i=1,10 faça ... fim</code></td></tr>
        <tr><td><code>em</code></td><td>Iterador</td><td><code>para k,v em pares(t) faça</code></td></tr>
        <tr><td><code>interrompa</code></td><td>Sair do loop</td><td><code>interrompa</code></td></tr>
        <tr><td><code>execute</code></td><td>Goto</td><td><code>execute ::label::</code></td></tr>
        <tr><td><code>e</code>, <code>ou</code>, <code>não</code></td><td>Operadores lógicos</td><td><code>x > 0 e x < 10</code></td></tr>
        <tr><td><code>verdadeiro</code>, <code>falso</code>, <code>nulo</code></td><td>Literais</td><td><code>local ok = verdadeiro</code></td></tr>
    </tbody>
</table>

<div class="alert alert-warning">
    <strong>⚠️ Não existem:</strong> <code>enquanto</code>, <code>faça...enquanto</code>, <code>repita...até</code> (Use <code>execute</code> e rótulos)
</div>

<h2>Bibliotecas Padrão</h2>

<h3>matemática</h3>
<code>pi, enorme, inteiro_máximo, inteiro_mínimo, obtenha_valor_absoluto, arredonde_para_piso, arredonde_para_teto, obtenha_máximo, obtenha_mínimo, obtenha_raiz_quadrada, obtenha_seno, obtenha_cosseno, obtenha_tangente, obtenha_arco_seno, obtenha_arco_cosseno, obtenha_arco_tangente, converta_para_radianos, converta_para_graus, obtenha_exponencial, obtenha_logaritmo, gere_aleatório, defina_semente_aleatória, converta_para_inteiro, obtenha_resto_flutuante, separe_fração_inteiro, obtenha_tipo</code>

<h3>texto</h3>
<code>obtenha_comprimento, converta_para_maiúscula, converta_para_minúscula, obtenha_subtexto, repita, inverta, encontre, substitua_globalmente, formate, obtenha_byte, crie_caractere, combine, combine_globalmente, empacote, desempacote, obtenha_tamanho_pacote</code>

<h3>tabela</h3>
<code>crie, insira, remova, concatene, ordene, empacote, desempacote, mova</code>

<h3>terminal (E/S)</h3>
<code>feche, despeje, defina_entrada, itere_linhas, abra, defina_saída, abra_processo, leia, crie_arquivo_temporário, obtenha_tipo, escreva</code>

<h3>sistema_operacional</h3>
<code>obtenha_relógio, obtenha_data, calcule_diferença_tempo, execute, saia, obtenha_variável_ambiente, remova, renomeie, crie_pasta, defina_localidade, obtenha_tempo, gere_nome_temporário</code>

<h3>utf8</h3>
<code>obtenha_deslocamento, obtenha_ponto_código, crie_caractere, obtenha_comprimento, itere_códigos, padrão_caractere</code>

<h3>corrotina</h3>
<code>crie, retome, obtenha_executando, obtenha_estado, envolva, ceda, verifique_pode_ceder, feche</code>

<h3>filamento (Assíncrono)</h3>
<code>tarefa, inicie_loop, durma</code>

<h3>paralelismo</h3>
<code>execute_paralelo, aguarde_todos</code>

<h3>teste</h3>
<code>afirme, afirme_igual, afirme_verdadeiro, afirme_falso</code>

<h2>Metamétodos</h2>

<table class="table table-dark table-striped">
    <thead>
        <tr><th>Metamétodo</th><th>Descrição</th></tr>
    </thead>
    <tbody>
        <tr><td><code>__soma</code></td><td>Operador +</td></tr>
        <tr><td><code>__subtração</code></td><td>Operador -</td></tr>
        <tr><td><code>__multiplicação</code></td><td>Operador *</td></tr>
        <tr><td><code>__divisão</code></td><td>Operador /</td></tr>
        <tr><td><code>__divisão_inteira</code></td><td>Operador //</td></tr>
        <tr><td><code>__módulo</code></td><td>Operador %</td></tr>
        <tr><td><code>__potência</code></td><td>Operador ^</td></tr>
        <tr><td><code>__negação_unária</code></td><td>Operador - unário</td></tr>
        <tr><td><code>__e_bit_a_bit</code></td><td>Operador & (bitwise)</td></tr>
        <tr><td><code>__ou_bit_a_bit</code></td><td>Operador | (bitwise)</td></tr>
        <tr><td><code>__ou_exclusivo_bit_a_bit</code></td><td>Operador ~ (bitwise XOR)</td></tr>
        <tr><td><code>__não_bit_a_bit</code></td><td>Operador ~ unário</td></tr>
        <tr><td><code>__deslocamento_esquerda</code></td><td>Operador <<</td></tr>
        <tr><td><code>__deslocamento_direita</code></td><td>Operador >></td></tr>
        <tr><td><code>__concatenação</code></td><td>Operador ..</td></tr>
        <tr><td><code>__comprimento</code></td><td>Operador #</td></tr>
        <tr><td><code>__igualdade</code></td><td>Operador ==</td></tr>
        <tr><td><code>__menor_que</code></td><td>Operador <</td></tr>
        <tr><td><code>__menor_ou_igual</code></td><td>Operador <=</td></tr>
        <tr><td><code>__índice</code></td><td>Acesso t[k]</td></tr>
        <tr><td><code>__novo_índice</code></td><td>Atribuição t[k]=v</td></tr>
        <tr><td><code>__chamada</code></td><td>Chamar como função</td></tr>
        <tr><td><code>__coletor_de_lixo</code></td><td>Finalização (GC)</td></tr>
        <tr><td><code>__modo</code></td><td>Tabelas fracas</td></tr>
        <tr><td><code>__nome</code></td><td>Nome do tipo</td></tr>
        <tr><td><code>__feche</code></td><td>Fechar recurso</td></tr>
    </tbody>
</table>

<h2>Padrões Comuns</h2>

<h3>Simular else</h3>
<div class="code-block">
<pre><span class="keyword">se</span> condicao <span class="keyword">então</span>
    <span class="comment">-- código se verdadeiro</span>
<span class="keyword">fim</span>

<span class="keyword">se</span> <span class="keyword">não</span> condicao <span class="keyword">então</span>
    <span class="comment">-- código se falso</span>
<span class="keyword">fim</span></pre>
</div>

<h3>Classe/Construtor</h3>
<div class="code-block">
<pre><span class="keyword">local</span> Classe = {}
Classe.__índice = Classe

<span class="keyword">função</span> <span class="function">Classe.metodo</span>(ego)
    <span class="keyword">retorne</span> ego.campo
<span class="keyword">fim</span>

<span class="comment">-- Construtor com __chame</span>
<span class="function">defina_metatabela</span>(Classe, {
    __chame = <span class="keyword">função</span>(classe, param)
        <span class="keyword">local</span> ego = <span class="function">defina_metatabela</span>({}, classe)
        ego.campo = param
        <span class="keyword">retorne</span> ego
    <span class="keyword">fim</span>
})

<span class="keyword">local</span> obj = <span class="function">Classe</span>(<span class="string">"valor"</span>)
obj:<span class="function">metodo</span>()</pre>
</div>

<h3>Map/Filter/Reduce</h3>
<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">map</span>(t, f)
    <span class="keyword">local</span> r = {}
    <span class="keyword">para</span> i, v <span class="keyword">em</span> <span class="function">obtenha_pares_indexados</span>(t) <span class="keyword">faça</span>
        <span class="function">tabela.insira</span>(r, <span class="function">f</span>(v))
    <span class="keyword">fim</span>
    <span class="keyword">retorne</span> r
<span class="keyword">fim</span></pre>
</div>

<h2>Links Rápidos</h2>

<div class="row g-3">
    <div class="col-md-6">
        <a href="?page=tipo-numeros" class="btn btn-outline-light w-100">Números</a>
    </div>
    <div class="col-md-6">
        <a href="?page=tipo-texto" class="btn btn-outline-light w-100">Texto</a>
    </div>
    <div class="col-md-6">
        <a href="?page=tipo-tabelas" class="btn btn-outline-light w-100">Tabelas</a>
    </div>
    <div class="col-md-6">
        <a href="?page=metamethods" class="btn btn-outline-light w-100">Metamétodos</a>
    </div>
    <div class="col-md-6">
        <a href="?page=paradigma-oo" class="btn btn-outline-light w-100">OO</a>
    </div>
    <div class="col-md-6">
        <a href="?page=paradigma-funcional" class="btn btn-outline-light w-100">Funcional</a>
    </div>
</div>
