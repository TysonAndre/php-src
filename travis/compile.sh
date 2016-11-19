#!/bin/bash
TS="--enable-maintainer-zts";
DEBUG="--enable-debug";
./buildconf --force
./configure \
--prefix=$HOME"/php-7.0.13-install" \
--quiet \
$DEBUG \
$TS \
--enable-fpm \
--enable-intl \
--with-pear \
--with-gd \
--with-mcrypt=/usr \
--enable-soap \
--enable-xmlreader \
--with-xsl \
--with-curl \
--with-tidy \
--with-xmlrpc \
--enable-sysvsem \
--enable-sysvshm \
--enable-shmop \
--enable-pcntl \
--with-readline \
--enable-mbstring \
--with-zlib \
--with-gettext \
--enable-sockets \
--with-openssl \
--enable-sysvmsg 
make -j5
make install
