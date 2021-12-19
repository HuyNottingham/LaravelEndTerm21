<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartView;
use App\Models\Sex;
use App\Models\Category;

class CartController extends Controller{
    function i(){
        $cart = CartView::where('user_id', $_COOKIE['id'])
                ->get();
        $sex = Sex::all();
        $category = Category::all();
        return view('client.cart', compact('cart', 'sex', 'category'));
        }


    function add($id){
        $cart = Cart::where('user_id', $_COOKIE['id'])
                ->where('product_id', $id)
                ->first();
        if ($cart==null) {
            $model = new Cart();
            $model->user_id = $_COOKIE['id'];
            $model->product_id = $id;
            $model->save();
        } else {
            $cart->quantity+=1;
            $cart->save();
            }
        return redirect()->back()->with('msg', 'Đã thêm sản phẩm vào Cart !');
        }


    function delete($id){
        Cart::find($id)->delete();
        return redirect()->back();
        }


    function update(){
        for ($i=1; $i<count($_POST); $i+=2) {
            $cart = Cart::find($_POST[$i]);
            $cart->quantity = $_POST[$i+1];
            $cart->save();
            }
        return redirect()->back()->with('msg', 'Cập nhật thành công');
        }
}