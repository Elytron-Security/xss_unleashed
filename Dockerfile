FROM php:7.4-apache

RUN a2enmod rewrite
RUN a2enmod headers

WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www