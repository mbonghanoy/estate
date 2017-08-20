<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class ViewController
{
    public function display()
    {
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