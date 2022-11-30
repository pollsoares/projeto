# About

Project developed in course Laravel/Educorp - Ministred for 
Anderson and Mario in University State of Campinas - Unicamp

# Tools

Framework: Laravel 7.0 [Official Documentation](https://laravel.com/docs/7.x)

Database for tests: sqlite [Official Documentation](https://www.sqlite.org/index.html)

Database Viewer: (Optional) DB Browser for sqlite [Official Documentation](https://sqlitebrowser.org/)

Template AdminLTE v3: [Official Documentation](https://adminlte.io/themes/v3/)

Email for Tests: [Official Documentation](https://mailtrap.io/)

# projeto

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/7.x)


Clone the repository

    git clone https://github.com/pollsoares/projeto.git

Switch to the repo folder

    cd projeto

Install all the dependencies using composer

    composer install --ignore-platform-reqs
    
Install other dependencies using npm

    npm install && npm run dev

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env
    
or windows os

    copy .env.example .env
    
Case use sqlite database for tests, use comand:

    touch database\database.sqlite
    
after comand, open file, past content and save:
    
    'sqlite' => [
    'driver' => 'sqlite',
    'url'=> env('DATABASE_URL'),
    'database'=> env('DB_DATABASE', database_path('database.sqlite')),
    'prefix'=>'',
    'foreign_key_constraints' =>env('DB_FOREIGN_KEYS',true),
    ],
    
open .env file, replace:

    DB_CONNECTION=sqlite
    
delete or coment:

    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    
Install DB Browser and New database, Open Database File in database/database.sqlite 

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Run the seeders

    php artisan db:seed


Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
