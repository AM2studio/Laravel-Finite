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
php artisan vendor:publish --provider="AM2Studio\LaravelFinite\LaravelFiniteServiceProvider" --tag="migrations"
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

## Usage

``` php
Finite::can($eloquentModelObject, 'finite transition');
Finite::apply($eloquentModelObject, 'finite transition');
Finite::getName($eloquentModelObject));
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email marko.samec@am2studio.hr instead of using the issue tracker.

## Credits

- [Marko Šamec][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/AM2Studio/Laravel-Finite.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/AM2Studio/Laravel-Finite/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/AM2Studio/Laravel-Finite.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/AM2Studio/Laravel-Finite.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/AM2Studio/Laravel-Finite.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/AM2Studio/Laravel-Finite
[link-travis]: https://travis-ci.org/AM2Studio/Laravel-Finite
[link-scrutinizer]: https://scrutinizer-ci.com/g/AM2Studio/Laravel-Finite/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/AM2Studio/Laravel-Finite
[link-downloads]: https://packagist.org/packages/AM2Studio/Laravel-Finite
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
