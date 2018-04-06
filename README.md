[![Downloads](https://img.shields.io/packagist/dt/zlodey/laravel-sendpulse-api.svg)](https://packagist.org/packages/zlodey/laravel-sendpulse-api)
[![Version](https://img.shields.io/packagist/v/zlodey/laravel-sendpulse-api.svg)](https://packagist.org/packages/zlodey/laravel-sendpulse-api)

# Laravel - SendPulse Service Provider

**Install With Composer**:
```sh
composer require zlodey/laravel-sendpulse-api 1.*
```

Or manualy in composer.json:
```json
"require": {
    "zlodey/laravel-sendpulse-api": "1.*"
}
```

Define into .env
```
SENDPULSE_API_USER_ID=<your api user id>
SENDPULSE_API_SECRET=<your api secret>
```

For Laravel >= 5.5 you are ready to go

For laravel < 5.5 you need to register service provider

*/configs/app.php*

```php
    ...
    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        ...

        /*
         * Application Service Providers...
         */
        ...
        'Zlodey\SendPulse\SendPulseServiceProvider'
    ],
```

**Usage**
``` php
app('SendPulse')->listAddressBooks();
app('SendPulse')->listSenders();
```
And so on..

Full list of available commands you can find at \Sendpulse\RestApi\ApiInterface
