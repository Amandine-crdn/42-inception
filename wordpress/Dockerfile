# WordPress Dockerfile: Create container from official WordPress image, basic customizations.
# docker build -t wordpress_local:wp_custom_1.0 .

FROM debian:buster

EXPOSE  9000

# APT Update/Upgrade, then install packages we need to configurate php
RUN apt update && apt upgrade -y && apt autoremove 
RUN apt install -y php php7.3-fpm php7.3-gd php7.3-mysql php7.3-curl php7.3-imap php7.3-mbstring php7.3-xml
# RUN systemctl status php7.3-fpm
RUN service php7.3-fpm start
#    vim \


#copier fichier de config dans le php
# Replace php.ini

#COPY php.ini /usr/local/etc/php

#COPY    ./conf/www.conf /etc/php/7.3/fpm/pool.d
#COPY    ./tools /var/www

#CMD     bash /var/www/script.sh

#Download wordpress and all config file
RUN apt install -y wget
RUN wget http://wordpress.org/latest.tar.gz

# Install WP-CLI
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    php wp-cli.phar --info&& \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp && \
	tar xfz latest.tar.gz 
RUN rm -rf latest.tar.gz

#Download wordpress and all config file
# wget http://wordpress.org/latest.tar.gz?


    # Remove old php.ini files (wihtout creating new image)
    #RUN rm /usr/local/etc/php/php.ini-development && \
    #rm /usr/local/etc/php/php.ini-production

CMD ["/usr/sbin/php-fpm7.3", "-F"]