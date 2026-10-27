$ErrorActionPreference = 'Stop'

Set-Location $PSScriptRoot

if (-not $env:DB_HOST) { $env:DB_HOST = '127.0.0.1' }
if (-not $env:DB_PORT) { $env:DB_PORT = '3306' }
if (-not $env:DB_NAME) { $env:DB_NAME = 'gym_final_website' }
if (-not $env:DB_USER) { $env:DB_USER = 'root' }
if (-not $env:DB_PASSWORD) { $env:DB_PASSWORD = '' }
if (-not $env:DB_CHARSET) { $env:DB_CHARSET = 'utf8mb4' }

php -S localhost:4000 router.php
