FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    libonig-dev\
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    vim \
    unzip \
    git \
    curl \
    libzip-dev \
    default-mysql-client

RUN docker-php-ext-configure zip && docker-php-ext-install pdo_mysql mbstring exif pcntl   


WORKDIR /var/www/html

COPY . .

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install

COPY .env.example .env

# RUN php artisan migrate --seed

EXPOSE 8000

#CMD ["sh", "-c",  "php artisan key:generate && php artisan serve --host=0.0.0.0 --port=8000"]
CMD ["sh", "-c", "php artisan migrate --seed && php artisan serve --host=0.0.0.0 --port=8000"]