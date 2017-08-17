<?php

require_once('../vendor/autoload.php');

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$router = new \Estate\Router($_SERVER['REQUEST_URI']);

$router->get('contacts', 'ContactController::get');
$router->get('login', 'LoginController::showLogin');
$router->get('signup', 'SignupController::signup');

$router->post('home', function($new) {
    if(isset($_POST['signup'])){
        $data = [
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'middle_name' => $_POST['middle_name']
        ];
        $user = $new->insert($data);
        if($user){
            echo 'success right';
        }
    }
});

$router->get('users', function() {
    return view('users');
});

$router->fire();
