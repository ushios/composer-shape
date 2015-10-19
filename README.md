ushios/shape
============

[![Build Status](https://travis-ci.org/ushios/composer-shape.svg)](https://travis-ci.org/ushios/composer-shape)
[![Coverage Status](https://coveralls.io/repos/ushios/composer-shape/badge.svg?branch=master&service=github)](https://coveralls.io/github/ushios/composer-shape?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/562238cb36d0ab00190009cb/badge.svg?style=flat)](https://www.versioneye.com/user/projects/562238cb36d0ab00190009cb)

Calculates your shapes.

Installation
=============

Using composer
---------------

```
{
    ...
    "require": {
        "ushios/shape": "0.*"
    }
}
```

[@see Packagist](https://packagist.org/packages/ushios/shape)

Usage
======

```
<?php

use Ushios\Shape\Rectangle;
use Ushios\Shape\Calculator\Scale;

$base = new Rectangle(200, 400);
$target = new Rectangle(400, 500);

$newRect = Scale::fillRectWithRect($base, $target); // Got width:200, height:250 rectangle
```

Developers
===========

Test
-----

```
$ vendor/bin/phpunit
```

Format
-------

```
$ vendor/bin/php-cs-fixer fix 
```

Make API Document using phpDocumenter
--------------------------------------

```
$ vendor/bin/phpdoc
```