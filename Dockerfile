FROM php:8.2-apache
WORKDIR /newwork
COPY . .
EXPOSE 80
CMD ["apache2-foreground"]
