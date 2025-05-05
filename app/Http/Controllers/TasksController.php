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
}
