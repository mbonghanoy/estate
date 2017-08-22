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
        }else {
            header('Location: login');
        }
    }

    public function addNew()
    {
        if(isset($_SESSION['id'])){
            return view('add');
        }
    }

    public function addEmployee()
    {
        if(isset($_POST['save'])){
            $addEmployee = new Contact;
            $data = [
                'first_name' => htmlentities($_POST['first_name'], ENT_QUOTES),
                'last_name' => htmlentities($_POST['last_name'], ENT_QUOTES),
                'job_position' => htmlentities($_POST['position'], ENT_QUOTES)
            ];

            $insertion = $addEmployee->table('employee')
                ->insert($data);
            if($insertion){
                header('Location: employee');
            }
        }
    }
}