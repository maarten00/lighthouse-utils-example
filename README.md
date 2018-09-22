# lighthouse-utils-example
An example implementation of an auto-generated GraphQL CRUD api with [Laravel Lighthouse](https://github.com/nuwave/lighthouse) and [Lighthouse Utils](https://github.com/deInternetJongens/Lighthouse-Utils/)

## Installation

Run the following script in the root of this project:

`./install.sh`

Alternatively, you can run the following commands yourself:

* `composer install`
* `cp -r .env.example .env`

Update the `DB_*` values in the `.env` file to the database you want to use, 
then run the migrations and seeds using the following command:

`php artisan migrate --seed`

When that's finished run `php artisan serve` and go to the URL provided in your console.
(Usually localhost:8000)

