FROM php:7.1-fpm

# Install some required tools
RUN apt-get update && apt-get install -y sudo less

# Custom PHP Conf
COPY ./php.ini /usr/local/etc/php/conf.d/custom.ini

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Run this container as "webuser"
RUN groupadd -r webuser && useradd -r -g webuser webuser
RUN usermod -aG www-data webuser
USER webuser
