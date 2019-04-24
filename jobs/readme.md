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
<br/>
<br/>
	`docker-compose build`
<br/>
<br/>
	`docker-compose up -d` *The -d command runs the process in the background.*
<br/>
<br/>
	`docker-compose exec app service supervisor start` *This command runs the application*


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
**http://{localhost}:{port}/register**
<br/>
<br/>
You can obtain a token via logging in the user here:
<br/>
**http://{localhost}:{port}/api/auth/login**


[*REST API Documentation*](http://127.0.0.1:8000/documentation)
<br/>
<br/>
[*Postman routes*](http://blalba.com)


