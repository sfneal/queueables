# Queueables

[![Packagist PHP support](https://img.shields.io/packagist/php-v/sfneal/queueables)](https://packagist.org/packages/sfneal/queueables)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/sfneal/queueables.svg?style=flat-square)](https://packagist.org/packages/sfneal/queueables)
[![Build Status](https://travis-ci.com/sfneal/queueables.svg?branch=master&style=flat-square)](https://travis-ci.com/sfneal/queueables)
[![StyleCI](https://github.styleci.io/repos/287545083/shield?branch=master)](https://github.styleci.io/repos/287545083?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sfneal/queueables/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sfneal/queueables/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/sfneal/queueables.svg?style=flat-square)](https://packagist.org/packages/sfneal/queueables)

Abstraction layers for creating Jobs & Queueable's in Laravel applications

## Installation

You can install the package via composer:

```bash
composer require sfneal/queueables
```

## Usage

``` php
# Create a Job class
use Sfneal\Queueables\AbstractJob;
class ExampleJob extends AbstractJob
{
    /**
     * Execute the job.
     *
     * @return mixed
     */
    public function handle()
    {
        return 'example job has been executed';
    }
}
```

### Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email stephen.neal14@gmail.com instead of using the issue tracker.

## Credits

- [Stephen Neal](https://github.com/sfneal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com).
