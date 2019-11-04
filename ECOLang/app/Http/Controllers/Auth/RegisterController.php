<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

     /**
      * Create a user and adds on the database
      *
      * @param request $request - data inserted by the user
      * @return login page
      */
    public function create(request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        try{
            DB::insert('insert into users(name,email,password,rol) values(?,?,?,"User")',[$name,$email,$password]);
            return view('login');
        }catch (PDOException $e) {
            echo 'Error de conexión: ';
            exit;
        }
    }
}
