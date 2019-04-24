<p align="center">Powered by<br/><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="#setting-up" style="text-decoration: none; color: black;"><code>#Setting up the project</code></a>
<a href="#docker-config" style="text-decoration: none; color: black;"><code>#Configuration of docker</code></a>
<a href="#additional-info" style="text-decoration: none; color: black;"><code>#Additional information</code></a>
<a href="#user-registration" style="text-decoration: none; color: black;"><code>#User registration</code></a>
</p>

## Requirements

- **Git.**
- **Docker 2.0.0.3 or superior** (docker compose).
- **Postman.**
- **Composer**

<div id="setting-up"></div>

## Setting up the project

To download it, go to the desired installation path via Console and execute the `git clone` command:
<br/>
<br/>
`git clone https://github.com/fedeberon/jobsChallenge.git` <br/> or <br/> `git clone git@github.com:fedeberon/jobsChallenge.git`


Once the project is download, get to the *jobsChallenge/jobs* path using `cd jobs`.

<div id="docker-config"></div>

## Configuration of docker 

To set up docker, run the following commands:


`cp .env.example .env` *Copy the .env.example file into a new .env file*
<br/>or
<br/>`cp .env.example .env` *For Linux*

`docker-compose build`


`docker-compose up -d` *The -d command runs the process in the background.*


`docker-compose exec app service supervisor start` *This command runs the service in the background to start listener process works.* 


`docker-compose exec app php artisan key:generate` *Generates a key to the user's session and encrypts the data in order to maintain system's security.*

`docker-compose exec app php artisan config:cache` *Cache settings.* 

`docker-compose exec app php artisan:migrate`

Done ! Your application is running.

You can get to the home page at the following url.
<br/>
**http://127.0.0.1/**

<div id="additional-info"></div>

## Additional information

Once the docker is running, the Application server will be deployed at 127.0.0.1 (localhost ip).

You can access MySQL database at 127.0.0.1 port 3306
<br/>
<br/>
database : *jobsChallenge*
<br/>
user : *jobs*
<br/>
password : *jobs*  

<div id="user-registration"></div>

### User registration

In order to execute a job you have to be authorized
<br/>
<br/>
To register an user go to the following url
<br/>
**http://127.0.0.1/register**
<br/>
<br/>
You can obtain a token via logging in the user here:
<br/>
**http://127.0.0.1/api/auth/login**


[*REST API Documentation*](http://127.0.0.1/documentation)

