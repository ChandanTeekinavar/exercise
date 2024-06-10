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
    libzip-dev \
    default-mysql-client

RUN docker-php-ext-configure zip && docker-php-ext-install zip

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl   

RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - && \
    apt-get install -y nodejs

WORKDIR /var/www/html

COPY . /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install

COPY .env.example .env

RUN php artisan key:generate

RUN npm install

EXPOSE 8000

CMD ["sh", "-c",  "php artisan migrate && npm run dev && php artisan serve --host=0.0.0.0 --port=8000"]