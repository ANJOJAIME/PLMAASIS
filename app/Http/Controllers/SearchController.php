<?php

namespace App\Http\Controllers;
use App\Models\SupplyMain;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $stockNo = $request->input('stock_no');
        
        // Perform the search using your model (adjust the model and column names)
        $searchResults = SupplyMain::where('stock_no', $stockNo)->get();

        return view('pages.supplies.results', ['stockNo' => $stockNo, 'results' => $searchResults]);
    }
}
