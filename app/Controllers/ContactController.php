<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class ContactController
{
    public function get()
    {
        $contact = new Contact;

        $contacts = $contact
            ->all();

        return view('contacts', [
            'contacts' => $contacts
        ]);
    }
}