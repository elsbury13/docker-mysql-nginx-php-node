# Docker - PHP - Nginx - MySQL - Node

## Start Docker
#### Just cd into directory and run:
`docker-compose up -d`

#### to stop:
`docker-compose down`

#### List all containers
`docker container ls`

#### Access containers
`docker-compose exec php74-service bash`

`docker-compose exec node-service bash`

`docker-compose exec mysql-service bash`

`docker exec -it nginx-container /bin/sh`

### Create Database

### Access to mysql container
`docker-compose exec mysql-service bash`

#### Connect to mysql (example as password)
`mysql -u root -p`

#### Create users database
`CREATE DATABASE users;`

#### use users database
`use users;`

#### Create users table
```
CREATE TABLE users (
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    name varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
    fav_color varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
#### Insert a user
`INSERT INTO users (name, fav_color) VALUES('Maroon 5', 'Maroon');`

## Visit Application
`http://localhost:80`