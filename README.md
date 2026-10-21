# CounterPoint POS

CounterPoint POS is a beginner-friendly IT0049 TFA5 Laravel activity: a small four-page application that demonstrates routes, controllers, static PHP arrays, and Blade views in a simple point-of-sale theme.

## Laravel version

This project uses Laravel 12.

## Setup

```bash
composer install
copy .env.example .env
php artisan key:generate
```

No database setup is required. Customer and user data are stored as static PHP arrays inside their controllers and passed directly to the views.

## Run the application

```bash
php artisan serve
```

Then open the local URL shown by Artisan.

## Available routes

- `/` — landing page
- `/about` — project overview
- `/customers` — sample customer accounts
- `/users` — sample store users

The customer and user pages use Blade `@foreach` loops to display every record supplied by their controllers.
