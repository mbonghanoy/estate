<?php
session_start();
require_once('../vendor/autoload.php');

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$router = new \Estate\Router($_SERVER['REQUEST_URI']);

$router->get('contacts', 'ContactController::get');
$router->get('signup', 'SignupController::signup');
$router->get('items', 'ItemController::get');
$router->get('views', 'ItemController::get');
$router->get('/', 'ItemController::get');
$router->get('', 'ItemController::get');
$router->get('logout', 'LogoutController::logout');
$router->get('login', 'LoginController::login');
$router->get("view?id={$_GET['id']}", 'ViewController::display');
$router->get("edit?id={$_GET['id']}", 'ViewController::edit');
$router->get("checkout?id={$_GET['id']}", 'CheckoutController::display');
$router->get("checkin?id={$_GET['id']}", 'CheckoutController::checkIn');

$router->post('SignupController::insertion');
$router->post('LoginController::checkAccount');
$router->post('ViewController::save');
$router->post('CheckoutController::checkout');

$router->fire();