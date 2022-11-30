FROM php:8.0-apache as base

COPY ./img/ /var/www/html/img
COPY ./index.php /var/www/html
COPY ./styles.css /var/www/html
COPY ./search.php /var/www/html

EXPOSE 80