#!/bin/sh

set -e

# Wait for database to be ready
echo "Waiting for database..."
while ! nc -z ${DB_HOST:-db} ${DB_PORT:-3306}; do
  sleep 1
done

echo "Database is ready!"

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Cache configuration, routes, and views
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link
echo "Creating storage link..."
php artisan storage:link

echo "Starting application..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
