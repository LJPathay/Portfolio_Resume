#!/usr/bin/env bash
# exit on error
set -o errexit

echo "Running composer install..."
composer install --no-dev --optimize-autoloader

echo "Installing npm dependencies..."
npm install

echo "Building assets..."
npm run build

echo "Caching config and routes..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Build complete!"
