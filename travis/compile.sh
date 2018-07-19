#!/bin/bash

export CFLAGS="-g"

./buildconf --force
./configure \
--prefix=/home/tyson/php-8.0.0-debug-opcache-clean-install \
--enable-phpdbg \
--enable-debug \
--enable-fpm \
--with-pdo-mysql=mysqlnd \
--with-mysqli=mysqlnd \
--with-pgsql \
--with-pdo-pgsql \
--with-pdo-sqlite \
--enable-intl \
--with-pear \
--enable-gd \
--with-jpeg \
--with-freetype \
--with-xpm \
--enable-exif \
--with-zip \
--with-zlib \
--with-zlib-dir=/usr \
--enable-soap \
--enable-xmlreader \
--with-xsl \
--with-tidy \
--with-xmlrpc \
--enable-sysvsem \
--enable-sysvshm \
--enable-shmop \
--enable-pcntl \
--with-readline \
--enable-mbstring \
--with-curl \
--with-gettext \
--enable-sockets \
--with-bz2 \
--with-openssl \
--with-gmp \
--enable-bcmath \
--enable-calendar \
--enable-ftp \
--with-pspell=/usr \
--with-enchant=/usr \
--enable-sysvmsg \
--with-ffi \
--enable-zend-test=shared

make -j9 | tee compile.log
make install
