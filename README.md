# jtf-immobilier

jtf-immobilier can be used:
 - to travelers, in order to find a good to find accommodation during their stay.
 - property owners, in order to rent their apartment or house to travelers.

INSTALLATION:
- Clone the project
```sh
$ git clone https://github.com/julientoucoula17/jtf-immobilier.git
```

- Install dependencies
```sh
$ composer update
$ composer install 
```

- Configure your database in the .env file
```sh
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7.31
```

- Start migrations
```sh
$ php bin/console doctrine:migrations:migrate
```

- Launch the fixtures
```sh
$ php bin/console doctrine:fixtures:load
```

- Start the server 
```sh
$ symfony serve
```
