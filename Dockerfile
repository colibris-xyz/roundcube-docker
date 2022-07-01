FROM roundcube/roundcubemail:1.5.3-fpm-alpine

RUN apk add --no-cache git

COPY composer.json composer.lock /usr/src/roundcubemail/

RUN /usr/bin/composer --working-dir=/usr/src/roundcubemail/ install --no-dev

COPY config/config.custom.inc.php /var/roundcube/config/
COPY config/config.password.inc.php /var/roundcube/config/
COPY config/config.managesieve.inc.php /var/roundcube/config/
COPY config/config.html5notifier.inc.php /var/roundcube/config/
COPY config/config.carddav.inc.php /usr/src/roundcubemail/plugins/carddav/config.inc.php
