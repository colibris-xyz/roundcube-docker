FROM roundcube/roundcubemail:1.5.3-fpm-alpine

RUN apk add --no-cache git

COPY composer.json composer.lock /usr/src/roundcubemail/

RUN cd /usr/src/roundcubemail \ 
  && /usr/bin/composer install --no-dev \
  && rm composer.json composer.lock

COPY config/config.custom.inc.php /var/roundcube/config/
COPY config/config.password.inc.php /var/roundcube/config/
COPY config/config.managesieve.inc.php /var/roundcube/config/
COPY config/config.html5notifier.inc.php /var/roundcube/config/
COPY config/config.carddav.inc.php /usr/src/roundcubemail/plugins/carddav/config.inc.php
