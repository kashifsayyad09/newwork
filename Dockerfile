# Use PHP 8.2 Apache image
FROM php:8.2-apache

# Set the maintainer information
LABEL maintainer="Kashif"

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the ServerName globally to avoid warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Change DocumentRoot to /mynew
RUN sed -i 's|/var/www/html|/mynew|g' /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /mynew

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]