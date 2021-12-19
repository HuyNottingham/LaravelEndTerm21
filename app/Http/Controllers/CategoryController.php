<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryView;
use App\Models\Category;

class CategoryController extends Controller{
    function index(){
        $cate = CategoryView::all();
        return view('server.category', compact('cate'));
        }


    function insert(Request $req){
        $model = new Category();
        $model->category = $req->category;
        $msg = "Xin lỗi, thao tác thất bại";
        if ($model->save())
            $msg = "Thêm mới thành công !";
        return redirect()->back()->with('msg', $msg);
    }


    function update(Request $req){
        $model = Category::find($req->id);
        $model->category = $req->category;
        $msg = "Xin lỗi, thao tác thất bại";
        if ($model->save())
            $msg = "Cập nhật thành công !";
        return redirect()->back()->with('msg', $msg);
    }


    function delete(Request $req){
        $cate = CategoryView::find($req->id);
        if ($cate->quantity>0)
            $msg = "Thể loại này đã có sản phẩm, bạn không thể xóa!";
        else {
            if (Category::find($req->id)->delete())
                $msg = "Xóa thành công !";
            else $msg = "Xin lỗi, thao tác thất bại";
        }
        return redirect()->back()->with('msg', $msg);
    }
}