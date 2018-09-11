FROM php:7.2-apache

# mysqli, gd, zip, intl, opcacheのインストール
RUN apt-get update \
    && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libicu-dev \
        libzip-dev \
    && docker-php-ext-configure gd \
       --with-freetype-dir=/usr/include/ \
       --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-configure zip --with-libzip=/usr \
    && docker-php-ext-install mysqli gd zip intl opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Xdebug のインストール
RUN pecl install xdebug && docker-php-ext-enable xdebug

# 設定ファイルをコピー
COPY conf/defaults.ini /usr/local/etc/php/conf.d/defaults.ini
COPY conf/opcache-debug.ini /usr/local/etc/php/conf.d/opcache.ini
COPY conf/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
