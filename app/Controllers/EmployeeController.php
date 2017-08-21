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
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'job_position' => $_POST['position']
            ];

            $insertion = $addEmployee->table('employee')
                ->insert($data);
            if($insertion){
                header('Location: employee');
            }
        }
    }
}