FROM debian:10

RUN apt-get update
RUN apt-get install -y wget
WORKDIR /etc/traefik
RUN wget https://github.com/traefik/traefik/releases/download/v2.4.8/traefik_v2.4.8_linux_amd64.tar.gz
RUN tar -zxvf traefik_v2.4.8_linux_amd64.tar.gz
COPY traefik.toml /etc/traefik
EXPOSE 8080 
CMD ["./traefik"]
