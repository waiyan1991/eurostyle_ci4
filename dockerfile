FROM php:8.1-apache

# လိုအပ်သော PHP extensions များသွင်းခြင်း
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-install intl mysqli pdo_mysql

# Apache mod_rewrite ကိုဖွင့်ခြင်း
RUN a2enmod rewrite

# CI4 public folder ကို Apache root အဖြစ်သတ်မှတ်ခြင်း
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Project ဖိုင်များကူးယူခြင်း
COPY . /var/www/html/

# Permissions ပေးခြင်း
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/writable

WORKDIR /var/www/html

EXPOSE 80