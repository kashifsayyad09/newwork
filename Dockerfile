FROM php:8.2-apache

RUN echo "ionix.in localhost" >> /etc/apache2/apache2.conf

WORKDIR /myapp

COPY . .

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]
