#!/usr/bin/env bash
set -e

DB_HOST="${DATABASE_HOST:-db}"
DB_PORT="${DATABASE_PORT:-3306}"

echo "Waiting for database ${DB_HOST}:${DB_PORT}..."

# Wait until TCP port is open (uses bash /dev/tcp which works in Debian-based images)
until bash -c "cat < /dev/tcp/${DB_HOST}/${DB_PORT}" >/dev/null 2>&1; do
  printf '.'
  sleep 1
done

echo "Database reachable at ${DB_HOST}:${DB_PORT}"

# If vendor folder missing (fresh container), install PHP deps
if [ ! -d vendor ]; then
  echo "Installing composer dependencies..."
  composer install --no-interaction --prefer-dist
fi

# Optionally run migrations when RUN_MIGRATIONS=1 is set in env
if [ "${RUN_MIGRATIONS:-0}" = "1" ]; then
  echo "Running Doctrine migrations..."
  php bin/console doctrine:migrations:migrate --no-interaction
fi

# Start Symfony using PHP built-in server (dev). Replace with php-fpm + nginx in prod.
exec php -S 0.0.0.0:8000 -t public/ public/index.php
