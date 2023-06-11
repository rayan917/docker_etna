FROM debian:10

RUN apt-get update
RUN apt-get install nano
RUN apt-get install -y wget
RUN apt-get install -y curl
RUN apt-get install -y apache2
RUN apt install -y php libapache2-mod-php php-mysql 
RUN apt -y install php php-mysql php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip
WORKDIR /var/www/html/
RUN curl -O https://wordpress.org/latest.tar.gz
RUN tar -xvf latest.tar.gz
RUN rm latest.tar.gz
WORKDIR /var/www/html/wordpress
#COPY wp-config.php /var/www/html/wordpress/wp-config.php
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite
RUN /etc/init.d/apache2 restart 


ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

CMD /usr/sbin/apache2ctl -D FOREGROUND

EXPOSE 80
