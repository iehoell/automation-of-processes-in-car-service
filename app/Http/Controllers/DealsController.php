<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DealsController extends Controller
{
    public function search(Request $request){
        $query = $request->input('search-text');
        $deal = DB::table('deals')->where('transaction_number', 'like', $query)->get();
        return view('../sections/dealsList', ['deal' => $deal]);
    }
}
