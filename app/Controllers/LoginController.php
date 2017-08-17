<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class LoginController
{
    public function get()
    {
        return view('login', [
            'contacts' => $contacts
        ]);

        if(isset($_POST['login'])){
            vdump('hey');
        }
    }
}