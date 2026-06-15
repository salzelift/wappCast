FROM php:8.2-apache

# 1. Install system dependencies including sqlite3
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    sqlite3 \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_sqlite

# 2. Enable Apache mod_rewrite for Laravel
RUN a2enmod rewrite

# 3. Set working directory
WORKDIR /workspace/apiserver
COPY . .

# 4. Point Apache's Document Root to Laravel's public folder
ENV APACHE_DOCUMENT_ROOT /workspace/apiserver/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 5. Install Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-interaction --optimize-autoloader --no-dev

# 6. Set correct permissions for storage and database
RUN mkdir -p database storage/logs \
    && touch database/database.sqlite \
    && chown -R www-data:www-data /workspace/apiserver \
    && chmod -R 775 storage database

# 7. Expose App Platform port and run migrations + server on startup
EXPOSE 8080
CMD php artisan migrate --force && php artisan db:seed --force && apache2-foreground
