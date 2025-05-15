<?php

namespace App\Http\Controllers;
session_start();

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
        $user_clients = DB::table('clients')->where('FIO', '=', $name2)->get();
        $hash = DB::table('users')->where('email', '=', $email)->get('password');
        $is_admin = DB::table('users')->where('email', '=', $email)->get('is_admin');
        if(password_verify($password, $hash->first()->password)){
            if($is_admin->first()->is_admin === true){
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['auto'] = $user_clients->value('Auto');
                    $_SESSION['auto_number'] = $user_clients->value('Auto_number');
                    $_SESSION['telephone_number'] = $user_clients->value('Telephone_number');
                    return view('/AoPiCS');
                }
            }
            else{
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['auto'] = $user_clients->value('Auto');
                    $_SESSION['auto_number'] = $user_clients->value('Auto_number');
                    $_SESSION['telephone_number'] = $user_clients->value('Telephone_number');
                    return view('/userProfile');
                }
            }
        }
        else{
            alert('Неправильный логин или пароль');
        }
        return 0;
    }
}
