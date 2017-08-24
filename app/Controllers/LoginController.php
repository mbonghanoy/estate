<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class LoginController
{
    public function login()
    {
        /**
         * check if the session id is set
         * if true, will view log in page
         * else, will view home page
         */
        if(!isset($_SESSION['id'])) {
            return view('login');
        }else {
            header('Location: items');
        }
    }

    public function checkAccount()
    {
        if(isset($_POST['login'])) {
            $check = new Contact;

            $hashed = htmlentities($_POST['password'], ENT_QUOTES);

            /**
             * check if username exist.
             * @var array
             */
            $checker = $check
                ->table('admin')
                ->where('username', $_POST['username'])
                ->get();

            /**
             * if count number of results is = 1 it will continue
             * else, will return "Username or Password incorrect"
             */
            if(count($checker) == 1) {
                foreach($checker as $checkers) {
                    /**
                     * $password passes the password to a variable from database
                     * @var [aray]
                     */
                    $password = $checkers->password;
                    /**
                     * password verify checks if the password type is matched with
                     * the hashed password in the database
                     */
                    if(password_verify($hashed, $password)) {
                        $_SESSION['id'] = $checkers->admin_id;
                    }else {
                        echo "<script>alert('Username or Password incorrrect')</script>";
                    }
                }
            }else {
                echo "<script>alert('Username or Password incorrrect')</script>";
            }
        }
    }
}