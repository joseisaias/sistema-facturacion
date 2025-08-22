# Usa una imagen base de PHP 8.1
FROM php:8.1-fpm-alpine

# Define el directorio de trabajo dentro del contenedor
WORKDIR /var/www

# Instala dependencias del sistema operativo y extensiones de PHP
RUN apk add --no-cache \
    curl \
    nano \
    mysql-client \
    git \
    supervisor \
    nginx \
    npm \
    nodejs \
    && docker-php-ext-install pdo pdo_mysql opcache

# Copia el ejecutable de Composer desde su imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia los archivos de tu aplicación al contenedor
COPY . /var/www

# Instala las dependencias de Composer
RUN composer install --no-dev --optimize-autoloader

# Establece permisos para las carpetas de almacenamiento y caché de Laravel
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Expone el puerto 8000 para el servidor web
EXPOSE 8000

# Comando para iniciar PHP FPM
CMD ["php-fpm"]