<?php

namespace app\core;

use app\core\Router;

class Application
{
    public $router;
    public function __construct()
    {
        $this->router = new Router();
    }
}
