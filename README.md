# docker-php
## About the project

This is an Docker based local development environment PHP 7.4, Apache and MySql 

### Features

- [x] Dockerizing: 
    - [x] PHP and Apache server
    - [x] Adminer and MySql

## How to Install

* To download the project follow the instructions bellow:

```
 git clone https://github.com/pedrovitorrs/dev_DockPhp.git
 cd dev_DockPhp
 mkdir -p mysql/volumes/
```

* Install the dependencies and start the project:

```
 docker-compose build --no-cache && \
 docker-compose up -d
```
