FROM php:8.2-apache

# Instalar dependencias del sistema y extensiones PHP necesarias
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    zlib1g-dev \
    libxml2-dev \
    curl \
    ca-certificates \
    && docker-php-ext-install pdo pdo_mysql zip bcmath \
    && rm -rf /var/lib/apt/lists/*

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar Node.js 20 para construir assets
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y --no-install-recommends nodejs \
    && npm install -g npm@latest \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www

COPY . /var/www

# Construir dependencias PHP y frontend
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
    && npm install \
    && npm run build \
    && chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Configurar Apache para servir desde public/
RUN sed -ri -e 's!/var/www/html!/var/www/public!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/html!/var/www/public!g' /etc/apache2/apache2.conf \
    && a2enmod rewrite

EXPOSE 80
CMD ["apache2-foreground"]
