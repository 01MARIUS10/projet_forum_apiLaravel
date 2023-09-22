FROM php:8.0-fpm-alpine as php

# depencence needes
RUN apk add oniguruma-dev libxml2-dev
RUN docker-php-ext-install \
    bcmath \
    ctype \
    fileinfo \
    mbstring \
    pdo_mysql \
    tokenizer \
    xml

# composer installation
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY /app /var/www/html

RUN cp -n .env.example .env

# config site
# https://laravel.com/docs/8.x/deployment#optimizing-configuration-loading
RUN composer install --no-interaction --optimize-autoloader --no-dev
# Generate security key
RUN php artisan key:generate
# Optimizing Configuration loading
RUN php artisan config:cache
# Optimizing Route loading
RUN php artisan route:cache
# Optimizing View loading
RUN php artisan view:cache

RUN php artisan optimize

# RUN php artisan migrate
# RUN php artisan db:seed

RUN chown -R 755 /var/www/html
