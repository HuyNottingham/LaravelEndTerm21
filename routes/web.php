<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('server.index');})->name('home');

Route::get('ajax',function() {
    return view('welcome');});
Route::post('/getmsg','ProductController@index');


Route::get('login', function () {return view('server.login');});

// - - - - - Admin - - - - -
    Route::get('admin', "Controllerr@admin")->name('admin');


//     // - - User - -
    Route::get('user', 'UserController@index')->name('user');
    Route::get('adduser', function (){
        return view('server.addUser');})->name('adduser');
    Route::post('adduser', 'UserController@insert');
    Route::get('updateuser/{id}', 'UserController@get');
    Route::post('updateuser/{id}', 'UserController@update');
    Route::get('deleteuser/{id}', 'UserController@delete');


//     // - - Product - -
    Route::get('tableproduct/{title}', 'ProductController@index')->name('tableproduct');
    Route::get('addproduct', 'ProductController@add')->name('addproduct');
    Route::post('addproduct', 'ProductController@insert');
    Route::get('updateproduct/{id}', 'ProductController@get');
    Route::post('updateproduct/{id}', 'ProductController@update');
    Route::get('deleteproduct/{id}', 'ProductController@delete');


//     // - - Order & Bill - -
    Route::get('bill', 'BillController@index')->name('bill');
    Route::get('order', 'OrderController@index')->name('order');
//     Route::get('updateorder/{id}/{status}', 'OrderController@update');
//     Route::get('deleteorder/{id}', 'OrderController@delete');
    Route::get('orderdetails/{id}', 'OrderController@details')->name('orderdetails');
    Route::get('billdetails/{id}', 'BillController@details')->name('billdetails');
//     Route::get('deleteorderdetails/{id}', 'OrderController@deletedetails');
//     /**/Route::get('updateorderdetails/{id}', 'OrderController@updatedetails');

    /**/Route::get('importOrder', function (){
        return view('server.importOrder');})->name('importorder');
    /**/Route::get('importBill', function (){
        return view('server.importBill');})->name('importbill');


//     // // - - Category - -
    Route::get('category', 'CategoryController@index')->name('category');
    Route::post('category', 'CategoryController@insert');
    Route::post('updatecategory', 'CategoryController@update');
    Route::post('deletecategory', 'CategoryController@delete');