FROM httpd:2.4.25

#RUN echo "deb http://http.debian.net/debian testing main" >> /etc/apt/sources.list.d/testing.list
RUN echo "deb http://ftp.fr.debian.org/debian jessie non-free" >> /etc/apt/sources.list

#RUN export TERM=xterm

#ADD testing /etc/apt/preferences.d/testing

RUN apt-get update && apt-get install -y vim

#RUN a2enmod rewrite
#RUN a2enmod http2

COPY httpd.conf /usr/local/apache2/conf/httpd.conf
COPY app.conf /usr/local/apache2/conf/extra/httpd-vhosts.conf