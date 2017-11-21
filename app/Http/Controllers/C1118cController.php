<?php
/**
 * User:  zxwtry
 * File:  C1118cController.php
 * Date:  2017/11/18
 * Time:  13:19
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class C1118cController extends Controller {

    public function sql1($query) {

        if ($query == 'select_all') {
            $students = DB::select('select * from student');
            var_dump($students);
        } elseif ($query == 'select_dd') {
            $students = DB::select('select * from student');
            dd($students);
        } elseif($query == 'insert_1') {
            $bool = DB::insert('insert into student(name, age) values(?, ?)',
                ['zxwtry4', 104]);
            var_dump($bool);
        } elseif ($query == 'update') {
            $res = DB::update('update student set age = ? where name = ?',
                [106, 'zxwtry1']);
            var_dump($res);
            /*更新一行记录：int(1)*/
            /*更新零行记录：int(0)*/
        } elseif ($query == 'delete') {
            $res = DB::delete('delete from student where id = ?',
                [1003]);
            //res删除的行数
            var_dump($res);
        }

    }

    public function sql2($query) {
        if ($query == 'insert') {
            $res = DB::table('student') -> insert(
                ['name' => 'zxwtry6', 'age' => 106]
            );
            var_dump($res);
            /*插入成功：bool(true)*/
        }

        elseif($query == 'insert2') {
            $res = DB::table('student') -> insertGetId(
                ['name' => 'zxwtry8', 'age' => 108]
            );
            var_dump($res);
            /*插入成功返回Id*/
        }


        elseif($query == 'insert3') {
            $res = DB::table('student') -> insert([
                ['name' => 'zxwtry10', 'age' => 110],
                ['name' => 'zxwtry11', 'age' => 111],
                ['name' => 'zxwtry12', 'age' => 112]
            ]);
            var_dump($res);
            /*插入成功：bool(true)*/
        }

//        elseif($query == 'insert4') {
//            $res = DB::table('student') -> insertGetId([
//                ['name' => 'zxwtry13', 'age' => 113],
//                ['name' => 'zxwtry14', 'age' => 114],
//                ['name' => 'zxwtry15', 'age' => 115],
//            ]);
//            var_dump($res);
//            /*执行报错*/
//        }

        elseif ($query == 'update') {
            $res = DB::table('student')
                -> where('id', 1012)
                -> update(
                    ['age' => 130]
                );
            var_dump($res);
            /*返回影响的行数：int(1)*/
        }

        elseif ($query == 'increment') {
            $res = DB::table('student')
                -> where('id', 1012)
                -> increment('age', 1);
            var_dump($res);
            /*返回影响的行数：int(1)*/
        }

        elseif ($query == 'decrement') {
            $res = DB::table('student')
                -> where('id', 1012)
                -> decrement('age', 1);
            var_dump($res);
            /*返回影响的行数：int(1)*/
        }

        elseif ($query == 'decrement2') {
            $res = DB::table('student')
                -> where('id', 1012)
                -> decrement('age', 1,
                    ['name' => 'zxwtry12_new']);
            var_dump($res);
            /*返回影响的行数：int(1)*/
        }

        elseif ($query == 'delete') {
            $res = DB::table('student')
                -> where('id', 1011)
                -> delete();
            var_dump($res);
            /*返回影响的行数：int(1)*/
        }

        elseif ($query == 'delete2') {
            $res = DB::table('student')
                -> where('id', '>=', 1009)
                -> delete();
            var_dump($res);
            /*返回影响的行数：int(3)*/
        }

        elseif ($query == 'delete3') {
            $res = DB::table('student')
                -> truncate();
            var_dump($res);
            /*没有返回，就是NULL*/
        }
        /*
            查询构造器：
            get()           全部
            first()         第一个
            where()
            pluck()
            lists()
            select()
            chunk()
         */

        elseif($query == 'get') {
            $students = DB::table('student')->get();
            dd($students);
        }

        elseif($query == 'first') {
            $students = DB::table('student')->first();
            dd($students);
        }

        elseif($query == 'first2') {
            $students = DB::table('student')
                ->orderBy('id', 'desc')
                ->first();
            dd($students);
        }

        elseif($query == 'where') {
            $students = DB::table('student')
                ->where('id' , '>=', 2)
                ->get();
            dd($students);
        }

        elseif($query == 'whereRaw') {
            $students = DB::table('student')
                ->whereRaw('id > ? and age < ?', [2, 111])
                ->get();
            dd($students);
        }

        elseif($query == 'pluck') {
            $names = DB::table('student')
                ->pluck('name');
            dd($names);
        }

        elseif($query == 'lists') {
            $names = DB::table('student')
                ->lists('name');
            dd($names);
        }

        //lists可以指定一个数据作为下标
        elseif($query == 'lists2') {
            $names = DB::table('student')
                ->lists('name', 'id');
            dd($names);
        }

        //select 查询一个表不需要全部字段
        elseif($query == 'select') {
            $names = DB::table('student')
                ->select('id', 'name', 'age')
                ->get();
            dd($names);
        }

        //chunk 几十万条，分段获取
        //如果需要在指定的地方停止，只需要return false;
        elseif($query == 'chunk') {
            echo "<pre>";
            $names = DB::table('student')
                ->chunk(2, function ($students){
                    var_dump($students);
                    //这里如果使用dd，只会输出一个长度为2的数组
                    echo "<br />";
            });
        }

    }

    //聚合函数
    /*
        count()
        max()
     */
    public function sql3($query) {
        if ($query == 'count') {
            $res = DB::table('student') -> count();
            var_dump($res);
            /*返回记录数：int(5)*/
        }

        elseif($query == 'max') {
            $res = DB::table('student') -> max('age');
            var_dump($res);
            /*返回最大年龄：int(112)*/
        }

        elseif($query == 'min') {
            $res = DB::table('student') -> min('age');
            var_dump($res);
            /*返回最小年龄：int(106)*/
        }

        elseif($query == 'avg') {
            $res = DB::table('student') -> avg('age');
            var_dump($res);
            /*返回平均年龄：string(8) "109.4000"*/
        }

        elseif($query == 'sum') {
            $res = DB::table('student') -> sum('age');
            var_dump($res);
            /*返回年龄总和：string(3) "547"*/
        }

    }



}