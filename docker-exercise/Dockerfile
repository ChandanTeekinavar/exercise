# Dockerfile for Laravel Application and Migrations
FROM php:7.4-fpm

# Install necessary packages
RUN apt-get update && apt-get install -y \
    build-essential \
    libonig-dev \
    libpng-dev \
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

# Install PHP extensions
RUN docker-php-ext-configure zip && docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# Install Node.js
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - && apt-get install -y nodejs

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install

# Copy environment file and generate key
COPY .env.example .env
RUN php artisan key:generate

# Install Node.js dependencies
RUN npm install

# Expose port 8000 (if needed)
EXPOSE 8000


# CMD ["sh", "-c",  "php artisan migrate && npm run dev && php artisan serve --host=0.0.0.0 --port=8000"]

# CMD ["sh", "-c", "php artisan migrate && php artisan migrate:refresh && php artisan db:seed && npm run dev && php artisan serve --host=0.0.0.0 --port=8000"]

# Testing the pipeline