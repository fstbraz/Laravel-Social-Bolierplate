# Laravel Social Dashboard Boilerplate

Hello all, this is a social dashboard boilerplate built with Laravel 5.2 auth, Migrations generator (https://github.com/Xethron/migrations-generator), Laracasts flash notifications, and some other javascript plugins that you cand find under the resources.

## Installation

Configure **.env** accordly to your server or dev enviroment.

Example **.env**:

```APP_ENV=local
APP_DEBUG=true
APP_KEY=yourkey
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=new_database
DB_DATABASE_OLD=old_database
DB_USERNAME=root
DB_PASSWORD=root
UNIX_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=yourusername
MAIL_PASSWORD=yourpassword
MAIL_ENCRYPTION=tls
MAIL_ADDRESS=from@example.com
MAIL_NAME=example
```

(Don't forget thay I run my mysql db with a unix socket, remove it on `config/database.php` if you don't use it).

Run `composer install`

Run `php artisan key:generate`

Run `php artisan migrate`

Run `npm install`

Run `gulp`

Create your user and activate him with the token generated in the email.

Crete your app/backoffice/whatever

## Future steps
Review flash notifications

Implement roles

Create service for macros

Review used plugins

Create new service for some plugins

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
