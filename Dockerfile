FROM php:8.0-apache as base

COPY ./img/ /var/www/html 
COPY ./index.php /var/www/html

EXPOSE 80