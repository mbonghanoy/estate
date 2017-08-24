<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class ReportController
{
    public function get()
    {
        /**
         * checks if session id is set
         * if true, will run this
         * else, will directed to login page
         */
        if(isset($_SESSION['id'])) {

            $contact = new Contact;
            $totals = new Contact;
            $viewCheckout = new Contact;

            /**
             * join two tables
             * store all query result in viewCheckedout variable if
             * the row set employee id will be stored in variable
             * @var array
             */
            $viewCheckedout = $viewCheckout
                ->table('asset')
                ->join('employee', 'asset.employee_id', 'employee.employee_id')
                ->get();

            /**
             * return number of asset_id in table asset
             * @var array
             */
            $contacts = $contact
                ->table('asset')
                ->select('count(asset_id) as num');

            /**
             * count all rows containing status_id = Checked out
             * pass the result to varibale $checkeout
             * @var array
             */
            $checkeout = $contact
                ->table('asset')
                ->where('status_id', 'Checked out')
                ->select('count(status_id) as checked');

            /**
             * add all asset cost stored in database
             * and pass the result to variable $total
             * @var array
             */
            $total = $totals
                ->table('asset')
                ->select('sum(cost) as total');

            /**
             * passed all result to reports page through variable
             */
            return view('reports', [
                'contacts' => $contacts,
                'checkeout' => $checkeout,
                'total' => $total,
                'viewCheckedout' => $viewCheckedout
            ]);
        }else {
            header('Location: login');
        }
    }
}