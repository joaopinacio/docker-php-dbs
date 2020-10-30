FROM php:7.2-apache

# Install PHP extensions deps
RUN apt-get update \
    && apt-get install --no-install-recommends -y \
        unzip \
        curl \
        openssl \
        nano \
        zlib1g-dev \
        libaio1 \
        libaio-dev

# Install PHP extensions
RUN docker-php-ext-install \
            mysqli \
            pdo_mysql
            
# Permissions
RUN chown -R root:www-data /var/www/html
RUN chmod u+rwx,g+rx,o+rx /var/www/html

RUN a2enmod rewrite