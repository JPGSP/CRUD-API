# CRUD API

The purpose of this project is to perform a RESTful API to implement the four 
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

Install project dependencies

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

To guarantee the right functionality of the API, please ensure that you have stored some
data.

To access the API
```bash
web/server/api/programme 
```

The project contains functionality to generate random data (seeder)

## Next?

Implement all the following cases in Behat

- Get one programme which exists in the system. No error

![get_one_programme_success](https://user-images.githubusercontent.com/31289182/49411283-3735e480-f760-11e8-8f4a-31a03359f15e.png)

- Get one programme which does not exists in the system. Error

![get_one_programme_error](https://user-images.githubusercontent.com/31289182/49411324-60567500-f760-11e8-9937-04bdee9e53d0.png)

- Create a new programme following the requirements. No error 
![create_new_programme_success](https://user-images.githubusercontent.com/31289182/49411382-90057d00-f760-11e8-8ddd-45a783110efc.png)


- Create a new programme without following the requirements. Error

![create_new_programme_error_2](https://user-images.githubusercontent.com/31289182/49411407-b88d7700-f760-11e8-8c65-d60498063ba6.png)


- Update an existing programme following the requirements. No error 

![update_programme_successfull](https://user-images.githubusercontent.com/31289182/49411533-29349380-f761-11e8-860c-68d33802e90b.png)

- Update a non existing programme. Error

<img width="1216" alt="update_error_no_existing" src="https://user-images.githubusercontent.com/31289182/49427652-c2809b80-f79b-11e8-9684-393803bfb92d.png">

- Update the existing programme without following the requirements. Error

![update_programme_error](https://user-images.githubusercontent.com/31289182/49411462-e96dac00-f760-11e8-9852-abbf996cb4f6.png)

- Delete the existing programme. No error

![delete_one_programme_success](https://user-images.githubusercontent.com/31289182/49411577-541ee780-f761-11e8-8a8a-8c595ff89c6c.png)


- Delete a non existing programme. Error.

![image](https://user-images.githubusercontent.com/31289182/49411612-7284e300-f761-11e8-9abf-c377ba4638db.png)
