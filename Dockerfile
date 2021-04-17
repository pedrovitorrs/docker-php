FROM php:7.4-apache

LABEL maintainer="Pedro Vitor <pedrovitor@smarti9.com.br>"

# Args defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN docker-php-ext-install mysqli pdo_mysql

# Files config default VirtualHost
COPY ./apache2/sites-available/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./apache2/sites-enabled/vhost.conf /etc/apache2/sites-enabled/vhost.conf

RUN a2enmod rewrite headers

# Changing the permission of the files
RUN useradd -G www-data,root -u $uid -d /var/www/html $user
RUN chown -R $user:$user /var/www/html

USER $user

# Set working directory
WORKDIR /var/www/html

ENTRYPOINT ["apache2-foreground"]

EXPOSE 80