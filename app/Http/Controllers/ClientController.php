<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NewProduct;
use App\Models\HotProduct;
use App\Models\CartView;
use App\Models\Cart;
use App\Models\ProductView;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\User;
use App\Models\Size;

// use App\Mail\Contact;
// use App\Mail\NewOrder;
// use Mail;

class ClientController extends Controller{
  function i(){
    return view('client.index');
    if (!isset($_COOKIE['id'])) {
      header('Location: login');
      die();
      }
    return view('client.index');
    $new_product = NewProduct::select('id', 'image', 'name', 'price')
          ->limit(6)
          ->get();
    $hot_product = HotProduct::select('id', 'image', 'name', 'price')
          ->limit(6)
          ->get();
    return view('client.index', compact('new_product', 'hot_product'));
    }


  function shop(Request $req){
    return view('client.shop');
    $products = ProductView::select('id', 'name', 'price', 'category', 'sex');
    // if($_GET!=null){
    //   if (isset($req->key))
    //     $products = $products->where('name', 'LIKE', '%'.$req->key.'%');
    //   if (isset($req->sex))
    //     $products = $products->where('sex', $req->sex);
    //   if (isset($req->more))
    //     $products = $products->where('price', '>', 1000000);
    //   else {
    //     if ($req->min!=null && $req->min>0)
    //       $products = $products->where('price', '>', $req->min*1000);
    //     if ($req->max!=null && $req->max>0)
    //       $products = $products->where('price', '<', $req->max*1000);
    //     }

    //   if (isset($req->category))
    //     $products = $products->where('category', $req->category);
    //   if (isset($req->size))
    //     $products = $products->where('size', $req->size);
    //   }
    $products = $products->paginate(12);

    // $hot_product = HotProduct::select('id', 'image', 'name', 'price')->get();
    // $size = Size::select('size')->get();
    // , 'hot_product', 'size'
    return view('client.shop', compact('products', 'req'));
    }


  function details($id){
    return view('client.product-details');
    $details = ProductView::find($id);
    $new_product = NewProduct::select('id', 'image', 'name', 'price')->limit(4)->get();
    return view('client.product-details', compact('details', 'new_product'));
    }


  function search(Request $req){
    return view('client.search');
    $products = ProductView::select('id', 'image', 'name', 'price')
                ->limit(6);
    return view('client.search', compact('products'));
    }


  function checkout(){
    return view('client.checkout');
    $user = User::select('name', 'email')
          ->where('id', $_COOKIE['id'])->first();
    return view('client.checkout', compact('user'));
  }


  function pay(Request $req){
    $msg='Xin l???i, thao t??c th???t b???i !';
    $order = new Order();
    if ($req->house!="")
      $order->address = $req->house .", ". $req->address;
    else
      $order->address = $req->address;
    $order->user_id = $_COOKIE['id'];
    $order->phone = $req->phone;
    $order->save();

    $order_id = DB::getPdo()->lastInsertId();
    $carts = CartView::select('product_id', 'price', 'quantity')
          ->where('user_id', $_COOKIE['id'])->get();
    foreach ($carts as $cart) {
      $model = new OrderDetails();
      $model->order_id = $order_id;
      $model->product_id = $cart->product_id;
      $model->price = $cart->price;
      $model->quantity = $cart->quantity;
      $model->save();
      }
    $mymail = 'huyletran117@gmail.com';
    $url = route('orderdetails',['id'=>$order_id]);
    Mail::to($mymail)->send(new NewOrder($url));
    if (Cart::where('user_id', $_COOKIE['id'])->delete()){
      $msg='?????t h??ng th??nh c??ng !\nCh??ng t??i s??? giao t???i qu?? kh??ch trong th???i gian s???m nh???t !';
      return redirect()->route('home')->with('msg', $msg);
      }
    return redirect()->back()->with('msg', $msg);
    }


  function contact(Request $req){
    $mymail = 'huyletran117@gmail.com';
    Mail::to($mymail)->send(new Contact($req));
      // thay 'send' b???ng 'queue' ????? ?????t v??o h??ng ch??? (ph???i c???u h??nh tr?????c khi d??ng)
    $msg='Ph???n h???i ???? ???????c g???i ??i.\nCh??ng t??i s??? x??? l?? n?? trong th???i gian s???m nh???t.\nTh??n ??i!';
    return redirect()->route('home')->with('msg', $msg);
    }
}