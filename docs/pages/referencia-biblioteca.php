<h1>📚 Biblioteca Padrão</h1>
<p class="lead">Documentação completa de todas as funções e bibliotecas nativas da linguagem Sol.</p>

<div class="row">
    <div class="col-md-3">
        <div class="list-group sticky-top" style="top: 80px;">
            <a href="#base" class="list-group-item list-group-item-action">🌐 Global (Base)</a>
            <a href="#matematica" class="list-group-item list-group-item-action">➗ Matemática</a>
            <a href="#texto" class="list-group-item list-group-item-action">📘 Texto</a>
            <a href="#tabela" class="list-group-item list-group-item-action">📊 Tabela</a>
            <a href="#terminal" class="list-group-item list-group-item-action">🖥️ Terminal</a>
            <a href="#sistema_operacional" class="list-group-item list-group-item-action">⚙️ Sistema Operacional</a>
            <a href="#corrotina" class="list-group-item list-group-item-action">🧶 Corrotina</a>
            <a href="#pacote" class="list-group-item list-group-item-action">📦 Pacote</a>
            <a href="#utf8" class="list-group-item list-group-item-action">🔤 UTF-8</a>
            <a href="#depuracao" class="list-group-item list-group-item-action">🐞 Depuração</a>
            <a href="#filamento" class="list-group-item list-group-item-action">☑️ Filamento</a>
            <a href="#paralelo" class="list-group-item list-group-item-action">⚡ Paralelismo</a>
            <a href="#teste" class="list-group-item list-group-item-action">🧪 Teste</a>
            <a href="#nds" class="list-group-item list-group-item-action">📄 NDS</a>
        </div>
    </div>
    
    <div class="col-md-9">
        <!-- BASE LIB -->
        <h2 id="base" class="mt-4 mb-3 border-bottom pb-2">🌐 Biblioteca Global (Base)</h2>
        <p>funções básicas disponíveis globalmente em qualquer script.</p>

        <div class="api-item">
            <h3 class="api-signature">afirme (condição, [mensagem])</h3>
            <div class="api-description">
                <p>Verifica se uma condição é verdadeira. Se for falsa, lança um erro com a mensagem fornecida.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>condição</code>: Qualquer - A expressão a ser testada.</li>
                            <li><code>mensagem</code>: Texto (opcional) - Mensagem de erro caso a condição falhe.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">afirme(10 > 5, "Erro impossível") -- Passa
afirme(falso, "Isso vai parar o programa") -- Erro</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">avise (mensagem)</h3>
            <div class="api-description">
                <p>Emite um aviso no console sem interromper o programa.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>mensagem</code>: Texto - O aviso a ser exibido.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">avise("Isso é apenas um aviso.")</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">carregue (código, [nome_chunk])</h3>
            <div class="api-description">
                <p>Carrega um trecho de código Sol (string) e retorna como função.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>código</code>: Texto - O código fonte a ser compilado.</li>
                            <li><code>nome_chunk</code>: Texto (opcional) - Nome para mensagens de erro.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Função (se sucesso) ou nulo e mensagem de erro.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local f = carregue("retorne 10 + 20")
exiba(f()) -- 30</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">carregue_arquivo (caminho)</h3>
            <div class="api-description">
                <p>Carrega um arquivo Sol e retorna seu conteúdo como uma função executável.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>caminho</code>: Texto - Caminho para o arquivo.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Função (se sucesso) ou nulo e mensagem de erro.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local script = carregue_arquivo("meu_script.sol")
script() -- Executa o arquivo</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">chame_protegido (função, [args...])</h3>
            <div class="api-description">
                <p>Executa uma função em modo protegido (pcall). Se houver erro, retorna <code>falso</code> e a mensagem.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>função</code>: Função - A função a ser chamada.</li>
                            <li><code>args</code>: Variável - Argumentos para a função.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Lógico (sucesso/falha) e resultados da função ou mensagem de erro.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local ok, erro = chame_protegido(function() error("Boom!") end)
se não ok então exiba("Erro capturado:", erro) fim</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">colete_lixo ([opção], [arg])</h3>
            <div class="api-description">
                <p>Interage com o Coletor de Lixo (Garbage Collector).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>opção</code>: Texto - "collect", "count", "stop", "restart".</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">colete_lixo("collect") -- Força uma coleta completa</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">converta_para_número (valor, [base])</h3>
            <div class="api-description">
                <p>Tenta converter o valor para número.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>valor</code>: Texto/Número - Valor a converter.</li>
                            <li><code>base</code>: Inteiro (opcional) - Base numérica (2-36). Padrão 10.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Número ou nulo se falhar.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local n = converta_para_número("123") -- 123
local hex = converta_para_número("FF", 16) -- 255</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">converta_para_texto (valor)</h3>
            <div class="api-description">
                <p>Converte qualquer valor para sua representação em texto.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>valor</code>: Qualquer - Valor a converter.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local s = converta_para_texto(123) -- "123"</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">defina_metatabela (tabela, metatabela)</h3>
            <div class="api-description">
                <p>Define a metatabela de uma tabela.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>tabela</code>: Tabela - A tabela alvo.</li>
                            <li><code>metatabela</code>: Tabela/Nulo - A nova metatabela.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>A própria tabela.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">defina_metatabela(obj, {__índice = Classe})</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">execute_arquivo (caminho)</h3>
            <div class="api-description">
                <p>Carrega e executa um arquivo Sol imediatamente.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>caminho</code>: Texto - Caminho do arquivo.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">execute_arquivo("config.sol")</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">exiba (valores...)</h3>
            <div class="api-description">
                <p>Mostra valores na saída Padrão (console).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>valores</code>: Qualquer - Lista de valores para exibir.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">exiba("Olá", "Mundo", 2026)</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">lance_erro (mensagem, [nível])</h3>
            <div class="api-description">
                <p>Interrompe a execução com uma mensagem de erro.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>mensagem</code>: Texto - A mensagem de erro.</li>
                            <li><code>nível</code>: Inteiro (opcional) - Nível da pilha onde ocorreu o erro.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">lance_erro("Algo deu errado!")</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_metatabela (valor)</h3>
            <div class="api-description">
                <p>Retorna a metatabela associada ao valor.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>valor</code>: Qualquer - O valor para consultar.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Tabela ou nulo.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local meta = obtenha_metatabela(obj)</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_pares (tabela)</h3>
            <div class="api-description">
                <p>Iterador para percorrer todas as chaves e valores de uma tabela.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>tabela</code>: Tabela - A tabela a iterar.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">para k, v em obtenha_pares(tab) faça
    exiba(k, v)
fim</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_pares_indexados (tabela)</h3>
            <div class="api-description">
                <p>Iterador para percorrer apenas índices numéricos sequenciais (array).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>tabela</code>: Tabela - A tabela a iterar.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">para i, v em obtenha_pares_indexados(lista) faça
    exiba(i, v) 
fim</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_tipo (valor)</h3>
            <div class="api-description">
                <p>Retorna o tipo do valor como string ("numero", "texto", "tabela", "funcao", "usuario", "filamento", "nulo").</p>
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
                        <p>Texto.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">exiba(obtenha_tipo(10)) -- "numero"
exiba(obtenha_tipo("Olá")) -- "texto"</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">selecione (índice, ...)</h3>
            <div class="api-description">
                <p>Retorna todos os argumentos após o índice especificado. Se índice for "#", retorna o número total de argumentos.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>índice</code>: Inteiro/Texto - Posição inicial ou "#".</li>
                            <li><code>...</code>: Variável - Argumentos.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Múltiplos valores.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">selecione(2, "a", "b", "c") -- Retorna "b", "c"
exiba(selecione("#", "a", "b", "c")) -- 3</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- MATH LIB -->
        <h2 id="matematica" class="mt-5 mb-3 border-bottom pb-2">➗ Matemática (math)</h2>
        <p>funções Matemáticas. Importe com <code>local mat = importe("matematica")</code>.</p>

        <div class="api-item">
            <h3 class="api-signature">arredonde_para_piso (x)</h3>
            <div class="api-description">
                <p>Arredonda um número para baixo (floor).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>x</code>: Número - O valor a arredondar.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Inteiro.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">mat.arredonde_para_piso(3.9) -- 3</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">arredonde_para_teto (x)</h3>
            <div class="api-description">
                <p>Arredonda um número para cima (ceil).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>x</code>: Número - O valor a arredondar.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Inteiro.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">mat.arredonde_para_teto(3.1) -- 4</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">converta_para_graus (rad)</h3>
            <div class="api-description">
                <p>Converte um ângulo de radianos para graus.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>rad</code>: Número - ângulo em radianos.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Número (graus).</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local g = mat.converta_para_graus(mat.pi) -- 180</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">converta_para_inteiro (x)</h3>
            <div class="api-description">
                <p>Tenta converter um nÃºmero ou string para um valor inteiro.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>x</code>: NÃºmero/Texto - O valor a converter.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Inteiro ou nulo.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local int = mat.converta_para_inteiro(3.0) -- 3</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">converta_para_radianos (graus)</h3>
            <div class="api-description">
                <p>Converte um Ã¢ngulo de graus para radianos.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">Parâmetros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>graus</code>: NÃºmero - Ã‚ngulo em graus.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>NÃºmero (radianos).</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local rad = mat.converta_para_radianos(180) -- 3.14159...</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">defina_semente_aleatÃ³ria (x)</h3>
            <div class="api-description">
                <p>Define a semente (seed) para o gerador de nÃºmeros pseudo-aleatÃ³rios.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>x</code>: Inteiro - A semente.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">mat.defina_semente_aleatÃ³ria(os.tempo())</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">gere_aleatÃ³rio ([m], [n])</h3>
            <div class="api-description">
                <p>Gera nÃºmeros pseudo-aleatÃ³rios.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li>Sem argumentos: Retorna real no intervalo [0, 1).</li>
                            <li><code>m</code>: Retorna inteiro no intervalo [1, m].</li>
                            <li><code>m, n</code>: Retorna inteiro no intervalo [m, n].</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>NÃºmero.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local dado = mat.gere_aleatÃ³rio(1, 6)</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_cosseno (rad)</h3>
            <div class="api-description"><p>Retorna o cosseno de um Ã¢ngulo.</p></div>
            <div class="api-details">
                <div class="api-detail-group"><span class="api-label">Parâmetros</span><div class="api-content"><ul><li><code>rad</code>: Número (radianos).</li></ul></div></div>
                <div class="api-detail-group"><span class="api-label">Retorno</span><div class="api-content"><p>NÃºmero.</p></div></div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_seno (rad)</h3>
            <div class="api-description"><p>Retorna o seno de um Ã¢ngulo.</p></div>
            <div class="api-details">
                <div class="api-detail-group"><span class="api-label">Parâmetros</span><div class="api-content"><ul><li><code>rad</code>: Número (radianos).</li></ul></div></div>
                <div class="api-detail-group"><span class="api-label">Retorno</span><div class="api-content"><p>NÃºmero.</p></div></div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_tangente (rad)</h3>
            <div class="api-description"><p>Retorna a tangente de um Ã¢ngulo.</p></div>
            <div class="api-details">
                <div class="api-detail-group"><span class="api-label">Parâmetros</span><div class="api-content"><ul><li><code>rad</code>: Número (radianos).</li></ul></div></div>
                <div class="api-detail-group"><span class="api-label">Retorno</span><div class="api-content"><p>NÃºmero.</p></div></div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_exponencial (x)</h3>
            <div class="api-description"><p>Calcula a exponencial e^x.</p></div>
            <div class="api-details">
                <div class="api-detail-group"><span class="api-label">Parâmetros</span><div class="api-content"><ul><li><code>x</code>: Número.</li></ul></div></div>
                <div class="api-detail-group"><span class="api-label">Retorno</span><div class="api-content"><p>NÃºmero.</p></div></div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_logaritmo (x, [base])</h3>
            <div class="api-description"><p>Calcula o logaritmo de x.</p></div>
            <div class="api-details">
                <div class="api-detail-group"><span class="api-label">Parâmetros</span><div class="api-content"><ul><li><code>x</code>: Número.</li><li><code>base</code>: Número (opcional) - Padrão é <i>e</i> (log natural).</li></ul></div></div>
                <div class="api-detail-group"><span class="api-label">Retorno</span><div class="api-content"><p>NÃºmero.</p></div></div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_mÃ¡ximo (x, ...)</h3>
            <div class="api-description"><p>Retorna o maior valor entre os argumentos.</p></div>
            <div class="api-details">
                <div class="api-detail-group"><span class="api-label">Parâmetros</span><div class="api-content"><ul><li><code>x, ...</code>: Números.</li></ul></div></div>
                <div class="api-detail-group"><span class="api-label">Retorno</span><div class="api-content"><p>NÃºmero.</p></div></div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_mÃ­nimo (x, ...)</h3>
            <div class="api-description"><p>Retorna o menor valor entre os argumentos.</p></div>
            <div class="api-details">
                <div class="api-detail-group"><span class="api-label">Parâmetros</span><div class="api-content"><ul><li><code>x, ...</code>: Números.</li></ul></div></div>
                <div class="api-detail-group"><span class="api-label">Retorno</span><div class="api-content"><p>NÃºmero.</p></div></div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_raiz_quadrada (x)</h3>
            <div class="api-description"><p>Calcula a raiz quadrada de x.</p></div>
            <div class="api-details">
                <div class="api-detail-group"><span class="api-label">Parâmetros</span><div class="api-content"><ul><li><code>x</code>: Número não-negativo.</li></ul></div></div>
                <div class="api-detail-group"><span class="api-label">Retorno</span><div class="api-content"><p>NÃºmero.</p></div></div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_valor_absoluto (x)</h3>
            <div class="api-description">
                <p>Retorna o valor absoluto (mÃ³dulo) de x.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>x</code>: NÃºmero.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>NÃºmero positivo.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">frexp (x)</h3>
            <div class="api-description">
                <p>DecompÃµe x em mantissa e expoente (x = m * 2^e).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>x</code>: NÃºmero.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>NÃºmero (mantissa) e Inteiro (expoente).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">ldexp (m, e)</h3>
            <div class="api-description">
                <p>RecompÃµe um nÃºmero a partir da mantissa e expoente (inverso de frexp).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>m</code>: NÃºmero - Mantissa.</li>
                            <li><code>e</code>: Inteiro - Expoente.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>NÃºmero (m * 2^e).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">verifique_menor_que_sem_sinal (m, n)</h3>
            <div class="api-description">
                <p>Verifica se m &lt; n tratando ambos como inteiros sem sinal.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>m, n</code>: Inteiros.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Booleano.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">separe_fraÃ§Ã£o_inteiro (x)</h3>
            <div class="api-description">
                <p>Separa a parte inteira e a parte fracionÃ¡ria de x.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>x</code>: NÃºmero.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>NÃºmero (parte inteira) e NÃºmero (parte fracionÃ¡ria).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_resto_flutuante (x, y)</h3>
            <div class="api-description">
                <p>Retorna o resto da divisÃ£o de x por y (equivalente a fmod).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>x, y</code>: NÃºmeros.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>NÃºmero.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- STRING LIB -->
        <h2 id="texto" class="mt-5 mb-3 border-bottom pb-2">📘 Texto (texto)</h2>
        <p>ManipulaÃ§Ã£o de strings. MÃ©todos tambÃ©m disponÃ­veis via <code>:</code> em strings. Importe com <code>local txt = importe("texto")</code>.</p>

        <div class="api-item">
            <h3 class="api-signature">combine (s, Padrão)</h3>
            <div class="api-description">
                <p>Busca a primeira ocorrÃªncia do Padrão na string e retorna as capturas (match).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>s</code>: Texto - A string onde buscar.</li>
                            <li><code>Padrão</code>: Texto - O Padrão Lua simplificado.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto(s) capturado(s) ou nulo.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local dia, mes = txt.combine("Hoje Ã© 13/01", "(%d+)/(%d+)") -- "13", "01"</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">combine_globalmente (s, Padrão)</h3>
            <div class="api-description">
                <p>Retorna um iterador para todas as ocorrÃªncias do Padrão no texto (gmatch).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>s</code>: Texto - A string onde buscar.</li>
                            <li><code>Padrão</code>: Texto - O Padrão a buscar repetidamente.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Iterador (FunÃ§Ã£o).</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">para palavra em txt.combine_globalmente("Oi mundo sol", "%a+") faÃ§a ... fim</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">converta_para_maiÃºscula (s)</h3>
            <div class="api-description">
                <p>Retorna uma cÃ³pia do texto com todas as letras em maiÃºsculo.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>s</code>: Texto.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">converta_para_minÃºscula (s)</h3>
            <div class="api-description">
                <p>Retorna uma cÃ³pia do texto com todas as letras em minÃºsculo.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>s</code>: Texto.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">crie_caractere (cÃ³digo...)</h3>
            <div class="api-description">
                <p>Retorna uma string composta pelos caracteres correspondentes aos cÃ³digos numÃ©ricos fornecidos.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>cÃ³digo...</code>: Inteiros - CÃ³digos ASCII/Byte.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">txt.crie_caractere(65, 66, 67) -- "ABC"</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">desempacote (formato, string)</h3>
            <div class="api-description">
                <p>Extrai valores de uma string binÃ¡ria seguindo um formato (similar ao struct.unpack de C).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>formato</code>: Texto - String de formato.</li>
                            <li><code>string</code>: Texto - Dados binÃ¡rios.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>MÃºltiplos valores desempacotados.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">empacote (formato, v1, v2...)</h3>
            <div class="api-description">
                <p>Empacota valores em uma string binÃ¡ria seguindo um formato (similar ao struct.pack de C).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>formato</code>: Texto - String de formato.</li>
                            <li><code>v1, v2...</code>: Valores a empacotar.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto (Dados binÃ¡rios).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_tamanho_pacote (formato)</h3>
            <div class="api-description">
                <p>Retorna o tamanho em bytes que o formato de empacotamento ocuparÃ¡.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>formato</code>: Texto.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Inteiro.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">despeje (f)</h3>
            <div class="api-description">
                <p>Retorna a representaÃ§Ã£o binÃ¡ria (bytecode) de uma funÃ§Ã£o Sol.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>f</code>: FunÃ§Ã£o.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto (bytecode) ou nulo.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">encontre (s, Padrão, [ini], [simples])</h3>
            <div class="api-description">
                <p>Retorna a posiÃ§Ã£o inicial e final da primeira ocorrÃªncia de um Padrão no texto.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>s</code>: Texto - Onde buscar.</li>
                            <li><code>Padrão</code>: Texto - O que buscar.</li>
                            <li><code>ini</code>: Inteiro (opcional) - Onde comeÃ§ar.</li>
                            <li><code>simples</code>: Booleano (opcional) - Se verdadeiro, desativa padrÃµes regex.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Inteiro (inÃ­cio), Inteiro (fim), ou nulo.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">local i, j = txt.encontre("OlÃ¡ Sol", "Sol") -- 5, 7</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">formate (formato, ...)</h3>
            <div class="api-description">
                <p>Retorna uma string formatada seguindo o estilo printf.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>formato</code>: Texto - O formato.</li>
                            <li><code>...</code>: Valores a formatar.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">txt.formate("Valor: %.2f", 10.567) -- "Valor: 10.57"</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">inverta (s)</h3>
            <div class="api-description">
                <p>Inverte a ordem dos caracteres da string.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>s</code>: Texto.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_byte (s, [i], [j])</h3>
            <div class="api-description">
                <p>Retorna os cÃ³digos numÃ©ricos (ASCII/Unicode) dos caracteres da string.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>s</code>: Texto.</li>
                            <li><code>i</code>: Inteiro (opcional) - InÃ­cio.</li>
                            <li><code>j</code>: Inteiro (opcional) - Fim.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Inteiros (mÃºltiplos valores).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_comprimento (s)</h3>
            <div class="api-description">
                <p>Retorna o tamanho da string em bytes. O operador <code>#</code> faz o mesmo.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>s</code>: Texto.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Inteiro.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">obtenha_subtexto (s, i, [j])</h3>
            <div class="api-description">
                <p>Extrai uma parte da string (substring) do Ã­ndice i ao j.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>s</code>: Texto.</li>
                            <li><code>i</code>: Inteiro - InÃ­cio.</li>
                            <li><code>j</code>: Inteiro (opcional) - Fim (Padrão -1).</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">txt.obtenha_subtexto("Teste", 1, 3) -- "Tes"</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">repita (s, n)</h3>
            <div class="api-description">
                <p>Retorna uma string contendo <code>n</code> cÃ³pias de <code>s</code> concatenadas.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>s</code>: Texto.</li>
                            <li><code>n</code>: Inteiro.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">txt.repita("Oi", 3) -- "OiOiOi"</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">substitua_globalmente (s, Padrão, repl, [n])</h3>
            <div class="api-description">
                <p>Substitui ocorrÃªncias do Padrão no texto por uma string de substituiÃ§Ã£o (gsub).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>s</code>: Texto.</li>
                            <li><code>Padrão</code>: Texto.</li>
                            <li><code>repl</code>: Texto/Tabela/FunÃ§Ã£o - O substituto.</li>
                            <li><code>n</code>: Inteiro (opcional) - Limite de substituiÃ§Ãµes.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto (resultado) e Inteiro (nÃºmero de substituiÃ§Ãµes).</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">txt.substitua_globalmente("Banana", "a", "o") -- "Bonono"</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- TABLE LIB -->
        <h2 id="tabela" class="mt-5 mb-3 border-bottom pb-2">📊 Tabela (tabela)</h2>
        <p>ManipulaÃ§Ã£o de tabelas. Importe com <code>local tab = importe("tabela")</code>.</p>

        <div class="api-item">
            <h3 class="api-signature">concatene (lista, [sep], [i], [j])</h3>
            <div class="api-description">
                <p>Concatena os elementos de uma lista em uma Ãºnica string, separados por <code>sep</code>.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>lista</code>: Tabela.</li>
                            <li><code>sep</code>: Texto (opcional) - Separador.</li>
                            <li><code>i</code>: Inteiro (opcional) - InÃ­cio.</li>
                            <li><code>j</code>: Inteiro (opcional) - Fim.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Texto.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">tab.concatene({"A", "B", "C"}, "-") -- "A-B-C"</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">crie (n, [v])</h3>
            <div class="api-description">
                <p>Cria uma tabela nova prÃ©-alocada com <code>n</code> elementos.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>n</code>: Inteiro - Capacidade da sequÃªncia.</li>
                            <li><code>v</code>: Qualquer (opcional) - Valor inicial.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Tabela.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">desempacote (lista, [i], [j])</h3>
            <div class="api-description">
                <p>Retorna os elementos da tabela como valores soltos (argumentos).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>lista</code>: Tabela.</li>
                            <li><code>i</code>: Inteiro (opcional) - InÃ­cio (Padrão 1).</li>
                            <li><code>j</code>: Inteiro (opcional) - Fim (Padrão #lista).</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>MÃºltiplos valores.</p>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">exiba(tab.desempacote({10, 20})) -- 10    20</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">empacote (...)</h3>
            <div class="api-description">
                <p>Cria uma nova tabela contendo todos os argumentos e um campo 'n' com o total.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>...</code>: Valores a empacotar.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Tabela (com campo n).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">insira (lista, [pos], valor)</h3>
            <div class="api-description">
                <p>Insere um elemento na lista em uma posiÃ§Ã£o especÃ­fica, deslocando os outros.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>lista</code>: Tabela.</li>
                            <li><code>pos</code>: Inteiro (opcional) - PosiÃ§Ã£o de inserÃ§Ã£o. Padrão: fim.</li>
                            <li><code>valor</code>: Qualquer - Elemento a inserir.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">tab.insira(t, 1, "Topo")</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">mova (a1, f, e, t, [a2])</h3>
            <div class="api-description">
                <p>Move elementos da tabela a1 para a tabela a2 (ou a mesma).</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>a1</code>: Tabela - Origem.</li>
                            <li><code>f</code>: Inteiro - Ãndice inicial fonte.</li>
                            <li><code>e</code>: Inteiro - Ãndice final fonte.</li>
                            <li><code>t</code>: Inteiro - Ãndice inicial destino.</li>
                            <li><code>a2</code>: Tabela (opcional) - Destino (Padrão a1).</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Tabela (a2).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">ordene (lista, [comp])</h3>
            <div class="api-description">
                <p>Ordena os elementos de um array em ordem crescente ou usando uma funÃ§Ã£o de comparaÃ§Ã£o.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>lista</code>: Tabela.</li>
                            <li><code>comp</code>: FunÃ§Ã£o (opcional) - FunÃ§Ã£o que recebe (a,b) e retorna verdadeiro se a < b.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Exemplo</span>
                    <div class="api-content">
                        <pre><code class="language-sol">tab.ordene(t) -- Crescente
tab.ordene(t, function(a,b) retorne a > b fim) -- Decrescente</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="api-item">
            <h3 class="api-signature">remova (lista, [pos])</h3>
            <div class="api-description">
                <p>Remove um elemento da lista na posiÃ§Ã£o especificada.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>lista</code>: Tabela.</li>
                            <li><code>pos</code>: Inteiro (opcional) - PosiÃ§Ã£o a remover. Padrão: Ãºltimo.</li>
                        </ul>
                    </div>
                </div>
                <div class="api-detail-group">
                    <span class="api-label">Retorno</span>
                    <div class="api-content">
                        <p>Valor removido.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- TERMINAL LIB -->
        <h2 id="terminal" class="mt-5 mb-3 border-bottom pb-2">🖥️ Terminal (terminal)</h2>
        <p>Acesso a arquivos e terminal. Importe com <code>local term = importe("terminal")</code>.</p>

        <div class="api-item">
            <h3>abra (arquivo, [modo])</h3>
            <p>Abre um arquivo. Modos: "r" (leitura), "w" (escrita), "a" (anexo).</p>
            <pre><code class="language-sol">local f = term.abra("dados.txt", "w")
f:escreva("OlÃ¡ Arquivo")
f:feche()</code></pre>
        </div>

        <div class="api-item">
            <h3>abra_processo (prog, [modo])</h3>
            <p>Inicia um processo e retorna um handle de arquivo (popen).</p>
        </div>

        <div class="api-item">
            <h3>crie_arquivo_temporÃ¡rio ()</h3>
            <p>Retorna um arquivo temporÃ¡rio aberto para leitura/escrita.</p>
        </div>

        <div class="api-item">
            <h3>defina_entrada (arquivo)</h3>
            <p>Define o arquivo Padrão para leitura (stdin).</p>
        </div>

        <div class="api-item">
            <h3>defina_saÃ­da (arquivo)</h3>
            <p>Define o arquivo Padrão para escrita (stdout).</p>
        </div>

        <div class="api-item">
            <h3>despeje (arquivo)</h3>
            <p>Salva dados do buffer no arquivo.</p>
        </div>

        <div class="api-item">
            <h3>escreva (...)</h3>
            <p>Escreve na saÃ­da Padrão.</p>
        </div>

        <div class="api-item">
            <h3>feche ([arquivo])</h3>
            <p>Fecha o arquivo dado ou o Padrão.</p>
        </div>

        <div class="api-item">
            <h3>itere_linhas ([arquivo])</h3>
            <p>Iterador que lê o arquivo linha por linha.</p>
            <pre><code class="language-sol">para linha em term.itere_linhas("texto.txt") faça ... fim</code></pre>
        </div>

        <div class="api-item">
            <h3>leia ([fmt])</h3>
            <p>LÃª da entrada Padrão. Formatos: "a" (tudo), "l" (linha), "n" (nÃºmero).</p>
        </div>

        <div class="api-item">
            <h3>obtenha_tipo (obj)</h3>
            <p>Verifica se Ã© um arquivo aberto ou fechado.</p>
        </div>

        <!-- OS LIB -->
        <h2 id="sistema_operacional" class="mt-5 mb-3 border-bottom pb-2">⚙️ Sistema Operacional (sistema_operacional)</h2>
        <p>Interação com o sistema operacional. Importe com <code>local so = importe("sistema_operacional")</code>.</p>

        <div class="api-item">
            <h3>calcule_diferença_tempo (t2, t1)</h3>
            <p>Retorna a diferença em segundos entre dois tempos.</p>
        </div>

        <div class="api-item">
            <h3>crie_pasta (caminho)</h3>
            <p>Cria um diretÃ³rio (mkdir).</p>
        </div>

        <div class="api-item">
            <h3>defina_localidade (locale, [categoria])</h3>
            <p>Define a localidade do programa (setlocale).</p>
        </div>

        <div class="api-item">
            <h3>execute ([comando])</h3>
            <p>Executa um comando do sistema.</p>
            <pre><code class="language-sol">so.execute("dir")</code></pre>
        </div>

        <div class="api-item">
            <h3>gere_nome_temporÃ¡rio ()</h3>
            <p>Gera um nome de arquivo Ãºnico.</p>
        </div>

        <div class="api-item">
            <h3>obtenha_data ([formato], [tempo])</h3>
            <p>Retorna a data/hora formatada.</p>
            <pre><code class="language-sol">so.obtenha_data("%d/%m/%Y") -- "13/01/2026"</code></pre>
        </div>

        <div class="api-item">
            <h3>obtenha_relÃ³gio ()</h3>
            <p>Retorna o tempo de CPU usado pelo programa (clock).</p>
        </div>

        <div class="api-item">
            <h3>obtenha_tempo ([tabela])</h3>
            <p>Retorna o timestamp atual (epoch) ou cria a partir de uma tabela.</p>
        </div>

        <div class="api-item">
            <h3>obtenha_variÃ¡vel_ambiente (nome)</h3>
            <p>LÃª uma variÃ¡vel de ambiente.</p>
            <pre><code class="language-sol">local path = so.obtenha_variÃ¡vel_ambiente("PATH")</code></pre>
        </div>

        <div class="api-item">
            <h3>remova (arquivo)</h3>
            <p>Apaga um arquivo.</p>
        </div>

        <div class="api-item">
            <h3>renomeie (antigo, novo)</h3>
            <p>Renomeia um arquivo.</p>
        </div>

        <div class="api-item">
            <h3>saia ([codigo])</h3>
            <p>Encerra o programa.</p>
        </div>

        <!-- COROUTINE LIB -->
        <h2 id="corrotina" class="mt-5 mb-3 border-bottom pb-2">🧶 Corrotina (corrotina)</h2>
        <p>ProgramaÃ§Ã£o cooperativa. Importe com <code>local co = importe("corrotina")</code>.</p>

        <div class="api-item">
            <h3>ceda (valores...)</h3>
            <p>Suspende a execuÃ§Ã£o da corrotina atual.</p>
            <pre><code class="language-sol">co.ceda("pausando")</code></pre>
        </div>

        <div class="api-item">
            <h3>crie (f)</h3>
            <p>Cria uma nova corrotina. Retorna uma thread.</p>
            <pre><code class="language-sol">local c = co.crie(function() exiba("oi") fim)</code></pre>
        </div>

        <div class="api-item">
            <h3>envolva (f)</h3>
            <p>Cria uma corrotina e retorna uma funÃ§Ã£o para iniciÃ¡-la.</p>
        </div>

        <div class="api-item">
            <h3>feche (co)</h3>
            <p>Fecha uma corrotina e libera recursos.</p>
        </div>

        <div class="api-item">
            <h3>obtenha_estado (co)</h3>
            <p>Retorna o estado: "executando", "suspenso", "normal" ou "morto".</p>
        </div>

        <div class="api-item">
            <h3>obtenha_executando ()</h3>
            <p>Retorna a corrotina atual e um booleano (se Ã© a principal).</p>
        </div>

        <div class="api-item">
            <h3>retome (co, [valores...])</h3>
            <p>Inicia ou continua a execuÃ§Ã£o da corrotina.</p>
            <pre><code class="language-sol">co.retome(c)</code></pre>
        </div>

        <div class="api-item">
            <h3>verifique_pode_ceder ()</h3>
            <p>Verifica se a corrotina atual pode ceder (yield).</p>
        </div>

        <!-- PACKAGE LIB -->
        <h2 id="pacote" class="mt-5 mb-3 border-bottom pb-2">📦 Pacote (pacote)</h2>
        <p>Gerenciamento de mÃ³dulos. Importe com <code>local pac = importe("pacote")</code>.</p>

        <div class="api-item">
            <h3>busque_caminho (nome, caminho, [sep], [rep])</h3>
            <p>Procura por um arquivo em um caminho.</p>
        </div>

        <div class="api-item">
            <h3>carregue_biblioteca (lib, func)</h3>
            <p>Carrega uma biblioteca C dinÃ¢mica (DLL/SO).</p>
        </div>

        <div class="api-item">
            <h3>importe (modname)</h3>
            <p>Carrega um mÃ³dulo. FunÃ§Ã£o global Padrão.</p>
            <pre><code class="language-sol">local m = importe("meu_modulo")</code></pre>
        </div>

        <!-- UTF8 LIB -->
        <h2 id="utf8" class="mt-5 mb-3 border-bottom pb-2">🔤 UTF-8 (utf8)</h2>
        <p>ManipulaÃ§Ã£o de strings UTF-8. Importe com <code>local u8 = importe("utf8")</code>.</p>

        <div class="api-item">
            <h3>crie_caractere (cÃ³digos...)</h3>
            <p>Cria uma string UTF-8 a partir de code points.</p>
        </div>

        <div class="api-item">
            <h3>itere_cÃ³digos (s, [lax])</h3>
            <p>Iterador sobre code points UTF-8.</p>
            <pre><code class="language-sol">para p, c em u8.itere_cÃ³digos("AÃ§Ã£o") faÃ§a ... fim</code></pre>
        </div>

        <div class="api-item">
            <h3>obtenha_comprimento (s, [i], [j])</h3>
            <p>Retorna o nÃºmero de caracteres UTF-8 (nÃ£o bytes).</p>
        </div>

        <div class="api-item">
            <h3>obtenha_deslocamento (s, n, [i])</h3>
            <p>Retorna o deslocamento em bytes de um caractere.</p>
        </div>

        <div class="api-item">
            <h3>obtenha_ponto_cÃ³digo (s, [i], [j])</h3>
            <p>Retorna os code points da string.</p>
        </div>

        <div class="api-item">
            <h3>Padrão_caractere</h3>
            <p>Padrão de string que combina com um caractere UTF-8.</p>
        </div>

        <!-- DEBUG LIB -->
        <h2 id="depuracao" class="mt-5 mb-3 border-bottom pb-2">🐞 Depuração (depuracao)</h2>
        <p>Ferramentas de depuraÃ§Ã£o. Importe com <code>local dep = importe("depuracao")</code>.</p>

        <div class="api-item">
            <h3>defina_gancho (thread, hook, mask, [count])</h3>
            <p>Define uma funÃ§Ã£o de gancho (hook) para monitorar execuÃ§Ã£o.</p>
        </div>

        <div class="api-item">
            <h3>defina_local (thread, nÃ­vel, n, valor)</h3>
            <p>Define o valor de uma variÃ¡vel local na pilha.</p>
        </div>

        <div class="api-item">
            <h3>defina_metatabela (valor, tabela)</h3>
            <p>Define a metatabela de qualquer valor.</p>
        </div>

        <div class="api-item">
            <h3>defina_valor_acima (f, up, valor)</h3>
            <p>Define o valor de um upvalue.</p>
        </div>

        <div class="api-item">
            <h3>defina_valor_usuÃ¡rio (u, valor, [n])</h3>
            <p>Define o valor associado a um userdata.</p>
        </div>

        <div class="api-item">
            <h3>entre_depuraÃ§Ã£o ()</h3>
            <p>Entra em modo interativo de depuraÃ§Ã£o.</p>
        </div>

        <div class="api-item">
            <h3>id_valor_acima (f, n)</h3>
            <p>Retorna um ID Ãºnico para o upvalue.</p>
        </div>

        <div class="api-item">
            <h3>junte_valor_acima (f1, n1, f2, n2)</h3>
            <p>Faz um upvalue de f1 referenciar o mesmo valor de f2.</p>
        </div>

        <div class="api-item">
            <h3>obtenha_gancho ([thread])</h3>
            <p>Retorna as configuraÃ§Ãµes atuais do gancho.</p>
        </div>

        <div class="api-item">
            <h3>obtenha_informaÃ§Ã£o ([thread], f, [opÃ§Ãµes])</h3>
            <p>Retorna informaÃ§Ãµes sobre uma funÃ§Ã£o ou nÃ­vel da pilha.</p>
        </div>

        <div class="api-item">
            <h3>obtenha_local ([thread], nÃ­vel, n)</h3>
            <p>Retorna o nome e valor de uma variÃ¡vel local.</p>
        </div>

        <div class="api-item">
            <h3>obtenha_metatabela (valor)</h3>
            <p>Retorna a metatabela de qualquer valor.</p>
        </div>

        <div class="api-item">
            <h3>obtenha_rastreio ([thread], [msg], [nÃ­vel])</h3>
            <p>Retorna uma string com o stack trace.</p>
        </div>

        <div class="api-item">
            <h3>obtenha_registro ()</h3>
            <p>Retorna a tabela de registro (Registry).</p>
        </div>

        <div class="api-item">
            <h3>obtenha_valor_acima (f, up)</h3>
            <p>Retorna o nome e valor de um upvalue.</p>
        </div>

        <div class="api-item">
            <h3>obtenha_valor_usuÃ¡rio (u, [n])</h3>
            <p>Retorna o valor associado a um userdata.</p>
        </div>

        <!-- FILAMENTO LIB -->
        <h2 id="filamento" class="mt-5 mb-3 border-bottom pb-2">âš¡ Filamento (filamento)</h2>
        <p>Tarefas assÃ­ncronas com corrotinas gerenciadas. Importe com <code>local fil = importe("filamento")</code>.</p>

        <div class="api-item">
            <h3>durma (ms)</h3>
            <p>Pausa a execuÃ§Ã£o da tarefa atual por milissegundos.</p>
            <pre><code class="language-sol">fil.durma(1000)</code></pre>
        </div>

        <div class="api-item">
            <h3>inicie_loop ()</h3>
            <p>Inicia o loop de eventos para processar tarefas.</p>
            <pre><code class="language-sol">fil.inicie_loop()</code></pre>
        </div>

        <div class="api-item">
            <h3>tarefa (f)</h3>
            <p>Cria e agenda uma nova tarefa (corrotina gerenciada).</p>
            <pre><code class="language-sol">fil.tarefa(function() exiba("AssÃ­ncrono!") fim)</code></pre>
        </div>

        <!-- PARALLEL LIB -->
        <h2 id="paralelo" class="mt-5 mb-3 border-bottom pb-2">⚡ Paralelismo (paralelo)</h2>
        <p>ExecuÃ§Ã£o em threads do SO. Importe com <code>local par = importe("paralelo")</code>.</p>

        <div class="api-item">
            <h3>canal ()</h3>
            <p>Cria um canal de comunicaÃ§Ã£o entre threads.</p>
            <pre><code class="language-sol">local c = par.canal()</code></pre>
        </div>

        <div class="api-item">
            <h3>envie (canal, msg)</h3>
            <p>Envia uma mensagem (string) para o canal.</p>
        </div>

        <div class="api-item">
            <h3>execute (script, [canal])</h3>
            <p>Inicia uma nova thread executando o script Sol.</p>
            <pre><code class="language-sol">par.execute("exiba('Nova Thread')", c)</code></pre>
        </div>

        <div class="api-item">
            <h3>receba (canal)</h3>
            <p>Bloqueia atÃ© receber uma mensagem do canal.</p>
            <pre><code class="language-sol">local msg = par.receba(c)</code></pre>
        </div>

        <!-- TEST LIB -->
        <h2 id="teste" class="mt-5 mb-3 border-bottom pb-2">🧪 Teste (teste)</h2>
        <p>Framework de testes unitÃ¡rios. Importe com <code>local t = importe("teste")</code>.</p>

        <div class="api-item">
            <h3>afirme (cond, [msg])</h3>
            <p>Afirma que a condiÃ§Ã£o Ã© verdadeira.</p>
        </div>

        <div class="api-item">
            <h3>afirme_contem (tabela, valor)</h3>
            <p>Verifica se a tabela contÃ©m o valor.</p>
        </div>

        <div class="api-item">
            <h3>afirme_diferente (a, b)</h3>
            <p>Verifica desigualdade.</p>
        </div>

        <div class="api-item">
            <h3>afirme_erro (f)</h3>
            <p>Verifica se a funÃ§Ã£o lanÃ§a erro.</p>
        </div>

        <div class="api-item">
            <h3>afirme_falso (v)</h3>
            <p>Verifica se Ã© falso.</p>
        </div>

        <div class="api-item">
            <h3>afirme_igual (a, b)</h3>
            <p>Verifica igualdade.</p>
        </div>

        <div class="api-item">
            <h3>afirme_maior (a, b)</h3>
            <p>Verifica se a > b.</p>
        </div>

        <div class="api-item">
            <h3>afirme_maior_igual (a, b)</h3>
            <p>Verifica se a >= b.</p>
        </div>

        <div class="api-item">
            <h3>afirme_menor (a, b)</h3>
            <p>Verifica se a < b.</p>
        </div>

        <div class="api-item">
            <h3>afirme_menor_igual (a, b)</h3>
            <p>Verifica se a <= b.</p>
        </div>

        <div class="api-item">
            <h3>afirme_nÃ£o_nulo (v)</h3>
            <p>Verifica se nÃ£o Ã© nulo (nil).</p>
        </div>

        <div class="api-item">
            <h3>afirme_nulo (v)</h3>
            <p>Verifica se Ã© nulo (nil).</p>
        </div>

        <div class="api-item">
            <h3>afirme_sem_erro (f)</h3>
            <p>Verifica se a funÃ§Ã£o executa sem erros.</p>
        </div>

        <div class="api-item">
            <h3>afirme_tamanho (n, t)</h3>
            <p>Verifica o tamanho da tabela/string.</p>
        </div>

        <div class="api-item">
            <h3>afirme_tipo (tipo, v)</h3>
            <p>Verifica o tipo do valor.</p>
        </div>

        <div class="api-item">
            <h3>afirme_vazio (t)</h3>
            <p>Verifica se a tabela estÃ¡ vazia.</p>
        </div>

        <div class="api-item">
            <h3>afirme_verdadeiro (v)</h3>
            <p>Verifica se Ã© verdadeiro.</p>
        </div>

        <div class="api-item">
            <h3>antes_de_cada (f)</h3>
            <p>Executa antes de cada caso de teste.</p>
        </div>

        <div class="api-item">
            <h3>antes_de_todos (f)</h3>
            <p>Executa uma vez antes de todos os testes.</p>
        </div>

        <div class="api-item">
            <h3>caso (nome, f)</h3>
            <p>Define um caso de teste.</p>
        </div>

        <div class="api-item">
            <h3>depois_de_cada (f)</h3>
            <p>Executa apÃ³s cada caso de teste.</p>
        </div>

        <div class="api-item">
            <h3>depois_de_todos (f)</h3>
            <p>Executa uma vez apÃ³s todos os testes.</p>
        </div>

        <div class="api-item">
            <h3>descreva (desc)</h3>
            <p>Define a descriÃ§Ã£o do grupo de testes atual.</p>
        </div>

        <div class="api-item">
            <h3>execute ()</h3>
            <p>Inicia a execuÃ§Ã£o dos testes cronometrados.</p>
        </div>

        <div class="api-item">
            <h3>falhe (msg)</h3>
            <p>ForÃ§a uma falha no teste.</p>
        </div>

        <div class="api-item">
            <h3>grupo (nome, f)</h3>
            <p>Define um grupo de testes.</p>
        </div>

        <div class="api-item">
            <h3>pule (msg)</h3>
            <p>Pula o teste atual.</p>
        </div>

        <div class="api-item">
            <h3>reinicie ()</h3>
            <p>Reinicia o estado dos testes.</p>
        </div>

        <div class="api-item">
            <h3>relatorio ()</h3>
            <p>Exibe o relatÃ³rio final dos testes.</p>
        </div>

        <!-- NDS LIB -->
        <h2 id="nds" class="mt-5 mb-3 border-bottom pb-2">📄 NDS (Notação de Dados Sol)</h2>
        <p>Biblioteca para serializaÃ§Ã£o e deserializaÃ§Ã£o de dados no formato Sol nativo.</p>
        <p>O formato NDS Ã© uma alternativa ao JSON que usa sintaxe Sol/Lua, tornando-o mais natural para desenvolvedores Sol.</p>

        <div class="alert alert-info">
            <strong>Formato NDS:</strong> Similar a tabelas Sol, sem necessidade de <code>retorne {}</code>.
            <pre><code class="language-sol">-- arquivo.nds
nome = "JoÃ£o"
idade = 30
endereco = {
    cidade = "SÃ£o Paulo",
    cep = "01234-567"
}</code></pre>
        </div>

        <div class="api-item">
            <h3 class="api-signature">nds.carregue (texto)</h3>
            <div class="api-description">
                <p>Converte uma string no formato NDS para uma tabela Sol.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
                    <div class="api-content">
                        <ul>
                            <li><code>texto</code>: Texto - ConteÃºdo NDS a ser parseado.</li>
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
                        <pre><code class="language-sol">local dados = nds.carregue([[
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
                <p>LÃª um arquivo NDS e retorna seu conteÃºdo como tabela.</p>
            </div>
            <div class="api-details">
                <div class="api-detail-group">
                    <span class="api-label">ParÃ¢metros</span>
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
                        <pre><code class="language-sol">local config = nds.carregue_arquivo("config.nds")
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
                    <span class="api-label">ParÃ¢metros</span>
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
                        <pre><code class="language-sol">local dados = {nome = "JoÃ£o", idade = 25}
local texto = nds.converta(dados)
exiba(texto)
-- {
--     nome = "JoÃ£o",
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
                    <span class="api-label">ParÃ¢metros</span>
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
                        <pre><code class="language-sol">local dados = {usuario = "admin", nivel = 10}
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
                    <span class="api-label">ParÃ¢metros</span>
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
                        <pre><code class="language-sol">local dados = {nome = "JoÃ£o", idade = 25}
local conteudo = nds.converta_arquivo(dados)
-- nome = "JoÃ£o"
-- 
-- idade = 25</code></pre>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



