# Используем официальный образ PHP
FROM sarkedev/php-parallel

WORKDIR /var/www/html

COPY . .