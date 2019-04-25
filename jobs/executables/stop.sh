#!/bin/sh
echo "SHUTTING DOWN SERVICES AND DELETING DATA"
winpty docker-compose down -v
sleep 5