[![GitHub release](https://img.shields.io/github/v/release/colibris-xyz/roundcube-docker.svg?style=flat)](https://github.com/colibris-xyz/roundcube-docker/releases/latest)
[![GitHub license](https://img.shields.io/github/license/colibris-xyz/roundcube-docker)](https://github.com/colibris-xyz/roundcube-docker/blob/main/LICENSE)

# Roundcube Docker image for colibris.xyz

Based on the [official fpm image](https://hub.docker.com/r/roundcube/roundcubemail/) (alpine variant), with some changes :

- Embedded plugins : [roundcube/carddav](https://packagist.org/packages/roundcube/carddav), [johndoh/contextmenu](https://packagist.org/packages/johndoh/contextmenu), [kitist/html5_notifier](https://packagist.org/packages/kitist/html5_notifier), [texxasrulez/persistent_login](https://packagist.org/packages/texxasrulez/persistent_login)
- Add more configuration by env variables
