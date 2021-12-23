<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\SalesView;
use App\Models\StaffView;
use App\Models\StaffSalesView;
// use App\Models\Staff;


class ServerController extends Controller{
    function i(){
        $users = User::count('id');
        $products = Product::sum('quantity');
        $orders = Order::count('id');
        $ordersdetails = OrderDetails::sum('quantity');
        $sales = SalesView::all();
        $staff = StaffSalesView::select('avatar', 'name', 'position', 'birthday', 'address', 'sales')->get();
        // 'id', 
        // echo ($staff[0]->image==NULL) ? 'default/avatar.png' : 'staff/'.$row->image;
        // return;
        return view('server.index', compact('users', 'products', 'orders', 'ordersdetails', 'sales', 'staff'));
        // return view('server.index');
        }


    function login(Request $req){
        // $model->password = md5(md5(md5(md5($req->password))));
        $staff = StaffView::select('id', 'email', 'avatar', 'name', 'position')
                ->where('email', $req->email)
                // ->where('password', $req->password)
                ->where('password', md5(md5(md5(md5($req->password)))))
                ->first();
        if ($staff==null)
            return redirect()->back()->with('msg', 'Tài khoản đăng nhập không đúng !');
        else {
            $msg='Thao tác thất bại !';
            setcookie("admin_id", $staff->id, time()+(86400*30), "/");
            setcookie("admin_name", $staff->name, time()+(86400*30), "/");
            if ($staff->avatar==null)
                $staff->avatar="../default/avt.png";
            setcookie("admin_avatar", $staff->avatar, time()+(86400*30), "/");
            setcookie("admin_email", $staff->email, time()+(86400*30), "/");
            setcookie("admin_position", $staff->position, time()+(86400*30), "/");
            return redirect()->route('admin');
            }
        }


    function forget(Request $req){
        echo "tôi chưa phát triển phần này :v";
        // nhận về email
        // gửi 1 mã 6 số random về mail
        // truyền + so sánh
        // mã khớp thì cho đặt lại mk
        }


    function logout(){
        setcookie("admin_id", "", time()-60, "/","", 0);
        return redirect()->route('adminlogin');
        }
}