# docker-nginx-php-fpm
Docker: Nginx + PHP-FPM + ssmtp-proxy + cron (via supervisord)

## Build
```
$ docker build -t nginx-php .
```

## Create container
```
$ docker run -d --name webserver01 -p 8000:80 nginx-php
```

## Logs
```
$ docker logs -f webserver01
```

## Volume
```
$ docker run -d --name webserver01 -p 8000:80 -v /data/www:/srv/www/php-app/htdocs nginx-php
```
