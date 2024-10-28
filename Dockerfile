# Use uma imagem oficial do PHP
FROM php:8.1-cli

# Instale extensões necessárias, se for preciso
RUN docker-php-ext-install pdo pdo_mysql

# Copie o código do seu projeto para o diretório padrão do container
COPY . /var/www/html

# Defina o diretório de trabalho dentro do container
WORKDIR /var/www/html

# Exponha a porta 8000 para acessar a aplicação na máquina host
EXPOSE 8000

# No final do Dockerfile
CMD ["php", "-S", "0.0.0.0:8000", "-t", "/var/www/html/public"]

