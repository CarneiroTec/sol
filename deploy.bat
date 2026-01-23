@echo off
taskkill /F /IM sol.exe 2>nul
timeout /t 1 /nobreak >nul
copy /Y sol.exe C:\Desenvolvimento\ctec\sol.exe
if %ERRORLEVEL% EQU 0 (
    echo SUCESSO
) else (
    echo FALHA
)
