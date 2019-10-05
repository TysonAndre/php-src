#!/bin/bash
export CFLAGS="-O3"
./buildconf --force
./configure \
--prefix="$HOME"/php-8.0.0-minsize-nts-install \
--enable-iconv \
--enable-mbstring \
--enable-dom \
--enable-simplexml \
--with-libxml \
--enable-opcache \
--enable-tokenizer \
--enable-json \
--enable-filter \
--disable-all

make -j8
make install
