<?php
$controllers = [
    'site' => ['index', 'error'],
    'post' => ['index', 'add'],
];  

if(!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])){
    $controller = 'site';
    $action = 'error';
}

include_once './controllers/' . ucwords($controller) .'Controller.php';

$nameOfClass = ucwords($controller) . 'Controller';

$controller = new $nameOfClass;
$controller->$action();