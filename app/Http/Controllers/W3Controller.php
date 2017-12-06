<?php
/**
 * User:  zxwtry
 * File:  W3Controller.php
 * Date:  2017/12/1
 * Time:  9:35
 */


namespace App\Http\Controllers;

class W3Controller extends Controller {

    public function jquery($q) {
        return view('w3.jquery.' . $q);
    }

    public function jquery_http($q) {
        switch ($q) {
            case "get":
                exit("get_val");
            case "post":
                exit("post_val");
        }
    }

    public function css($q) {
        return view('w3.css.' . $q);
    }

}