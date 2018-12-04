# CRUD API

Simple restful API which implements the four basic functions of persistent storage (CRUD).


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

1. Install dependecies

Go inside the folder just created:

```bash
cd /path/to/projects/folder/crud-api
```

Install the project dependencies

```bash
composer install
```

2. Connection with the database.

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

3. Run the project.

From the command line inside 

```bash
cd /path/to/projects/folder/crud-api/
```

Type

```bash
php artisan serve
```