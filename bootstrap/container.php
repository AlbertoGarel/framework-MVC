<?php

require __DIR__ . '/../vendor/autoload.php';
//require 'C:\Users\ELENA\PhpstormProjects\MVC-framework\vendor\autoload.php';
$containerBuilder = new \DI\ContainerBuilder;
$containerBuilder->useAutowiring(true);

//$containerBuilder->addDefinitions(__DIR__ . '/../bootstrap/config.php');
//$containerBuilder->addDefinitions(base_path('bootstrap/config.php'));
$container = $containerBuilder->build();

return $container;
