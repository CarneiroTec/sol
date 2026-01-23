<?php
// Script para corrigir caracteres corrompidos (� de volta para UTF-8)

// Mapeamento de caracteres corrompidos comuns
$replacements = [
    '�' => 'á',  // á corrompido
    '�' => 'é',  // é corrompido  
    '�' => 'í',  // í corrompido
    '�' => 'ó',  // ó corrompido
    '�' => 'ú',  // ú corrompido
    '�' => 'â',  // â corrompido
    '�' => 'ê',  // ê corrompido
    '�' => 'ô',  // ô corrompido
    '�' => 'ã',  // ã corrompido
    '�' => 'õ',  // õ corrompido
    '�' => 'ç',  // ç corrompido
    '�' => 'Á',
    '�' => 'É',
    '�' => 'Í',
    '�' => 'Ó',
    '�' => 'Ú',
    '??' => '📦', // emoji
    '??' => '🎯',
    '??' => '⚙️',
    '??' => '🔧',
    '??' => '🎨',
    '??' => 'λ',
];

function fixFile($filepath, $replacements) {
    $content = file_get_contents($filepath);
    $original = $content;
    
    // Tentar detectar e corrigir
    foreach ($replacements as $bad => $good) {
        $content = str_replace($bad, $good, $content);
    }
    
    if ($content !== $original) {
        file_put_contents($filepath, $content);
        return true;
    }
    
    return false;
}

function processDirectory($dir, $extension, $replacements) {
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir)
    );
    
    $count = 0;
    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === $extension) {
            $filepath = $file->getPathname();
            
            if (fixFile($filepath, $replacements)) {
                echo "Corrigido: $filepath\n";
                $count++;
            }
        }
    }
    
    return $count;
}

echo "=== Corrigindo caracteres corrompidos ===\n\n";

echo "Processando arquivos .php...\n";
$phpCount = processDirectory(__DIR__ . '/docs/pages', 'php', $replacements);
echo "Total de arquivos .php corrigidos: $phpCount\n\n";

echo "Processando arquivos .sol...\n";
$solCount = processDirectory(__DIR__ . '/testes/testes_sol', 'sol', $replacements);
echo "Total de arquivos .sol corrigidos: $solCount\n\n";

echo "=== Concluído! ===\n";
