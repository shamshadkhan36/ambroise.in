# Ambroise Exhibition Websites - Local Runner (PowerShell)
Write-Host "========================================================" -ForegroundColor Cyan
Write-Host "  AMBROISE DESIGN - LOCAL EXHIBITION WEBSITES SUITE    " -ForegroundColor Yellow
Write-Host "========================================================" -ForegroundColor Cyan
Write-Host ""

$port = 8000
$url = "http://localhost:$port"

Write-Host "Checking local runtimes..." -ForegroundColor Gray

if (Get-Command python -ErrorAction SilentlyContinue) {
    Write-Host "[OK] Launching Python Web Server at $url" -ForegroundColor Green
    Start-Process $url
    python -m http.server $port
}
elseif (Get-Command php -ErrorAction SilentlyContinue) {
    Write-Host "[OK] Launching PHP Web Server at $url" -ForegroundColor Green
    Start-Process $url
    php -S "localhost:$port"
}
else {
    Write-Host "[INFO] Opening index.html directly in browser..." -ForegroundColor Yellow
    Start-Process (Join-Path $PSScriptRoot "index.html")
}
