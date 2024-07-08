FROM php:8.2.0-apache

WORKDIR /var/www/html/

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
	
RUN docker-php-ext-configure zip && docker-php-ext-install pdo_mysql mbstring zip exif pcntl 

RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - && \
    apt-get install -y nodejs

RUN a2enmod rewrite

COPY . .

COPY .env.example .env

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install

RUN composer update

RUN php artisan config:clear

RUN php artisan cache:clear

RUN composer dump-autoload

RUN php artisan clear-compiled  

RUN php artisan session:table

RUN php artisan key:generate

RUN npm install

RUN npm run build

EXPOSE 8000

CMD ["sh", "-c", "php artisan migrate && php artisan migrate:refresh && php artisan db:seed && php artisan serve --host=0.0.0.0 --port=8000"]

