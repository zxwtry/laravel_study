<?php
/**
 * User:  zxwtry
 * File:  C1118bController.php
 * Date:  2017/11/18
 * Time:  10:03
 */

namespace App\Http\Controllers;

use App\Member;

class C1118bController extends Controller {

    public function info() {
        return "member-info";
    }

    public function info2() {
        return "member-info2";
    }

    public function info3() {
        return "member-info3";
    }

    public function info4() {
        return "member-info4";
    }

    public function info5() {
        return "member-info5";
    }

    public function info6() {
        return route('1118b_info5');
    }

    public function info7($id) {
        return "member-info7  id: " . $id;
    }

    public function info8() {
        return view('C1118b/V1118b-info8');
    }

    public function info9() {
        return view('C1118b/V1118b-info9');
    }

    public function info10() {
        return view('C1118b/V1118b-info10',
            [
                'name' => 'zxwtry',
                'age' => '100'
            ]);
    }

    public function info11() {
        return view('C1118b/V1118b-info11',
            [
                'name' => 'zxwtry',
                'age' => '100'
            ]);
    }

    public function info12() {
        return Member::getMember();
    }


}