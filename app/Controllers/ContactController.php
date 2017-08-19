<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class ContactController
{
    public function get()
    {
        $contact = new Contact;

        $contacts = $contact
            ->table('asset')
            ->all();

        return view('contacts', [
            'contacts' => $contacts
        ]);
    }
}