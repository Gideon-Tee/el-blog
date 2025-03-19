# Use an official PHP-Apache image as the base image
FROM php:8.2-apache

# Install the mysqli extension
RUN docker-php-ext-install mysqli

# Set the working directory
WORKDIR /var/www/html

# Copy the project files into the container
COPY . .

# Expose port 80 (for Apache)
EXPOSE 80