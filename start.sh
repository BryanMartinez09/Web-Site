#!/bin/bash

set -e

echo "🚀 Instalando dependencias de Composer..."
composer install --no-dev --optimize-autoloader

echo "🎨 Instalando frontend y compilando Vite..."
npm ci && npm run build

echo "🧹 Cacheando configuración..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "🌐 Iniciando servidor Laravel..."
exec php artisan serve --host=0.0.0.0 --port=8080
