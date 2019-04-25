#!/bin/sh

cat << "EOF"



        __      __         ________          ____
       / /___  / /_  _____/ ____/ /_  ____ _/ / /__  ____  ____ ____
  __  / / __ \/ __ \/ ___/ /   / __ \/ __ `/ / / _ \/ __ \/ __` / _ \
 / /_/ / /_/ / /_/ (__  ) /___/ / / / /_/ / / /  __/ / / / /_/ /  __/
 \____/\____/_.___/____/\____/_/ /_/\__,_/_/_/\___/_/ /_/\__, /\___/
                                                        /____/       v.1
EOF
echo ""
echo ""


cd ..

echo "################CREATING ENVIROMENT FILE###########"
echo ""
cp .env.example .env

echo ""
 
echo "################BUILDING CONTAINERS###############"
echo ""

winpty docker-compose build
echo ""

echo "################STARTING UP SERVICES (db, webserver, app)###############"
echo ""

winpty docker-compose up -d
echo ""
 

echo "################GENERATING KEY####################"
winpty docker-compose exec app php artisan key:generate
echo ""


echo "################CONFIG CACHE######################"
winpty docker-compose exec app php artisan config:cache
echo ""
 

echo "################MIGRATING TABLES#################"
echo ""
 
winpty docker-compose exec app php artisan migrate

echo "Done !"

echo go to http://localhost/

echo Press enter to continue; read dummy;