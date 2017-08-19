<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class SignupController
{
    protected $data;

    public function signup()
    {
        if(isset($_SESSION['id'])){
            return view('signup', [
                'contacts' => $contacts
            ]);
        }else {
            header('Location: login');
        }
    }

    public function insertion()
    {
        if(isset($_POST['insert'])){
            $insert = new Contact;
            $data = [
                'description' => $_POST['description'],
                'asset_serial' => $_POST['asset_serial'],
                'brand' => $_POST['brand'],
                'asset_tag_id' => $_POST['asset_tag_id'],
                'purchase_date' => $_POST['purchase_date'],
                'model' => $_POST['model'],
                'cost' => $_POST['cost']
            ];
            $insert->table('asset')
                ->insert($data);
        }
    }
}