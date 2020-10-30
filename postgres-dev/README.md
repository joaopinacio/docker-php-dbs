# Instructions

## About Database
To run initial scripts in db delete all files in data directory (./postgres/data)
See more in: [Docker Postgres](https://hub.docker.com/_/postgres)

## Important (!!!)
Open your docker-compose.yml file to edit for your taste - ;D

## Important Docker Commands
To turn on all container's:

```docker-compose up```

To list all container's (to see the id's):

```docker ps```

To enter in a Container:

```docker exec -it [container-id] bash```

To restore your database (load the dump):

```pg_restore -d postgres /scripts/init.backup```

### Restore database (only postgres)
Before you turn on your container's:
- Put your dump file in the folder "scripts" with the name "init.backup".

When Database started: (find commands at "Important Docker Commands")
- Enter in db container
- Run pg_restore to load your own dump (maybe take a feel minutes, depends the size of your dump):

If you want add some more scripts:
- Just run your scripts at any database administration tool (I recommend [DBeaver](https://dbeaver.io/download/))

## Credentials
Credentials Database:

    host: localhost
    port: 5432
    dbname: postgres
    user: root
    password: root

Credentials for PHP:

    $host     = "postgresql"; // Container's Name
    $dbname   = "postgres";
    $user     = "root";
    $password = "root";

## Docker Commands
Docker Commands for clean your containers.

Stop all containers:

```docker kill $(docker ps -q)```
    
Remove all containers

```docker rm $(docker ps -a -q)```
    
Remove all docker images

```docker rmi $(docker images -q)```