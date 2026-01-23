<?php
// parse_nds_php.php
// Lê arquivo flattened NDS e reconstrói estrutura, emite NDS reconstituído

$file = $argv[1] ?? __DIR__ . '/../output_completion_easy.nds';
$raw = file_get_contents($file);

function parseFlattened($src){
    $out = [];
    $lines = preg_split('/\r?\n/', $src);
    foreach($lines as $line){
        if (!preg_match('/^\s*([^=]+)=\s*(.*)$/', $line, $m)) continue;
        $key = trim($m[1]);
        $val = trim($m[2]);
        if (strlen($val) >=2 && $val[0] == '"' && $val[strlen($val)-1] == '"'){
            $val = substr($val,1,-1);
            $val = str_replace('\\"','"', str_replace('\\\\','\\',$val));
        } elseif (is_numeric($val)) {
            if (strpos($val,'.') !== false) $val = (float)$val; else $val = (int)$val;
        } elseif ($val === 'true' || $val === 'false') {
            $val = ($val === 'true');
        }
        $parts = explode('_', $key);
        $cur =& $out;
        $n = count($parts);
        for ($i=0;$i<$n;$i++){
            $p = $parts[$i];
            if ($i === $n-1){
                if (ctype_digit($p)) {
                    $idx = intval($p)-1;
                    $cur[$idx] = $val;
                } else {
                    $cur[$p] = $val;
                }
            } else {
                if (ctype_digit($p)) {
                    $idx = intval($p)-1;
                    if (!isset($cur[$idx]) || !is_array($cur[$idx])) $cur[$idx] = [];
                    $cur =& $cur[$idx];
                } else {
                    if (!isset($cur[$p]) || !is_array($cur[$p])) $cur[$p] = [];
                    $cur =& $cur[$p];
                }
            }
        }
    }
    return $out;
}

function serializeNds($obj, $pretty=false, $indent=''){
    if (is_null($obj)) return 'nulo';
    if (is_string($obj)) return '"'.str_replace(['\\','"'], ['\\\\','\\"'], $obj).'"';
    if (is_bool($obj)) return $obj? 'true':'false';
    if (is_numeric($obj)) return (string)$obj;
    if (is_array($obj)){
        // detect sequential array
        $isSeq = array_keys($obj) === range(0, count($obj)-1);
        if ($isSeq){
            $parts = array_map(function($v)use($pretty,$indent){return serializeNds($v,$pretty,$indent.'  ');}, $obj);
            return '{ ' . implode(', ', $parts) . ' }';
        }
        $parts = [];
        foreach($obj as $k=>$v){
            $parts[] = $k . ' = ' . serializeNds($v,$pretty,$indent.'  ');
        }
        if ($pretty) return "{\n". $indent . '  ' . implode(',\n'.$indent.'  ', $parts) . "\n" . $indent . '}';
        return '{ ' . implode(', ', $parts) . ' }';
    }
    return '""';
}

$parsed = parseFlattened($raw);
echo "# Flattened input file: $file\n";
echo $raw . "\n";
echo "\n# Reconstructed NDS (compact)\n";
echo serializeNds($parsed, false) . "\n";
echo "\n# Reconstructed NDS (pretty)\n";
echo serializeNds($parsed, true) . "\n";

$response = ['id'=>1,'resultado'=> $parsed['resultado'] ?? $parsed];
echo "\n# LSP-like response (compact)\n";
echo serializeNds($response, false) . "\n";

?>
