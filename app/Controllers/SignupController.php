<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class SignupController
{
    protected $data;

    public function signup()
    {
        /**
         * checks if the session id is set
         * if true, will view signup page
         * else, will directed to login page
         */
        if(isset($_SESSION['id'])) {
            return view('signup');
        }else {
            header('Location: login');
        }
    }

    public function insertion()
    {

        if(isset($_POST['insert'])) {

            $insert = new Contact;

            $data = [
                'description' => htmlentities($_POST['description'], ENT_QUOTES),
                'asset_serial' => htmlentities($_POST['asset_serial'], ENT_QUOTES),
                'brand' => htmlentities($_POST['brand'], ENT_QUOTES),
                'asset_tag_id' => htmlentities($_POST['asset_tag_id'], ENT_QUOTES),
                'purchase_date' => htmlentities($_POST['purchase_date'], ENT_QUOTES),
                'model' => htmlentities($_POST['model'], ENT_QUOTES),
                'cost' => htmlentities($_POST['cost'], ENT_QUOTES),
                'life_span' => htmlentities($_POST['life_span'], ENT_QUOTES),
                'depreciation_rate' => htmlentities($_POST['depreciation_rate'], ENT_QUOTES)
            ];

            $insertion = $insert->table('asset')
                ->insert($data);

            if($insertion) {
                header('Location: items');
            }
        }
    }
}