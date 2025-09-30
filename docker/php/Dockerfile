# syntax=docker/dockerfile:1.7-labs
FROM php:8.3-fpm-bookworm

WORKDIR /app

# Установка composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN chown -R www-data:www-data /app

COPY --chown=www-data:www-data --exclude=vendor/ --exclude=docker/ --exclude=compose.yml . ./

RUN docker-php-ext-install pdo_mysql

RUN --mount=type=cache,target=/root/.composer \
      COMPOSER_ALLOW_SUPERUSER=1 \
      composer install \
        --ignore-platform-reqs \
        --no-interaction  \
        --no-progress  \
        --optimize-autoloader
