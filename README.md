# Laravel-Finite

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


## Install

Via Composer

``` bash
$ composer require AM2studio/Laravel-Finite
```

in ```config/app.php``` 

under ```'providers'``` add

```php
AM2Studio\LaravelFinite\LaravelFiniteServiceProvider::class,
```

under ```'alias'``` add
```php
'Finite'    => AM2Studio\LaravelFinite\FiniteFacade::class,
```

publish migration files and run migration

```php
php artisan vendor:publish --provider="AM2Studio\LaravelFinite\LaravelFiniteServiceProvider" --tag="migrations"
php artisan migrate
```

## Usage

In models you want to use it add namespace
```php
use AM2Studio\LaravelFinite\Traits\LaravelFiniteTrait;
```

and then use trait

```php
use LaravelFiniteTrait;
```

``` php
Finite::can($eloquentModelObject, 'finite transition');
Finite::apply($eloquentModelObject, 'finite transition');
Finite::getName($eloquentModelObject));
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Credits

- [Marko Šamec][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/am2studio/laravel-finite.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/AM2Studio/Laravel-Finite/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/AM2Studio/Laravel-Finite.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/AM2Studio/Laravel-Finite.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/am2studio/laravel-finite.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/am2Studio/laravel-finite
[link-travis]: https://travis-ci.org/AM2Studio/Laravel-Finite
[link-scrutinizer]: https://scrutinizer-ci.com/g/AM2Studio/Laravel-Finite/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/AM2Studio/Laravel-Finite
[link-downloads]: https://packagist.org/packages/am2studio/laravel-finite
[link-author]: https://github.com/msamec
[link-contributors]: ../../contributors
