<?php

require_once('../vendor/autoload.php');

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$router = new \Estate\Router($_SERVER['REQUEST_URI']);

$router->get('contacts', 'ContactController::get');
$router->get('signup', 'SignupController::signup');
$router->post('signup', function($new) {
    if(isset($_POST['signup'])){
        $data = [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name']
        ];
        $user = $new->insert($data);
        if($user){
            echo 'success right';
        }
    }
});

$router->post('login', function($new){
    if(isset($_POST['login'])) {
        $user = $new
            ->where('first_name', $_POST['first_name'])
            ->andWhere('last_name', $_POST['last_name'])
            ->get();
        vdump($user);
    }
});

$router->get('login', 'LoginController::get');

$router->get('users', function() {
    return view('users');
});

$router->fire();
