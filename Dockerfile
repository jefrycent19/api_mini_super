FROM php:8.2-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar Apache mod_rewrite (no obligatorio pero recomendado)
RUN a2enmod rewrite

# Copiar los archivos a la raíz pública de Apache
COPY . /var/www/html/

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
