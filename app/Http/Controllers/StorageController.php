<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StorageController extends Controller
{
    public function showAll()
    {
        $storage = DB::table('storage')->get();
        return view('../sections/storage', ['storage' => $storage]);
    }

    public function addNewDelivery()
    {
        return view('../modals/addNewDeliveryView');
    }

    public function store(Request $request)
    {
        DB::table('storage')->insert([
            'supplier' => $request->supplier,
            'date_of_receipt' => $request->date_of_receipt,
            'name' => $request->name,
            'number_of_positions' => $request->number_of_positions,
            'receipt_amount' => $request->receipt_amount,
        ]);
        return redirect('../AoPiCS/storage');
    }

    public function edit($id)
    {
        $delivery = DB::table('storage')->where('id', '=', $id)->get();
        return view('../modals/editDeliveryView', ['delivery' => $delivery[0]]);
    }

    public function editEntry(Request $request, int $delivery)
    {
        DB::table('storage')
            ->where('id', '=', $delivery)
            ->update(
                [
                    'supplier' => $request->supplier,
                    'date_of_receipt' => $request->date_of_receipt,
                    'name' => $request->name,
                    'number_of_positions' => $request->number_of_positions,
                    'receipt_amount' => $request->receipt_amount,
                ]
            );
        return redirect('../AoPiCS/storage');
    }

    public function deleteEntry($delivery)
    {
        DB::table('storage')->where('id', '=', $delivery)->delete();
        return redirect('../AoPiCS/storage');
    }
}
