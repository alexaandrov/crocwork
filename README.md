# Croc Homework

## Installing the application

Clone this repository
```
$ git clone https://github.com/alexaandrov/crocwork.git
```
Install dependencies and setting up your database connection
```
$ php composer.phar install
```
Create database
```
$ php app/console doctrine:database:create
```
Run migration and you can open the site
```
$ php app/console doctrine:schema:update --force
```

If you want, you can fill the database with test data
```
$ php app/console doctrine:fixtures:load
```

If you want use PostgreSQL work with Symfony, in config.yml find
```
doctrine:
dbal:
  driver:   pdo_mysql
```

And change it to

```
doctrine:
dbal:
  driver:   pdo_pgsql
```

## Additional files
Additional files (Database DDL files) are located in the root folder <b>_assets</b>
