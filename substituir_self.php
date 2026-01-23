<?php
// Script para substituir 'self' por 'ego' preservando UTF-8

function processDirectory($dir, $extension) {
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir)
    );
    
    $count = 0;
    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === $extension) {
            $filepath = $file->getPathname();
            
            // Ler arquivo em UTF-8
            $content = file_get_contents($filepath);
            
            // Substituir 'self' por 'ego' (palavra completa)
            $newContent = preg_replace('/\bself\b/', 'ego', $content);
            
            // Salvar apenas se houve mudança
            if ($content !== $newContent) {
                file_put_contents($filepath, $newContent);
                echo "Atualizado: $filepath\n";
                $count++;
            }
        }
    }
    
    return $count;
}

echo "=== Substituindo 'self' por 'ego' ===\n\n";

// Processar documentação PHP
echo "Processando arquivos .php...\n";
$phpCount = processDirectory(__DIR__ . '/docs/pages', 'php');
echo "Total de arquivos .php atualizados: $phpCount\n\n";

// Processar testes Sol
echo "Processando arquivos .sol...\n";
$solCount = processDirectory(__DIR__ . '/testes/testes_sol', 'sol');
echo "Total de arquivos .sol atualizados: $solCount\n\n";

echo "=== Concluído! ===\n";
echo "Total geral: " . ($phpCount + $solCount) . " arquivos atualizados\n";
