FROM php:8.2-fpm

# Installer Node.js og npm
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get update && apt-get install -y nodejs

# Installer nødvendige PHP-udvidelser (PDO, zip osv.)
RUN apt-get install -y libpq-dev libzip-dev && \
    docker-php-ext-install pdo pdo_pgsql zip

# Arbejdsmappe i containeren
WORKDIR /var/www/html

# Kopier projektfilerne ind i containeren
COPY . .

# Installer Composer (PHP afhængigheder)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer Laravel afhængigheder
RUN composer install --no-dev --optimize-autoloader

# Exponer port 80
EXPOSE 80