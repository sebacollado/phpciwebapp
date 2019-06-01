# Dockerfile
# Author: Sebastián Collado
# Description: Custom image recipe

FROM php:7.2-apache
MAINTAINER scm00041@red.ujaen.es

# RUN executes some command inside container
RUN a2enmod rewrite

# WORKDIR sets the working directory for any RUN, CMD, ENTRYPOINT, COPY and ADD instructions that follow it in the Dockerfile
WORKDIR /var/www/html

# COPY instruction copies new files or directories from <src> and adds them to the filesystem of the container at the path <dest>
COPY html/ ./

# EXPOSE informs Docker that the container listens on the specified network ports at runtime. Default is TCP
EXPOSE 80