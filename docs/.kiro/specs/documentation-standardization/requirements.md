# Requirements Document

## Introduction

Este documento define os requisitos para padronização da documentação da linguagem Sol. O objetivo é criar uma experiência de leitura consistente, intuitiva e com progressão linear através de todas as páginas, mantendo o conteúdo original intacto enquanto reorganiza a estrutura, estilos e interatividade.

## Glossary

- **Documentation_System**: Sistema completo de documentação da linguagem Sol
- **Page**: Arquivo PHP individual em `pages/` contendo conteúdo estático
- **Layout**: Arquivo `index.php` que define a estrutura geral e navegação
- **Style_System**: Regras CSS em `assets/css/style.css`
- **Script_System**: Código JavaScript em `assets/js/`
- **Code_Block**: Elemento HTML que exibe código-fonte com syntax highlighting
- **Navigation_Flow**: Sequência lógica de páginas para progressão do aprendizado
- **Prism_Highlighter**: Sistema de syntax highlighting usando Prism.js

## Requirements

### Requirement 1: Estrutura de Arquivos Consistente

**User Story:** Como desenvolvedor, quero que todos os arquivos sigam uma estrutura padronizada, para que a manutenção seja simples e previsível.

#### Acceptance Criteria

1. THE Style_System SHALL conter todas as regras CSS em `assets/css/style.css`
2. THE Script_System SHALL conter toda lógica de interatividade em `assets/js/`
3. WHEN uma Page é criada ou modificada, THE Documentation_System SHALL garantir que ela contenha apenas conteúdo estático sem estilos inline
4. THE Layout SHALL ser o único arquivo responsável por incluir CSS, JS e definir a estrutura HTML base

### Requirement 2: Syntax Highlighting Consistente

**User Story:** Como usuário, quero que todos os blocos de código tenham o mesmo visual e comportamento, para uma experiência de leitura uniforme.

#### Acceptance Criteria

1. THE Prism_Highlighter SHALL ser aplicado automaticamente a todos os Code_Block em todas as páginas
2. WHEN um Code_Block é renderizado, THE Documentation_System SHALL usar a estrutura `<div class="code-block"><pre><code class="language-sol">...</code></pre></div>`
3. THE Style_System SHALL definir estilos consistentes para classes `.keyword`, `.string`, `.comment`, `.function`, `.number`
4. WHEN um Code_Block contém código Sol, THE Prism_Highlighter SHALL aplicar highlighting automático sem necessidade de spans manuais

### Requirement 3: Navegação e Progressão Linear

**User Story:** Como iniciante, quero uma progressão clara de aprendizado, para que eu saiba qual página estudar em seguida.

#### Acceptance Criteria

1. THE Navigation_Flow SHALL organizar páginas em ordem lógica de complexidade crescente
2. WHEN uma Page é exibida, THE Documentation_System SHALL mostrar botões "Anterior" e "Próximo" para navegação sequencial
3. THE Layout SHALL exibir sidebar com seções agrupadas logicamente: Início, Fundamentos, Tipos, Paradigmas, Avançado, Bibliotecas
4. WHEN o usuário está em uma Page, THE Documentation_System SHALL destacar visualmente a posição atual na sidebar

### Requirement 4: Estrutura de Conteúdo Padronizada

**User Story:** Como usuário, quero que todas as páginas sigam o mesmo padrão visual, para facilitar a leitura e compreensão.

#### Acceptance Criteria

1. THE Page SHALL iniciar com título H1 contendo emoji e nome do tópico
2. THE Page SHALL conter parágrafo introdutório com classe `lead` após o título
3. WHEN uma Page contém seções, THE Documentation_System SHALL usar H2 para seções principais e H3 para subseções
4. THE Page SHALL usar classes padronizadas: `.tip-box` para dicas, `.warning-box` para avisos, `.success-box` para sucessos
5. THE Page SHALL terminar com botão de navegação para próxima página relevante

### Requirement 5: Remoção de Estilos Inline e Spans Manuais

**User Story:** Como mantenedor, quero que o código seja limpo e sem duplicação, para facilitar atualizações futuras.

#### Acceptance Criteria

1. WHEN uma Page contém estilos inline, THE Documentation_System SHALL removê-los e usar classes CSS
2. WHEN um Code_Block usa spans manuais para highlighting, THE Documentation_System SHALL substituí-los por código puro para Prism processar
3. THE Style_System SHALL definir todas as variações visuais necessárias via classes CSS

### Requirement 6: Reorganização do Fluxo de Aprendizado

**User Story:** Como estudante, quero uma ordem de páginas que faça sentido didático, para aprender de forma progressiva.

#### Acceptance Criteria

1. THE Navigation_Flow SHALL seguir a ordem: Início → Instalação → Como Começar → Variáveis → Tipos → Condicionais → Repetições → Funções → Tabelas → Módulos → Paradigmas → Avançado → Bibliotecas
2. WHEN páginas de biblioteca são exibidas, THE Documentation_System SHALL agrupá-las por categoria: Básicas (Matemática, Texto, Tabela), Sistema (Terminal, SO, Pacote), Concorrência (Corrotinas, Filamento, Paralelismo, Canais)
3. THE Layout SHALL refletir esta organização na sidebar

### Requirement 7: Responsividade e Acessibilidade

**User Story:** Como usuário mobile, quero acessar a documentação em qualquer dispositivo, para estudar onde estiver.

#### Acceptance Criteria

1. THE Style_System SHALL garantir que a documentação seja legível em telas de 320px ou mais
2. WHEN a tela é menor que 992px, THE Layout SHALL ocultar a sidebar e mostrar navegação alternativa
3. THE Documentation_System SHALL manter contraste adequado entre texto e fundo para acessibilidade
