FROM php:8.2-apache

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_HOME=/tmp

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
    && docker-php-ext-install pdo_mysql zip bcmath \
    && rm -rf /var/lib/apt/lists/*

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar Node.js 20 para construir assets
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update && apt-get install -y --no-install-recommends nodejs \
    && npm install -g npm@latest \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY composer.json composer.lock package.json package-lock.json ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
    && npm ci \
    && npm run build

COPY . ./

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/apache2.conf \
    && a2enmod rewrite

EXPOSE 80
CMD ["apache2-foreground"]
