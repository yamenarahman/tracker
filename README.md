# Laravel tracker

This is an example of using google maps tracking in a laravel app.

### How to use

1- Clone this repo.

2- Run `composer install`.

3- Rename .env.example file to .env and run `php artisan key:generate`.

4- In .env make sure to fill database name and password correctly.

5- Run `php artisan migrate`.

6- Go to `app.blade.php` and replace `YOUR_KEY` with your Google API key.

> ## Now once you are registered, you will see your place on the map and it will track you in real time.

## To go further, you may make events or actions to post your longitude and latitude to a database.
