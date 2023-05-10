FROM php:7.4-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Instalar extensiones PHP requeridas
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Configurar el directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . /var/www/html

# Instalar dependencias de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar dependencias de la aplicación Laravel
RUN composer install --no-dev --no-scripts

# Generar clave de la aplicación Laravel
RUN php artisan key:generate

# Configurar permisos de almacenamiento de Laravel
RUN chown -R www-data:www-data /var/www/html/storage

# Puerto expuesto por el contenedor
EXPOSE 80

# Comando de inicio del servidor
CMD ["php-fpm"]
