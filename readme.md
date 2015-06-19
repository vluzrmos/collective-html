# Forms & HTML

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

# Credits

That package is just a free modification of [LaravelCollective/Html](https://github.com/LaravelCollective/html) to work with Lumen Framework.

