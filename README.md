# A fake news provider for php Faker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/paulhennell/faker-news.svg?style=flat-square)](https://packagist.org/packages/paulhennell/faker-news)
[![Build Status](https://img.shields.io/travis/paulhennell/faker-news/master.svg?style=flat-square)](https://travis-ci.org/paulhennell/faker-news)
[![Quality Score](https://img.shields.io/scrutinizer/g/paulhennell/faker-news.svg?style=flat-square)](https://scrutinizer-ci.com/g/paulhennell/faker-news)
[![Total Downloads](https://img.shields.io/packagist/dt/paulhennell/faker-news.svg?style=flat-square)](https://packagist.org/packages/paulhennell/faker-news)

This is a custom provider for [fzaniotto/Faker](https://github.com/fzaninotto/Faker) generating fake news headlines for use when testing website design. Also includes a fake news source name generator.

## Installation

You can install the package via composer:

```bash
composer require paulhennell/faker-news
```

## Usage

``` php
$faker = (new \Faker\Factory())::create();
$faker->addProvider(new \Faker\Provider\Fakenews($faker));
$faker->addProvider(new \Faker\Provider\Fakenewssource($faker));

// generate a headline
echo $faker->headline;

// generate a named newssource (75% Newspapers, 25% TV news as below)
echo $faker->NewssourceName;

// generate a Newspaper name
// 'The Daily Texas', 'The Morning Herald', 'Manchester Post' etc
echo $faker->NewspaperName;

// generate a TV source name
// 'KKN News', 'ATV', 'JKK 247' etc
echo $faker->TvNewsName;

```
### Example Laravel Factory Useage

``` php

<?php


use App\NewsStory;
use Faker\Generator as Faker;

$factory->define(NewsStory::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakenews($faker));
    $faker->addProvider(new \Faker\Provider\Fakenewssource($faker));
    return [
        'headline' => $faker->headline,
        'source' => $faker->newssourcename,
        'summary' => $faker->text,
        'url' => $faker->unique()->url,
    ];
});


```


### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Paul Hennell](https://github.com/paulhennell)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com).
