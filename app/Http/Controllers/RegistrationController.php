<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\password;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $hashed_password = password_hash($request->password, PASSWORD_DEFAULT);
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashed_password,
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s'),
            'is_admin' => false,
        ]);

        DB::table('clients')->insert([
            'FIO' => $request->name,
            'Auto' => $request->Auto,
            'Auto_number' => $request->Auto_number,
            'Telephone_number' => $request->phone,
            'Discount_on_services' => 0,
            'Discount_on_spare_parts' => 0,
            'Registration_date' => date('y-m-d h:i:s'),
        ]);
        return redirect('/login');
    }
}
