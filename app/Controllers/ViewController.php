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
        }else{
            header('Location: login');
        }
    }

    public function edit()
    {
        if(isset($_SESSION['id'])){
            $contact = new Contact;

            $contacts = $contact
                ->table('asset')
                ->where('asset_id', $_GET['id'])
                ->get();
            return view('edit', [
                    'contacts' => $contacts
            ]);
        }else{
            header('Location: login');
        }
    }

    public function save()
    {
        if(isset($_POST['update'])){
            $update = new Contact;

            $data = [
                'description' => htmlentities($_POST['description'], ENT_QUOTES),
                'asset_serial' => htmlentities($_POST['asset_serial'], ENT_QUOTES),
                'brand' => htmlentities($_POST['brand'], ENT_QUOTES),
                'asset_tag_id' => htmlentities($_POST['asset_tag_id'], ENT_QUOTES),
                'purchase_date' => htmlentities($_POST['purchase_date'], ENT_QUOTES),
                'model' => htmlentities($_POST['model'], ENT_QUOTES),
                'cost' => htmlentities($_POST['cost'], ENT_QUOTES)
            ];

            $update
                ->table('asset')
                ->update($data, $_GET['id']);
            header('Location: items');
        }
    }
}