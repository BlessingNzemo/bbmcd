#!/bin/bash

# Paramétrer PHP pour éviter les erreurs liées aux extensions
export PHP_INI_SCAN_DIR=/dev/null

# Installer les dépendances PHP
echo "Installing PHP dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Créer un fichier .env à partir du .env.example
if [ ! -f .env ]; then
    echo "Creating .env file..."
    cp .env.example .env
    php -r "file_put_contents('.env', str_replace('APP_DEBUG=true', 'APP_DEBUG=false', file_get_contents('.env')));"
    php -r "file_put_contents('.env', str_replace('APP_ENV=local', 'APP_ENV=production', file_get_contents('.env')));"
fi

# Générer une clé d'application si nécessaire
if ! grep -q "APP_KEY=" .env || grep -q "APP_KEY=$" .env; then
    echo "Generating application key..."
    php artisan key:generate --force
fi

# Créer les dossiers de stockage nécessaires
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs

# Donner les permissions
chmod -R 755 storage bootstrap/cache

# Optimiser la configuration Laravel
echo "Optimizing Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Installer les dépendances NPM et construire les assets
echo "Building front-end assets..."
npm ci
npm run build

echo "Build completed successfully!"
