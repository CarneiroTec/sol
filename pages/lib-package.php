<h1>📦 Biblioteca: Pacote</h1>
<p class="lead">Gerencie módulos e carregamento de bibliotecas!</p>

<span class="emoji-big">📦</span>

<h2>O que é a biblioteca de pacote?</h2>
<p>
    A biblioteca de pacote controla como módulos são carregados e encontrados.
    Ela gerencia o caminho de busca e o carregamento de bibliotecas Sol e nativas (DLL/SO).
</p>

<div class="alert alert-info">
    <strong>💡 Dica:</strong> A tabela <code>pacote</code> está disponível globalmente. Não precisa importar!
</div>

<h2>Variáveis do Pacote</h2>

<div class="api-item">
    <h3 class="api-signature">pacote.caminho</h3>
    <div class="api-description">
        <p>String com os caminhos de busca para módulos Sol (<code>.sol</code>).</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Formato</span>
            <div class="api-content">
                <p>Caminhos separados por <code>;</code> com <code>?</code> sendo substituído pelo nome do módulo.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">-- Ver caminho atual
exiba(pacote.caminho)
-- Saída: ./?.sol;./lib/?.sol;...

-- Adicionar novo caminho
pacote.caminho = pacote.caminho .. ";./meus_modulos/?.sol"

-- Agora importe("utils") procura em:
-- ./utils.sol
-- ./lib/utils.sol
-- ./meus_modulos/utils.sol</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">pacote.caminho_c</h3>
    <div class="api-description">
        <p>String com os caminhos de busca para bibliotecas nativas (<code>.dll</code> no Windows, <code>.so</code> no Linux).</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">-- Verificar se existe
se obtenha_tipo(pacote.caminho_c) ~= "texto" então
    pacote.caminho_c = ""
fim

-- Adicionar caminho para DLLs
pacote.caminho_c = pacote.caminho_c .. ";./libs/?.dll"</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">pacote.carregados</h3>
    <div class="api-description">
        <p>Tabela com todos os módulos já carregados. Chave = nome do módulo, valor = módulo retornado.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Uso</span>
            <div class="api-content">
                <p>Verificar se um módulo já foi carregado ou forçar recarregamento.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">-- Verificar se módulo está carregado
se pacote.carregados["meu_modulo"] então
    exiba("Módulo já carregado!")
fim

-- Forçar recarregamento
pacote.carregados["meu_modulo"] = nulo
local m = importe("meu_modulo")  -- Carrega novamente</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">pacote.precarga</h3>
    <div class="api-description">
        <p>Tabela de módulos pré-carregados. Permite registrar módulos sem arquivos físicos.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">-- Registrar módulo virtual
pacote.precarga["meu_modulo"] = função()
    local M = {}
    função M.saudacao(nome)
        retorne "Olá, " .. nome
    fim
    retorne M
fim

-- Agora pode importar normalmente
local meu = importe("meu_modulo")
exiba(meu.saudacao("Maria"))  -- Olá, Maria</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">pacote.buscadores</h3>
    <div class="api-description">
        <p>Tabela com funções que procuram módulos. A ordem define a prioridade de busca.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Buscadores padrão</span>
            <div class="api-content">
                <ol>
                    <li><code>preload</code> - Busca em <code>pacote.precarga</code></li>
                    <li><code>Sol</code> - Busca arquivos <code>.sol</code> usando <code>pacote.caminho</code></li>
                    <li><code>C</code> - Busca bibliotecas nativas usando <code>pacote.caminho_c</code></li>
                    <li><code>C root</code> - Busca submódulos em bibliotecas C</li>
                </ol>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo: Buscador personalizado</span>
            <div class="api-content">
                <pre><code class="language-lua">-- Adicionar buscador customizado
tabela.insira(pacote.buscadores, 2, função(nome)
    se nome == "especial" então
        retorne função()
            retorne {versao = "1.0"}
        fim
    fim
fim)</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">pacote.config</h3>
    <div class="api-description">
        <p>String com informações de configuração do sistema, separadas por linhas.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Conteúdo</span>
            <div class="api-content">
                <ol>
                    <li>Separador de diretório (<code>\</code> Windows, <code>/</code> Unix)</li>
                    <li>Separador de caminhos (<code>;</code>)</li>
                    <li>Marcador de substituição (<code>?</code>)</li>
                    <li>Diretório do executável</li>
                    <li>Marcador de ignorar</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<h2>Funções do Pacote</h2>

<div class="api-item">
    <h3 class="api-signature">importe (nome_modulo)</h3>
    <div class="api-description">
        <p>Carrega e retorna um módulo. Se já carregado, retorna do cache.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>nome_modulo</code>: Texto - Nome do módulo (use <code>.</code> para submódulos).</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>O módulo carregado (geralmente uma tabela) e dados do carregador.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">-- Importar biblioteca padrão
local texto = importe("texto")
local matematica = importe("matemática")

-- Importar módulo local
local utils = importe("lib.utils")

-- Importar submódulo
local json = importe("dependencias.json.parser")</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">pacote.carregue_biblioteca (caminho, funcao_init)</h3>
    <div class="api-description">
        <p>Carrega uma biblioteca nativa (DLL/SO) manualmente.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>caminho</code>: Texto - Caminho completo da biblioteca.</li>
                    <li><code>funcao_init</code>: Texto - Nome da função de inicialização (ex: <code>solopen_meumodulo</code>).</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Função de inicialização ou <code>falha</code>, mensagem de erro, e onde falhou.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">local f, erro = pacote.carregue_biblioteca("./libs/http.dll", "solopen_http")
se f então
    local modulo = f()  -- Inicializa o módulo
fim

se não f então
    exiba("Erro:", erro)
fim</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">pacote.busque_caminho (nome, caminho, [separador], [separador_dir])</h3>
    <div class="api-description">
        <p>Busca um arquivo usando um template de caminho.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>nome</code>: Texto - Nome do módulo.</li>
                    <li><code>caminho</code>: Texto - Template de busca (com <code>?</code>).</li>
                    <li><code>separador</code>: Texto (opcional) - Caractere que separa partes do nome (padrão: <code>.</code>).</li>
                    <li><code>separador_dir</code>: Texto (opcional) - Separador de diretórios (padrão: sistema).</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Caminho do arquivo encontrado ou <code>nulo</code> e mensagem de erro.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">local arquivo = pacote.busque_caminho("utils", "./?.sol;./lib/?.sol")
se arquivo então
    exiba("Encontrado:", arquivo)
fim

se não arquivo então
    exiba("Não encontrado")
fim</code></pre>
            </div>
        </div>
    </div>
</div>

<h2>Como funciona a busca de módulos</h2>

<p>Quando você chama <code>importe("modulo")</code>, Sol faz:</p>

<ol>
    <li><strong>Verifica cache</strong> - Se <code>pacote.carregados["modulo"]</code> existe, retorna ele.</li>
    <li><strong>Executa buscadores</strong> - Chama cada função em <code>pacote.buscadores</code> até encontrar.</li>
    <li><strong>Carrega e executa</strong> - Executa o arquivo/função encontrado.</li>
    <li><strong>Armazena no cache</strong> - Guarda em <code>pacote.carregados</code>.</li>
</ol>

<h2>Conversão de nomes</h2>

<table class="table table-dark table-striped">
    <thead>
        <tr><th>Nome do Módulo</th><th>Arquivo .sol</th><th>Arquivo .dll</th></tr>
    </thead>
    <tbody>
        <tr><td><code>"utils"</code></td><td><code>./utils.sol</code></td><td><code>./utils.dll</code></td></tr>
        <tr><td><code>"lib.utils"</code></td><td><code>./lib/utils.sol</code></td><td><code>./lib/utils.dll</code></td></tr>
        <tr><td><code>"a.b.c"</code></td><td><code>./a/b/c.sol</code></td><td><code>./a/b/c.dll</code></td></tr>
    </tbody>
</table>

<h2>Criando um módulo</h2>

<div class="code-block">
<pre><span class="comment">-- meu_modulo.sol</span>
<span class="keyword">local</span> M = {}  <span class="comment">-- Tabela do módulo</span>

<span class="comment">-- Funções públicas</span>
<span class="keyword">função</span> <span class="function">M.saudacao</span>(nome)
    <span class="keyword">retorne</span> <span class="string">"Olá, "</span> .. nome
<span class="keyword">fim</span>

<span class="comment">-- Constantes</span>
M.VERSAO = <span class="string">"1.0.0"</span>

<span class="comment">-- Retornar módulo</span>
<span class="keyword">retorne</span> M</pre>
</div>

<div class="code-block">
<pre><span class="comment">-- Usando o módulo</span>
<span class="keyword">local</span> meu = <span class="function">importe</span>(<span class="string">"meu_modulo"</span>)
<span class="function">exiba</span>(meu.<span class="function">saudacao</span>(<span class="string">"Maria"</span>))  <span class="comment">-- "Olá, Maria"</span>
<span class="function">exiba</span>(meu.VERSAO)  <span class="comment">-- "1.0.0"</span></pre>
</div>

<h2>Erros comuns</h2>

<div class="alert alert-danger">
    <strong>module not found</strong><br>
    O módulo não foi encontrado nos caminhos configurados. Verifique <code>pacote.caminho</code>.
</div>

<div class="alert alert-danger">
    <strong>loop or previous error loading module</strong><br>
    Importação circular detectada (A importa B, B importa A). Reorganize o código.
</div>

<div class="success-box">
    A biblioteca de pacote torna fácil organizar e distribuir código em módulos reutilizáveis!
</div>

<div class="mt-4">
    <a href="?page=lib-debug.php" class="btn btn-sol">
        Próximo: Depuração <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>