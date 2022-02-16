<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Wishlist;
// use App\Models\UserView;
// use App\Models\Membership;
// use App\Models\MembershipRenewal;
// use App\Models\MembershipRegisFormat;

class UserController extends Controller{
    function index(){
        $user = User::all();
        return view('server.listUser', compact('user'));
        }


    function insert(Request $req){
        $model = new User();
        $model->fill($req->all());
        $model->password = md5(md5(md5(md5($model->password))));
        $msg='Thao tác thất bại, vui lòng thử lại!';
        if ($model->save())
            $msg='Thêm người dùng thành công !';
        return redirect()->route('user')->with('msg', $msg);
        }


    function get($id){
        $user = User::find($id);
        if (!$user)
            return "Hmm.. user not found";
        return view('server.adduser', compact('user'));
        }

    function update(Request $req){
        $model = User::find($req->id);
        $model->fill($req->all());
        $model->password = md5(md5(md5(md5($model->password))));
        $msg='Thao tác thất bại, vui lòng thử lại!';
        if ($model->save())
            $msg='Cập nhật thành công !';
        return redirect()->route('user')->with('msg', $msg);
        }


    function delete($id){
        // Bill::where('user_id', $id)
        //     ->delete();
        Order::where('user_id', $id)
            ->delete();
        Cart::where('user_id', $id)
            ->delete();
        Wishlist::where('user_id', $id)
            ->delete();
        $msg='Thao tác thất bại, vui lòng thử lại!';
        if (User::find($id)->delete())
            $msg='Xóa người dùng thành công !';
        return redirect()->back()->with('msg', $msg);
        }


    function login(Request $req){
        $msg='';
        if ($req->form_type == 'login') {
            $acc = User::where('email', $req->email)
                    ->where('password', md5(md5(md5(md5($req->password)))))
                    ->first();
            if ($acc==null)
                $msg='Tài khoản đăng nhập không đúng !';
            else {
                setcookie("id", $acc->id, time()+(86400*7), "/");
                return redirect()->route('home');
            }
        } elseif ($req->form_type == 'regis') {
            $model = new User();
            $model->email = $req->email;
            $model->password = md5(md5(md5(md5($req->password))));
            $model->name = $req->first_name + $req->last_name;
            if ($model->name == '')
                unset($model->name);
            if ($model->save())
                $msg='Tạo tài khoản thành công !';
            else
                $msg='Thao tác thất bại !';
        } elseif ($req->form_type == 'recover') {
            echo rand(0, 99999);
            return;
            // gửi thư số này, truyền lại để so sánh
        }
        return redirect()->back()->with('msg', $msg);
        }


        // function login(Request $req){
        //     $acc = User::where('email', $req->email)
        //             ->where('password', md5(md5(md5(md5($req->password)))))
        //             ->first();
        //     if ($acc==null)
        //         return redirect()->back()->with('msg', 'Tài khoản đăng nhập không đúng !');
        //     else {
        //         setcookie("id", $acc->id, time()+(86400*7), "/");
        //         return redirect()->route('home');
        //     }
        //     }
    
    
        // function regis(Request $req){
        //     return "vcl";
        //     $msg='';
        //     $model = new User();
        //     $model->fill($req->all());
        //     $model->password = md5(md5(md5(md5($req->password))));
        //     if ($model->save())
        //         $msg='Tạo tài khoản thành công !';
        //     else
        //         $msg='Thao tác thất bại !';
        //     return redirect()->back()->with('msg', $msg);
        //     }
    
    
        // function recover(Request $req){
            // echo rand(0, 99999);
            // return;
            // // gửi thư số này, truyền lại để so sánh
            // $msg='';
            // $model = new User();
            // $model->fill($req->all());
            // $model->password = md5(md5(md5(md5($req->password))));
            // if ($model->save())
            //     $msg='Tạo tài khoản thành công !';
            // else
            //     $msg='Thao tác thất bại !';
            // return redirect()->back()->with('msg', $msg);
            // }
}