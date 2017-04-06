FROM nginx

ADD nginx.conf /etc/nginx/
COPY default.conf /etc/nginx/conf.d
COPY certs/server.crt /etc/nginx
COPY certs/server.key /etc/nginx
