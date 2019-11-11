# docker-compose-laravel
A pretty simplified docker-compose workflow that sets up a LEMP network of containers for local Laravel development. You can view the full article that inspired this repo [here](https://medium.com/@aschmelyun/the-beauty-of-docker-for-local-laravel-development-b5eb6caf0946).


## Usage

To get started, make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system, and then clone this repository. Then open a terminal and from this cloned respository's root run `docker-compose up -d --build`. 

Connect with the docker container using `docker exec -it php sh` and run the following:

```bash
cp -R .env.example .env
chmod -R 777 storage
composer install
php artisan migrate
php artisan key:generate
php artisan db:seed
```


Open up your browser of choice to [http://localhost:8080](http://localhost:8080) and you should see your Laravel app running as intended. 

Containers created and their ports are as follows:

- **nginx** - `:8080`
- **mysql** - `:3307`
- **php** - `:9000`

## Project 

* Use top menu to navigate
* Initial registration is required to create a blog
* Blogs can be created, edited and deleted only by the creator of blog 
* Comments can be made by a logged in user on any Blog posts  
