# Seba Collado
# Source: https://codeburst.io/scaling-out-with-docker-and-nginx-8eda9fb1654c

# Use the standard Nginx image from Docker Hub
FROM nginx

# Copy the configuration file from the current directory and paste 
# it inside the container to use it as Nginx's default config.
COPY ./nginx.conf /etc/nginx/nginx.conf

# Container exposed by 80 port
EXPOSE 80

# Start Nginx when the container has provisioned.
CMD ["nginx", "-g", "daemon off;"]