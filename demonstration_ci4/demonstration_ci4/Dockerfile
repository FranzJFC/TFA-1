FROM php:8.2-apache

RUN apt-get update \
    && apt-get install -y libicu-dev unzip git \
    && docker-php-ext-install intl mysqli pdo pdo_mysql \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .
COPY apache.conf /etc/apache2/sites-available/000-default.conf

RUN rm -f .env \
    && composer install --no-dev --optimize-autoloader \
    && chown -R www-data:www-data writable \
    && chmod -R 775 writable

ENV CI_ENVIRONMENT=production
ENV app_baseURL=https://caburao-pos.onrender.com/
