<?php
/**
 * User:  zxwtry
 * File:  Member.php
 * Date:  2017/11/18
 * Time:  11:51
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {


    public static function getMember() {
        return 'member name is zxwtry';
    }


}

