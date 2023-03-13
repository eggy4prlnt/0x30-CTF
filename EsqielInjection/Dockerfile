FROM ubuntu:latest
ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    libapache2-mod-php \
    php-mysql \
    mysql-server \
    mysql-client

ENV MYSQL_ROOT_PASSWORD=mysecretpassword

RUN service mysql start && \
    mysql -u root -p$MYSQL_ROOT_PASSWORD -e "CREATE DATABASE wesqiel;" && \
    mysql -u root -p$MYSQL_ROOT_PASSWORD -e "CREATE USER 'wesqiel'@'%' IDENTIFIED BY 'wesqieL1337#';" && \
    mysql -u root -p$MYSQL_ROOT_PASSWORD -e "GRANT ALL PRIVILEGES ON wesqiel.* TO 'wesqiel'@'%';"

# Copy init.sql file to initialize the database
COPY init.sql /docker-entrypoint-initdb.d/

# RUN chown -R mysql:mysql /var/lib/mysql && service mysql start

# Set working directory to Apache root
WORKDIR /var/www/html

# Copy all files to Apache root
COPY . /var/www/html/

# Expose port 80
EXPOSE 80


# Enable Apache rewrite module
RUN a2enmod rewrite

CMD [ "/bin/bash", "-c", "service apache2 start && service mysql start && tail -F /var/log/apache2/access.log" ]

