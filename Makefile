# Makefile
# Author: Sebastián Collado
# Description: Simplify Docker use
# Usage: make build, make run, make clean

IMAGE=phpciwebapp	# docker image name
LOCALPATH=html		# local directory of source code

# Deploy the app
# Requires: build
run: build
	docker-compose up -d
	docker-compose ps

# Build Docker image
# Requires: clean
build: clean 
	docker-compose build 
	@echo  Imagen $(IMAGE) creada

# Stop container and remove image.
# Requires: cleandependencies
clean: cleandependencies
	-docker-compose down
	-docker rmi $(IMAGE)
	@echo Imagen $(IMAGE) borrada

# Remove dependencies as folder or temporary files
cleandependencies:
#	-rm $(LOCALPATH)/notes.sqlite