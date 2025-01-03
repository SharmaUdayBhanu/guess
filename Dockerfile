# Use the official PHP Apache image
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Copy the index.php file into the container
COPY index.php /var/www/html/index.php

# Expose port 80 for HTTP traffic
EXPOSE 80

# Run Apache server in the foreground
CMD ["apache2-foreground"]
