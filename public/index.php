<?php
session_start();
require_once('../vendor/autoload.php');

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$router = new \Estate\Router($_SERVER['REQUEST_URI']);

$router->get('contacts', 'ContactController::get');
$router->get('signup', 'SignupController::signup');
$router->get('items', 'ItemController::get');
$router->get('logout', 'LogoutController::logout');
$router->get('login', 'LoginController::login');
$router->get('/', 'ItemController::get');

$router->post('SignupController::insertion');
$router->post('LoginController::checkAccount');

$router->fire();