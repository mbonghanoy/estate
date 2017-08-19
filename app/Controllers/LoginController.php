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
            $checker = $check
                ->table('admin')
                ->where('username', $_POST['username'])
                ->andWhere('password', $_POST['password'])
                ->get();
            if(count($checker) == 1){
                foreach($checker as $checkers){
                    $_SESSION['id'] = $checkers->admin_id;
                }
            }else {
                echo 'User name or Password incorrect';
            }
        }
    }
}