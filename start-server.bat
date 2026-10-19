@echo off
title Ambroise Exhibition Websites - Local Runner
echo ========================================================
echo   AMBROISE DESIGN - LOCAL EXHIBITION WEBSITES SUITE
echo ========================================================
echo.
echo Starting local web server on port 8000...
echo.

:: Try Python first, fallback to PHP
where python >nul 2>nul
if %errorlevel% equ 0 (
    echo [OK] Using Python 3 HTTP Server...
    start http://localhost:8000
    python -m http.server 8000
    goto end
)

where php >nul 2>nul
if %errorlevel% equ 0 (
    echo [OK] Using PHP Built-in Server...
    start http://localhost:8000
    php -S localhost:8000
    goto end
)

echo [INFO] No server runtime detected. Opening index.html directly...
start "" "%~dp0index.html"

:end
pause
