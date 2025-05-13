<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\alert;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $name1 = DB::table('users')->where('email', '=', $email)->get('name');
        $name2 = $name1->first()->name;
        $user_users = DB::table('users')->where('email', '=', $email)->get();
        $user_clients = DB::table('clients')->where('FIO', '=', $name2)->get();
        $hash = DB::table('users')->where('email', '=', $email)->get('password');
        $is_admin = DB::table('users')->where('email', '=', $email)->get('is_admin');
        if(password_verify($password, $hash->first()->password)){
            if($is_admin->first()->is_admin === true){
                return redirect('/AoPiCS');
            }
            else{
                return view('/userProfile', ['user_users' => $user_users, 'user_clients' => $user_clients]);
            }
        }
        else{
            alert('Неправильный логин или пароль');
        }
        return 0;
    }
}
