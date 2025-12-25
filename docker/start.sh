#!/bin/sh

# Start PHP-FPM in the background
php-fpm -D

# Start NGINX in the foreground
nginx -g "daemon off;"
