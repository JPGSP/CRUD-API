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

## Usage

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

## Next?

Implements all the following cases in Behat

- Get one programme which exists in the system. No error
![get_one_programme_success](https://user-images.githubusercontent.com/31289182/49411283-3735e480-f760-11e8-8f4a-31a03359f15e.png)

- Get one programme which does not exists in the system. Error



- Create a new programme following the requirements. Not error 


- Create a new programme without following the requirements. Error


- Update an existing programme following the requirements. Not error 


- Update a non existing programme. Error


- Update a an existing programme without following the requirements. Error


- Delete an existing programme. Not error


- Delete a non existing programme. Error.
