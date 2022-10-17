<?php

$controller = 'do_'.($_GET['page']??'login');

$routes = [
    'do_login',
    'do_register'
];

if (!in_array($controller, $routes)) {
    $controller = 'do_not_found';
}

$response = call_user_func($controller);