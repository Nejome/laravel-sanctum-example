## Laravel-sanctum-example

Simple implementation for new laravel SPA authentication with Sanctum package.

## Installation
Clone the repository
```
git clone git@github.com:Nejome/laravel-sanctum-example.git
```

Get into project folder 
```
cd laravel-sanctum-example
```

Install project dependencies
```
composer install 
```

Copy the example env file and make the required configuration changes in the .env file
```
cp .env.example .env
```

Generate a new application key
```
php artisan key:generate
```

Run the database migrations and seeder to generate a user
```
php artisan migrate --seed 
```

Start the local development server
```
php artisan serve
```

#### Notes  
* Laravel app and SPA must share the same top-level domain.
* You can set the SPA domain in .env in SANCTUM_STATEFUL_DOMAINS variable.



