#Parser - The Example PHP Package



[![Total Downloads](https://img.shields.io/packagist/dt/monolog/monolog.svg)](https://packagist.org/packages/monolog/monolog)
[![Latest Stable Version](https://img.shields.io/packagist/v/monolog/monolog.svg)](https://packagist.org/packages/monolog/monolog)


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
