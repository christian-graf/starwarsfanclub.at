# Contributing

This application is based on the [Laravel](https://laravel.com/) framework.

> Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.
>
> Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Laravel Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Requirements

* MySQL 5.7
* PHP >= 7.1
* Node.js >= 8
* Web server (Apache/nginx/IIS)
* Composer >= 1.5
* yarn >= 1.3 (instead of npm)
* git cli

## Up & Running for Development

1. Clone project with git:
    ```bash
    git clone git@bitbucket.org:dswm/<project>.git <destination directory>
    
    # Head to the project root directory 
    cd <destination directory>
    ```

1. Copy configuration template:
    ```bash
    cp .env.example .env
    ```

1. Install php dependencies:
    ```bash
    composer install
    yarn install
    ```
1. Generate application key and publish vendor files: 
    ```bash
    php artisan key:generate
    php artisan vendor:publish
    ```
