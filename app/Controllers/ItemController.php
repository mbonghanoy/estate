<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class ItemController
{
    public function get()
    {
        /**
         * check if the session id already set
         * if true, will run the query,
         * else, will be directed to login page
         */
        if(isset($_SESSION['id'])) {
            $contact = new Contact;

            $contacts = $contact
                ->table('asset')
                ->get();

            return view('items', [
                'contacts' => $contacts
            ]);

        }else {
            header('Location: login');
        }
    }
}