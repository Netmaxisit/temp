# Use the official PHP image with Apache
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the PHP application files to the container
COPY . .

# Install any PHP extensions if needed
# For example, if you need mysqli:
# RUN docker-php-ext-install mysqli

# Apache configuration to listen on port 3000
RUN sed -i 's/80/3000/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 3000
EXPOSE 3000

# Start Apache in the foreground
CMD ["apache2-foreground"]
