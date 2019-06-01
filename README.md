# Práctica 2 DASN

## Descripción
Despliegue de una pila de desarrollo para CodeIgniter utilizando `Docker`, `Docker Compose` y `make`. Despliegue realizado de forma local y remota sobre Google Cloud.

## Autor
Sebastián Collado Montañez

## Detalles de la pila
Apache + PHP 7.2 + CodeIgniter 3 + SQLite

## Requisitos
Para el despliegue se necesita `docker`, `docker-compose` y `make`.

## Despliegue local
Para iniciar la aplicación por el puerto `8080`:
```
git clone https://github.com/sebacollado/phpciwebapp
cd phpciwebapp
make run
```

## Datos del proyecto

### Repositorio GitHub (imagen + código + docker-compose.yml + Makefile)
https://github.com/sebacollado/phpciwebapp

### Repositorio DockerHub (imagen)
https://hub.docker.com/r/sebacollado/phpciwebapp

### Demo
http://34.66.185.218:8080/

## Otras operaciones
- Para reconstruir la imágen: `make build`
- Para parar el contenedor y borrar imagen y contenedor: `make clean`