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
        if(isset($_POST['insert'])){
            $insert = new Contact;
            $data = [
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name']
            ];
            $insertion = $insert
                ->insert($data);
            if($insertion){
                echo 'success';
            }
        }
    }
}