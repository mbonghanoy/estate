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
                ->join('status','asset.status_id','status.status_id')
                ->get();
            return view('items', [
                'contacts' => $contacts
            ]);
        }else{
            header('Location: login');
        }
    }
}