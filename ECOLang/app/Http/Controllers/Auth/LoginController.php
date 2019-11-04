<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function login(request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $data = DB::select('select id from users where email=? and password=?',[$email,$password]);
        if(count($data))
        {
            return view('index');
        }else{
            return back()->withErrors(['password'=> 'Usuario o contraseña incorrecta']);
        }
    }
}
