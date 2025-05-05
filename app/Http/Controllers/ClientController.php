<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function showAll()
    {
        $clients = DB::table('clients')->get();
        return view('../sections/clients', ['clients' => $clients]);
    }

    public function addNewClient()
    {
        return view('../modals/addNewClientView');
    }

    public function store(Request $request)
    {
        DB::table('clients')->insert([
            'id' => $request->id,
            'FIO' => $request->FIO,
            'Auto' => $request->Auto,
            'Auto_number' => $request->Auto_number,
            'Registration_date' => $request->Registration_date,
            'Telephone_number' => $request->Telephone_number,
            'Discount_on_services' => $request->Discount_on_services,
            'Discount_on_spare_parts' => $request->Discount_on_spare_parts,
        ]);
        return redirect('../AoPiCS/clients');
    }

    public function edit($id)
    {
        $client = DB::table('clients')->where('id', '=', $id)->get();
        return view('../modals/editClientView', ['client' => $client[0]]);
    }

    public function editEntry(Request $request, int $client)
    {
        DB::table('clients')
            ->where('id', '=', $client)
            ->update(
                [
                    'id' => $request->id,
                    'FIO' => $request->FIO,
                    'Auto' => $request->Auto,
                    'Auto_number' => $request->Auto_number,
                    'Registration_date' => $request->Registration_date,
                    'Telephone_number' => $request->Telephone_number,
                    'Discount_on_services' => $request->Discount_on_services,
                    'Discount_on_spare_parts' => $request->Discount_on_spare_parts,
                ]
            );
        return redirect('../AoPiCS/clients');
    }

    public function deleteEntry($client)
    {
        DB::table('clients')->where('id', '=', $client)->delete();
        return redirect('../AoPiCS/clients');
    }

//    public function delete($client)
//    {
//        return view('/delete');
//    }

}
