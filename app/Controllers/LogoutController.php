<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class LogoutController
{
    public function logout()
    {
        if(isset($_SESSION['id'])){
            session_unset();
            session_destroy();
            header('Location: login');
        }else {
            header('Location: items');
        }
    }
}