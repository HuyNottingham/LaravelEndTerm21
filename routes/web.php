<?php
use Illuminate\Support\Facades\Route;


Route::fallback(function() {
    return view('404');});

Route::get('ajax',function() {
    return view('login');});
Route::post('/getmsg','ProductController@index');

// Route::get('login',function() {
//     return view('login');})->name('login');



// - - - - - Client - - - - -
    Route::get('/', function() {
        return view('client.index');})->name('home');
    Route::get('login', function() {
        return view('client.login');})->name('login');

    Route::post('login', function() {});
    Route::get('regis', function() {
        return view('client.regis');})->name('regis');
    Route::post('regis', function() {})->name('regis');
    Route::post('recover', function() {})->name('recover');
    Route::get('logout', function (){
        // setcookie("id", "", time()-60, "/","", 0);
        return redirect()->route('login');} )->name('logout');


    Route::get('shop', function() {
        return view('client.shop');})->name('shop');
    /**/Route::get('search', function() {
        return view('client.search');})->name('search');
    Route::get('productdetails', function() {
        return view('client.product-details');})->name('productdetails');

    Route::get('cart', function() {
        return view('client.cart');})->name('cart');
    Route::get('wishlist', function() {
        return view('client.wishlist');})->name('wishlist');
    Route::get('checkout', function() {
        return view('client.checkout');})->name('checkout');

    Route::get('contact', function() {
        return view('client.contact');})->name('contact');
    Route::get('size-guide', function() {
        return view('client.size-guide');})->name('size-guide');
    Route::get('privacy-policy', function() {
        return view('client.privacy-policy');})->name('privacy-policy');
    Route::get('terms-conditions', function() {
        return view('client.terms-conditions');})->name('terms-conditions');

    Route::get('blog', function() {})->name('blog');




    Route::get('acc', function() {
        return view('client.acc');})->name('account');
    // Route::get('acc2', function() {
    //     return view('client.acc2');})->name('acc2');



    // Support
    Route::get('cartchange', function() {
        return view('client.cart_change.js_id=');})->name('cartchange');
    Route::get('shop-gift_wrapping', function() {
        return view('client.shop-gift_wrapping');})->name('shop-gift_wrapping');
    Route::get('filter', function() {
        return view('client.shop-filter');})->name('filter');
    Route::get('header-mobi', function() {
        return view('layout.header-mobi');})->name('menu-mn');
    Route::get('view-login', function() {
        return view('client.view-login');})->name('view-login');
    Route::get('cart-viewjs', function() {
        return view('client.cart-viewjs');})->name('cart-viewjs');
    Route::get('cart-viewship', function() {
        return view('client.cart-viewship');})->name('cart-viewship');
    Route::post('cart-update-js', function() {
        return view('client.cart-update-js');})->name('cart-update-js');
    Route::get('cart-update-js', function() {
        return view('client.cart-update-js');});
    Route::get('search-pp_sl', function() {
        return view('client.search-pp_sl');})->name('menu-pp_sl');
    Route::get('search-pp_pr', function() {
        return view('client.search-pp_pr');})->name('menu-pp_pr');
    Route::get('search-pp', function() {
        return view('client.search-pp');})->name('menu-pp');
    Route::get('products-view=imgtrue', function() {
        return view('client.products-view=imgtrue');})->name('products-view=imgtrue');
    Route::get('products-view=imgfalse', function() {
        return view('client.products-view=imgfalse');})->name('products-view=imgfalse');
    Route::get('products-view=imgtrue2', function() {
        return view('client.products-view=imgtrue2');})->name('products-view=imgtrue2');
    Route::get('products-view=swtrue', function() {
        return view('client.products-view=swtrue');})->name('products-view=swtrue');
    Route::get('products-view=swfalse', function() {
        return view('client.products-view=swfalse');})->name('products-view=swfalse');
    Route::get('products-view=js_ppr', function() {
        return view('client.products-view=js_ppr');})->name('products-view=js_ppr');
    Route::get('products-recommen', function() {
        return view('client.products-recommen');})->name('products-recommen');
    Route::get('products-search', function() {
        return view('client.products-search-undo_recommen');})->name('products-search');
    Route::get('shop-page=2', function() {})->name('shop-page=2');
    Route::get('shop-page=2&section_id=1581505838591', function() {
        return view('client.shop-page=2');});
    Route::get('shop-page=3', function() {})->name('shop-page=3');
    Route::get('shop-page=3&section_id=1581505838591', function() {
        return view('client.shop-page=3');});
    // Route::get('shop-page=4', function() {})->name('shop-page=4');
    // Route::get('shop-page=4&section_id=1581505838591', function() {
    //     return view('client.shop-page=4');});
    Route::get('shop-q=1_bid', function() {
        return view('client.shop-q=1_bid');})->name('shop-q=1_bid');
    Route::get('blog-page=2', function() {})->name('blog-page=2');
    Route::get('blog-page=2&section_id=1581508031759', function() {
        return view('client.blog-page=2');});

    Route::get('quick_shop', function() {
        return view('client.quick_shop');})->name('quick_shop');
    Route::get('quick_view', function() {
        return view('client.quick_view');})->name('quick_view');




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
//