FROM roundcube/roundcubemail:1.5.2-fpm-alpine

RUN apk add --no-cache git

COPY composer.json composer.lock /usr/src/roundcubemail/

RUN /usr/bin/composer --working-dir=/usr/src/roundcubemail/ dump-autoload \
  &&  /usr/bin/composer --working-dir=/usr/src/roundcubemail/ \
      --no-interaction --no-dev  update

COPY config/config.custom.inc.php /var/roundcube/config/
COPY config/config.password.inc.php /var/roundcube/config/
COPY config/config.managesieve.inc.php /var/roundcube/config/
COPY config/config.html5notifier.inc.php /var/roundcube/config/
COPY config/config.carddav.inc.php /usr/src/roundcubemail/plugins/carddav/config.inc.php
