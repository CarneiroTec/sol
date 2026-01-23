@echo off
echo Matando processos sol.exe...
taskkill /F /IM sol.exe 2>nul
echo Aguardando liberacao...
timeout /t 3 /nobreak >nul

echo Tentando mover arquivo antigo...
if exist C:\Desenvolvimento\ctec\sol.exe (
    move /Y C:\Desenvolvimento\ctec\sol.exe C:\Desenvolvimento\ctec\sol.exe.old
    if %ERRORLEVEL% NEQ 0 (
        echo FALHA AO MOVER ANTIGO
        exit /b 1
    )
)

echo Copiando novo arquivo para ctec...
copy /Y sol.exe C:\Desenvolvimento\ctec\sol.exe
if %ERRORLEVEL% EQU 0 (
    echo SUCESSO - ctec
) else (
    echo FALHA AO COPIAR para ctec
)

echo Copiando novo arquivo para sol-vscode...
copy /Y sol.exe ..\sol-vscode\sol.exe
if %ERRORLEVEL% EQU 0 (
    echo SUCESSO - sol-vscode
) else (
    echo FALHA AO COPIAR para sol-vscode
)

echo Deploy completo!
