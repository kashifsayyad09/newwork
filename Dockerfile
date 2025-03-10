# Use the official PHP 8.2 Apache image
FROM php:8.2-apache

# Set the maintainer information
LABEL maintainer="Kashif"

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set document root (optional)
WORKDIR /var/www/html

EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]