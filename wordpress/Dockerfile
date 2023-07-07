# WordPress Dockerfile: Create container from official WordPress image, basic customizations.
# docker build -t wordpress_local:wp_custom_1.0 .

FROM debian:buster

EXPOSE  9000

# APT Update/Upgrade, then install packages we need to configurate php
RUN apt update && apt upgrade -y && apt autoremove 
RUN apt install -y php php7.3-fpm php7.3-gd php7.3-mysql php7.3-curl php7.3-imap php7.3-mbstring php7.3-xml
RUN service php7.3-fpm start

#Download wordpress and all config file
RUN apt install -y wget
RUN wget http://wordpress.org/latest.tar.gz

# Install WP-CLI
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
RUN	tar xfz latest.tar.gz && rm -rf latest.tar.gz

COPY wp-config-sample.php /wordpress/wp-config.php
COPY php.ini /etc/php/7.3/fpm/php.ini

#RUN wp --info

#Download wordpress and all config file
# wget http://wordpress.org/latest.tar.gz?

#RUN exec create_wordpress.sh

ENV DB_NAME=$DB_NAME

CMD ["/usr/sbin/php-fpm7.3", "-F"]