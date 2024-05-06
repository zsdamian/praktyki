FROM php:7.4-apache

RUN a2enmod rewrite

RUN docker-php-ext-install mysqli pdo pdo_mysql # jeżeli musisz dodać extension dla php to zrób to tutaj

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
