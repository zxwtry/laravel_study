<?php
/**
 * User:  zxwtry
 * File:  C1119bController.php
 * Date:  2017/11/19
 * Time:  10:01
 */

namespace  App\Http\Controllers;

use App\Student;

class C1119bController extends Controller {


    public function blade($query) {
        if ($query == 'layouts') {
            //.和/都可以
            //return view('/C1119b/layouts');
            return view('C1119b.layouts');
        }


        elseif ($query == 'section1') {
            return view('C1119b.section1');
        }

    }

    /*
        基础语法及include的使用

        1,  模板中输出变量
        2,  模板中调用php
        3,  原样输出
        4,  模板中的注释
        5,  引入子视图 include的使用
     */
    public function grammar($query) {
        if ($query == 'variable') {
            $name = "zxwtry";
            $arr = ['zxwtry01', 'zxwtry02'];
            return view('C1119b/grammar_section1', [
                'name' => $name, 'arr' => $arr
            ]);
        }

        elseif ($query == 'include') {
            return view('C1119b/grammar_section2');
        }

        //模板中的流程控制
        /*
            if
            unless
            for
            foreach
         */
        elseif ($query == 'flow') {
            $name = "zxwtry02";
            $arr = ['zxwtry01', 'zxwtry02'];

            //$students = Student::get();
            $students = [];

            return view('C1119b/grammar_flow', [
                'name' => $name, 'arr' => $arr, 'students' => $students
            ]);
        }


        //模板中的url
        /*
            url()           添加的就是url
            action()        方法名
            route()         路由别名
         */
        elseif ($query == 'url') {
            return view('C1119b.grammar_url');
        }


    }


}

