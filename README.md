# Printformer Laravel
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
[![Latest Stable Version](https://poser.pugx.org/risscsolutions/printformer-laravel/v/stable.svg)](https://packagist.org/packages/risscsolutions/printformer-laravel)
[![Total Downloads](https://poser.pugx.org/risscsolutions/printformer-laravel/downloads)](https://packagist.org/packages/risscsolutions/printformer-laravel)

## Installation

```bash
composer require risscsolutions/printformer-laravel
```

Run the `vendor:publish` command

```bash
php artisan vendor:publish
```

Add your printformer credentials to your `.env` file 

### Usage

Get an Instance of the printformer-SDK

```php
$printformer = app(\Rissc\Printformer\Printformer::class);
```

Refer to the documentation of the [printformer-php-sdk](https://github.com/risscsolutions/printformer-php-sdk/)
