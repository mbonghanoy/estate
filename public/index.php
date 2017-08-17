<?php

require_once('../vendor/autoload.php');

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$router = new \Estate\Router($_SERVER['REQUEST_URI']);

$router->get('contacts', 'ContactController::get');
$router->get('signup', 'SignupController::signup');
$router->get('login', 'LoginController::get');

$router->post('SignupController::getter');

$router->fire();