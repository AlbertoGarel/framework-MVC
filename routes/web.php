<?php
return \FastRoute\simpleDispatcher(
    function (\FastRoute\RouteCollector $route) {
        $route->addRoute('GET', '/', ['Application\Controllers\HomeController', 'index']);
        $route->addRoute('GET', '/contacto', ['Application\Controllers\ContactController', 'contact']);
    }
);