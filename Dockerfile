FROM php:8.2.30-fpm


RUN apt-get update && apt-get install -y \
    git \ 
    curl \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql mysqli
     

WORKDIR /var/www