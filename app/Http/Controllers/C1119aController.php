<?php
/**
 * User:  zxwtry
 * File:  C1119aController.php
 * Date:  2017/11/19
 * Time:  8:53
 */


namespace  App\Http\Controllers;

/*
    重点是：ORM

    Eloquent ORM 是 laravel自带的

    每个数据表都有一个与之相对应的"模型(Model)"
    用于和数据表交互


 */

use App\Student;

class C1119aController extends Controller {

    //使用ORM查询
    public function sql1($query) {
        if ($query == 'all') {
            $students = Student::all();
            dd($students);
            /*
             Collection {#196 ▼
                  #items: array:5 [▼
                    0 => Student {#197 ▶}
                    1 => Student {#198 ▶}
                    2 => Student {#199 ▶}
                    3 => Student {#200 ▶}
                    4 => Student {#201 ▶}
                  ]
               }
             */

        }

        elseif ($query == 'find') {
            $students = Student::find(1);
            dd($students);
            /*
                Student {#193 ▼
                  #table: "student"
                  #primaryKey: "id"
                  #connection: null
                  #perPage: 15
                  +incrementing: true
                  +timestamps: true
                  #attributes: array:6 [▶]
                  #original: array:6 [▶]
                  #relations: []
                  #hidden: []
                  #visible: []
                  #appends: []
                  #fillable: []
                  #guarded: array:1 [▶]
                  #dates: []
                  #dateFormat: null
                  #casts: []
                  #touches: []
                  #observables: []
                  #with: []
                  #morphClass: null
                  +exists: true
                  +wasRecentlyCreated: false
                }
             */
        }

        elseif ($query == 'findOrFail') {
            $students = Student::findOrFail(100);
            dd($students);
            /*
                主键不存在会报错
                }
             */
        }

        elseif ($query == 'get') {
            $students = Student::get();
            dd($students);
            /*
                Collection {#196 ▼
                  #items: array:5 [▼
                    0 => Student {#197 ▶}
                    1 => Student {#198 ▶}
                    2 => Student {#199 ▶}
                    3 => Student {#200 ▶}
                    4 => Student {#201 ▶}
                  ]
                }
             */
        }

        elseif ($query == 'first') {
            $students = Student::
            where('id', ">=", '2')
            ->orderBy('age')
            ->first();
            dd($students);
            /*
                Student {#193 ▼
                  #table: "student"
                  #primaryKey: "id"
                  #connection: null
                  #perPage: 15
                  +incrementing: true
                  +timestamps: true
                  #attributes: array:6 [▶]
                  #original: array:6 [▶]
                  #relations: []
                  #hidden: []
                  #visible: []
                  #appends: []
                  #fillable: []
                  #guarded: array:1 [▶]
                  #dates: []
                  #dateFormat: null
                  #casts: []
                  #touches: []
                  #observables: []
                  #with: []
                  #morphClass: null
                  +exists: true
                  +wasRecentlyCreated: false
                }
             */
        }

        elseif ($query == 'chunk') {
            echo '<pre>';
            Student::chunk(2, function ($students) {
                var_dump($students);
            });
        }

        /*
            聚合函数
         */
        elseif ($query == 'count') {
            $res = Student::count();
            var_dump($res);
            /*int(5)*/
        }

        elseif ($query == 'max') {
            $res = Student::
            where('id', '>=', '3')
            ->max('age');
            var_dump($res);
            /*int(112)*/
        }

    }


    //使用模型，新增数据
    public function sql2($query) {

        if ($query == 'time_save') {
            $student =  new Student();
            $student->name = 'zxwtry11';
            $student->age = 111;
            $res = $student->save();
            dd($res);
        }

        elseif ($query == 'time_query') {
            echo '<pre>';
            $times = Student::pluck('updated_at');
            var_dump($times);
        }

        elseif ($query == 'time_query2') {
            $student = Student::find(6);
            //echo $student->created_at;
            echo date('Y-m-d H:i:s', $student->created_at);
        }

        //新增数据
        elseif ($query == 'create') {
            $student = Student::create(
                ['name' => 'zxwtry12', 'age' => 112]
            );
            //echo '<pre>';
            //var_dump($student);
            dd($student);
            /*
                Student {#184 ▼
                  #table: "student"
                  #primaryKey: "id"
                  #fillable: array:2 [▶]
                  +timestamps: true
                  #connection: null
                  #perPage: 15
                  +incrementing: true
                  #attributes: array:5 [▶]
                  #original: array:5 [▶]
                  #relations: []
                  #hidden: []
                  #visible: []
                  #appends: []
                  #guarded: array:1 [▶]
                  #dates: []
                  #dateFormat: null
                  #casts: []
                  #touches: []
                  #observables: []
                  #with: []
                  #morphClass: null
                  +exists: true
                  +wasRecentlyCreated: true
                }
             */
        }


        //新增数据
        //firstOrCreate
        elseif ($query == 'firstOrCreate') {
            $student = Student::
                firstOrCreate(
                    ['name' => 'zxwtry13']
            );
            dd($student);
            /*
                Student {#196 ▼
                  #table: "student"
                  #primaryKey: "id"
                  #fillable: array:2 [▶]
                  #guarded: []
                  +timestamps: true
                  #connection: null
                  #perPage: 15
                  +incrementing: true
                  #attributes: array:6 [▼
                    "id" => 1
                    "name" => "zxwtry6"
                    "age" => 106
                    "sex" => 10
                    "created_at" => 0
                    "updated_at" => 0
                  ]
                  #original: array:6 [▶]
                  #relations: []
                  #hidden: []
                  #visible: []
                  #appends: []
                  #dates: []
                  #dateFormat: null
                  #casts: []
                  #touches: []
                  #observables: []
                  #with: []
                  #morphClass: null
                  +exists: true
                  +wasRecentlyCreated: false
                }
             */

            /*
                Student {#185 ▼
                  #table: "student"
                  #primaryKey: "id"
                  #fillable: array:2 [▶]
                  #guarded: []
                  +timestamps: true
                  #connection: null
                  #perPage: 15
                  +incrementing: true
                  #attributes: array:4 [▼
                    "name" => "zxwtry13"
                    "updated_at" => "1511055235"
                    "created_at" => "1511055235"
                    "id" => 9
                  ]
                  #original: array:4 [▶]
                  #relations: []
                  #hidden: []
                  #visible: []
                  #appends: []
                  #dates: []
                  #dateFormat: null
                  #casts: []
                  #touches: []
                  #observables: []
                  #with: []
                  #morphClass: null
                  +exists: true
                  +wasRecentlyCreated: true
                }
             */
        }


        //firstOrNew
        //如果数据库中存在，返回数据
        //如果数据库中不在，新建一个Student对象
        //如果需要将对象存储到数据库中，需要调用对象的save()
        elseif ($query == 'firstOrNew') {
            $student = Student::
            firstOrNew(
                ['name' => 'zxwtry14']
            );
            $student->save();
            dd($student);
        }

    }

    //使用模型，修改数据
    //使用模型批量更新数据
    //结合查询语句，批量更新
    public function sql3($query) {

        if ($query == 'save') {
            $student = Student::find(3);
            $student->name = "zxwtry_10_new";
            $res = $student->save();
            var_dump($res);
            /*
             * 修改的时候，除了修改更改的字段之外
             * 还会自动维护时间戳
             * bool(true)
             */
        }

        elseif ($query == 'update') {
            $res = Student::where('id', '<', 4)
            ->update(['age' => 199]);
            var_dump($res);
            /*修改的行数*/
        }

    }



    //使用模型，删除数据
    //通过模型删除
    //通过主键删除
    //根据指定条件删除
    public function sql4($query) {
        //通过模型删除
        if ($query == 'model') {
            $student = Student::find(3);
            $res = $student->delete();
            var_dump($res);
            /*删除成功bool(true)*/
        }

        //通过主键删除
        elseif ($query == 'primarykey') {
            $res = Student::destroy(5);
            var_dump($res);
            /*返回删除的行数int(1)*/
        }


        //通过主键删除
        elseif ($query == 'primarykey') {
            $res = Student::destroy(5);
            var_dump($res);
            /*返回删除的行数int(1)*/
        }

        //通过主键删除
        elseif ($query == 'primarykey2') {
            $res = Student::destroy([6, 7]);
            var_dump($res);
            /*返回删除的行数int(2)*/
        }


        //删除指定条件的数据
        elseif ($query == 'whereRaw') {
            $res = Student::whereRaw('id > ? and id < ?', [7, 10])
                ->delete();
            var_dump($res);
            /*返回删除的行数int(2)*/
        }




    }

}
