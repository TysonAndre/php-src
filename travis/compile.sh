#!/bin/bash
./buildconf --force
./configure \
--prefix="$HOME"/php-8.0.0-minsize-install \
--enable-debug \
--enable-zts \
--disable-all

make -j8
make install
