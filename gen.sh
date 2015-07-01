#!/bin/bash

if [ $# -ne 1 ]
then
    echo "Usage $0 {name}"
    exit
fi

cur_path=`dirname $0`
name=$1
www_root=$cur_path/../myweb/www/doc

if [ ! -d $www_root ]
then
    mkdir $www_root
fi
rm -rf $www_root/$name

sami update config/sami/${name}.php

rm -rf cache
mv build $www_root/$name
