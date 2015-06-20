# Forms & HTML

[![Latest Stable Version](https://poser.pugx.org/vluzrmos/collective-html/v/stable)](https://packagist.org/packages/vluzrmos/collective-html) [![Total Downloads](https://poser.pugx.org/vluzrmos/collective-html/downloads)](https://packagist.org/packages/vluzrmos/collective-html) [![Latest Unstable Version](https://poser.pugx.org/vluzrmos/collective-html/v/unstable)](https://packagist.org/packages/vluzrmos/collective-html) [![License](https://poser.pugx.org/vluzrmos/collective-html/license)](https://packagist.org/packages/vluzrmos/collective-html)

Official documentation for Forms & Html for The Laravel/Lumen Framework can be found at the [LaravelCollective](http://laravelcollective.com/docs/master/html) website.

# Instalation on Lumen

    composer require vluzrmos/collective-html

# Configuration 

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

# Credits

That package is just a free modification of [LaravelCollective/Html](https://github.com/LaravelCollective/html) to work with Lumen Framework.

