# 1. Image de base avec PHP 8.2 et Apache
FROM php:8.2-apache

# 2. Installation des dépendances système
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

# --- AJOUT : INSTALLATION DE NODE.JS ---
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 3. Activation du module de réécriture Apache
RUN a2enmod rewrite

# 4. Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Définition du répertoire de travail
WORKDIR /var/www/html

# 6. Copie du code source
COPY . .

# 7. Correction du DocumentRoot pour pointer vers /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/sites-available/*.conf
RUN sed -ri -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 8. Installation des dépendances PHP
RUN composer install --no-dev --optimize-autoloader --no-interaction

# --- AJOUT : COMPILATION DES ASSETS (VITE) ---
# C'est cette étape qui va créer le fameux fichier manifest.json manquant
RUN npm install
RUN npm run build

# 9. Attribution des permissions aux dossiers de cache et de stockage
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 10. Exposition du port 80
EXPOSE 80

# 11. Commande de démarrage
CMD ["apache2-foreground"]