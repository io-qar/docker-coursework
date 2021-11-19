FROM php:7.4-apache

RUN apt-get update && docker-php-ext-install mysqli
RUN pecl install redis && docker-php-ext-enable redis && a2enmod rewrite

RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY /php-conf.ini /php.d/