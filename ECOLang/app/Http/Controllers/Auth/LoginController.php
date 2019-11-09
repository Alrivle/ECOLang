<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $id = DB::select('select id from users where email=?',[$email]);
        if(count($id))
        {
            $data = DB::select('select id from users where email=? and password=?',[$email,$password]);
            if(count($data))
            {
                return view('temas');
            }else{
                return back()->withErrors(['password'=> 'Contraseña incorrecta'])
                         ->withInput(request(['email']));
            }
        }else{
            return back()->withErrors(['email'=> 'Usuario no registrado'])
                         ->withInput(request(['email']));
        }
    }
}
