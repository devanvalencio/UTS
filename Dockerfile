FROM php:8.1.18-apache as web
COPY . /var/www/html
RUN chown -R www-data:www-data .
RUN chmod 764 /var/www/html
RUN docker-php-ext-install mysqli

FROM mysql:latest as db
COPY redlock-db.sql /docker-entrypoint-initdb.d/

FROM jenkins/jenkins:lts-jdk11 as jenkins
