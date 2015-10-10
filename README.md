# Simple Array Bundle

[![Build Status](https://img.shields.io/travis/EmanueleMinotto/SimpleArrayBundle.svg?style=flat)](https://travis-ci.org/EmanueleMinotto/SimpleArrayBundle)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/5954c7e3-2bb6-4b69-ba58-81c47b584e63.svg?style=flat)](https://insight.sensiolabs.com/projects/5954c7e3-2bb6-4b69-ba58-81c47b584e63)
[![Coverage Status](https://img.shields.io/coveralls/EmanueleMinotto/SimpleArrayBundle.svg?style=flat)](https://coveralls.io/r/EmanueleMinotto/SimpleArrayBundle)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/EmanueleMinotto/SimpleArrayBundle.svg?style=flat)](https://scrutinizer-ci.com/g/EmanueleMinotto/SimpleArrayBundle/)

Symfony 2 bundle for simple tags management, based on doctrine 2 `simple_array` type.

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require emanueleminotto/simple-array-bundle
```

This command requires you to have [Composer](https://getcomposer.org/) installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding the following line in the `app/AppKernel.php`
file of your project:

```php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new EmanueleMinotto\SimpleArrayBundle\SimpleArrayBundle(),
        );
    }
}
```
