<div class="container">
<h1>🔤 Biblioteca: UTF-8</h1>
<p class="lead">Trabalhe com texto Unicode e caracteres internacionais!</p>

<span class="emoji-big">🌍</span>

<h2>O que é UTF-8?</h2>
<p>
    UTF-8 é uma codificação que permite usar caracteres de todos os idiomas do mundo: 
    português (ã, ç), espanhol (ñ), chinês (中文), árabe (العربية), emojis (😀) e muito mais!
</p>

<h2>Comprimento de Texto UTF-8</h2>

<div class="code-block">
<pre><code class="language-sol">-- Contar caracteres UTF-8 (não bytes)
local texto = "Olá! 你好"
local comprimento = utf8.obtenha_comprimento(texto)
exiba(comprimento)  -- 8 caracteres

-- Operador # conta bytes, não caracteres!
exiba(#texto)  -- Mais que 8 (bytes)

-- Verificar intervalo específico
local len = utf8.obtenha_comprimento(texto, 1, 5)
exiba(len)  -- Caracteres entre posições 1 e 5</code></pre>
</div>

<h2>Pontos de Código (Codepoints)</h2>

<div class="code-block">
<pre><code class="language-sol">-- Obter código numérico de caracteres
local codigo = utf8.obtenha_ponto_código("A")
exiba(codigo)  -- 65

-- Múltiplos caracteres
local a, b, c = utf8.obtenha_ponto_código("ABC", 1, 3)
exiba(a, b, c)  -- 65, 66, 67

-- Caracteres especiais
local emoji = utf8.obtenha_ponto_código("😀")
exiba(emoji)  -- 128512</code></pre>
</div>

<h2>Criar Caracteres UTF-8</h2>

<div class="code-block">
<pre><code class="language-sol">-- Criar caractere a partir do código
local char = utf8.crie_caractere(65)
exiba(char)  -- A

-- Criar vários caracteres
local texto = utf8.crie_caractere(72, 101, 108, 108, 111)
exiba(texto)  -- Hello

-- Criar emoji
local emoji = utf8.crie_caractere(128512)
exiba(emoji)  -- 😀</code></pre>
</div>

<h2>Deslocamento de Bytes</h2>

<div class="code-block">
<pre><code class="language-sol">local texto = "Olá mundo"

-- Encontrar início do 3º caractere
local pos = utf8.obtenha_deslocamento(texto, 3)
exiba(pos)  -- Posição em bytes

-- Navegar caracteres
local pos = utf8.obtenha_deslocamento(texto, 1, 1)  -- Próximo caractere
local pos = utf8.obtenha_deslocamento(texto, -1)    -- Caractere anterior</code></pre>
</div>

<h2>Iterar Sobre Caracteres</h2>

<div class="code-block">
<pre><code class="language-sol">local texto = "Sol 太阳 ☀️"

-- Iterar sobre cada caractere
para pos, codigo em utf8.itere_códigos(texto) faça
    local char = utf8.crie_caractere(codigo)
    exiba(pos, codigo, char)
fim

-- Saída:
-- 1    83    S
-- 2    111   o
-- 3    108   l
-- 4    32    (espaço)
-- 5    22826 太
-- ...</code></pre>
</div>

<h2>Padrão de Caractere UTF-8</h2>

<div class="code-block">
<pre><code class="language-sol">-- Padrão para combinar um caractere UTF-8
local padrao = utf8.padrão_caractere

-- Usar em busca de padrões
local texto = "Olá 世界"
para char em texto.combine_globalmente(texto, utf8.padrão_caractere) faça
    exiba(char)
fim</code></pre>
</div>

<h2>Exemplo: Contador de Caracteres</h2>

<div class="code-block">
<pre><code class="language-sol">função analise_texto(texto)
    local total = utf8.obtenha_comprimento(texto)
    local bytes = #texto
    
    exiba("Texto: " .. texto)
    exiba("Caracteres: " .. total)
    exiba("Bytes: " .. bytes)
    exiba("Média bytes/char: " .. (bytes / total))
    
    exiba("\nCaracteres individuais:")
    para pos, codigo em utf8.itere_códigos(texto) faça
        local char = utf8.crie_caractere(codigo)
        exiba("  " .. char .. " (código: " .. codigo .. ")")
    fim
fim

analise_texto("Olá! 你好 😀")</code></pre>
</div>

<h2>Exemplo: Validação UTF-8</h2>

<div class="code-block">
<pre><code class="language-sol">função eh_utf8_valido(texto)
    local len, pos = utf8.obtenha_comprimento(texto)
    
    se len então
        retorne verdadeiro
    fim
    
    exiba("UTF-8 inválido na posição: " .. pos)
    retorne falso
fim

se eh_utf8_valido("Texto válido 中文") então
    exiba("✅ Texto UTF-8 válido")
fim</code></pre>
</div>

<h2>Exemplo: Reverter Texto UTF-8</h2>

<div class="code-block">
<pre><code class="language-sol">função reverta_utf8(texto)
    local caracteres = {}
    
    -- Coletar todos os caracteres
    para pos, codigo em utf8.itere_códigos(texto) faça
        tabela.insira(caracteres, utf8.crie_caractere(codigo))
    fim
    
    -- Reverter a lista
    local revertido = {}
    para i = #caracteres, 1, -1 faça
        tabela.insira(revertido, caracteres[i])
    fim
    
    retorne tabela.concatene(revertido)
fim

local original = "Olá 世界"
local revertido = reverta_utf8(original)
exiba(original)   -- Olá 世界
exiba(revertido)  -- 界世 álO</code></pre>
</div>

<div class="tip-box">
    Use sempre as funções UTF-8 quando trabalhar com texto internacional. O operador <code>#</code> e funções de texto padrão contam bytes, não caracteres!
</div>

<div class="success-box">
    A biblioteca UTF-8 permite trabalhar corretamente com texto em qualquer idioma do mundo!
</div>
</div>