# Seba Collado
# Source: https://codeburst.io/scaling-out-with-docker-and-nginx-8eda9fb1654c

FROM traefik:alpine 
MAINTAINER jrbalsas@ujaen.es

WORKDIR /var/www/html

# Copy configuration file
COPY ./traefik.toml /etc/traefik/traefik.toml

#Publish main and dashboard port
EXPOSE 80 8080