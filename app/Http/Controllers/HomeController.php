<?php

namespace App\Http\Controllers;
use App\Repositories\usuarioModelRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user()->email;
        $id = Auth::user()->id;
        $rol = DB::table('usuario')
            ->join('rol','rol.idrol','=','usuario.idrol')
            ->select('rol.rol')
            ->where('usuario.iduser',$id)->get()->toJson();

        return view('home')->with('rol',json_decode(json_encode($rol),true));
    }
}
