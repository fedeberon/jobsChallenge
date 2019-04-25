#!/bin/sh
echo "STARTING UP SERVICE SUPERVISOR"
winpty docker-compose exec app service supervisor start
sleep 5
