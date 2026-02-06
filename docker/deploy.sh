#!/bin/bash
# Deploy script for DigitalOcean App Platform

# Run migrations
php artisan migrate --force

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link
php artisan storage:link

# Optimize autoloader
composer dump-autoload --optimize

echo "Deployment completed successfully!"
