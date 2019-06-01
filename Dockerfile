FROM php:7.2-apache
MAINTAINER scm00041@red.ujaen.es

WORKDIR /var/www/html

COPY html/ ./

EXPOSE 80

#ENTRYPOINT ["",""]