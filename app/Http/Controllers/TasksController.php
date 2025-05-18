<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function showAll()
    {
        $tasks = DB::table('tasks')->get();
        return view('../sections/tasks', ['tasks' => $tasks]);
    }

    public function addNewTask()
    {
        return view('../modals/addNewTaskView');
    }

    public function store(Request $request)
    {
        DB::table('tasks')->insert([
            'work_name' => $request->work_name,
            'lead_time' => $request->lead_time,
            'executor' => $request->executor,
            'spare_parts' => $request->spare_parts,
            'number_of_spare_parts' => $request->number_of_spare_parts,
            'total' => $request->total,
        ]);
        return redirect('../AoPiCS/tasks');
    }

    public function edit($id)
    {
        $task = DB::table('tasks')->where('id', '=', $id)->get();
        return view('../modals/editTaskView', ['task' => $task[0]]);
    }

    public function editEntry(Request $request, int $task)
    {
        DB::table('tasks')
            ->where('id', '=', $task)
            ->update(
                [
                    'work_name' => $request->work_name,
                    'lead_time' => $request->lead_time,
                    'executor' => $request->executor,
                    'spare_parts' => $request->spare_parts,
                    'number_of_spare_parts' => $request->number_of_spare_parts,
                    'total' => $request->total,
                ]
            );
        return redirect('../AoPiCS/tasks');
    }

    public function deleteEntry($task)
    {
        DB::table('tasks')->where('id', '=', $task)->delete();
        return redirect('../AoPiCS/tasks');
    }

    public function search(Request $request){
        $query = $request->input('search-text');
        $tasks = DB::table('tasks')->where('work_name', 'like', '%' . $query . '%')->get();
        return view('../sections/tasks', ['tasks' => $tasks]);
    }
}
