FROM php:8.2-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar archivos al servidor
COPY . /var/www/html/

# Exponer puerto interno
EXPOSE 80
