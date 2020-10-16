FROM php:7.2-apache

RUN apt-get update && apt-get install --no-install-recommends -y \
        unzip

RUN apt-get update \
 && apt-get install -y --no-install-recommends \
    curl \
    openssl \
    nano

# Install PHP extensions deps
RUN apt-get update \
    && apt-get install --no-install-recommends -y \
        zlib1g-dev \
        libaio1 \
        libaio-dev

# Install Oracle Instantclient
ADD instantclient-basic-linux.x64-12.1.0.2.0.zip /opt/oracle/instantclient-basic-linux.x64-12.1.0.2.0.zip
ADD instantclient-sdk-linux.x64-12.1.0.2.0.zip /opt/oracle/instantclient-sdk-linux.x64-12.1.0.2.0.zip
ADD instantclient-sqlplus-linux.x64-12.1.0.2.0.zip /opt/oracle/instantclient-sqlplus-linux.x64-12.1.0.2.0.zip
RUN unzip /opt/oracle/instantclient-basic-linux.x64-12.1.0.2.0.zip -d /opt/oracle \
    && unzip /opt/oracle/instantclient-sdk-linux.x64-12.1.0.2.0.zip -d /opt/oracle \
    && unzip /opt/oracle/instantclient-sqlplus-linux.x64-12.1.0.2.0.zip -d /opt/oracle \
    && ln -s /opt/oracle/instantclient_12_1/libclntsh.so.12.1 /opt/oracle/instantclient_12_1/libclntsh.so \
    && ln -s /opt/oracle/instantclient_12_1/libclntshcore.so.12.1 /opt/oracle/instantclient_12_1/libclntshcore.so \
    && ln -s /opt/oracle/instantclient_12_1/libocci.so.12.1 /opt/oracle/instantclient_12_1/libocci.so \
    && ln -s /opt/oracle/instantclient_12_1 /usr/local/instantclient \
    && ln -s /usr/local/instantclient/lib* /usr/lib \
    && ln -s /usr/local/instantclient/sqlplus /usr/bin/sqlplus \
    && rm -rf /opt/oracle/*.zip

# Install PHP extensions
RUN echo 'instantclient,/opt/oracle/instantclient_12_1/' | pecl install oci8 \
    && docker-php-ext-configure pdo_oci --with-pdo-oci=instantclient,/opt/oracle/instantclient_12_1,12.1 \
    && docker-php-ext-install \
            mysqli \
            pdo_mysql \
            pdo_oci \
            pdo_pgsql \
    && docker-php-ext-enable \
            oci8

RUN chown -R root:www-data /var/www/html
RUN chmod u+rwx,g+rx,o+rx /var/www/html

ENV LD_LIBRARY_PATH /usr/local/instantclient/

EXPOSE 9000