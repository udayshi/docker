FROM udaysh/php_v7.2
ENV TZ=Europe/London
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
COPY manifest/config/nginx.conf /etc/nginx/nginx.conf
COPY manifest/config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY manifest/config/php.ini /usr/local/etc/php/php.ini

COPY app /app
RUN mkdir -p /run/nginx/
WORKDIR /app
EXPOSE 80 443
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]