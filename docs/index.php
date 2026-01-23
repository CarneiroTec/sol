<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sol - Linguagem de Programação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'inicio';
    
    // Ordem sequencial das páginas para navegação (progressão didática)
    $page_order = [
        // 🚀 Primeiros Passos
        'inicio', 'como-comecar', 'instalacao',
        // 📝 Básico
        'variaveis', 'tipo-numeros', 'tipo-texto', 'tipo-logicos', 'condicionais', 'repeticoes',
        // 🎯 Intermediário
        'funcoes', 'tipo-tabelas', 'modulos', 'controle-fluxo',
        // 🎨 Paradigmas
        'paradigma-imperativo', 'paradigma-procedural', 'paradigma-oo', 'paradigma-funcional',
        // 🔧 Avançado
        'metamethods', 'tratamento-erros',
        // 📚 Bibliotecas
        'lib-matematica', 'lib-texto', 'lib-tabela', 'lib-utf8',
        // 🌐 Sistema
        'lib-entrada-saida', 'lib-sistema', 'lib-package',
        // ⚡ Concorrência
        'lib-corrotinas', 'lib-assincrono', 'lib-paralelismo', 'canais',
        // 🛠️ Ferramentas
        'lib-teste', 'lib-debug', 'lib-nds',
        // 📖 Referência
        'referencia', 'referencia-biblioteca'
    ];
    
    // Mapa de nomes amigáveis
    $page_names = [
        'inicio' => 'Início', 'como-comecar' => 'Como Começar', 'instalacao' => 'Instalação',
        'variaveis' => 'Variáveis', 'condicionais' => 'Condicionais', 'controle-fluxo' => 'Controle de Fluxo',
        'repeticoes' => 'Repetições', 'funcoes' => 'Funções', 'modulos' => 'Módulos',
        'tipo-numeros' => 'Números', 'tipo-texto' => 'Texto', 'tipo-tabelas' => 'Tabelas', 'tipo-logicos' => 'Lógicos',
        'paradigma-imperativo' => 'Imperativo', 'paradigma-procedural' => 'Procedural', 
        'paradigma-oo' => 'Orientação a Objetos', 'paradigma-funcional' => 'Funcional',
        'metamethods' => 'Metamétodos', 'tratamento-erros' => 'Tratamento de Erros',
        'referencia' => 'Referência Rápida', 'referencia-biblioteca' => 'Referência API',
        'lib-entrada-saida' => 'Terminal', 'lib-sistema' => 'Sistema', 'lib-teste' => 'Testes',
        'lib-assincrono' => 'Filamento', 'lib-paralelismo' => 'Paralelismo', 
        'lib-corrotinas' => 'Corrotinas', 'lib-debug' => 'Depuração', 'lib-package' => 'Pacote',
        'lib-matematica' => 'Matemática', 'lib-texto' => 'Texto (Lib)', 'lib-tabela' => 'Tabela (Lib)', 'lib-utf8' => 'UTF-8',
        'lib-nds' => 'NDS', 'canais' => 'Canais'
    ];
    
    $allowed_pages = $page_order;
    
    if (!in_array($page, $allowed_pages)) {
        $page = 'inicio';
    }
    
    // Função para renderizar navegação sequencial
    function render_page_navigation($current_page, $page_order, $page_names) {
        $current_index = array_search($current_page, $page_order);
        if ($current_index === false) return '';
        
        $prev_page = $current_index > 0 ? $page_order[$current_index - 1] : null;
        $next_page = $current_index < count($page_order) - 1 ? $page_order[$current_index + 1] : null;
        
        if (!$prev_page && !$next_page) return '';
        
        $html = '<nav class="page-navigation mt-5 pt-4 border-top">';
        $html .= '<div class="row">';
        
        if ($prev_page) {
            $prev_name = isset($page_names[$prev_page]) ? $page_names[$prev_page] : ucfirst($prev_page);
            $html .= '<div class="col-6">';
            $html .= '<a href="?page=' . $prev_page . '" class="btn btn-outline-secondary">';
            $html .= '<i class="bi bi-arrow-left me-2"></i>Anterior<br>';
            $html .= '<small class="text-muted">' . $prev_name . '</small>';
            $html .= '</a>';
            $html .= '</div>';
        } else {
            $html .= '<div class="col-6"></div>';
        }
        
        if ($next_page) {
            $next_name = isset($page_names[$next_page]) ? $page_names[$next_page] : ucfirst($next_page);
            $html .= '<div class="col-6 text-end">';
            $html .= '<a href="?page=' . $next_page . '" class="btn btn-sol">';
            $html .= 'Próximo<i class="bi bi-arrow-right ms-2"></i><br>';
            $html .= '<small>' . $next_name . '</small>';
            $html .= '</a>';
            $html .= '</div>';
        }
        
        $html .= '</div>';
        $html .= '</nav>';
        
        return $html;
    }
    
    $is_docs = ($page !== 'inicio');
    ?>

    <!-- Navbar Principal (Links Gerais) -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=inicio">
                <i class="bi bi-sun-fill me-2"></i>Sol
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="?page=referencia" class="nav-link <?= $page === 'referencia' ? 'active' : ''; ?>">
                            <i class="bi bi-lightning-charge me-1"></i>Referência Rápida
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=referencia-biblioteca" class="nav-link <?= $page === 'referencia-biblioteca' ? 'active' : ''; ?>">
                            <i class="bi bi-book me-1"></i>Biblioteca Padrão
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page === 'inicio' ? 'active' : '' ?>" href="?page=inicio">
                            <i class="bi bi-house-fill me-1"></i>Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page === 'como-comecar' ? 'active' : '' ?>" href="?page=como-comecar">
                            <i class="bi bi-rocket-takeoff me-1"></i>Como Começar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page === 'instalacao' ? 'active' : '' ?>" href="?page=instalacao">
                            <i class="bi bi-download me-1"></i>Instalação
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/sol-lang" target="_blank">
                            <i class="bi bi-github me-1"></i>GitHub
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="docs-wrapper">
        <?php if ($is_docs): ?>
        <!-- Sidebar de Documentação -->
        <aside class="docs-sidebar">
            <div class="sidebar-header">
                <i class="bi bi-book me-2"></i>Documentação
            </div>
            
            <div class="sidebar-section">
                <div class="sidebar-title">🚀 Primeiros Passos</div>
                <ul class="sidebar-nav">
                    <li><a href="?page=instalacao" class="<?= $page === 'instalacao' ? 'active' : '' ?>">Instalação</a></li>
                    <li><a href="?page=como-comecar" class="<?= $page === 'como-comecar' ? 'active' : '' ?>">Como Começar</a></li>
                </ul>
            </div>
            
            <div class="sidebar-section">
                <div class="sidebar-title">📝 Básico</div>
                <ul class="sidebar-nav">
                    <li><a href="?page=variaveis" class="<?= $page === 'variaveis' ? 'active' : '' ?>">Variáveis</a></li>
                    <li><a href="?page=tipo-numeros" class="<?= $page === 'tipo-numeros' ? 'active' : '' ?>">Números</a></li>
                    <li><a href="?page=tipo-texto" class="<?= $page === 'tipo-texto' ? 'active' : '' ?>">Texto</a></li>
                    <li><a href="?page=tipo-logicos" class="<?= $page === 'tipo-logicos' ? 'active' : '' ?>">Lógicos</a></li>
                    <li><a href="?page=condicionais" class="<?= $page === 'condicionais' ? 'active' : '' ?>">Condicionais</a></li>
                    <li><a href="?page=repeticoes" class="<?= $page === 'repeticoes' ? 'active' : '' ?>">Repetições</a></li>
                </ul>
            </div>
            
            <div class="sidebar-section">
                <div class="sidebar-title">🎯 Intermediário</div>
                <ul class="sidebar-nav">
                    <li><a href="?page=funcoes" class="<?= $page === 'funcoes' ? 'active' : '' ?>">Funções</a></li>
                    <li><a href="?page=tipo-tabelas" class="<?= $page === 'tipo-tabelas' ? 'active' : '' ?>">Tabelas</a></li>
                    <li><a href="?page=modulos" class="<?= $page === 'modulos' ? 'active' : '' ?>">Módulos</a></li>
                    <li><a href="?page=controle-fluxo" class="<?= $page === 'controle-fluxo' ? 'active' : '' ?>">Controle de Fluxo</a></li>
                </ul>
            </div>
            
            <div class="sidebar-section">
                <div class="sidebar-title">🎨 Paradigmas</div>
                <ul class="sidebar-nav">
                    <li><a href="?page=paradigma-imperativo" class="<?= $page === 'paradigma-imperativo' ? 'active' : '' ?>">Imperativo</a></li>
                    <li><a href="?page=paradigma-procedural" class="<?= $page === 'paradigma-procedural' ? 'active' : '' ?>">Procedural</a></li>
                    <li><a href="?page=paradigma-oo" class="<?= $page === 'paradigma-oo' ? 'active' : '' ?>">Orientação a Objetos</a></li>
                    <li><a href="?page=paradigma-funcional" class="<?= $page === 'paradigma-funcional' ? 'active' : '' ?>">Funcional</a></li>
                </ul>
            </div>
            
            <div class="sidebar-section">
                <div class="sidebar-title">🔧 Avançado</div>
                <ul class="sidebar-nav">
                    <li><a href="?page=metamethods" class="<?= $page === 'metamethods' ? 'active' : '' ?>">Metamétodos</a></li>
                    <li><a href="?page=tratamento-erros" class="<?= $page === 'tratamento-erros' ? 'active' : '' ?>">Tratamento de Erros</a></li>
                </ul>
            </div>
            
            <div class="sidebar-section">
                <div class="sidebar-title">📚 Bibliotecas</div>
                <ul class="sidebar-nav">
                    <li><a href="?page=lib-matematica" class="<?= $page === 'lib-matematica' ? 'active' : '' ?>">Matemática</a></li>
                    <li><a href="?page=lib-texto" class="<?= $page === 'lib-texto' ? 'active' : '' ?>">Texto</a></li>
                    <li><a href="?page=lib-tabela" class="<?= $page === 'lib-tabela' ? 'active' : '' ?>">Tabela</a></li>
                    <li><a href="?page=lib-utf8" class="<?= $page === 'lib-utf8' ? 'active' : '' ?>">UTF-8</a></li>
                </ul>
            </div>
            
            <div class="sidebar-section">
                <div class="sidebar-title">🌐 Sistema</div>
                <ul class="sidebar-nav">
                    <li><a href="?page=lib-entrada-saida" class="<?= $page === 'lib-entrada-saida' ? 'active' : '' ?>">Terminal</a></li>
                    <li><a href="?page=lib-sistema" class="<?= $page === 'lib-sistema' ? 'active' : '' ?>">Sistema Operacional</a></li>
                    <li><a href="?page=lib-package" class="<?= $page === 'lib-package' ? 'active' : '' ?>">Pacote</a></li>
                </ul>
            </div>
            
            <div class="sidebar-section">
                <div class="sidebar-title">⚡ Concorrência</div>
                <ul class="sidebar-nav">
                    <li><a href="?page=lib-corrotinas" class="<?= $page === 'lib-corrotinas' ? 'active' : '' ?>">Corrotinas</a></li>
                    <li><a href="?page=lib-assincrono" class="<?= $page === 'lib-assincrono' ? 'active' : '' ?>">Filamento</a></li>
                    <li><a href="?page=lib-paralelismo" class="<?= $page === 'lib-paralelismo' ? 'active' : '' ?>">Paralelismo</a></li>
                    <li><a href="?page=canais" class="<?= $page === 'canais' ? 'active' : '' ?>">Canais</a></li>
                </ul>
            </div>
            
            <div class="sidebar-section">
                <div class="sidebar-title">🛠️ Ferramentas</div>
                <ul class="sidebar-nav">
                    <li><a href="?page=lib-teste" class="<?= $page === 'lib-teste' ? 'active' : '' ?>">Testes</a></li>
                    <li><a href="?page=lib-debug" class="<?= $page === 'lib-debug' ? 'active' : '' ?>">Depuração</a></li>
                    <li><a href="?page=lib-nds" class="<?= $page === 'lib-nds' ? 'active' : '' ?>">NDS</a></li>
                </ul>
            </div>
            
            <div class="sidebar-section">
                <div class="sidebar-title">📖 Referência</div>
                <ul class="sidebar-nav">
                    <li><a href="?page=referencia" class="<?= $page === 'referencia' ? 'active' : '' ?>">Referência Rápida</a></li>
                    <li><a href="?page=referencia-biblioteca" class="<?= $page === 'referencia-biblioteca' ? 'active' : '' ?>">Biblioteca Padrão</a></li>
                </ul>
            </div>
        </aside>
        <?php endif; ?>

        <!-- Conteúdo Principal -->
        <main class="docs-content <?= $is_docs ? 'with-sidebar' : 'full-width' ?>">
            <?php if ($is_docs): ?>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?page=inicio">Sol</a></li>
                        <?php
                        // Mapa de nomes amigáveis já definido acima
                        
                        // Determinar categoria (simplificado)
                        $category = '';
                        if (strpos($page, 'lib-') === 0) $category = 'Bibliotecas';
                        elseif (strpos($page, 'tipo-') === 0) $category = 'Tipos de Dados';
                        elseif (strpos($page, 'paradigma-') === 0) $category = 'Paradigmas';
                        
                        if ($category): ?>
                            <li class="breadcrumb-item"><?= $category ?></li>
                        <?php endif; ?>
                        
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= isset($page_names[$page]) ? $page_names[$page] : ucfirst($page) ?>
                        </li>
                    </ol>
                </nav>
            <?php endif; ?>

            <?php
            $file = "pages/{$page}.php";
            if (file_exists($file)) {
                include $file;
                
                // Adicionar navegação sequencial (exceto na página inicial)
                if ($is_docs) {
                    echo render_page_navigation($page, $page_order, $page_names);
                }
            } else {
                include "pages/404.php";
            }
            ?>
        </main>
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto py-4">
        <div class="container text-center text-muted">
            <p class="mb-2">Sol - Linguagem de Programação Brasileira 🇧🇷</p>
            <p class="small mb-0">Desenvolvido com ❤️ pela comunidade.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Prism.js for Syntax Highlighting -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <!-- Custom Sol Language Definition -->
    <script src="assets/js/prism-sol.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
    
    <a href="#" class="btn-back-to-top" title="Voltar ao Topo">
        <i class="bi bi-arrow-up"></i>
    </a>
</body>
</html>
```
