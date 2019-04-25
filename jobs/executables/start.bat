@echo off
title Run App

echo        __      __         ________          ____                    
echo       / /___  / /_  _____/ ____/ /_  ____ _/ / /__  ____  ____ ____ 
echo  __  / / __ \/ __ \/ ___/ /   / __ \/ __ `/ / / _ \/ __ \/ __ `/ _ \
echo / /_/ / /_/ / /_/ (__  ) /___/ / / / /_/ / / /  __/ / / / /_/ /  __/
echo \____/\____/_.___/____/\____/_/ /_/\__,_/_/_/\___/_/ /_/\__, /\___/ 
echo                                                        /____/       v.1

cd ..

@echo on

@echo off
@echo.
@echo.
@echo.
@echo.
echo Creating enviroment file.
@echo on
copy .env.example .env

@echo off
@echo.
@echo.
@echo.
@echo.
echo Building containers.
@echo on
docker-compose build

@echo off
@echo.
@echo.
@echo.
@echo.
echo Starting up services: (database, app, webserver).
@echo on
docker-compose up -d

@echo off
@echo.
@echo.
@echo.
@echo.
echo Creating a enviroment key.
@echo on
docker-compose exec app php artisan key:generate

@echo off
@echo.
@echo.
@echo.
@echo.
echo Config cache.
@echo on
docker-compose exec app php artisan config:cache

@echo off
@echo.
@echo.
@echo.
@echo.
echo Migrating Tables.
@echo on
docker-compose exec app php artisan migrate

@echo off
@echo.
@echo.
echo Done!
echo go to http://localhost/

pause