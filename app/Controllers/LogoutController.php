<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class LogoutController
{
    public function logout()
    {
        /**
         * checks if the session id is already set,
         * if true will destroy session and unset all values in session
         * will be directed to login pages
         */
        if(isset($_SESSION['id'])) {
            session_unset();
            session_destroy();
            header('Location: login');

        }else {
            header('Location: items');
        }
    }
}