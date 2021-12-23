<?php
use Illuminate\Support\Facades\Route;


Route::get('/', "ServerController@i")->name('home');
Route::fallback(function () {
    return "404 :)";
});

Route::get('ajax',function() {
    return view('login');});
Route::post('/getmsg','ProductController@index');

Route::get('login',function() {
    return view('login');})->name('login');


// - - - - - Server - - - - -
    Route::get('admin', "ServerController@i")->name('admin');

    Route::get('adminlogin', function(){
        return view('server.login');})->name('adminlogin');
    Route::post('adminlogin', 'ServerController@login');
    Route::get('adminlogout', 'ServerController@logout')->name('adminlogout');
    /**/Route::post('adminforget', 'ServerController@forget');


    // - - User - -
    Route::get('user', 'UserController@index')->name('user');
    Route::get('adduser', function (){
        return view('server.addUser');})->name('adduser');
    Route::post('adduser', 'UserController@insert');
    Route::get('updateuser/{id}', 'UserController@get');
    Route::post('updateuser/{id}', 'UserController@update');
    Route::get('deleteuser/{id}', 'UserController@delete');


    // - - Product - -
    Route::get('tableproduct/{title}', 'ProductController@index')->name('tableproduct');
    Route::get('addproduct', 'ProductController@add')->name('addproduct');
    Route::post('addproduct', 'ProductController@insert');
    Route::get('updateproduct/{id}', 'ProductController@get');
    Route::post('updateproduct/{id}', 'ProductController@update');
    Route::get('deleteproduct/{id}', 'ProductController@delete');


    // - - Order & Bill - -
    Route::get('bill', 'BillController@index')->name('bill');
    Route::get('order', 'OrderController@index')->name('order');
    Route::get('updateorder/{id}/{status}', 'OrderController@update');
    Route::get('deleteorder/{id}', 'OrderController@delete');
    Route::get('orderdetails/{id}', 'OrderController@details')->name('orderdetails');
    Route::get('billdetails/{id}', 'BillController@details')->name('billdetails');
    Route::get('deleteorderdetails/{id}', 'OrderController@deletedetails');
    // /**/Route::get('updateorderdetails/{id}', 'OrderController@updatedetails');

    /**/Route::get('importOrder', function (){
        return view('server.importOrder');})->name('importorder');
    /**/Route::get('importBill', function (){
        return view('server.importBill');})->name('importbill');
    // Route::get('importOrder', 'ImportOrderController@importorder')->name('importorder');
    // Route::get('importBill', 'ImportOrderController@importorder')->name('importbill');
    // Route::get('updateimportorder/{id}', 'ImportOrderController@get');
    // Route::post('updateimportorder/{id}', 'ImportOrderController@update');
    // Route::get('deleteimportorder/{id}', 'ImportOrderController@delete');


    // - - Category - -
    Route::get('category', 'CategoryController@index')->name('category');
    Route::post('category', 'CategoryController@insert');
    Route::post('updatecategory', 'CategoryController@update');
    Route::post('deletecategory', 'CategoryController@delete');


    // - - Staff - -

    // giong user nhung check quyen

    // - - Partner - -



// - - - - - Client - - - - -