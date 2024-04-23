#!/bin/bash

# Define variables (replace with your details)
PHP_APP_URL="https://github.com/your-username/your-php-app.git"

# Update package lists
sudo apt update

# Install Apache, MySQL, and PHP
sudo apt install -y apache2 mysql-server php libapache2-mod-php

# Secure MySQL installation
sudo mysql_secure_installation

# Clone PHP application from GitHub
git clone $PHP_APP_URL /var/www/html/my-app

# Grant ownership to Apache user
sudo chown -R www-data:www-data /var/www/html/my-app

# Restart Apache
sudo systemctl restart apache2

