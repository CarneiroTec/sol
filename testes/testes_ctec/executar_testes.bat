@echo off
REM Compila e executa TODOS os testes ctec do LSP
cd /d "%~dp0"
cd ..\..

echo === Compilando testes LSP (Linkando com libsol.a) ===
set COMPILE=ctec -I. libsol.a

echo 1. Compilando teste_lsp_niveis...
%COMPILE% -o testes\testes_ctec\teste_lsp_niveis.exe testes\testes_ctec\teste_lsp_niveis.ctec
if %ERRORLEVEL% NEQ 0 ( echo ERRO compilacao niveis & exit /b 1 )

echo 2. Compilando teste_lsp_keywords...
%COMPILE% -o testes\testes_ctec\teste_lsp_keywords.exe testes\testes_ctec\teste_lsp_keywords.ctec
if %ERRORLEVEL% NEQ 0 ( echo ERRO compilacao keywords & exit /b 1 )

echo 3. Compilando teste_lsp_paradigmas...
%COMPILE% -o testes\testes_ctec\teste_lsp_paradigmas.exe testes\testes_ctec\teste_lsp_paradigmas.ctec
if %ERRORLEVEL% NEQ 0 ( echo ERRO compilacao paradigmas & exit /b 1 )

echo 4. Compilando teste_lsp_escopo...
%COMPILE% -o testes\testes_ctec\teste_lsp_escopo.exe testes\testes_ctec\teste_lsp_escopo.ctec
if %ERRORLEVEL% NEQ 0 ( echo ERRO compilacao escopo & exit /b 1 )

echo 5. Compilando teste_lsp_utils...
%COMPILE% -o testes\testes_ctec\teste_lsp_utils.exe testes\testes_ctec\teste_lsp_utils.ctec
if %ERRORLEVEL% NEQ 0 ( echo ERRO compilacao utils & exit /b 1 )

echo 6. Compilando teste_lsp_modulos_pacotes...
%COMPILE% -o testes\testes_ctec\teste_lsp_modulos_pacotes.exe testes\testes_ctec\teste_lsp_modulos_pacotes.ctec
if %ERRORLEVEL% NEQ 0 ( echo ERRO compilacao modulos & exit /b 1 )

echo 7. Compilando teste_lsp_validacao_docs...
%COMPILE% -o testes\testes_ctec\teste_lsp_validacao_docs.exe testes\testes_ctec\teste_lsp_validacao_docs.ctec
if %ERRORLEVEL% NEQ 0 ( echo ERRO compilacao validacao_docs & exit /b 1 )

echo 8. Compilando teste_lsp_completion...
%COMPILE% -o testes\testes_ctec\teste_lsp_completion.exe testes\testes_ctec\teste_lsp_completion.ctec
if %ERRORLEVEL% NEQ 0 ( echo ERRO compilacao completion & exit /b 1 )

echo 9. Compilando teste_lsp_complementar...
%COMPILE% -o testes\testes_ctec\teste_lsp_complementar.exe testes\testes_ctec\teste_lsp_complementar.ctec
if %ERRORLEVEL% NEQ 0 ( echo ERRO compilacao complementar & exit /b 1 )


echo.
echo === Executando SUITE COMPLETA ===
echo.

echo [1/7] NIVEIS
testes\testes_ctec\teste_lsp_niveis.exe
if %ERRORLEVEL% NEQ 0 ( echo FALHA NIVEIS & exit /b 1 )
echo OK

echo [2/7] KEYWORDS
testes\testes_ctec\teste_lsp_keywords.exe
if %ERRORLEVEL% NEQ 0 ( echo FALHA KEYWORDS & exit /b 1 )
echo OK

echo [3/7] PARADIGMAS
testes\testes_ctec\teste_lsp_paradigmas.exe
if %ERRORLEVEL% NEQ 0 ( echo FALHA PARADIGMAS & exit /b 1 )
echo OK

echo [4/7] ESCOPO
testes\testes_ctec\teste_lsp_escopo.exe
if %ERRORLEVEL% NEQ 0 ( echo FALHA ESCOPO & exit /b 1 )
echo OK

echo [5/7] UTILS
testes\testes_ctec\teste_lsp_utils.exe
if %ERRORLEVEL% NEQ 0 ( echo FALHA UTILS & exit /b 1 )
echo OK

echo [6/7] MODULOS E PACOTES
testes\testes_ctec\teste_lsp_modulos_pacotes.exe
if %ERRORLEVEL% NEQ 0 ( echo FALHA MODULOS & exit /b 1 )
echo OK

echo [7/7] VALIDACAO DOCS
testes\testes_ctec\teste_lsp_validacao_docs.exe
if %ERRORLEVEL% NEQ 0 ( echo FALHA DOCS & exit /b 1 )
echo OK

echo [8/9] COMPLETION
testes\testes_ctec\teste_lsp_completion.exe
if %ERRORLEVEL% NEQ 0 ( echo FALHA COMPLETION & exit /b 1 )
echo OK

echo [9/9] COMPLEMENTAR
testes\testes_ctec\teste_lsp_complementar.exe
if %ERRORLEVEL% NEQ 0 ( echo FALHA COMPLEMENTAR & exit /b 1 )
echo OK

echo.
echo =================================
echo SUITE 100%% APROVADA (SERVER CTEC)
echo =================================
exit /b 0
