<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderView;
use App\Models\Status;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\OrderDetailsView;
// use App\Models\ImportOrderView;

class OrderController extends Controller{
    function index(){
        $order = OrderView::all();
        $status = Status::all();
        return view('server.order', compact('order', 'status'));
        }


    function details($id){
        $order = OrderView::find($id);
        if ($order==null)
            return "yo wtf ?";
        $details = OrderDetailsView::where('order_id', $id)->get();
        $status = Status::all();
        //return dd($details);
        return view('server.orderdetails', compact('order','details', 'status'));
        }


    function update($id, $status){
        // echo Order::max('id');
        // return;
        $model = Order::find($id);
        if ($model==null)
            return "yo wtf ?";
        $model->status=$status;
        $model->save();
        return redirect()->back();
        }


    function delete($id){
        OrderDetails::where('order_id', $id)
            ->delete();
        Order::find($id)->delete();
        return redirect()->back();
        }


    function deletedetails($id){
        $model = OrderDetails::find($id)->delete();
        return redirect()->back();
        }




    // function bill(){
    //     $bill = BillView::all();
    //     return view('bill', compact('bill'));
    //     }

    // function deleteBill($id){
    //     Bill::find($id)->delete();
    //     return redirect()->back()->with('msg', 'Xóa thành công !');
    //     }
    // function importorder(){
    //     $order = ImportOrder::all();
    //     // $status = Status::all();
    //     return view('server.importOrder', compact('order'));
    //     }
}