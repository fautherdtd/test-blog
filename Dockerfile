FROM php:8.1-fpm-alpine3.16

RUN apk update && apk add --no-cache php8-pecl-mcrypt git zip postgresql-dev postgresql-client && \
    docker-php-ext-install pdo_pgsql opcache bcmath sockets
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ./.docker/php/php.ini /usr/local/etc/php
WORKDIR /app
COPY ./ .

RUN composer install --optimize-autoloader --ignore-platform-req=ext-mcrypt --no-scripts && rm -rf /root/.composer
RUN chown -R www-data:www-data .
USER www-data

CMD ["php-fpm"]
