# Dockerfile
FROM php:7.4-apache

# Instalar dependências e extensões PHP necessárias
RUN apt-get update \
    && apt-get install -y \
       libicu-dev \
       git \
    && docker-php-ext-install pdo_mysql intl

# Habilitar módulo de reescrita do Apache
RUN a2enmod rewrite

# Copiar arquivos da aplicação para o diretório web do Apache
COPY . /var/www/html/

# Expor porta 80 para o servidor web do Apache
EXPOSE 80
