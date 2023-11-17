# getting the base image
FROM php:8.2.12-fpm-bookworm

# coping the composer executable from composer image
COPY --from=composer/composer:latest-bin /composer  /usr/bin/composer

# installing dependencies
RUN apt-get update && apt-get install -y libz-dev zip unzip --no-install-recommends git

# cleaning the apt cache
RUN apt-get clean

# installing php docker extension
RUN docker-php-ext-install pdo pdo_mysql



# creating an ordinary user inside image
# the userID and groupID must be the same as the host system user
RUN groupadd -g 1000 bruno
RUN /sbin/useradd -M --uid 1000 --gid 1000 bruno

# create the base dir insede apache default virtual host directory
RUN mkdir /var/www/app

USER bruno

WORKDIR /var/www/app