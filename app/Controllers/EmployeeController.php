<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class EmployeeController
{
    public function get()
    {
        if(isset($_SESSION['id'])){
            $employee = new Contact;

            $employees = $employee->table('employee')
                ->all();

            return view('employee', [
                    'employees' => $employees
            ]);
        }
    }
}