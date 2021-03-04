FROM php:7.4.15-apache-buster
RUN apt-get update 
RUN apt-get install -y unzip wget
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
WORKDIR /var/www/html
RUN wget https://github.com/alextselegidis/easyappointments/releases/download/1.4.1/easyappointments-1.4.1.zip
RUN unzip easyappointments-1.4.1.zip -d ./
RUN rm easyappointments-1.4.1.zip
COPY config.php ./
COPY php.ini /usr/local/etc/php
RUN chown -R www-data ./