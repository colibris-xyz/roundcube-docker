FROM roundcube/roundcubemail:1.5.2-fpm-alpine

RUN apk add --no-cache git

COPY composer.json /usr/src/roundcubemail/

RUN rm /usr/src/roundcubemail/composer.json.lock \
  && /usr/bin/composer --working-dir=/usr/src/roundcubemail/ require --update-no-dev roundcube/carddav \
  && /usr/bin/composer --working-dir=/usr/src/roundcubemail/ update --no-interaction --no-dev

COPY config/config.custom.inc.php /var/roundcube/config/
COPY config/config.password.inc.php /var/roundcube/config/
COPY config/config.managesieve.inc.php /var/roundcube/config/
COPY config/config.html5notifier.inc.php /var/roundcube/config/
COPY config/config.carddav.inc.php /usr/src/roundcubemail/plugins/carddav/config.inc.php
