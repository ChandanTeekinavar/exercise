FROM PHP:7.4

RUN apt-get update && apt-get install -y \
    build-essential \
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
    npm

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl    

WORKDIR /var/www/html

COPY . /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install

COPY .env.example .env

RUN php artisan key:generate

RUN php artisan migrate --seed

RUN npm install && npm run dev

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000