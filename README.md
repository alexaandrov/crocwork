# Croc Homework

## Installing the application

```
# Clone this repository
$ git clone https://github.com/alexaandrov/crocwork.git

# Install dependencies
$ php composer.phar install

# Create database
$ php app/console doctrine:database:create

# Run migration
$ php app/console doctrine:schema:update --force

# Fill the database with test data
$ php app/console doctrine:fixtures:load
```

## Additional files
Additional files (Database DDL files) are located in the root folder <b>_assets</b>
