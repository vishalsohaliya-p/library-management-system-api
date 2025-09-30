# Dockerfile (dev)
FROM php:8.2-cli

WORKDIR /srv/app

# system deps + php extensions required by Symfony + mysql client for debugging if needed
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
     git unzip libicu-dev libzip-dev default-mysql-client \
  && docker-php-ext-install pdo_mysql intl zip \
  && rm -rf /var/lib/apt/lists/*

# install composer (copy from official composer image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# copy composer files first to leverage docker cache
COPY composer.json composer.lock ./
RUN composer install --no-interaction --prefer-dist --optimize-autoloader --no-scripts

# copy the app
COPY . .

# ensure var is writable by www-data (Symfony needs writable var/)
RUN chown -R www-data:www-data var || true

# add small entrypoint (below) that waits for DB
COPY docker/entrypoint.sh /usr/local/bin/entrypoint
RUN chmod +x /usr/local/bin/entrypoint

EXPOSE 8000

CMD ["entrypoint"]
