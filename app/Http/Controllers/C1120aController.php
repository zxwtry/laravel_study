<?php
/**
 * User:  zxwtry
 * File:  C1120aController.php
 * Date:  2017/11/20
 * Time:  18:14
 */


namespace App\Http\Controllers;

class C1120aController extends Controller {

    public function html($q) {
        if ($q == 'class') {
            return view('C1120a/class');
        }

    }

}
