FROM php:8.2.0-apache

WORKDIR /var/www/html/

RUN apt-get update -y\
	# gd
	&& apt-get install -y build-essential openssl nginx libfreetype6-dev libjpeg-dev libpng-dev libwebp-dev zlib1g-dev libicu-dev libzip-dev gcc g++ make vim unzip curl git jpegoptim optipng pngquant gifsicle locales libonig-dev nodejs  \
	&& docker-php-ext-configure gd  \
	&& docker-php-ext-install gd \
	# gmp
	&& apt-get install -y --no-install-recommends libgmp-dev \
	&& docker-php-ext-install gmp gettext intl\
	# pdo_mysql
	&& docker-php-ext-install pdo_mysql mbstring \
	# pdo
	&& docker-php-ext-install pdo \
	# opcache
	&& docker-php-ext-enable opcache \
	# exif
    && docker-php-ext-install exif \
    && docker-php-ext-install sockets \
    && docker-php-ext-install pcntl \
    && docker-php-ext-install bcmath \
	# zip
	&& docker-php-ext-install zip \
	&& apt-get autoclean -y \
	&& rm -rf /var/lib/apt/lists/* \
	&& rm -rf /tmp/pear/

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



