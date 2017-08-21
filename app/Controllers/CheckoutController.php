<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class CheckoutController
{
    public function display()
    {
        if(isset($_SESSION['id'])){
            $contact = new Contact;
            $employee = new Contact;

            $contacts = $contact
                ->table('asset')
                ->where('asset_id', $_GET['id'])
                ->get();

            $employees = $employee
                ->table('employee')
                ->all();
            return view('checkout', [
                'contacts' => $contacts,
                'employees' => $employees
            ]);
        }else{
            header('Location: login');
        }
    }

    public function checkout()
    {
        if(isset($_POST['checkout'])){
            $checkout = new Contact;

            $data = [
                'employee_id' => $_POST['employees'],
                'status_id' => 'Checked out'
            ];
            $try = $checkout
                ->table('asset')
                ->update($data, $_GET['id']);
            header('Location: items');
        }
    }

    public function checkIn()
    {
        $checkin = new Contact;

        $data = [
            'employee_id' => '',
            'status_id' => 'Available'
        ];
        $checkin
            ->table('asset')
            ->update($data, $_GET['id']);
        header('Location: items');
    }

    public function erase()
    {
        $erase = new Contact;

        $erase
            ->table('asset')
            ->where('asset_id', $_GET['id'])
            ->delete();
        header('Location: items');
    }
}