FROM debian:10

RUN groupadd -r mysql && useradd -r -g mysql mysql
RUN apt-get update
RUN apt-get install -y mariadb-server    mariadb-client    mariadb-common
RUN /etc/init.d/mysql start
RUN mkdir -p /var/run/mysqld /var/lib/mysqld
RUN chown -R mysql:mysql /var/run/mysqld /var/lib/mysqld
RUN chmod 744 /var/run/mysqld /var/lib/mysqld
RUN sed -i 's/bind-address            = 127.0.0.1/bind-address            = 0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf 
COPY ./my.cnf /etc/mysql/
EXPOSE 3306
ENTRYPOINT ["mysqld"] 
