<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Eloquent  的增删改查

//列表路由
Route::get('book/list','Book\BookController@list');

//添加的路由
Route::match(['get', 'post'], '/book/add','Book\BookController@add');

//修改的路由
Route::match(['get', 'post'], '/book/edt/{id}', 'Book\BookController@edt')
    ->where('id','\d+');

// 删除的路由
Route::get('book/del/{id}','Book\BookController@del')
    ->where('id','\d+');
