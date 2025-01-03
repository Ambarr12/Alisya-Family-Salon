# Base image: PHP 8.2 with FPM
FROM php:8.2-fpm

# Install system dependencies, including oniguruma for mbstring support
RUN apt-get update && apt-get install -y --no-install-recommends \
    nginx \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    libonig-dev \
    zip \
    unzip \
    libzip-dev \
    libicu-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
       pdo \
       pdo_mysql \
       mbstring \
       exif \
       pcntl \
       bcmath \
    && docker-php-ext-install intl zip opcache \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Node.js 20
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set Working Directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev --no-interaction --prefer-dist

# Install Node.js dependencies
RUN npm install && npm run build

# Prepare Laravel directories and storage symlink
RUN mkdir -p /var/www/html/storage/app/public/images \ 
    && php artisan storage:link \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Remove default Nginx configuration and add custom config
RUN rm /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default \
    && mv /var/www/html/docker/nginx/default.conf /etc/nginx/sites-available/default \
    && ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

# Add custom PHP configuration for max_upload_filesize
RUN echo "upload_max_filesize=100M" > /usr/local/etc/php/conf.d/upload_max_filesize.ini
RUN echo "post_max_size = 120M" > /usr/local/etc/php/conf.d/post_max_size.ini
RUN echo "memory_limit = 256M" > /usr/local/etc/php/conf.d/memory_limit.ini


# Expose port 80
EXPOSE 80

# Command to run both PHP-FPM and Nginx
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]