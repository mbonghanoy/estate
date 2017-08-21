<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class ReportController
{
    public function get()
    {
        if(isset($_SESSION['id'])){
            $contact = new Contact;
            $totals = new Contact;

            $contacts = $contact
                ->table('asset')
                ->select('count(asset_id) as num');

            $checkeout = $contact
                ->table('asset')
                ->where('status_id', 'Checked out')
                ->select('count(status_id) as checked');

            $total = $totals
                ->table('asset')
                ->select('sum(cost) as total');

            return view('reports', [
                'contacts' => $contacts,
                'checkeout' => $checkeout,
                'total' => $total
            ]);
        }else{
            header('Location: login');
        }
    }
}