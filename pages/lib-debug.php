<h1>🐛 Biblioteca: Depuração</h1>
<p class="lead">Ferramentas para inspecionar e depurar seu código!</p>

<span class="emoji-big">🐛</span>

<h2>O que é depuração?</h2>
<p>
    A biblioteca de depuração permite inspecionar o estado do programa, pilha de chamadas, variáveis locais, etc.
    Essencial para encontrar bugs e entender como o código funciona.
</p>

<div class="alert alert-info">
    <strong>💡 Dica:</strong> Importe com <code>local dep = importe("depuração")</code>
</div>

<h2>Funções Disponíveis</h2>

<div class="api-item">
    <h3 class="api-signature">entre_depuração ()</h3>
    <div class="api-description">
        <p>Entra no modo de depuração interativo. Permite executar comandos Sol diretamente.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Uso</span>
            <div class="api-content">
                <p>Digite comandos e pressione Enter. Digite <code>cont</code> para continuar a execução.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">depuração.entre_depuração()  -- Abre o prompt interativo</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">obtenha_informação (filamento, função_ou_nível, [opções])</h3>
    <div class="api-description">
        <p>Retorna uma tabela com informações sobre uma função ou nível da pilha de chamadas.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>filamento</code>: Filamento (opcional) - O filamento a inspecionar.</li>
                    <li><code>função_ou_nível</code>: Função ou Inteiro - Função ou nível da pilha (1 = função atual).</li>
                    <li><code>opções</code>: Texto (opcional) - Quais informações retornar:
                        <ul>
                            <li><code>"f"</code> - Inclui a função</li>
                            <li><code>"l"</code> - Linha atual</li>
                            <li><code>"n"</code> - Nome da função</li>
                            <li><code>"S"</code> - Fonte (arquivo)</li>
                            <li><code>"t"</code> - Tail call</li>
                            <li><code>"u"</code> - Upvalues</li>
                            <li><code>"L"</code> - Linhas ativas</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Tabela com campos: <code>source</code>, <code>short_src</code>, <code>linedefined</code>, <code>lastlinedefined</code>, <code>what</code>, <code>currentline</code>, <code>name</code>, <code>namewhat</code>, <code>nups</code>, <code>nparams</code>, <code>isvararg</code>, etc.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">função teste()
    local info = depuração.obtenha_informação(1, "Sln")
    exiba("Função:", info.name)
    exiba("Linha:", info.currentline)
    exiba("Arquivo:", info.short_src)
fim
teste()</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">obtenha_local (filamento, nível, índice)</h3>
    <div class="api-description">
        <p>Retorna o nome e valor de uma variável local em um nível específico da pilha.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>filamento</code>: Filamento (opcional) - O filamento a inspecionar.</li>
                    <li><code>nível</code>: Inteiro - Nível da pilha (1 = função atual).</li>
                    <li><code>índice</code>: Inteiro - Índice da variável local (começa em 1).</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Nome (texto) e valor da variável, ou <code>nulo</code> se não existir.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">função teste()
    local x = 42
    local nome, valor = depuração.obtenha_local(1, 1)
    exiba(nome, "=", valor)  -- x = 42
fim
teste()</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">defina_local (filamento, nível, índice, valor)</h3>
    <div class="api-description">
        <p>Define o valor de uma variável local em um nível específico da pilha.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>filamento</code>: Filamento (opcional) - O filamento a modificar.</li>
                    <li><code>nível</code>: Inteiro - Nível da pilha.</li>
                    <li><code>índice</code>: Inteiro - Índice da variável local.</li>
                    <li><code>valor</code>: Qualquer - Novo valor para a variável.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Nome da variável ou <code>nulo</code> se não existir.</p>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">obtenha_valor_acima (função, índice)</h3>
    <div class="api-description">
        <p>Retorna o nome e valor de um upvalue (variável capturada) de uma função.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>função</code>: Função - A função a inspecionar.</li>
                    <li><code>índice</code>: Inteiro - Índice do upvalue (começa em 1).</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Nome e valor do upvalue, ou <code>nulo</code> se não existir.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">local x = 10
local f = função() retorne x fim

local nome, valor = depuração.obtenha_valor_acima(f, 1)
exiba(nome, "=", valor)  -- x = 10</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">defina_valor_acima (função, índice, valor)</h3>
    <div class="api-description">
        <p>Define o valor de um upvalue de uma função.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>função</code>: Função - A função a modificar.</li>
                    <li><code>índice</code>: Inteiro - Índice do upvalue.</li>
                    <li><code>valor</code>: Qualquer - Novo valor.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">obtenha_metatabela (valor)</h3>
    <div class="api-description">
        <p>Retorna a metatabela de qualquer valor, mesmo se protegida.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>valor</code>: Qualquer - O valor a inspecionar.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Metatabela ou <code>nulo</code>.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">local t = {}
defina_metatabela(t, {__índice = {}})
local mt = depuração.obtenha_metatabela(t)
exiba(mt)  -- Mostra a metatabela</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">defina_metatabela (valor, metatabela)</h3>
    <div class="api-description">
        <p>Define a metatabela de qualquer valor.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>valor</code>: Qualquer - O valor a modificar.</li>
                    <li><code>metatabela</code>: Tabela/Nulo - A nova metatabela.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>O próprio valor.</p>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">obtenha_registro ()</h3>
    <div class="api-description">
        <p>Retorna a tabela de registro (registry) do interpretador Sol.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Tabela de registro.</p>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">obtenha_rastreio ([filamento], [mensagem], [nível])</h3>
    <div class="api-description">
        <p>Gera uma string de rastreamento de pilha (stack trace).</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>filamento</code>: Filamento (opcional) - O filamento a rastrear.</li>
                    <li><code>mensagem</code>: Texto (opcional) - Mensagem a prefixar.</li>
                    <li><code>nível</code>: Inteiro (opcional) - Nível inicial do rastreamento.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Texto com o rastreamento da pilha.</p>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">função a() retorne b() fim
função b() retorne c() fim
função c() retorne depuração.obtenha_rastreio("Erro!", 1) fim

exiba(a())
-- Saída:
-- Erro!
-- stack traceback:
--     [string "..."]:3: in function 'c'
--     [string "..."]:2: in function 'b'
--     [string "..."]:1: in function 'a'</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">defina_gancho ([filamento], gancho, máscara, [contagem])</h3>
    <div class="api-description">
        <p>Define uma função de gancho (hook) para depuração.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Parâmetros</span>
            <div class="api-content">
                <ul>
                    <li><code>filamento</code>: Filamento (opcional) - O filamento a monitorar.</li>
                    <li><code>gancho</code>: Função - Função chamada em cada evento.</li>
                    <li><code>máscara</code>: Texto - Eventos a monitorar:
                        <ul>
                            <li><code>"c"</code> - Chamadas de função</li>
                            <li><code>"r"</code> - Retornos de função</li>
                            <li><code>"l"</code> - Novas linhas</li>
                        </ul>
                    </li>
                    <li><code>contagem</code>: Inteiro (opcional) - Chamar a cada N instruções.</li>
                </ul>
            </div>
        </div>
        <div class="api-detail-group">
            <span class="api-label">Exemplo</span>
            <div class="api-content">
                <pre><code class="language-lua">depuração.defina_gancho(função(evento, linha)
    exiba("Evento:", evento, "Linha:", linha)
fim, "l")

-- Cada linha executada mostrará uma mensagem</code></pre>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">obtenha_gancho ([filamento])</h3>
    <div class="api-description">
        <p>Retorna as configurações atuais do gancho de depuração.</p>
    </div>
    <div class="api-details">
        <div class="api-detail-group">
            <span class="api-label">Retorno</span>
            <div class="api-content">
                <p>Três valores: função de gancho, máscara (texto), contagem.</p>
            </div>
        </div>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">obtenha_valor_usuário (userdata, [índice])</h3>
    <div class="api-description">
        <p>Retorna o valor de usuário associado a um userdata.</p>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">defina_valor_usuário (userdata, valor, [índice])</h3>
    <div class="api-description">
        <p>Define o valor de usuário associado a um userdata.</p>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">id_valor_acima (função, índice)</h3>
    <div class="api-description">
        <p>Retorna um identificador único para um upvalue.</p>
    </div>
</div>

<div class="api-item">
    <h3 class="api-signature">junte_valor_acima (f1, n1, f2, n2)</h3>
    <div class="api-description">
        <p>Faz com que o upvalue n1 da função f1 compartilhe o mesmo valor que o upvalue n2 da função f2.</p>
    </div>
</div>

<h2>Tabela Resumo</h2>

<table class="table table-dark table-striped">
    <thead>
        <tr><th>Função</th><th>Descrição</th></tr>
    </thead>
    <tbody>
        <tr><td><code>entre_depuração</code></td><td>Modo interativo de depuração</td></tr>
        <tr><td><code>obtenha_informação</code></td><td>Informações sobre função/pilha</td></tr>
        <tr><td><code>obtenha_local</code></td><td>Nome e valor de variável local</td></tr>
        <tr><td><code>defina_local</code></td><td>Modifica variável local</td></tr>
        <tr><td><code>obtenha_valor_acima</code></td><td>Nome e valor de upvalue</td></tr>
        <tr><td><code>defina_valor_acima</code></td><td>Modifica upvalue</td></tr>
        <tr><td><code>obtenha_metatabela</code></td><td>Metatabela de qualquer valor</td></tr>
        <tr><td><code>defina_metatabela</code></td><td>Define metatabela</td></tr>
        <tr><td><code>obtenha_registro</code></td><td>Tabela de registro</td></tr>
        <tr><td><code>obtenha_rastreio</code></td><td>Stack trace</td></tr>
        <tr><td><code>defina_gancho</code></td><td>Define hook de depuração</td></tr>
        <tr><td><code>obtenha_gancho</code></td><td>Configurações do hook</td></tr>
        <tr><td><code>obtenha_valor_usuário</code></td><td>Valor de userdata</td></tr>
        <tr><td><code>defina_valor_usuário</code></td><td>Define valor de userdata</td></tr>
        <tr><td><code>id_valor_acima</code></td><td>ID único de upvalue</td></tr>
        <tr><td><code>junte_valor_acima</code></td><td>Compartilha upvalues</td></tr>
    </tbody>
</table>

<div class="warning-box">
    Use a biblioteca de depuração apenas durante desenvolvimento. Ela pode tornar o código mais lento e não é segura para uso em produção.
</div>

<div class="success-box">
    Com depuração, você pode entender exatamente o que seu código está fazendo!
</div>

<div class="mt-4">
    <a href="?page=lib-corrotinas" class="btn btn-sol">
        Próximo: Corrotinas <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>