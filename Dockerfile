FROM php:8.2.14-fpm-alpine3.19
WORKDIR /app
RUN apk add --no-cache bash
RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.alpine.sh' | bash
RUN apk add symfony-cli
EXPOSE 8000
ENTRYPOINT [ "symfony", "server:start" ]
