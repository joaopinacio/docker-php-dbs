Docker Commands for clean your containers.
stop all containers:
    docker kill $(docker ps -q)

remove all containers
    docker rm $(docker ps -a -q)

remove all docker images
    docker rmi $(docker images -q)

Credentials Database:
    hostname: localhost
    port: 1521
    sid (dbname): xe
    service name: xe
    username: system
    password: oracle