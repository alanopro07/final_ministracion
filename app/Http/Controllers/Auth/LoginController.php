<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
//
//    public function __construct()
//    {
//        $this->middleware('guest',['only'=>$this->showLoginForm()]);
//    }




    public function login()
    {
        $credenciales = $this->validate(request(),[
                'email' => 'email|required|string',
                'password' => 'required|string'
            ]);

        if(Auth::attempt($credenciales))
        {
            return redirect('municipio');
        }
        return back()->withErrors(['email'=>'Las credenciales no so correctas'])
            ->withInput(request(['email']));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
