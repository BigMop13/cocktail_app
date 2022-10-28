FROM php:8.1.3-fpm
WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

ENV TZ=Europe/Warsaw
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && apt-get install -y \
        zip \
        git
COPY --from=composer:2.1 /usr/bin/composer /usr/local/bin/composer

RUN pecl install apcu

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-enable pdo_mysql
RUN docker-php-ext-enable apcu
RUN docker-php-ext-install bcmath
