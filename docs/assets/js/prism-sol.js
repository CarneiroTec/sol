/**
 * Sol Language Definition for Prism.js
 * & Automatic Syntax Highlighter
 * 
 * Baseado na documentação oficial:
 * - Palavras-chave em português com acentuação
 * - Bibliotecas padrão e suas funções
 * - Operadores específicos
 */
(function () {
    // Lista de funções da biblioteca padrão (para highlight específico)
    const stdLibFunctions = [
        // Matemática
        "obtenha_valor_absoluto", "arredonde_para_piso", "arredonde_para_teto", "obtenha_máximo", "obtenha_mínimo",
        "obtenha_raiz_quadrada", "obtenha_seno", "obtenha_cosseno", "obtenha_tangente", "obtenha_arco_seno",
        "obtenha_arco_cosseno", "obtenha_arco_tangente", "converta_para_radianos", "converta_para_graus",
        "obtenha_exponencial", "obtenha_logaritmo", "gere_aleatório", "defina_semente_aleatória",
        "converta_para_inteiro", "obtenha_resto_flutuante", "separe_fração_inteiro",
        // Texto
        "obtenha_comprimento", "converta_para_maiúscula", "converta_para_minúscula", "obtenha_subtexto",
        "inverta", "encontre", "substitua_globalmente", "formate", "obtenha_byte", "crie_caractere",
        "combine", "combine_globalmente", "empacote", "desempacote", "obtenha_tamanho_pacote",
        // Tabela
        "crie", "insira", "remova", "concatene", "ordene", "mova",
        // Terminal / Sistema
        "feche", "despeje", "defina_entrada", "itere_linhas", "abra", "defina_saída", "abra_processo",
        "escreva", "obtenha_relógio", "obtenha_data", "calcule_diferença_tempo", "saia",
        "obtenha_variável_ambiente", "renomeie", "crie_pasta", "defina_localidade", "obtenha_tempo",
        "gere_nome_temporário", "crie_arquivo_temporário",
        // Corrotina / Filamento / Paralelismo
        "retome", "obtenha_executando", "obtenha_estado", "envolva", "ceda", "verifique_pode_ceder",
        "tarefa", "inicie_loop", "durma", "canal", "envie", "receba", "aguarde_todos", "execute_paralelo",
        // Teste
        "afirme", "afirme_igual", "afirme_verdadeiro", "afirme_falso", "erro",
        // Globais
        "exiba", "leia", "tipo", "pares", "ipares", "carregue", "carregue_arquivo",
        "colete_lixo", "tostring", "tonumber", "obtenha_metatabela", "defina_metatabela",
        "importe", "inclua", "require"
    ].join("|");

    const keywords = [
        "local", "global", "função", "retorne", "se", "então", "fim", "para", "faça",
        "em", "interrompa", "execute", "e", "ou", "não", "verdadeiro", "falso", "nulo", "var"
    ].join("|");

    Prism.languages.sol = {
        'comment': {
            pattern: /--\[=*\[[\s\S]*?\]=*\]|--.*/,
            greedy: true
        },
        'string': {
            pattern: /(["'])(?:(?!\1)[^\\\r\n]|\\z(?:\r\n|\r|\n)|\\(?:\r\n|[\s\S])|\\[\s\S])*\1|\[(=*)\[[\s\S]*?\]\2\]/,
            greedy: true
        },
        'class-name': {
            pattern: /\b(matemática|texto|tabela|terminal|sistema_operacional|utf8|corrotina|filamento|paralelismo|teste|pacote|depuração|bit32)\b/,
            alias: 'variable'
        },
        'constant': /\b(pi|enorme|inteiro_máximo|inteiro_mínimo)\b/,
        'builtin': new RegExp("\\b(" + stdLibFunctions + ")\\b"),
        'keyword': new RegExp("\\b(" + keywords + ")\\b"),
        'function': /\b[a-z_]\w*(?=\s*(?:[({]))|(?<=[.:])[a-z_]\w*/i,
        'number': /\b0x[\da-f]+\b|(?:\b\d+(?:\.\d*)?|\B\.\d+)(?:e[+-]?\d+)?/i,
        'operator': /\.\.|[=<>~]=?|[+*/%^#-]|\b(e|ou|não)\b/,
        'punctuation': /[\[\](){},;]|\.+/
    };

    // Script de inicialização automática
    document.addEventListener('DOMContentLoaded', function () {
        // Encontra TODOS os blocos <pre>
        document.querySelectorAll('pre').forEach(pre => {
            // Verificar se precisa envolver em .code-block (para estilo)
            if (!pre.closest('.code-block')) {
                const wrapper = document.createElement('div');
                wrapper.className = 'code-block';
                pre.parentNode.replaceChild(wrapper, pre);
                wrapper.appendChild(pre);
            }

            // Garante que existe um <code> dentro
            let code = pre.querySelector('code');
            if (!code) {
                // Legado sem <code>: cria um
                code = document.createElement('code');
                code.textContent = pre.textContent.trim();
                pre.innerHTML = '';
                pre.appendChild(code);
            }

            // Força a linguagem Sol (sobrescreve language-lua se existir)
            code.className = 'language-sol';

            // Dispara highlight
            Prism.highlightElement(code);
        });

        // Adiciona botão de copiar
        document.querySelectorAll('.code-block').forEach(block => {
            if (block.querySelector('.btn-copy')) return;

            const button = document.createElement('button');
            button.className = 'btn-copy';
            button.innerHTML = '<i class="bi bi-clipboard"></i>';
            button.title = 'Copiar código';

            button.onclick = () => {
                const code = block.querySelector('code') || block.querySelector('pre');
                navigator.clipboard.writeText(code.textContent);
                button.innerHTML = '<i class="bi bi-check2"></i>';
                setTimeout(() => button.innerHTML = '<i class="bi bi-clipboard"></i>', 2000);
            };

            block.style.position = 'relative';
            block.appendChild(button);
        });
    });
})();
