working flow:

installation(first time only):
1. composer global require "laravel/installer"
2. add to .config/bash/exports:
    # Composer
    export PATH="$PATH:$HOME/.config/composer/vendor/bin"
    for making laravel command available anywhere
3.start new application(laravel): laravel new lara
4.composer install
configuration:
1. a+w permissions to: storage folder and bootstrap/cache
2. run php artisan key:generate and see that the new key is generated to .env file
3. config url in app.php  ======>  'url' => env('APP_URL', 'http://localhost/laravel/public')

ref:[https://laravel.com/docs/5.3#installing-laravel]

forms
1. composer add require "laravelcollective/html": "~5.0" and update
2.add to config/app.php:
    a. aliases: 'Form' => Collective\Html\FormFacade::class,
                'Html' => Collective\Html\HtmlFacade::class,
    b. providers: Collective\Html\HtmlServiceProvider::class,
3.in HtmlServiceProvider.php: change bindShared to singleton
ref:[https://laravelcollective.com/docs/5.2/html]

database
1. config .env database fields
2. php artisan migrate:install
3. create migration plan: php artisan make:migration users
4. create new migration -> php artisan make:migration users
5  note: used "out ot the box" password reset/users migrations
   php artisan migrate (for rollback use: php artisan migrate:rollback)

routes
examples:
1. Route::resource('users','UsersController');
ref:[https://laravel.com/docs/5.3/routing]

controllers
1. create UsersController (/laravel/app/Http/Controllers/UsersController.php)

module
1. create User module (/Users/oshry/Sites/laravel/app/User.php)

views
1. create views folders: users, layouts


ref:[https://www.sitepoint.com/crud-create-read-update-delete-laravel-app/]


