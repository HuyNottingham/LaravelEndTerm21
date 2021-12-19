<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductView;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\Sex;
use App\Models\Brand;
use App\Models\OrderDetails;
use App\Models\Cart;
use App\Models\Wishlist;

class ProductController extends Controller{
    function index($title){
        if ($title=="Tất cả")
            $product = ProductView::all();
        else
            $product = ProductView::where('category', $title)->get();
        $title = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $title);
        $title = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $title);
        return view('server.tableProducts', compact('product', 'title'));
        }


    function add(){
        $category = Category::all();
        $sex = Sex::all();
        $size = Size::all();
        $brand = Brand::all();
        return view('server.addProduct', compact('category', 'sex', 'size', 'brand'));
        }

    function insert(Request $req){
        $model = new Product();
        $model->fill($req->all());
        // $model->price = $model->price/1000;
        $msg='Thêm sản phẩm mới thành công';


        $file=$_FILES["image"];
        $fileName = basename($file['name']);
        $targetFile = "img/product/".$fileName;
        $extension = pathinfo($targetFile,PATHINFO_EXTENSION);
        $listExtensions = array("jpg", "jpeg", "gif", "png", "jfif", "webp");

        if (!in_array($extension, $listExtensions))
            $msg = "Định dạng file '".$extension."' \nkhông phù hợp";
        elseif ($file["error"]>0)
            $msg = "Mã lỗi trả về: " . $file["error"];
        elseif (move_uploaded_file($file['tmp_name'], $targetFile)) {
            $model->image = $fileName;
            $model->save();
        }
        return redirect()->back()->with('msg', $msg);
        }


    function get($id){
        $product = Product::find($id);
        if (!$product)
            return "Hmm.. user not found";
        $category = Category::all();
        $size = Size::all();
        $sex = Sex::all();
        $brand = Brand::all();
        return view('server.addProduct', compact('product', 'category', 'size', 'sex', 'brand'));
        }

    function update(Request $req){
        $model = Product::find($req->id);
        // $model->fill($req->all());
        $msg='Thao tác thất bại, vui lòng thử lại!';

        if (isset($req->image)) {
            // return 'co';
            $file=$_FILES["image"];
            $fileName = basename($file['name']);
            $targetFile = "img/product/".$fileName;
            $extension = pathinfo($targetFile,PATHINFO_EXTENSION);
            $listExtensions = array("jpg", "jpeg", "gif", "png", "jfif", "webp");

            if (!in_array($extension, $listExtensions))
                $msg= "Định dạng file '".$extension."' \nkhông phù hợp";
            elseif ($file["error"]>0)
                $msg= "Mã lỗi trả về: " . $file["error"];
            elseif (move_uploaded_file($file['tmp_name'], $targetFile)) {
                $model->fill($req->all());
                $model->image = $fileName;
            }
        } else {
        // $req->image = "vcl";
        // dd($req->image);
        // return;
            $req->image = $model->image;
            $model->fill($req->all());
            }

        if ($model->save())
            $msg='Cập nhật thành công !';
        return redirect()->back()->with('msg', $msg);
        }


    function delete($id){
        OrderDetails::where('product_id', $id)
                ->delete();
        Cart::where('product_id', $id)
                ->delete();
        Wishlist::where('product_id', $id)
                ->delete();
        Product::find($id)->delete();
        return redirect()->back()->with('msg', 'Xóa thành công!');
        }
}