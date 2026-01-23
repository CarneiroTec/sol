<h1>📄 NDS (Notação de Dados Sol)</h1>
<p class="lead">Biblioteca para serialização e deserialização de dados no formato Sol nativo.</p>

<div class="alert alert-info">
    <strong>O que é NDS?</strong> NDS é uma alternativa ao JSON que usa sintaxe Sol/Lua, tornando-o mais natural para desenvolvedores Sol. 
    É ideal para arquivos de configuração, persistência de dados e comunicação entre processos Sol.
</div>

<h2 class="mt-4">📝 Formato NDS</h2>
<p>O formato NDS é similar a tabelas Sol, sem necessidade de <code>retorne {}</code>:</p>

<pre><code class="language-lua">-- config.nds
servidor = "localhost"
porta = 8080
debug = verdadeiro

banco_dados = {
    host = "127.0.0.1",
    usuario = "admin",
    senha = "secreto"
}

usuarios = {
    {nome = "João", nivel = 10},
    {nome = "Maria", nivel = 5}
}</code></pre>

<h2 class="mt-5">📚 Funções</h2>

<div class="api-item">
    <h3 class="api-signature">nds.carregue (texto)</h3>
    <div class="api-description">
        <p>Converte uma string no formato NDS para uma tabela Sol.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>texto</code>: Texto - Conteúdo NDS a ser parseado.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Tabela ou (nulo, mensagem de erro).</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">local dados = nds.carregue([[
    nome = "Maria",
    ativo = verdadeiro
]])
exiba(dados.nome) -- "Maria"</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">nds.carregue_arquivo (caminho)</h3>
    <div class="api-description">
        <p>Lê um arquivo NDS e retorna seu conteúdo como tabela.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>caminho</code>: Texto - Caminho para o arquivo .nds.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Tabela ou (nulo, mensagem de erro).</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">local config = nds.carregue_arquivo("config.nds")
exiba(config.servidor)</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">nds.converta (tabela)</h3>
    <div class="api-description">
        <p>Converte uma tabela Sol para string no formato NDS.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>tabela</code>: Tabela - A tabela a serializar.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Texto no formato NDS.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">local dados = {nome = "João", idade = 25}
local texto = nds.converta(dados)
exiba(texto)
-- {
--     nome = "João",
--     idade = 25
-- }</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">nds.salve (caminho, tabela)</h3>
    <div class="api-description">
        <p>Salva uma tabela em um arquivo no formato NDS.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>caminho</code>: Texto - Caminho do arquivo de destino.</li>
                    <li><code>tabela</code>: Tabela - Dados a salvar.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>verdadeiro ou (falso, mensagem de erro).</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">local dados = {usuario = "admin", nivel = 10}
nds.salve("usuario.nds", dados)</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">nds.converta_arquivo (tabela)</h3>
    <div class="api-description">
        <p>Converte uma tabela para string no formato de arquivo NDS (sem o wrapper de tabela).</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>tabela</code>: Tabela - A tabela a serializar.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Texto pronto para salvar em arquivo .nds.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">local dados = {nome = "João", idade = 25}
local conteudo = nds.converta_arquivo(dados)
-- nome = "João"
-- 
-- idade = 25</code></pre>
            </div>
        </div>
    </div>
</div>

<h2 class="mt-5">🔄 NDS vs JSON</h2>

<div class="row">
    <div class="col-md-6">
        <h4>NDS</h4>
        <pre><code class="language-lua">nome = "João"
idade = 30
ativo = verdadeiro
endereco = {
    cidade = "São Paulo",
    cep = "01234-567"
}</code></pre>
    </div>
    <div class="col-md-6">
        <h4>JSON</h4>
        <pre><code class="language-json">{
    "nome": "João",
    "idade": 30,
    "ativo": true,
    "endereco": {
        "cidade": "São Paulo",
        "cep": "01234-567"
    }
}</code></pre>
    </div>
</div>

<div class="alert alert-success mt-4">
    <strong>Vantagens do NDS:</strong>
    <ul class="mb-0">
        <li>Sintaxe familiar para desenvolvedores Sol/Lua</li>
        <li>Suporta comentários (<code>-- comentário</code>)</li>
        <li>Chaves sem aspas quando são identificadores válidos</li>
        <li>Usa <code>verdadeiro/falso/nulo</code> em vez de <code>true/false/null</code></li>
    </ul>
</div>
