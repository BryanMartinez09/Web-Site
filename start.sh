#!/bin/bash

echo "🚀 Instalando dependencias..."
composer install --no-dev --optimize-autoloader

echo "🎨 Compilando frontend..."
npm install && npm run build

echo "🧹 Cacheando configuración..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "🌐 Iniciando servidor en Railway..."
exec php artisan serve --host=0.0.0.0 --port=8080
