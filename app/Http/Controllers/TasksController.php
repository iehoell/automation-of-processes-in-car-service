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
            'id' => $request->id,
            'FIO' => $request->FIO,
            'Auto' => $request->Auto,
            'Auto_number' => $request->Auto_number,
            'total' => $request->total,
            'deal_number' => $request->deal_number,
            'column_number' => $request->column_number,
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
                    'id' => $request->id,
                    'FIO' => $request->FIO,
                    'Auto' => $request->Auto,
                    'Auto_number' => $request->Auto_number,
                    'total' => $request->total,
                    'deal_number' => $request->deal_number,
                    'column_number' => $request->column_number,
                ]
            );
        return redirect('../AoPiCS/tasks');
    }

    public function deleteEntry($task)
    {
        DB::table('tasks')->where('id', '=', $task)->delete();
        return redirect('../AoPiCS/tasks');
    }
}
