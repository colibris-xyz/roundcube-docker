[![Releases](https://img.shields.io/gitlab/v/release/colibris-xyz/roundcube-docker?gitlab_url=https%3A%2F%2Fframagit.org)](https://framagit.org/colibris-xyz/roundcube-docker/-/releases)
[![Build status](https://img.shields.io/gitlab/pipeline-status/colibris-xyz/roundcube-docker?branch=main&gitlab_url=https%3A%2F%2Fframagit.org)](https://framagit.org/colibris-xyz/roundcube-docker/-/pipelines)
[![License](https://img.shields.io/gitlab/license/colibris-xyz/roundcube-docker?gitlab_url=https%3A%2F%2Fframagit.org)](https://framagit.org/colibris-xyz/roundcube-docker/-/blob/main/LICENSE)

# Roundcube Docker image for colibris.xyz

Based on the [official fpm image](https://hub.docker.com/r/roundcube/roundcubemail/) (alpine variant), with some changes :

- Embedded plugins : [roundcube/carddav](https://packagist.org/packages/roundcube/carddav), [johndoh/contextmenu](https://packagist.org/packages/johndoh/contextmenu), [kitist/html5_notifier](https://packagist.org/packages/kitist/html5_notifier), [texxasrulez/persistent_login](https://packagist.org/packages/texxasrulez/persistent_login)
- Add more configuration by env variables
