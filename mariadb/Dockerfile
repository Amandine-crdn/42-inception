FROM debian:buster

RUN apt-get update && apt-get install -y mariadb-server

#EXPOSE  3306

COPY    mariadbcof /etc/mysql/mariadb.conf
#COPY    ./tools /var/www

RUN service mysql start
# RUN mysql < /var/www/createdb.sql && rm -f /var/www/createdb.sql 

CMD     /usr/bin/mysqld_safe

#CMD ["/usr/bin/mysqld_safe", "-F"]

#CMD ["/bin/bash", "-F"]