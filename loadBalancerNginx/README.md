# Sample load balancer deployment with NGINX

Connects a nginx load balancer container with two web application containers using docker-compose.yaml for local testing purposes

## Requeriments

Docker

## Usage
- You can control the local container with ```docker-compose``` commands, i.e. up, stop, start, down, etc. however

- Build and launch container

```bash
$ docker-compose up -d
```

- Access web application through load balancer (NGINX) using port 80, e.g. http://localhost:80

- Access web application containers directly using port 8081 and 8082, e.g. http://localhost:8081

- Rebuild container images

```bash
$ docker-compose build
```
- Stop containers and remove images

```bash
$ docker-compose down
```