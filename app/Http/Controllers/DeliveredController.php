<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SupplyDelivered;

class DeliveredController extends Controller
{
    public function create()
    {
        
        $stock_nos = DB::table('SupplyMain')->pluck('stock_no');
        return view('pages.supplies.dcreate', ['stock_nos' => $stock_nos]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'delivery_date' => 'required|date',
            'actual_delivery_date' => 'required|date',
            'acceptance_date' => 'required|date',
            'iar_no' => 'required|max:255',
            'item_no' => 'required|numeric',
            'description' => 'required|max:255',
            'unit' => 'required|max:255',
            'dr_no' => 'required|max:255',
            'check_no' => 'required|max:255',
            'po_no' => 'required|max:255',
            'po_date' => 'required|date',
            'po_amount' => 'required|float',
            'pr_no' => 'required|max:255',
            'price_per_purchase_request' => 'required|float',
            'bur'=>'required|max:255'

        ]);

        $supply = new SupplyDelivered;
        $supply->delivery_date = $request->input('delivery_date');
        $supply->actual_delivery_date = $request->input('actual_delivery_date');
        $supply->acceptance_date = $request->input('acceptance_date');
        $supply->iar_no = $request->input('iar_no');
        $supply->item_no = $request->input('item_no');
        $supply->description = $request->input('description');
        $supply->unit = $request->input('unit');
        $supply->dr_no = $request->input('dr_no');
        $supply->check_no = $request->input('check_no');
        $supply->po_no = $request->input('po_no');
        $supply->po_date = $request->input('po_date');
        $supply->po_amount = $request->input('po_amount');
        $supply->pr_no = $request->input('pr_no');
        $supply->price_per_purchase_request = $request->input('price_per_purchase_request');
        $supply->bur = $request->input('bur');
        $supply->save();
        
        return redirect('/supplies-delivered')->with('status', 'Delivered Supply Added Successfully!');
    }
}
