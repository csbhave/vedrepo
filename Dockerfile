
#Download base image ubuntu 16.04
FROM ubuntu:18.04

#Download base image php 7.4
FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./index.php" ]