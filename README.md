# Form

[![Latest Stable Version](https://poser.pugx.org/aldarien/form/v/stable?format=plastic)](https://packagist.org/packages/aldarien/form)
[![License](https://poser.pugx.org/aldarien/form/license?format=plastic)](https://packagist.org/packages/aldarien/form)
[![Travis-CI](https://travis-ci.org/Aldarien/form.svg?branch=testing)](https://travis-ci.org/Aldarien/form)

Form building for frontend

### Version

Versioning is done according to [SemVer](https://semver.org/)
Current version: `1.0.0`

## Motivation

As with any programmer, I wanted a [DRY](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself) form building.
With that in mind, I created this frontend assistant for form building.
In this version only form components are included and there is still some repeating, but simplified.

## Installation

### Requirements

* [PHP 7+](http://www.php.net)
* [Composer](http://getcomposer.org)

#### Dev

* [GIT](https://git-scm.com/)
* [PHPUnit](https://phpunit.de/) [![Latest Stable Version](https://poser.pugx.org/phpunit/phpunit/version?format=plastic)](https://packagist.org/packages/phpunit/phpunit?format=plastic)

#### Optional

* [Bootstrap](https://getbootstrap.com/)

### Installation

Install using composer:

~~~
composer require aldarien/form
~~~

## Usage

In the frontend of your choice `echo` the `form` function.

### Basic html

~~~php
<?php echo form('create', ['action' => 'form_parse.php']); ?>
~~~

or:

~~~php
<?= form('text', ['name' => 'text_field']); ?>
~~~

### Laravel Blade

~~~
{{ form('submit', ['value' => 'Submit Form']) }}
~~~

## Testing

Testing was done with PHPUnit in the `testing` branch.

## Contribute

For contributing, I use GIT and [GitFlow](http://nvie.com/posts/a-successful-git-branching-model/)
So `clone` from [GitHUB](https://github.com/), `checkout` a feature branch from the `develop` branch.
When done `rebase` and test with PHPUnit. When everything is done and ready create a `pull request` for the `develop` branch.

## License

The license is [MIT](https://en.wikipedia.org/wiki/MIT_License).

#### Permissions

* Commercial use
* Distribution
* Modification
* Private use

#### Conditions

* License and copyright notice

#### Limitations

* Liability
* Warranty
