# Use the official PHP 8.2 Apache image
FROM php:8.2-apache

# Set the maintainer information
LABEL maintainer="Kashif"

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the ServerName globally to avoid warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Set document root (optional)
WORKDIR /mynew

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
