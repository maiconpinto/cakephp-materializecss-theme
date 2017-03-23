<?php
use Cake\Core\Configure;
use Cake\Routing\Router;

Router::plugin('MaterializeCSS', ['path' => '/materializecss'], function ($routes) {
    $routes->fallbacks('DashedRoute');
});
