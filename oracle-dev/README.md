ORACLE ISN'T WORKING YET !!!

To run initial scripts in db delete all files in data directory (./oracle/data)
See more in: https://hub.docker.com/_/oracle

Docker Commands for clean your containers.
stop all containers:
    docker kill $(docker ps -q)

remove all containers
    docker rm $(docker ps -a -q)

remove all docker images
    docker rmi $(docker images -q)