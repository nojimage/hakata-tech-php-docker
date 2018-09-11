#!/usr/bin/env bash

# 7.2 apache番を取得
docker pull php:7.2-apache

# コンテナ起動 8000番にポートマッピング
docker run --rm -p 8000:80 -v "$PWD":/var/www/html php:7.2-apache

# CLI モードで起動
docker run --rm -v "$PWD":/var/www/html php:7.2-apache php hello.php

# コンテナのPHPバージョンを表示
docker run --rm -v "$PWD":/var/www/html php:7.2-apache php -v

# コンテナのPHPの拡張を表示
docker run --rm -v "$PWD":/var/www/html php:7.2-apache php -m
