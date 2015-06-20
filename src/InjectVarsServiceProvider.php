<?php

namespace Collective\Html;

use Illuminate\Support\ServiceProvider;

class InjectVarsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        /** @var \Illuminate\View\Factory $view */
        $view = $this->app['view'];

        $view->share('html', $this->app['html']);

        $view->share('form', $this->app['form']);
    }
}
