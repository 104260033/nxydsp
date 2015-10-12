<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('abc1', function () {
     var_dump(config('mysql'));
});
Route::get('/test/home','test\TestController@home');
Route::get('admin/list','admin\AdminController@index');
Route::get('admin/list1','admin\AdminController@index1');
Route::get('admin/f',function(){
    return 'fff';
});
//Route::get('articles','ArticlesController@index');
//Route::get('articles/create','ArticlesController@create');
//Route::get('articles/{id}','ArticlesController@show');
//Route::post('articles','ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit');
Route::resource('articles','ArticlesController');



//用户系统
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
