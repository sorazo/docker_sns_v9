
FROM php:8.1-fpm

RUN apt-get update \
  && apt-get install -y \
  zlib1g-dev mariadb-client vim libzip-dev \
  libpng-dev libjpeg-dev libfreetype6-dev \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install zip pdo_mysql gd

#Composer install
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Node.js インストール（フロントビルド用）
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
  && apt-get install -y nodejs
