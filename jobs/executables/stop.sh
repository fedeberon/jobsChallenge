#!/bin/sh
echo "SHUTTING DOWN SERVICES AND DELETING DATA"
docker-compose down -v
sleep 5
