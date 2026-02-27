FROM php:8.2-apache

# Habilitar mod_rewrite (Laravel lo necesita)
RUN a2enmod rewrite

# Copiar el proyecto
COPY . /var/www/html

# Cambiar DocumentRoot de Apache a /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Permitir .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Permisos para Laravel
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache