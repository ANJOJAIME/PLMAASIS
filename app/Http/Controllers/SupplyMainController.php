<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\SupplyMain;
use App\Models\SupplyDelivered;

class SupplyMainController extends Controller
{
    public function index()
    {
        $suppliesmain= SupplyMain::all();
        return view('pages.supplies.index', compact('suppliesmain'));
    }

    public function delivered()
    {
        $suppliesdelivered= SupplyDelivered::all();
        return view('pages.supplies.delivered', compact('suppliesdelivered'));
    }

    public function create()
    {
        return view('pages.supplies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'stock_no' => 'required|max:8|unique:supplymain,stock_no',
            'description' => 'required|max:255|required|unique:supplymain,description',
            'unit' => 'required|unique:supplymain,unit',
            'balance_before' => 'required|numeric',
            'delivered' => 'required|numeric',
            'issued' => 'required|numeric',
            'balance_after' => 'required|numeric',
        ]);

        $supply = new SupplyMain;
        $supply->stock_no = $request->input('stock_no');
        $supply->description = $request->input('description');
        $supply->unit = $request->input('unit');
        $supply->balance_before = $request->input('balance_before');
        $supply->delivered = $request->input('delivered');
        $supply->issued = $request->input('issued');
        $supply->balance_after = $request->input('balance_after');
        $supply->save();
        
        return redirect('/supplies')->with('status', 'Supply Added Successfully!');
    }

    public function edit($stock_no)
    {
        $supply = SupplyMain::find($stock_no);
        return view('pages.supplies.edit', compact('supply'));
    }

    public function update(Request $request, $stock_no)
    {
            $request->validate([
                'stock_no' => 'required',
                'description' => 'required',
                'unit' => 'required',
                'balance_before' => 'required|numeric',
                'delivered' => 'required|numeric',
                'issued' => 'required|numeric',
                'balance_after' => 'required|numeric',
            ]);
        $supply = SupplyMain::find($stock_no);
        $supply->stock_no = $request->input('stock_no');
        $supply->description = $request->input('description');
        $supply->unit = $request->input('unit');
        $supply->balance_before = $request->input('balance_before');
        $supply->delivered = $request->input('delivered');
        $supply->issued = $request->input('issued');
        $supply->balance_after = $request->input('balance_after');
        $supply->update();
        
        return redirect('/supplies')->with('status', 'Supply Updated Successfully!');
    }

    public function delete($stock_no)
    {
        $supply = SupplyMain::find($stock_no);
        $supply->delete();
        
        return redirect('/supplies')->with('status', 'Supply Deleted Successfully!');
    }
}
