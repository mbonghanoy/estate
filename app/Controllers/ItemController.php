<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class ItemController
{
    public function get()
    {
        if(isset($_SESSION['id'])){
            $contact = new Contact;

            $contacts = $contact
                ->table('asset')
                ->all();

            return view('items', [
                'contacts' => $contacts
            ]);
        }
    }
}