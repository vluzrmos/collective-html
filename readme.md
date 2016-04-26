# Forms & HTML

[![Join the chat at https://gitter.im/vluzrmos/collective-html](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/vluzrmos/collective-html?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Lumen Version](https://img.shields.io/badge/Lumen-5.0%20to%205.2-orange.svg)](https://packagist.org/packages/vluzrmos/collective-html) 
[![Latest Stable Version](https://poser.pugx.org/vluzrmos/collective-html/v/stable)](https://packagist.org/packages/vluzrmos/collective-html) [![Total Downloads](https://poser.pugx.org/vluzrmos/collective-html/downloads)](https://packagist.org/packages/vluzrmos/collective-html) [![Latest Unstable Version](https://poser.pugx.org/vluzrmos/collective-html/v/unstable)](https://packagist.org/packages/vluzrmos/collective-html) [![License](https://poser.pugx.org/vluzrmos/collective-html/license)](https://packagist.org/packages/vluzrmos/collective-html) [![Build Status](https://travis-ci.org/vluzrmos/collective-html.svg?branch=master)](https://travis-ci.org/vluzrmos/collective-html) 

Official documentation for Forms & Html for The Laravel/Lumen Framework can be found at the [LaravelCollective](http://laravelcollective.com/docs/master/html) website.

## Instalation on Lumen

    composer require vluzrmos/collective-html

## Configuration 

On your `bootstrap/app.php`:

```php
$app->register('Collective\Html\HtmlServiceProvider');

class_alias('Collective\Html\HtmlFacade', 'Html');

class_alias('Collective\Html\FormFacade', 'Form');
```

And remember to enable de facades, just uncomment that line:

```php
$app->withFacades()
```

If you want to automatically inject the `$html` and `$form` variables on all your Blade's View:

```php
$app->register('Collective\Html\InjectVarsServiceProvider');
```

And now you will not need the facades anymore, just that:

```
{!! $form->open() !!}
//...
{!! $html->asset() !!}
```

## Known Issues

Lumen UrlGenerator doesn't support `route('route.name', $id)`, because that you have to use an associative array:

```
{!! Form::open(['route' => ['route.name', ['id' => $id ] ]]) !!}
```

Lumen UrlGenerator do not generate correctly urls on console commands or non-browser requests, to fix that I suggest you to install my other package:

```
composer require vluzrmos/lumen-url-host
```

And add `lumenUrlHost('your-disired.domain:port');` at the top of your `bootstrap/app.php` file. 

Link: [vluzrmos/lumen-url-host](https://github.com/vluzrmos/lumen-url-host).

## Replacing LaravelCollective/Html

If your project require some package that requires `laravelcollective/html`, you can edit your composer.json to:

for Lumen 5.1:

```
"vluzrmos/collective-html": "1.0.9 as 5.1",
"package-vendor/package-required-name":"package-version" //that requires laravelcollective/html 5.1
```

for Lumen 5.0:

```
"vluzrmos/collective-html": "1.0.9 as 5.0",
"package-vendor/package-required-name":"package-version" //that requires laravelcollective/html 5.0
```

> Note: use version 1.0.9 or the latest vluzrmos/collective-html version.

## Credits

That package is just a free modification of [LaravelCollective/Html](https://github.com/LaravelCollective/html) to work with Lumen Framework.

