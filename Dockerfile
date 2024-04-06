FROM dockerfiles/centos-lamp 

COPY . /var/www/html
RUN rm /var/www/html/Dockerfile
RUN chmod 777 /var/www/html/
RUN mkdir /var/www/html/uploads
RUN chmod 777 /var/www/html/uploads
RUN echo 'ICED{W@FfL3s_R_GR8_but_not_this_WAF}' > /flag-$(xxd -l 6 -p /dev/urandom)
RUN rm /var/www/html/.htaccess
