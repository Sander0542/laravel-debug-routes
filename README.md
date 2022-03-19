# Laravel Debug Routes
![Last commit](https://img.shields.io/github/last-commit/Sander0542/laravel-debug-routes?style=for-the-badge)
![License](https://img.shields.io/github/license/Sander0542/laravel-debug-routes?style=for-the-badge)

Debug Routes for Laravel

## Installation

Require this package with composer using the following command:

```shell
composer require --dev sander0542/laravel-debug-routes
```

## Routes

### /debug/phpinfo

The PHP Info page

```php
phpinfo();
```

### /debug/config

The Laravel config

```php
\Illuminate\Support\Facades\Config::all();
```

## Contributors
![Laravel Debug Routes Contributors](https://contrib.rocks/image?repo=Sander0542/laravel-debug-routes)