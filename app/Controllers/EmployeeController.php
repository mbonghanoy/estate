<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class EmployeeController
{
    public function get()
    {
        if(isset($_SESSION['id'])) {
            $employee = new Contact;

            /**
             * passed query result to $employees
             * @var array
             */
            $employees = $employee->table('employee')
                ->all();

            return view('employee', [
                    'employees' => $employees
            ]);

        }else {
            header('Location: login');
        }
    }

    public function addNew()
    {
        /**
         * will this function only if the session id already set.
         */
        if(isset($_SESSION['id'])) {
            return view('add');
        }
    }

    public function addEmployee()
    {
        if(isset($_POST['save'])) {
            $addEmployee = new Contact;

            /**
             * passed data from $_POST to array
             * key = column name from database where to insert values
             * value = is the value to be inserted in datase
             * @var array
             */
            $data = [
                'first_name' => htmlentities($_POST['first_name'], ENT_QUOTES),
                'last_name' => htmlentities($_POST['last_name'], ENT_QUOTES),
                'job_position' => htmlentities($_POST['position'], ENT_QUOTES)
            ];

            /**
             * pass the query to variable insertion
             * @var array
             */
            $insertion = $addEmployee->table('employee')
                ->insert($data);
            /**
             * if insertion variable returns true, it means data has been inserted
             */
            if($insertion) {
                header('Location: employee');
            }
        }
    }
}