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
route::get('/login','App\Http\Controllers\Logincontroller@index')->name('admin.login');
route::post('/login/store','App\Http\Controllers\Logincontroller@login')->name('admin.login.store');
route::get('/logout','App\Http\Controllers\Logincontroller@logout')->name('logout');

route::group(['middleware'=>'adminLoginAuth'],function (){

route::get('/','App\Http\Controllers\homecontroller@index')->name('Dashbord');
//add employee
route::group(['as'=>'emp.','prefix'=>'emp/'],function (){
   route::get('create','App\Http\Controllers\Employee@create')->name('create');
   route::post('store','App\Http\Controllers\Employee@store')->name('store');
    route::get('index','App\Http\Controllers\Employee@index')->name('index');

});
//Attendance
route::group(['as'=>'Attendance.','prefix'=>'Attendance/'],function (){
    route::get('create','App\Http\Controllers\Attendance@create')->name('create');
    route::post('store','App\Http\Controllers\Attendance@store')->name('store');
    route::get('delete/{id}','App\Http\Controllers\Attendance@delete')->name('delete');
});

//setting
route::group(['as'=>'setting.','prefix'=>'setting/'],function (){
    route::get('create','App\Http\Controllers\Setting@create')->name('create');
    route::post('store','App\Http\Controllers\Setting@store')->name('store');
});

//salary
route::group(['as'=>'salary.','prefix'=>'salary/'],function (){
    route::get('index','App\Http\Controllers\Salary@index')->name('index');
    route::get('create','App\Http\Controllers\Salary@create')->name('create');
    route::get('inovice/{employee_id}/{year}/{month}','App\Http\Controllers\Salary@invoice')->name('invoice');
    route::post('store','App\Http\Controllers\Salary@store')->name('store');
    route::get('delete/{id}','App\Http\Controllers\Salary@delete')->name('delete');

});
//companyAtts
route::group(['as'=>'companyAtts.','prefix'=>'companyAtts/'],function (){
    route::get('create','App\Http\Controllers\companyAtts@create')->name('create');
    route::post('store','App\Http\Controllers\companyAtts@store')->name('store');
    route::get('delete/{id}','App\Http\Controllers\companyAtts@delete')->name('delete');

});
    route::group(['as'=>'product.','prefix'=>'product/'],function (){
        route::get('create','App\Http\Controllers\ProductController@create')->name('create');
        route::post('store','App\Http\Controllers\ProductController@store')->name('store');
        route::get('delete/{id}','App\Http\Controllers\ProductController@delete')->name('delete');
        route::get('Edit/{id}','App\Http\Controllers\ProductController@Edit')->name('Edit');
        route::post('update/{id}','App\Http\Controllers\ProductController@update')->name('update');


        route::get('search','App\Http\Controllers\ProductController@search')->name('search');
        route::get('save','App\Http\Controllers\ProductController@save')->name('save');


    });
});//end middelware group
