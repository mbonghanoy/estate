<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class CheckoutController
{
    /**
     * [display description]
     * @return [type] [description]
     */
    public function display()
    {
        /**
         * checks whether the session id is set by
         * logging in the admin
         */
        if(isset($_SESSION['id'])) {
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

        }else {
            header('Location: login');
        }
    }

    /**
     * assign asset to especific user
     * filled employee_id from asset table and checkout_date
     * filling employee_id and checkout_date will make the status = Checked out
     */
    public function checkout()
    {
        if(isset($_POST['checkout'])) {
            $checkout = new Contact;

            $data = [
                'employee_id' => $_POST['employees'],
                'status_id' => 'Checked out',
                'checkout_date' => $_POST['checkout_date']
            ];

            $try = $checkout
                ->table('asset')
                ->update($data, $_GET['id']);

            header("Location: view?id={$_GET['id']}");
        }
    }
    /**
     * --checkin an asset depending on id selected
     * --updating a row and make the employee_id null and checkout_date=null
     * null employee_id and checkout_date will make status = available
     */
    public function checkIn()
    {
        $checkin = new Contact;

        $data = [
            'employee_id' => NULL,
            'status_id' => 'Available',
            'checkout_date' => NULL
        ];

        $checkin
            ->table('asset')
            ->update($data, $_GET['id']);

        header('Location: items');
    }
    /**
     * delete row depending on asset_id
     */
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