 #FROM nginx:1.10.1-alpine
 FROM debian:buster
 RUN apt-get update 
 #&& apt-get install -y apt-utils: debconf: delaying package configuration, since apt-utils is not installed
 RUN apt-get install -y nginx 
 RUN apt-get install -y openssl
 
 #certificat ssl
 #RUN openssl genrsa -out client.key 4096
 #RUN openssl req -new -x509 -text -key client.key -out client.cert

#RUN mkdir /etc/ssl/private
#RUN rm -rf /etc/ssl

#ssl

EXPOSE 443

RUN mkdir -p /etc/ssl/private
RUN chmod +x /etc/ssl/private
RUN mkdir -p /etc/ssl/certs
RUN chmod +x /etc/ssl/certs

RUN openssl genrsa -out /etc/ssl/private/client.key 4096
RUN openssl req -new -x509 -text -key /etc/ssl/private/client.key -out /etc/ssl/certs/client.cert -subj "/C=FR/L=Paris/CN=acerdan.42.fr"

#personnaliser sa page
 #RUN chmod +x /var/www/html
 #COPY index.html /var/www/html/index.html

#fichier de conf
 RUN mkdir -p /etc/nginx/sites-enabled
 RUN chmod +x /etc/nginx/sites-enabled
 COPY nginx.conf /etc/nginx/sites-enabled/nginx.conf
 #COPY nginx.conf /etc/nginx/sites-enabled/default



 #EXPOSE 8080
 CMD ["nginx", "-g", "daemon off;"]
