FROM php:7.2-fpm-alpine

RUN         docker-php-ext-install pdo pdo_mysql

RUN         php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
            php composer-setup.php && \
            php -r "unlink('composer-setup.php');" && \
            mv composer.phar /usr/local/bin/composer

COPY        ./src /var/www/html
WORKDIR     /var/www/html
