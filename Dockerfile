# 1. Image de base avec PHP 8.2 et Apache
FROM php:8.2-apache

# 2. Installation des dépendances système nécessaires (Git, Zip, extensions pour Postgres)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd


RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 3. Activation du module de réécriture Apache (Essentiel pour Laravel)
RUN a2enmod rewrite

# 4. Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Définition du répertoire de travail
WORKDIR /var/www/html

# 6. Copie du code source dans le conteneur
COPY . .

# 7. Correction du DocumentRoot pour pointer vers /public (Sécurité & Routage)
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/sites-available/*.conf
RUN sed -ri -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 8. Installation des dépendances PHP sans les outils de développement
RUN composer install --no-dev --optimize-autoloader --no-interaction

# 9. Attribution des permissions aux dossiers de cache et de stockage
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 10. Exposition du port 80 pour Render
EXPOSE 80

# 11. Commande de démarrage du serveur
CMD ["apache2-foreground"]