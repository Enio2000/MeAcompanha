FROM httpd:bookworm

COPY apache-configurations.conf /usr/local/apache2/conf/apache-configurations.conf
RUN echo "Include /usr/local/apache2/conf/apache-configurations.conf" >> /usr/local/apache2/conf/httpd.conf

RUN apt-get update 
RUN apt-get upgrade 
RUN apt-get install -y apache2

RUN /sbin/a2enmod rewrite

RUN /usr/local/apache2/bin/httpd -k restart