FROM php:8.2-apache

# Instalar dependencias del sistema necesarias para Laravel + Composer
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
 && docker-php-ext-install zip pdo pdo_mysql

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copiar el proyecto
COPY . /var/www/html

# Instalar dependencias de Laravel
WORKDIR /var/www/html
RUN composer install --no-dev --optimize-autoloader

# Cambiar DocumentRoot de Apache a /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Permitir .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Permisos para Laravel
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache