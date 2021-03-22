FROM roundcube/roundcubemail:1.4.11-fpm-alpine

RUN apk add --no-cache git

COPY composer.json /usr/src/roundcubemail/composer.json

RUN composer.phar --working-dir=/usr/src/roundcubemail/ \
      --no-interaction --no-dev --optimize-autoloader --apcu-autoloader install \
    && composer.phar --working-dir=/usr/src/roundcubemail/ \
      --no-interaction --no-dev --optimize-autoloader --apcu-autoloader update

COPY config/config.custom.inc.php /var/roundcube/config/
COPY config/config.managesieve.inc.php /var/roundcube/config/
COPY config/config.html5notifier.inc.php /var/roundcube/config/
COPY config/config.carddav.inc.php /usr/src/roundcubemail/plugins/carddav/config.inc.php
