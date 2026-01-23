@echo off
cd /d "%~dp0"
cd ..\..

echo === TESTE MANUAL DE COMPLETION (via STDIN/STDOUT) ===
echo.
echo 1. Enviando didOpen + completion request...
type testes\testes_ctec\request_completion.nds | sol.exe --lsp > testes\testes_ctec\response_real.nds
echo.
echo 2. Resposta real gravada em: response_real.nds
echo.
echo 3. Comparando com resposta esperada...
fc /N testes\testes_ctec\response_real.nds testes\testes_ctec\response_completion_esperado.nds
echo.
echo 4. Se houver diferenças, o bug ainda existe.
echo.
