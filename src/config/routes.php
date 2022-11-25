<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) 
{
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) 
    {
        $builder->connect('/', ['controller' => 'Works', 'action' => 'home']);
        $builder->connect('/management', ['controller' => 'Works', 'action' => 'management']);
        $builder->fallbacks();
    });
};
