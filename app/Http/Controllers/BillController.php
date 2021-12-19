<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillView;
use App\Models\OrderDetailsView;

class BillController extends Controller{
    function index(){
        $bill = BillView::all();
        return view('server.bill', compact('bill'));
        }

    function details($id){
        $bill = BillView::find($id);
        $details = OrderDetailsView::where('order_id', $id)->get();
        return view('server.billdetails', compact('bill','details'));
        }
}