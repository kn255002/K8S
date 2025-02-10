FROM php:7.4-apache  # Or a more recent PHP version with Apache
COPY joke.php /var/www/html/  # Copies your PHP file into the Apache webroot

# Optional: Set file permissions if needed
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# You can add other configurations here if needed, for example, installing extensions
RUN apt-get update && apt-get install -y ...

EXPOSE 80  # Apache's default port

CMD ["apache2-foreground"] # Start Apache