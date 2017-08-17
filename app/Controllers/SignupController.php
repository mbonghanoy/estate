<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class SignupController
{
    protected $data;

    public function signup()
    {
        return view('signup', [
            'contacts' => $contacts
        ]);
    }

    public function getter()
    {
        echo 'wawawaw';
    }
}