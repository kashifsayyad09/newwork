FROM php:8.2-apache
WORKDIR /newapp
COPY . .
EXPOSE 80
CMD ["apache2-foreground"]
