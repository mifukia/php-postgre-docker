# (1)
FROM php:7.0-apache
 
RUN apt-get update
 
RUN apt-get install -y vim less
 
# (2)
RUN set -ex apk --no-cache add postgresql-dev libpq-dev
RUN apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql mbstring
 
# (3)
COPY ./php.ini /usr/local/etc/php/
