#Parser - The Example PHP Package



[![Total Downloads](https://img.shields.io/packagist/dt/monolog/monolog.svg)](https://packagist.org/packages/splx/composer-example-project)
[![Latest Stable Version](https://img.shields.io/packagist/v/monolog/monolog.svg)](https://packagist.org/packages/splx/composer-example-project)


Parser - пакет считывает . Смотрите полный список обработчиков ниже. Специальные обработчики
позволяют создавать расширенные стратегии ведения журналов.



## Installation

Install the latest version with

```bash
$ composer require splx/composer-example-project
```

## Basic Usage

```php

    use Splx\Parser\Parser;
    
    require_once __DIR__ . '/vendor/autoload.php';
    
    $parser = new Parser();
    print_r($parser->process('https://test.com', 'a'));

```


## Managing package versions
New versions of your package are automatically fetched from tags you create in your VCS repository.

The easiest way to manage versioning is to just omit the version field from the composer.json file. The version numbers will then be parsed from the tag and branch names.

Tag/version names should match 'X.Y.Z', or 'vX.Y.Z', with an optional suffix for RC, beta, alpha or patch versions. Here are a few examples of valid tag names:

1.0.0
v1.0.0
1.10.5-RC1
v4.4.4beta2
v2.0.0-alpha
v2.0.4-p1

Branches will automatically appear as "dev" versions that are easily installable 
by anyone that wants to try your library's latest and greatest, but that does not 
mean you should not tag releases. The use of [Semantic Versioning](https://semver.org/lang/ru/) is strongly encouraged.