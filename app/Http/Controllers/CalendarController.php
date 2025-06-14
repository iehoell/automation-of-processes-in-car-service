<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    public function showAll()
    {
        $calendar = DB::table('calendar')->get();
        return view('../sections/calendar', ['calendar' => $calendar]);
    }

    public function search(Request $request){
        $query = $request->input('search-text');
        $calendar = DB::table('calendar')->where('client_fio', 'like', '%' . $query . '%')->get();
        return view('../sections/calendar', ['calendar' => $calendar]);
    }

    public function addNewRecord()
    {
        $tasks = DB::table('tasks')->get('work_name');
        return view('signUpForMaintenance', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        $date = date($request->recording_date);
        $time = date('H:i:s', strtotime($request->recording_date));

        DB::table('calendar')->insert([
            'client_fio' => $request->FIO,
            'auto' => $request->Auto,
            'auto_number' => $request->Auto_number,
            'phone_number' => $request->phone_number,
            'work_type' => $request->task_name,
            'recording_date' => $date,
            'recording_time' => $time,
        ]);
        return redirect('../profile');
    }

    public function deleteEntry($calendar_item)
    {
        DB::table('calendar')->where('id', '=', $calendar_item)->delete();
        return redirect('../AoPiCS/calendar');
    }

    public function edit($id)
    {
        $tasks = DB::table('tasks')->get();
        $calendar = DB::table('calendar')->where('id', '=', $id)->get();
        return view('../modals/editCalendarView', ['calendar' => $calendar[0], 'tasks' => $tasks]);
    }

    public function editEntry(Request $request, int $calendar)
    {
        $date = date($request->recording_date);
        $time = date('H:i:s', strtotime($request->recording_date));

        DB::table('calendar')
            ->where('id', '=', $calendar)
            ->update(
                [
                    'client_fio' => $request->FIO,
                    'auto' => $request->Auto,
                    'auto_number' => $request->Auto_number,
                    'phone_number' => $request->phone_number,
                    'work_type' => $request->task_name,
                    'recording_date' => $date,
                    'recording_time' => $time,
                ]
            );
        return redirect('../AoPiCS/calendar');
    }
}
