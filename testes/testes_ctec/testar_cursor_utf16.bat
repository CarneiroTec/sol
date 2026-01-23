@echo off
cd /d "%~dp0"
cd ..\..

echo Compilando teste_cursor_utf16...
ctec -I. libsol.a -o testes\testes_ctec\teste_cursor_utf16.exe testes\testes_ctec\teste_cursor_utf16.ctec
if %ERRORLEVEL% NEQ 0 (
    echo ERRO na compilacao
    exit /b 1
)

echo.
echo Executando teste_cursor_utf16 (DEVE FALHAR ANTES DO FIX)...
testes\testes_ctec\teste_cursor_utf16.exe
echo.
