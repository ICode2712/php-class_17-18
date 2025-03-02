# Use the official PHP image with Apache
FROM php:8.2-apache

# Enable mod_rewrite for Laravel or other frameworks
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]
