FROM roundcube/roundcubemail:1.5.1-fpm-alpine

RUN apk add --no-cache git

COPY composer.json /usr/src/roundcubemail/composer.json

#RUN rm /usr/src/roundcubemail/composer.lock \
RUN /usr/bin/composer --working-dir=/usr/src/roundcubemail/ \
      --no-interaction --no-dev --optimize-autoloader --apcu-autoloader update

COPY config/config.custom.inc.php /var/roundcube/config/
COPY config/config.password.inc.php /var/roundcube/config/
COPY config/config.managesieve.inc.php /var/roundcube/config/
COPY config/config.html5notifier.inc.php /var/roundcube/config/
COPY config/config.carddav.inc.php /usr/src/roundcubemail/plugins/carddav/config.inc.php
