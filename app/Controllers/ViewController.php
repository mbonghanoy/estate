<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class ViewController
{
    public function display()
    {
        if(isset($_SESSION['id'])){
            $contact = new Contact;

            $contacts = $contact
                ->table('asset')
                ->where('asset_id', $_GET['id'])
                ->get();
            return view('view', [
                    'contacts' => $contacts
            ]);
        }
    }

    public function edit()
    {
        $contact = new Contact;

            $contacts = $contact
                ->table('asset')
                ->where('asset_id', $_GET['id'])
                ->get();
            return view('edit', [
                    'contacts' => $contacts
            ]);
    }

    public function save()
    {
        if(isset($_POST['update'])){
            $update = new Contact;

            $data = [
                'description' => $_POST['description'],
                'asset_serial' => $_POST['asset_serial'],
                'brand' => $_POST['brand'],
                'asset_tag_id' => $_POST['asset_tag_id'],
                'purchase_date' => $_POST['purchase_date'],
                'model' => $_POST['model'],
                'cost' => $_POST['cost']
            ];

            $try = $update
                ->table('asset')
                ->update($data, $_GET['id']);
            header('Location: items');
        }
    }
}