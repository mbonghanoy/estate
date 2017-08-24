<?php

namespace Estate\Controllers;

use Estate\Models\Contact;

class ViewController
{
    public function display()
    {
        if(isset($_SESSION['id'])) {
            $contact = new Contact;
            $life = new Contact;
            $depreciation = new Contact;
            /**
             * select all the from table asset depending on id passed
             * @var array
             */
            $contacts = $contact
                ->table('asset')
                ->where('asset_id', $_GET['id'])
                ->get();

            foreach($contacts as $contact) {
                /**
                 * passed the row value of life_span column from table asset
                 * @var integer
                 */
                $lifeSpan = $contact->life_span;

                /**
                 * passed the query result to lifeDeath
                 * we computed when would be the of the life end of asset from when it was purchased + life span set and will alias as DATE
                 * @var array
                 */
                $lifeDeath = $life
                    ->table('asset')
                    ->where('asset_id', $_GET['id'])
                    ->select("DATE_ADD(purchase_date, INTERVAL '$lifeSpan' MONTH) as DATE");
                /**
                 * passed the current date to variable $datenow
                 * @var string
                 */
                $dateNow = date('Y-m-d');

                /**
                 * passed query result to variable $depreciationMonth
                 * counts number of months already passed by using timestampdiff
                 * and will be named as depreciation_month
                 * @var array
                 */
                $depreciationMonth  = $depreciation
                    ->table('asset')
                    ->where('asset_id', $_GET['id'])
                    ->select("TIMESTAMPDIFF(MONTH, purchase_date, '$dateNow') as depreciation_month");
                /**
                 * passed array values to object depreciatedMonth
                 */
                foreach($depreciationMonth as $depreciatedMonth) {

                    /**
                     * compare the value of named "depreciation_month" if its more than or equal to 1
                     * if depreciation_month = 0 or less it means the asset is not already ready to depreciated
                     * if depreciation_month more than or equal to 1 will continue
                     */
                    if($depreciatedMonth->depreciation_month >= 1) {

                        /**
                         * number of depreciation_month will be multiplied to deprecition rate to get the total number of rate needed to be depreciated
                         * after, total number of rate will be multiplied to total cost of an asset tot get the total depreciation
                         * @var float
                         */
                        $total = $depreciatedMonth->depreciation_month * $contact->depreciation_rate * $contact->cost;
                        /**
                         * total cost of the asset will be subtracted by the total depreciation
                         * @var float
                         */
                        $totalDepreciated = $contact->cost - $total;
                    }
                }
            }

            return view('view', [
                    'contacts' => $contacts,
                    'lifeDeath' => $lifeDeath,
                    'totalDepreciated' =>$totalDepreciated
            ]);

        }else {
            header('Location: login');
        }
    }

    public function edit()
    {
        if(isset($_SESSION['id'])) {
            $contact = new Contact;

            $contacts = $contact
                ->table('asset')
                ->where('asset_id', $_GET['id'])
                ->get();
            return view('edit', [
                    'contacts' => $contacts
            ]);

        }else {
            header('Location: login');
        }
    }

    public function save()
    {
        if(isset($_POST['update'])) {
            $update = new Contact;

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

            $update
                ->table('asset')
                ->update($data, $_GET['id']);

            header("Location: view?id={$_GET['id']}");
        }
    }
}