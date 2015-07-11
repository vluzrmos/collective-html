<?php

use Collective\Html\FormBuilder;
use Collective\Html\HtmlBuilder;
use Laravel\Lumen\Application;
use Laravel\Lumen\Routing\UrlGenerator;
use Mockery as m;

/**
 * Class TestCase.
 */
class TestCase extends PHPUnit_Framework_TestCase
{
    /** @var  Application */
    protected $app;

    /** @var  FormBuilder */
    protected $form;

    /** @var  HtmlBuilder */
    protected $html;

    /** @var  UrlGenerator */
    protected $url;

    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        /*
         * Forcing lumen to use http://localhost:80
         */
        lumenUrlHost('localhost');

        $this->app = new Application();

        $this->url = $this->app->make('url');

        $this->html = new HtmlBuilder($this->url);
        $this->form = new FormBuilder($this->html, $this->url, 'abc');
    }

    /**
     * Destroy the test environment.
     */
    public function tearDown()
    {
        m::close();
    }
}
