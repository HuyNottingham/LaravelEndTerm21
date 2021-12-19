<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\WishlistView;
use App\Models\CartView;
use App\Models\Sex;
use App\Models\Category;

class WishlistController extends Controller{
    function i(){
        $wishlist = WishlistView::where('user_id', $_COOKIE['id'])
                ->get();
        $cart = CartView::where('user_id', $_COOKIE['id'])
                ->get();
        $sex = Sex::all();
        $category = Category::all();
        return view('client.wishlist', compact('wishlist', 'cart', 'sex', 'category'));
        }


    function add($id){
        $wl = Wishlist::where('user_id',$_COOKIE['id'])
                ->where('product_id', $id)
                ->get();
        if ($wl->count()==0) {
            $model = new Wishlist();
            $model->user_id = $_COOKIE['id'];
            $model->product_id = $id;
            $model->save();
            return redirect()->back()->with('msg', 'Đã thêm sản phẩm vào Wishlist !');
        }
        return redirect()->back();
        }


    function delete($id){
        Wishlist::find($id)->delete();
        return redirect()->back();
        }
}