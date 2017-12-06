<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('1117a', function (){
    return 'Hello World';
});

Route::post('1117b', function (){
    return 'Hello World2';
});

Route::match(['get', 'post'], '1117c', function (){
    return 'multy1';
});

Route::any('1117d', function (){
    return 'multy2';
});

Route::get('1117e/{id}', function ($id) {
    return 'User-' . $id;
});

Route::get('1117e/{name?}', function ($name="jack") {
    return 'Doctor-' . $name;
});

Route::get('1117f/{name?}', function ($name="jack") {
    return 'Mater-' . $name;
})->where('name', '[A-Za-z]+');

Route::get('1117g/{id}/{name?}', function ($id, $name="jack") {
    return 'id: ' .$id . '   name: ' . $name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);


// 路由别名
Route::get('1117h/member-center', ['as' => 'center', function() {
    //return 'member center';
    return route('center');
}]);

// 路由群组
Route::group(['prefix' => '1117i'], function (){
    Route::get('user', function (){
        return 'user-info';
    });
    Route::get('member', function (){
        return 'member-info';
    });
});


// 路由中输出视图
Route::get('1118a', function (){
    return view('welcome');
});

Route::get('1118b/info', 'C1118bController@info');


Route::get('1118b/info2', ['uses' => 'C1118bController@info2']);


Route::any('1118b/info3', ['uses' => 'C1118bController@info3']);


Route::match(['get', 'post'], '1118b/info4', ['uses' => 'C1118bController@info4']);


//路由别名
Route::any('1118b/info5', [
    'as' => '1118b_info5',
    'uses' => 'C1118bController@info5'
]);

Route::any('1118b/info6', [
    'uses' => 'C1118bController@info6'
]);


//参数绑定
Route::any('1118b/info7/{id}', [
    'uses' => 'C1118bController@info7'
]) -> where(['id' => '[0-9]+']);


Route::any('1118b/info8', [
    'uses' => 'C1118bController@info8'
]);

Route::any('1118b/info9', [
    'uses' => 'C1118bController@info9'
]);

Route::any('1118b/info10', [
    'uses' => 'C1118bController@info10'
]);

Route::any('1118b/info11', [
    'uses' => 'C1118bController@info11'
]);

Route::any('1118b/info12', [
    'uses' => 'C1118bController@info12'
]);


Route::any('1118c/sql1/{query}', [
    'uses' => 'C1118cController@sql1'
]);

Route::any('1118c/sql2/{query}', [
    'uses' => 'C1118cController@sql2'
]);

Route::any('1118c/sql3/{query}', [
    'uses' => 'C1118cController@sql3'
]);


//ORM
Route::any('1119a/sql1/{query}', [
    'uses' => 'C1119aController@sql1'
]);

//ORM
Route::any('1119a/sql2/{query}', [
    'uses' => 'C1119aController@sql2'
]);

//ORM
Route::any('1119a/sql3/{query}', [
    'uses' => 'C1119aController@sql3'
]);

//ORM
Route::any('1119a/sql4/{query}', [
    'uses' => 'C1119aController@sql4'
]);


Route::any('1119b/blade/{query}', [
    'uses' => 'C1119bController@blade'
]);


Route::any('1119b/grammar/{query}', [
    'uses' => 'C1119bController@grammar'
]);


//html class
Route::any('1120a/html/{q}', [
    'uses' => 'C1120aController@html'
]);


//jquery
Route::any('w3/jquery/{q}', [
    'uses' => 'W3Controller@jquery'
]);

//jquery
Route::any('w3/jquery_http/{q}', [
    'uses' => 'W3Controller@jquery_http'
]);

//css
Route::any('w3/css/{q}', [
    'uses' => 'W3Controller@css'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
