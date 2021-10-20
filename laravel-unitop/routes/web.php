<?php

use Illuminate\Support\Facades\Route;

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


// Định tuyến cơ bản

Route::get('/post', function(){
    return "Đây là trong bài viết";
});

Route::get('/admin/product',function(){
    return "Trang quản lý sản phẩm";
});

// Định tuyến có tham số

Route::get('post/{id}', function($id){
    return $id;
});

Route::get('post/{cat_id}/page/{page}', function($cat_id,$page){
    return $cat_id.'-'.$page;
});