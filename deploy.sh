#!/bin/bash
set -e

echo "🚀 Starting deployment..."

# Navigate to the project directory
cd /home/ploi/crm-admin.test

# Enable maintenance mode
echo "📦 Enabling maintenance mode..."
php artisan down || true

# Fetch latest changes
echo "📥 Fetching latest changes from repository..."
git fetch origin main

# Reset any local modifications (including .gitignore files)
echo "🔄 Resetting to latest version..."
git reset --hard origin/main

# Install/update composer dependencies (production only)
echo "📦 Installing composer dependencies..."
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# Clear configuration cache
echo "🧹 Clearing configuration cache..."
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Run database migrations (before cache:clear since cache table might not exist)
echo "🗄️  Running database migrations..."
php artisan migrate --force

# Clear cache (after migrations ensure cache table exists)
echo "🧹 Clearing application cache..."
php artisan cache:clear || true

# Install npm dependencies and build assets
echo "📦 Installing npm dependencies..."
npm ci

echo "🏗️  Building frontend assets..."
npm run build

# Generate sitemap
echo "🗺️  Generating sitemap..."
php artisan sitemap:generate

# Optimize application
echo "⚡ Optimizing application..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# Link storage if not already linked
echo "🔗 Linking storage..."
php artisan storage:link || true

# Set proper permissions
echo "🔐 Setting permissions..."
chmod -R 755 storage bootstrap/cache
chmod -R 775 storage/app/public

# Disable maintenance mode
echo "✅ Disabling maintenance mode..."
php artisan up

# Clear OPcache
echo "🧹 Clearing OPcache..."
php artisan opcache:clear || true

# Restart queue workers (if using)
echo "🔄 Restarting queue workers..."
php artisan queue:restart || true

echo "✨ Deployment completed successfully!"
