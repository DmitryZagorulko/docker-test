FROM php:5.6-fpm
RUN apt-get update && apt-get install -y \
		php5-mysql \
		libmcrypt-dev \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng12-dev \
		libxml2-dev \
	&& docker-php-ext-install -j$(nproc) iconv mcrypt \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install -j$(nproc) gd \
	&& docker-php-ext-install pdo_mysql soap
