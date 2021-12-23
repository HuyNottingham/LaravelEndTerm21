<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

// use App\Models\Sex;
// use App\Models\Category;
// use App\Models\CartView;

class AppServiceProvider extends ServiceProvider{
    public function register(){}

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