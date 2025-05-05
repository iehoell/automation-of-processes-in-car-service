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
}
