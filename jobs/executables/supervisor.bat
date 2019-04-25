@echo off
title Run Service

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
echo Starting up service supervisor.
@echo on
docker-compose exec app service supervisor start

@echo off
@echo.
@echo.
echo Done!
pause