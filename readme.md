# CRUD API

The purpose of this project is to perform a RESTful API to implement implements the four 
basic functions of persistent storage (CRUD).

## System requirements

 - PHP 7.0.0 or above.
 - Mysql Server  5.7 or above.
 - Git.
 - Composer.
 
## Download the source code:

Go to the folder where you have all your projects:

```bash
cd /path/to/projects/folder/
```

Then clone the Git Repository:

```bash
git clone https://github.com/JPGSP/crud-api.git
```

Once the previous process has finished a new folder ```crud-api``` will be created.

## Executed the code

- Install dependecies

Go inside the folder just created:

```bash
cd /path/to/projects/folder/crud-api
```

Install the project's dependencies

```bash
composer install
```

- Connection with the database.

Rename the file ```.env.example``` to ```.env```.
Change the values of the following parameters based on the database configuration.

```
DB_CONNECTION
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
```

- Run the project.

Before you can run the project, you must set a key option in your config/app.php 
configuration file.

Go to the project folder and run

```bash
php artisan key:generate
```

After that, you can run the project.

```bash
php artisan serve
```

### API

To guarantee the right functionality of the API, please being sure you have some stored 
data.

To access the API
```bash
web/server/api/programme 
```

The project contains functionality to generate random data (seeder)