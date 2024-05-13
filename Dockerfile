FROM nextcloud:production-apache
COPY setssl.sh /usr/local/bin/
RUN /usr/local/bin/setssl.sh admin@vlacloud vlacloud.localhost