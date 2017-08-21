<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class LoginController
{
    public function login()
    {
        if(!isset($_SESSION['id'])){
            return view('login');
        }else {
            header('Location: items');
        }
    }

    public function checkAccount()
    {
        if(isset($_POST['login'])){
            $check = new Contact;
            $hashed = htmlentities($_POST['password'], ENT_QUOTES);
            $checker = $check
                ->table('admin')
                ->where('username', $_POST['username'])
                ->get();
            if(count($checker) == 1){
                foreach($checker as $checkers){
                    $password = $checkers->password;
                    if(password_verify($hashed, $password)){
                        $_SESSION['id'] = $checkers->admin_id;
                    }else {
                        echo 'User name or Password incorrect';
                    }
                }
            }else {
                echo 'User name or Password incorrect';
            }
        }
    }
}