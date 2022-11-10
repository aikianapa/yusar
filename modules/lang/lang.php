<?php

class modLang
{
    public function __construct($app)
    {
        $this->app = $app;
        $this->init();
    }

    function init() {
        $_SESSION['lang'] = $this->app->vars('_route.mode') > '' ? $this->app->vars('_route.mode') : 'ru';
        $url = $this->app->vars('_route.refferer') > '' ? $this->app->vars('_route.refferer') : '/';
        header('Location: '.$url, true, 303);
    }
}