<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Time;
use function Laravel\Prompts\alert;
use function Laravel\Prompts\select;

class DealsController extends Controller
{
    public function showDealsList()
    {
        $dealsList = DB::table('deals')->get();
        return view('../sections/dealsList', ['dealsList' => $dealsList]);
    }

    public function addNewDeal()
    {
        $clients = DB::table('clients')->get('FIO');
        $tasks = DB::table('tasks')->get('work_name');
        return view('../modals/addNewDealView', ['clients' => $clients, 'tasks' => $tasks]);
    }

    public function showDeal($id){
        $deals = DB::table('deals')->where('deal_number', '=', $id)->get();
        return view('../sections/deals', ['deals' => $deals]);
    }

    public function search(Request $request){
        $query = $request->input('search-text');
        $deal = DB::table('deals')->where('tasks_work_name', 'like', $query)->get();
        return view('../sections/dealsList', ['deal' => $deal]);
    }

    public function store(Request $request)
    {
        $clients = DB::table('clients')->where('FIO', '=', $request->clients_fio)->get();
        $tasks = DB::table('tasks')->where('work_name', '=', $request->tasks_work_name)->get();
        $deals = DB::table('deals')->get();

        DB::table('deals')->insert([
            'deal_number' => $deals->last()->deal_number+1,
            'deal_creation_date' => date('y-m-d H:i:s'),
            'deal_status' => 'Не готов',
            'clients_fio' => $request->clients_fio,
            'clients_phone' => $clients->first()->Telephone_number,
            'clients_discount_services' => $clients->first()->Discount_on_services,
            'clients_discount_spare_parts' => $clients->first()->Discount_on_spare_parts,
            'clients_auto' => $clients->first()->Auto,
            'clients_auto_number' => $clients->first()->Auto_number,
            'tasks_work_name' => $request->tasks_work_name,
            'tasks_executor' => $tasks->first()->executor,
            'tasks_work_time' => $tasks->first()->lead_time,
            'tasks_total' => $tasks->first()->total,
            'storage_name' => $tasks->first()->spare_parts,
            'storage_number_of_positions' => $tasks->first()->number_of_spare_parts,
            'storage_purshase_price' => 4500,
            'storage_sale_price' => 5500,
            'deals_recording_date' => $request->deals_recording_date,
            'deals_recording_time' => $request->deals_recording_time,
        ]);
        return redirect('../AoPiCS/dealsList');
    }

    public function createDealByClient(Request $request){
        $client = DB::table('clients')->where('FIO', '=', $request->FIO)->get();
        $deals = DB::table('deals')->get('deal_number');
        $storage = DB::table('storage')->get();
        $tasks = DB::table('tasks')->where('work_name', '=', $request->task_name)->first();

        $date = date($request->recording_date);
        $time = date('H:i:s', strtotime($request->recording_date));

        $calendar = DB::table('calendar')->where('client_fio', '=', $request->FIO)->get();

        DB::table('deals')->insert([
            'deal_number' => $deals->last()->deal_number+1,
            'deal_creation_date' => date('y-m-d H:i:s'),
            'deal_status' => 'Не готов',
            'clients_fio' => $request->FIO,
            'clients_phone' => $request->phone_number,
            'clients_discount_services' => $client->first()->Discount_on_services,
            'clients_discount_spare_parts' => $client->first()->Discount_on_spare_parts,
            'clients_auto' => $request->Auto,
            'clients_auto_number' => $request->Auto_number,
            'tasks_work_name' => $request->task_name,
            'tasks_executor' => $tasks->executor,
            'tasks_work_time' => $tasks->lead_time,
            'tasks_total' => $tasks->total,
            'storage_name' => $tasks->spare_parts,
            'storage_number_of_positions' => $tasks->number_of_spare_parts,
            'storage_purshase_price' => 4500,
            'storage_sale_price' => 5500,
            'deals_recording_date' => $date,
            'deals_recording_time' => $time,
        ]);

        DB::table('calendar')->insert([
            'client_fio' => $request->FIO,
            'auto' => $request->Auto,
            'auto_number' => $request->Auto_number,
            'phone_number' => $request->phone_number,
            'work_type' => $request->task_name,
            'recording_date' => $date,
            'recording_time' => $time,
        ]);

        alert('Вы успешно записались на техосмотр!');
        return view('/userProfile', ['calendar' => $calendar]);
    }

    public function deleteEntry($deal)
    {
        DB::table('deals')->where('deal_number', '=', $deal)->delete();
        return redirect('../AoPiCS/dealsList');
    }
}
