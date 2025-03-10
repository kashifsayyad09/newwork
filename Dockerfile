FROM php:8.2-apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
WORKDIR /newapp
COPY . .
EXPOSE 80
CMD ["apachectl", "-D", "FOREGROUND"]