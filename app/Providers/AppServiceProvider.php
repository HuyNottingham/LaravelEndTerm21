<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){}

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        // if (!isset($_COOKIE['id'])) {
        //     return view('login');
        //     die();
        //     }
        // View::composer('client.*', function ($view) {
        //     $sex = Sex::all();
        //     $category = Category::all();
        //     $cart = CartView::where('user_id', $_COOKIE['id'])->get();

        //     $view->with('sex', $sex);
        //     $view->with('category', $category);
        //     $view->with('cart', $cart);
        // });
    }
}