<h1>🎯 Programação Orientada a Objetos</h1>
<p class="lead">Construa classes, objetos, herança e interfaces em Sol!</p>

<span class="emoji-big">📐</span>

<h2>Conceitos Fundamentais</h2>

<p>Sol não tem classes nativas, mas você pode simular OO completo usando <strong>tabelas</strong> e <strong>metamétodos</strong>:</p>

<table class="table table-dark table-striped">
    <thead><tr><th>Conceito OO</th><th>Em Sol</th><th>Descrição</th></tr></thead>
    <tbody>
        <tr><td><strong>Classe</strong></td><td>Tabela com métodos</td><td>Template/molde para criar objetos</td></tr>
        <tr><td><strong>Instância/Objeto</strong></td><td>Tabela com dados</td><td>Cópia individual com seus próprios valores</td></tr>
        <tr><td><strong>Construtor</strong></td><td><code>__chame</code></td><td>Função que cria novas instâncias</td></tr>
        <tr><td><strong>Herança</strong></td><td><code>__índice</code> encadeado</td><td>Classe filha herda de classe pai</td></tr>
        <tr><td><strong>Interface</strong></td><td>Duck typing</td><td>"Se anda como pato e faz quack..."</td></tr>
    </tbody>
</table>

<h2>Ponto (.) vs Dois Pontos (:)</h2>

<p>Esta é uma das diferenças mais importantes em Sol:</p>

<table class="table table-dark table-bordered">
    <thead><tr><th>Sintaxe</th><th>O que acontece</th><th>Equivalente</th></tr></thead>
    <tbody>
        <tr>
            <td><code>obj:metodo(arg)</code></td>
            <td><strong>obj</strong> é passado automaticamente como 1º parâmetro</td>
            <td><code>obj.metodo(obj, arg)</code></td>
        </tr>
        <tr>
            <td><code>obj.metodo(arg)</code></td>
            <td>Nada é passado automaticamente</td>
            <td>Apenas <code>arg</code> é passado</td>
        </tr>
    </tbody>
</table>

<h3>Exemplo Visual</h3>

<div class="code-block">
<pre><span class="keyword">local</span> Pessoa = {}
Pessoa.__índice = Pessoa

<span class="keyword">função</span> <span class="function">Pessoa.apresente</span>(ego)  <span class="comment">-- 'ego' é o primeiro parâmetro</span>
    <span class="function">exiba</span>(<span class="string">"Olá, sou "</span> .. ego.nome)
<span class="keyword">fim</span>

<span class="keyword">local</span> ana = <span class="function">defina_metatabela</span>({nome = <span class="string">"Ana"</span>}, Pessoa)

<span class="comment">-- ✅ COM DOIS PONTOS: 'ana' é passado automaticamente como 'ego'</span>
ana:<span class="function">apresente</span>()
<span class="comment">-- É o mesmo que: ana.apresente(ana)</span>
<span class="comment">-- Resultado: "Olá, sou Ana"</span>

<span class="comment">-- ❌ COM PONTO: nada é passado como 'ego'!</span>
ana.<span class="function">apresente</span>()
<span class="comment">-- Resultado: ERRO! 'ego' é nulo, não tem .nome</span>

<span class="comment">-- ✅ COM PONTO + objeto manual: funciona</span>
ana.<span class="function">apresente</span>(ana)
<span class="comment">-- Resultado: "Olá, sou Ana"</span></pre>
</div>

<div class="warning-box">
    <strong>⚠️ Regra de Ouro:</strong><br>
    • Use <code>:</code> para <strong>chamar</strong> métodos em objetos<br>
    • Use <code>.</code> para <strong>definir</strong> métodos na classe
</div>

<h3>Quando usar cada um</h3>

<div class="code-block">
<pre><span class="comment">-- DEFININDO métodos: use PONTO</span>
<span class="keyword">função</span> <span class="function">Pessoa.apresente</span>(ego)  <span class="comment">-- .</span>
    <span class="function">exiba</span>(<span class="string">"Olá, sou "</span> .. ego.nome)
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">Pessoa.caminhe</span>(ego, passos)  <span class="comment">-- .</span>
    <span class="function">exiba</span>(ego.nome .. <span class="string">" caminhou "</span> .. passos .. <span class="string">" passos"</span>)
<span class="keyword">fim</span>

<span class="comment">-- CHAMANDO métodos: use DOIS PONTOS</span>
ana:<span class="function">apresente</span>()       <span class="comment">-- :</span>
ana:<span class="function">caminhe</span>(<span class="number">10</span>)      <span class="comment">-- : (ego=ana, passos=10)</span></pre>
</div>

<h2>Classe vs Instância</h2>

<p>É importante entender a diferença:</p>

<div class="code-block">
<pre><span class="comment">-- CLASSE: é o "molde" (uma tabela com métodos)</span>
<span class="keyword">local</span> Pessoa = {}
Pessoa.__índice = Pessoa

<span class="keyword">função</span> <span class="function">Pessoa.apresente</span>(ego)
    <span class="function">exiba</span>(<span class="string">"Olá, sou "</span> .. ego.nome)
<span class="keyword">fim</span>

<span class="comment">-- INSTÂNCIAS: são os objetos criados a partir do molde</span>
<span class="keyword">local</span> ana = <span class="function">defina_metatabela</span>({nome = <span class="string">"Ana"</span>}, Pessoa)
<span class="keyword">local</span> joao = <span class="function">defina_metatabela</span>({nome = <span class="string">"João"</span>}, Pessoa)

<span class="comment">-- Cada instância tem seus próprios dados</span>
ana:<span class="function">apresente</span>()   <span class="comment">-- "Olá, sou Ana"</span>
joao:<span class="function">apresente</span>()  <span class="comment">-- "Olá, sou João"</span>

<span class="comment">-- Mas compartilham os mesmos métodos da classe!</span>
<span class="function">exiba</span>(ana.apresente == joao.apresente)  <span class="comment">-- verdadeiro</span></pre>
</div>

<div class="tip-box">
    💡 <strong>Classe</strong> = tabela com funções (métodos)<br>
    💡 <strong>Instância</strong> = tabela com dados, ligada à classe via <code>__índice</code>
</div>

<h2>Construtor com __chame</h2>

<p>Use <code>__chame</code> para criar um construtor elegante:</p>

<div class="code-block">
<pre><span class="keyword">local</span> Pessoa = {}
Pessoa.__índice = Pessoa

<span class="keyword">função</span> <span class="function">Pessoa.apresente</span>(ego)
    <span class="function">exiba</span>(<span class="string">"Olá, sou "</span> .. ego.nome .. <span class="string">", tenho "</span> .. ego.idade .. <span class="string">" anos"</span>)
<span class="keyword">fim</span>

<span class="comment">-- Construtor: permite chamar Pessoa() como função</span>
<span class="function">defina_metatabela</span>(Pessoa, {
    __chame = <span class="keyword">função</span>(classe, nome, idade)
        <span class="keyword">local</span> ego = <span class="function">defina_metatabela</span>({}, classe)
        ego.nome = nome
        ego.idade = idade
        <span class="keyword">retorne</span> ego
    <span class="keyword">fim</span>
})

<span class="comment">-- Agora você pode criar instâncias assim:</span>
<span class="keyword">local</span> p1 = <span class="function">Pessoa</span>(<span class="string">"Ana"</span>, <span class="number">25</span>)     <span class="comment">-- Cria instância</span>
<span class="keyword">local</span> p2 = <span class="function">Pessoa</span>(<span class="string">"João"</span>, <span class="number">30</span>)    <span class="comment">-- Outra instância</span>

p1:<span class="function">apresente</span>()  <span class="comment">-- "Olá, sou Ana, tenho 25 anos"</span>
p2:<span class="function">apresente</span>()  <span class="comment">-- "Olá, sou João, tenho 30 anos"</span></pre>
</div>

<h3>Como funciona o construtor?</h3>

<table class="table table-dark table-bordered">
    <thead><tr><th>Passo</th><th>Código</th><th>O que acontece</th></tr></thead>
    <tbody>
        <tr><td>1</td><td><code>Pessoa("Ana", 25)</code></td><td><code>__chame</code> é invocado</td></tr>
        <tr><td>2</td><td><code>defina_metatabela({}, classe)</code></td><td>Cria tabela vazia ligada à classe</td></tr>
        <tr><td>3</td><td><code>ego.nome = nome</code></td><td>Define dados na nova instância</td></tr>
        <tr><td>4</td><td><code>retorne ego</code></td><td>Retorna a instância pronta</td></tr>
    </tbody>
</table>

<h2>Herança</h2>

<p>Para criar uma classe que herda de outra:</p>

<div class="code-block">
<pre><span class="comment">-- ========== CLASSE BASE ==========</span>
<span class="keyword">local</span> Animal = {}
Animal.__índice = Animal

<span class="keyword">função</span> <span class="function">Animal.fale</span>(ego)
    <span class="function">exiba</span>(ego.nome .. <span class="string">" faz algum som"</span>)
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">Animal.coma</span>(ego)
    <span class="function">exiba</span>(ego.nome .. <span class="string">" está comendo"</span>)
<span class="keyword">fim</span>

<span class="function">defina_metatabela</span>(Animal, {
    __chame = <span class="keyword">função</span>(classe, nome)
        <span class="keyword">local</span> ego = <span class="function">defina_metatabela</span>({}, classe)
        ego.nome = nome
        <span class="keyword">retorne</span> ego
    <span class="keyword">fim</span>
})

<span class="comment">-- ========== CLASSE DERIVADA ==========</span>
<span class="keyword">local</span> Cachorro = <span class="function">defina_metatabela</span>({}, {__índice = Animal})  <span class="comment">-- Herda de Animal</span>
Cachorro.__índice = Cachorro

<span class="comment">-- SOBRESCREVER método (override)</span>
<span class="keyword">função</span> <span class="function">Cachorro.fale</span>(ego)
    <span class="function">exiba</span>(ego.nome .. <span class="string">" late: Au au!"</span>)
<span class="keyword">fim</span>

<span class="comment">-- ADICIONAR novo método</span>
<span class="keyword">função</span> <span class="function">Cachorro.busque</span>(ego)
    <span class="function">exiba</span>(ego.nome .. <span class="string">" está buscando a bolinha!"</span>)
<span class="keyword">fim</span>

<span class="function">defina_metatabela</span>(Cachorro, {
    __chame = <span class="keyword">função</span>(classe, nome, raca)
        <span class="keyword">local</span> ego = <span class="function">Animal</span>(nome)       <span class="comment">-- Chama construtor pai</span>
        <span class="function">defina_metatabela</span>(ego, classe)  <span class="comment">-- Muda para classe filha</span>
        ego.raca = raca
        <span class="keyword">retorne</span> ego
    <span class="keyword">fim</span>
})

<span class="comment">-- ========== USANDO ==========</span>
<span class="keyword">local</span> rex = <span class="function">Cachorro</span>(<span class="string">"Rex"</span>, <span class="string">"Labrador"</span>)

rex:<span class="function">fale</span>()    <span class="comment">-- "Rex late: Au au!" (método sobrescrito)</span>
rex:<span class="function">coma</span>()    <span class="comment">-- "Rex está comendo" (herdado de Animal)</span>
rex:<span class="function">busque</span>()  <span class="comment">-- "Rex está buscando a bolinha!" (novo método)</span></pre>
</div>

<div class="tip-box">
    💡 <strong>Cadeia de herança:</strong><br>
    <code>rex</code> → <code>Cachorro</code> → <code>Animal</code><br><br>
    Quando você chama <code>rex:coma()</code>, Sol procura em <code>rex</code>, não acha, procura em <code>Cachorro</code>, não acha, procura em <code>Animal</code> e encontra!
</div>

<h2>Interfaces (Duck Typing)</h2>

<p>Sol usa <strong>duck typing</strong>: "Se anda como pato e faz quack como pato, então é um pato!"</p>

<p>Em vez de declarar interfaces formalmente, você apenas espera que um objeto tenha certos métodos:</p>

<div class="code-block">
<pre><span class="comment">-- Função que espera algo que tenha método "desenhe"</span>
<span class="keyword">função</span> <span class="function">renderize</span>(forma)
    forma:<span class="function">desenhe</span>()  <span class="comment">-- Funciona se 'forma' tiver método 'desenhe'</span>
<span class="keyword">fim</span>

<span class="comment">-- Classe Circulo</span>
<span class="keyword">local</span> Circulo = {}
Circulo.__índice = Circulo

<span class="keyword">função</span> <span class="function">Circulo.desenhe</span>(ego)
    <span class="function">exiba</span>(<span class="string">"Desenhando círculo com raio "</span> .. ego.raio)
<span class="keyword">fim</span>

<span class="function">defina_metatabela</span>(Circulo, {
    __chame = <span class="keyword">função</span>(classe, raio)
        <span class="keyword">retorne</span> <span class="function">defina_metatabela</span>({raio = raio}, classe)
    <span class="keyword">fim</span>
})

<span class="comment">-- Classe Retangulo</span>
<span class="keyword">local</span> Retangulo = {}
Retangulo.__índice = Retangulo

<span class="keyword">função</span> <span class="function">Retangulo.desenhe</span>(ego)
    <span class="function">exiba</span>(<span class="string">"Desenhando retângulo "</span> .. ego.largura .. <span class="string">"x"</span> .. ego.altura)
<span class="keyword">fim</span>

<span class="function">defina_metatabela</span>(Retangulo, {
    __chame = <span class="keyword">função</span>(classe, largura, altura)
        <span class="keyword">retorne</span> <span class="function">defina_metatabela</span>({largura = largura, altura = altura}, classe)
    <span class="keyword">fim</span>
})

<span class="comment">-- Ambos funcionam com renderize() - polimorfismo!</span>
<span class="keyword">local</span> c = <span class="function">Circulo</span>(<span class="number">5</span>)
<span class="keyword">local</span> r = <span class="function">Retangulo</span>(<span class="number">10</span>, <span class="number">20</span>)

<span class="function">renderize</span>(c)  <span class="comment">-- "Desenhando círculo com raio 5"</span>
<span class="function">renderize</span>(r)  <span class="comment">-- "Desenhando retângulo 10x20"</span></pre>
</div>

<h3>Verificando se objeto implementa "interface"</h3>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">pode_desenhar</span>(obj)
    <span class="keyword">retorne</span> <span class="function">obtenha_tipo</span>(obj) == <span class="string">"tabela"</span> <span class="keyword">e</span> <span class="function">obtenha_tipo</span>(obj.desenhe) == <span class="string">"função"</span>
<span class="keyword">fim</span>

<span class="keyword">função</span> <span class="function">renderize_seguro</span>(forma)
    <span class="keyword">se</span> <span class="function">pode_desenhar</span>(forma) <span class="keyword">então</span>
        forma:<span class="function">desenhe</span>()
    <span class="keyword">fim</span>
    
    <span class="keyword">se</span> <span class="keyword">não</span> <span class="function">pode_desenhar</span>(forma) <span class="keyword">então</span>
        <span class="function">exiba</span>(<span class="string">"Erro: objeto não pode ser desenhado"</span>)
    <span class="keyword">fim</span>
<span class="keyword">fim</span></pre>
</div>

<h2>Encapsulamento (Membros Privados)</h2>

<p>Use closures para criar membros verdadeiramente privados:</p>

<div class="code-block">
<pre><span class="keyword">função</span> <span class="function">ContaBancaria</span>(saldo_inicial)
    <span class="comment">-- Variável PRIVADA (não acessível de fora)</span>
    <span class="keyword">local</span> saldo = saldo_inicial <span class="keyword">ou</span> <span class="number">0</span>
    
    <span class="comment">-- Objeto PÚBLICO</span>
    <span class="keyword">local</span> conta = {}
    
    <span class="keyword">função</span> <span class="function">conta.deposite</span>(valor)
        <span class="keyword">se</span> valor > <span class="number">0</span> <span class="keyword">então</span>
            saldo = saldo + valor
            <span class="keyword">retorne</span> <span class="keyword">verdadeiro</span>
        <span class="keyword">fim</span>
        <span class="keyword">retorne</span> <span class="keyword">falso</span>
    <span class="keyword">fim</span>
    
    <span class="keyword">função</span> <span class="function">conta.saque</span>(valor)
        <span class="keyword">se</span> valor > <span class="number">0</span> <span class="keyword">e</span> valor <= saldo <span class="keyword">então</span>
            saldo = saldo - valor
            <span class="keyword">retorne</span> <span class="keyword">verdadeiro</span>
        <span class="keyword">fim</span>
        <span class="keyword">retorne</span> <span class="keyword">falso</span>
    <span class="keyword">fim</span>
    
    <span class="keyword">função</span> <span class="function">conta.obtenha_saldo</span>()
        <span class="keyword">retorne</span> saldo
    <span class="keyword">fim</span>
    
    <span class="keyword">retorne</span> conta
<span class="keyword">fim</span>

<span class="comment">-- Usando</span>
<span class="keyword">local</span> minha_conta = <span class="function">ContaBancaria</span>(<span class="number">1000</span>)
minha_conta.<span class="function">deposite</span>(<span class="number">500</span>)
minha_conta.<span class="function">saque</span>(<span class="number">200</span>)
<span class="function">exiba</span>(minha_conta.<span class="function">obtenha_saldo</span>())  <span class="comment">-- 1300</span>

<span class="comment">-- Não dá para acessar 'saldo' diretamente!</span>
<span class="function">exiba</span>(minha_conta.saldo)  <span class="comment">-- nulo (não existe)</span></pre>
</div>

<h2>Operadores Customizados</h2>

<p>Use metamétodos para sobrecarregar operadores:</p>

<div class="code-block">
<pre><span class="keyword">local</span> Vetor = {}
Vetor.__índice = Vetor

<span class="comment">-- Operador + (soma de vetores)</span>
<span class="keyword">função</span> <span class="function">Vetor.__soma</span>(a, b)
    <span class="keyword">retorne</span> <span class="function">Vetor</span>(a.x + b.x, a.y + b.y)
<span class="keyword">fim</span>

<span class="comment">-- Operador == (igualdade)</span>
<span class="keyword">função</span> <span class="function">Vetor.__igualdade</span>(a, b)
    <span class="keyword">retorne</span> a.x == b.x <span class="keyword">e</span> a.y == b.y
<span class="keyword">fim</span>

<span class="comment">-- Conversão para texto (usado por exiba)</span>
<span class="keyword">função</span> <span class="function">Vetor.__converta_para_texto</span>(ego)
    <span class="keyword">retorne</span> <span class="string">"("</span> .. ego.x .. <span class="string">", "</span> .. ego.y .. <span class="string">")"</span>
<span class="keyword">fim</span>

<span class="function">defina_metatabela</span>(Vetor, {
    __chame = <span class="keyword">função</span>(classe, x, y)
        <span class="keyword">retorne</span> <span class="function">defina_metatabela</span>({x = x, y = y}, classe)
    <span class="keyword">fim</span>
})

<span class="comment">-- Usando</span>
<span class="keyword">local</span> v1 = <span class="function">Vetor</span>(<span class="number">3</span>, <span class="number">4</span>)
<span class="keyword">local</span> v2 = <span class="function">Vetor</span>(<span class="number">1</span>, <span class="number">2</span>)
<span class="keyword">local</span> v3 = v1 + v2

<span class="function">exiba</span>(v3)           <span class="comment">-- "(4, 6)"</span>
<span class="function">exiba</span>(v1 == v2)     <span class="comment">-- falso</span>
<span class="function">exiba</span>(v1 == <span class="function">Vetor</span>(<span class="number">3</span>, <span class="number">4</span>))  <span class="comment">-- verdadeiro</span></pre>
</div>

<h2>Resumo: Receita para Criar uma Classe</h2>

<div class="code-block">
<pre><span class="comment">-- 1. Criar tabela da classe</span>
<span class="keyword">local</span> MinhaClasse = {}
MinhaClasse.__índice = MinhaClasse

<span class="comment">-- 2. Definir métodos</span>
<span class="keyword">função</span> <span class="function">MinhaClasse.meu_metodo</span>(ego, ...)
    <span class="comment">-- código do método</span>
<span class="keyword">fim</span>

<span class="comment">-- 3. Definir construtor com __chame</span>
<span class="function">defina_metatabela</span>(MinhaClasse, {
    __chame = <span class="keyword">função</span>(classe, ...)
        <span class="keyword">local</span> ego = <span class="function">defina_metatabela</span>({}, classe)
        <span class="comment">-- inicializar campos</span>
        <span class="keyword">retorne</span> ego
    <span class="keyword">fim</span>
})

<span class="comment">-- 4. Usar!</span>
<span class="keyword">local</span> obj = <span class="function">MinhaClasse</span>(...)
obj:<span class="function">meu_metodo</span>(...)</pre>
</div>

<div class="warning-box">
    ⚠️ <strong>Lembre-se:</strong> Use <code>objeto:metodo()</code> (com dois pontos) para chamar métodos. 
    Isso passa automaticamente <code>ego</code> como primeiro parâmetro!
</div>

<div class="success-box">
    🎉 Agora você domina OO em Sol! Classes, instâncias, herança, interfaces e encapsulamento - tudo usando tabelas e metamétodos.
</div>

<div class="mt-4">
    <a href="?page=paradigma-funcional" class="btn btn-sol">
        Próximo: Funcional <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
