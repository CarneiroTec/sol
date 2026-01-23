# Implementation Plan: Documentation Standardization

## Overview

Este plano implementa a padronização da documentação Sol em fases incrementais: primeiro o layout e navegação, depois a limpeza das páginas individuais, e finalmente ajustes de CSS/JS.

## Tasks

- [x] 1. Atualizar Layout Principal (index.php)
  - [x] 1.1 Adicionar array de ordem de páginas e mapa de nomes
    - Criar `$page_order` com sequência lógica de todas as páginas
    - Criar `$page_names` com nomes amigáveis em português
    - _Requirements: 3.1, 6.1_
  - [x] 1.2 Implementar função de navegação sequencial
    - Criar função `render_page_navigation()` que gera botões Anterior/Próximo
    - Integrar após inclusão do conteúdo da página
    - _Requirements: 3.2_
  - [x] 1.3 Reorganizar sidebar com progressão didática
    - Nova estrutura de seções em ordem de aprendizado:
      - 🚀 Primeiros Passos: Instalação, Como Começar
      - 📝 Básico: Variáveis, Tipos (Números, Texto, Lógicos), Condicionais, Repetições
      - 🎯 Intermediário: Funções, Tabelas, Módulos, Controle de Fluxo
      - 🎨 Paradigmas: Imperativo, Procedural, OO, Funcional
      - 🔧 Avançado: Metamétodos, Tratamento de Erros
      - 📚 Bibliotecas: Matemática, Texto, Tabela, UTF-8
      - 🌐 Sistema: Terminal, SO, Pacote
      - ⚡ Concorrência: Corrotinas, Filamento, Paralelismo, Canais
      - 🛠️ Ferramentas: Testes, Depuração, NDS
      - 📖 Referência: Referência Rápida, Biblioteca Padrão
    - _Requirements: 3.3, 6.2, 6.3_

- [x] 2. Checkpoint - Verificar navegação
  - Testar navegação sequencial em algumas páginas
  - Verificar sidebar reorganizada
  - Ensure all tests pass, ask the user if questions arise.

- [x] 3. Padronizar Páginas de Início
  - [x] 3.1 Atualizar pages/inicio.php
    - Remover spans manuais de highlighting nos code blocks
    - Usar estrutura `<pre><code class="language-sol">código puro</code></pre>`
    - _Requirements: 2.2, 2.4, 5.2_
  - [x] 3.2 Atualizar pages/instalacao.php
    - Padronizar code blocks
    - Remover estilos inline se houver
    - _Requirements: 2.2, 5.1_
  - [x] 3.3 Atualizar pages/como-comecar.php
    - Padronizar code blocks
    - Verificar estrutura H1 + lead
    - _Requirements: 2.2, 4.1, 4.2_

- [x] 4. Padronizar Páginas de Fundamentos
  - [x] 4.1 Atualizar pages/variaveis.php
    - Remover spans manuais, usar código puro
    - Adicionar container wrapper se ausente
    - _Requirements: 2.2, 5.2_
  - [x] 4.2 Atualizar pages/condicionais.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 4.3 Atualizar pages/controle-fluxo.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 4.4 Atualizar pages/repeticoes.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 4.5 Atualizar pages/funcoes.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 4.6 Atualizar pages/modulos.php
    - Padronizar code blocks
    - _Requirements: 2.2_

- [x] 5. Checkpoint - Verificar fundamentos
  - Testar syntax highlighting automático nas páginas atualizadas
  - Ensure all tests pass, ask the user if questions arise.

- [x] 6. Padronizar Páginas de Tipos
  - [x] 6.1 Atualizar pages/tipo-numeros.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 6.2 Atualizar pages/tipo-texto.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 6.3 Atualizar pages/tipo-tabelas.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 6.4 Atualizar pages/tipo-logicos.php
    - Padronizar code blocks
    - _Requirements: 2.2_

- [x] 7. Padronizar Páginas de Paradigmas
  - [x] 7.1 Atualizar pages/paradigma-imperativo.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 7.2 Atualizar pages/paradigma-procedural.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 7.3 Atualizar pages/paradigma-oo.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 7.4 Atualizar pages/paradigma-funcional.php
    - Padronizar code blocks
    - _Requirements: 2.2_

- [x] 8. Padronizar Páginas Avançadas
  - [x] 8.1 Atualizar pages/metamethods.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 8.2 Atualizar pages/tratamento-erros.php
    - Padronizar code blocks
    - _Requirements: 2.2_

- [x] 9. Padronizar Páginas de Bibliotecas
  - [x] 9.1 Atualizar pages/lib-matematica.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 9.2 Atualizar pages/lib-texto.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 9.3 Atualizar pages/lib-tabela.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 9.4 Atualizar pages/lib-utf8.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 9.5 Atualizar pages/lib-entrada-saida.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 9.6 Atualizar pages/lib-sistema.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 9.7 Atualizar pages/lib-package.php
    - Padronizar code blocks
    - _Requirements: 2.2_

- [x] 10. Padronizar Páginas de Concorrência
  - [x] 10.1 Atualizar pages/lib-corrotinas.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 10.2 Atualizar pages/lib-assincrono.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 10.3 Atualizar pages/lib-paralelismo.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 10.4 Atualizar pages/canais.php
    - Padronizar code blocks
    - _Requirements: 2.2_

- [x] 11. Padronizar Páginas de Ferramentas e Referência
  - [x] 11.1 Atualizar pages/lib-teste.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 11.2 Atualizar pages/lib-debug.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 11.3 Atualizar pages/lib-nds.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 11.4 Atualizar pages/referencia.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 11.5 Atualizar pages/referencia-biblioteca.php
    - Padronizar code blocks (usar language-sol em vez de language-lua)
    - _Requirements: 2.2_

- [x] 12. Atualizar páginas extras
  - [x] 12.1 Atualizar pages/sintaxe.php
    - Padronizar code blocks
    - Adicionar ao fluxo de navegação se necessário
    - _Requirements: 2.2_
  - [x] 12.2 Atualizar pages/tabelas.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 12.3 Atualizar pages/corrotinas.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 12.4 Atualizar pages/concorrencia.php
    - Padronizar code blocks
    - _Requirements: 2.2_
  - [x] 12.5 Atualizar pages/bibliotecas.php
    - Padronizar code blocks
    - _Requirements: 2.2_

- [x] 13. Remover botões de navegação individuais das páginas
  - Remover links "Próximo:" hardcoded das páginas individuais
  - A navegação agora é gerenciada pelo layout
  - _Requirements: 3.2_

- [x] 14. Ajustes finais de CSS
  - [x] 14.1 Verificar e ajustar estilos de navegação sequencial
    - Adicionar estilos para botões Anterior/Próximo
    - _Requirements: 1.1_
  - [x] 14.2 Verificar responsividade
    - Testar em diferentes tamanhos de tela
    - _Requirements: 7.1, 7.2_

- [x] 15. Checkpoint Final
  - Verificar todas as páginas para consistência
  - Testar navegação completa do início ao fim
  - Ensure all tests pass, ask the user if questions arise.

- [ ] 16. Corrigir Codificação UTF-8
  - [ ] 16.1 Corrigir pages/referencia-biblioteca.php
    - Substituir caracteres mal codificados por UTF-8 correto
    - "ðŸ"š" → "📚", "PadrÃ£o" → "Padrão", "DocumentaÃ§Ã£o" → "Documentação"
    - "funÃ§Ãµes" → "funções", "ParÃ¢metros" → "Parâmetros", "cÃ³digo" → "código"
    - "FunÃ§Ã£o" → "Função", "MatemÃ¡tica" → "Matemática", "VariÃ¡vel" → "Variável"
    - "LÃ³gico" → "Lógico", "NÃºmero" → "Número", "MÃºltiplos" → "Múltiplos"
    - _Requirements: Correção de codificação de caracteres_

## Notes

- Cada tarefa de padronização de página envolve remover spans manuais como `<span class="keyword">`, `<span class="string">`, etc.
- O código deve ficar puro dentro de `<code class="language-sol">` para o Prism.js processar
- A navegação sequencial será adicionada automaticamente pelo layout, não pelas páginas
- Manter o conteúdo original intacto - apenas reorganizar estrutura e remover formatação manual
