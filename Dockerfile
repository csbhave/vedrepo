
#Download base image ubuntu 16.04
FROM ubuntu:18.04
#Download base image apache httpd:2.4
FROM httpd:2.4
ADD . /usr/local/apache2/htdocs
