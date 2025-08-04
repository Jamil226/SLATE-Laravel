<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Create Migrations in Laravel Project

#### Proecess:

-   Open .env file
-   Change the following line:

```
DB_CONNECTION=sqlite
to
DB_CONNECTION=mysql
```

-   Change Database name

```
DB_DATABASE=yourdbname
```

-   Run the Following Terminal Command in Your Project's Terminal

```
php artisan migrate
```

-   Run the Project

```
php artisan serve
```

-   Command to Create Migration

```
php artisan make:migration create_contact_table
```

-   Make changes in migration file

```
$table->string('fullname', 100)->default('null');
$table->string('email', 100)->default('null');
$table->string('message', 1000)->default('null');
```

-   Run the migration

```
php artisan migrate
```

-   Other Commands

```
php artisan migrate:fresh
php artisan migrate:refresh
php artisan migrate:rollback

```
