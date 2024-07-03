FROM php:8.2.0-apache

WORKDIR /var/www/html/

# Install Linux Libraries
RUN apt-get update -y && apt-get install -y \
   libicu-dev \
   unzip zip \
   zlib1g-dev \
   libpng-dev \
   libjpeg-dev \
   libfreetype6-dev \
   libjpeg62-turbo-dev \
   vim \
   curl \
   git \ 
   libpng-dev

# Enable Apache mod_rewrite
RUN a2enmod rewrite


#  Copy .env file
# COPY .env.example .env

# Install PHP Extensions
RUN docker-php-ext-install gettext intl pdo_mysql gd

# RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
#    && docker-php-ext-install -j$(nproc) gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# RUN curl -sSL https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions -o - | sh -s \
#       gd xdebug

# # Copy the project files into the container
# COPY . .
COPY . /var/www/html/

# Install project dependencies

# Run migration and seed, generate application key, and start the server
RUN composer install

RUN php artisan key:generate

RUN php artisan config:clear

RUN php artisan cache:clear

RUN composer dump-autoload

RUN php artisan clear-compiled  

RUN php artisan session:table

CMD [php artisan migrate:refresh --seed  && php artisan serve --host=0.0.0.0 --port=8000]