FROM php:latest

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    zip \
    curl \
    libjpeg-dev \
    libfreetype6-dev \
    libssl-dev \
    libmcrypt-dev

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd intl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install backend dependencies
RUN composer install --no-dev --no-interaction --no-progress --optimize-autoloader

# Expose ports
EXPOSE 80
