# How to Install
1 make sure these are installed and added to PATH
* PHP
* Web server(Aaache/nginx/IIS)
* mysql 
* composer ( [Link](https://getcomposer.org/download/) )
* redis

Alternatively you can use Homestead for this (docs about this [here](https://laravel.com/docs/5.3/homestead) )

* clone this
* set up host for /public directory 
* cp .env.example as .env 
* change configuratin in .env file of database and change cahche from file to redis
at project root open bash and run these command 
* php artisan key:generate 
* php artisan migrate 
* php artisan db:seed --class=UserTableSeeder
* php artisan db:seed --class=RolesSeeder

Now you can login in to system 
with username: ddw147@gmail.com or mobile:8275466726 
password: demo

you can change this in database/seeds/UserTableSeeder.php 
and re run 
* php artisan db:seed --class=UserTableSeeder
* php artisan db:seed --class=RolesSeeder



 

