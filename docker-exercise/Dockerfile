FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    libonig-dev\
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    nodejs \
    npm \
    libzip-dev 

RUN docker-php-ext-configure zip && docker-php-ext-install zip

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl    

WORKDIR /var/www/html

COPY . /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install

COPY .env.example .env

RUN php artisan key:generate

RUN 

RUN npm install && npm run dev

EXPOSE 8000

CMD sh -c "php artisan migrate --seed && php artisan serve --host=0.0.0.0"