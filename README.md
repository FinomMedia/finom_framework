# PHP / LESS - framework

## Install

```sh
# install yarn
yarn install
```

## Docker

```sh
# build
docker build -t finom_framework .

# run apache server on localhost:80
docker run -d -p 80:80 --name finom_framework -v "$PWD":/var/www/html php:7.2-apache
```