<?php

namespace App\Http\Controllers;
use App\Repositories\usuarioModelRepository;
use Illuminate\Http\Request;
use App\Models\rolModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Object_;

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
        $id = Auth::user()->idrol;


        //acceso a dashboard
        if ($id == rolModel::ROL_MUNICIPIO_1 || $id == rolModel::ROL_MUNICIPIO_2)
        {
            return redirect()->route('municipio');
        }

        if($rol->idrol == rolModel::ROL_ENTIDAD_FEDERATIVA_1 || $rol->idrol == rolModel::ROL_ENTIDAD_FEDERATIVA_2)
        {
            return redirect()->route('entidad');
        }

        if($rol->idrol == rolModel::ROL_DGA)
        {
            return redirect()->route('dga');

        }

        if($rol->idrol == rolModel::ROL_DGVyS)
        {
            return redirect()->route('dgvys');
        }

        return view('home')->with('rol', $rol->rol);
    }

    public function pro()
    {
       $id = Auth::user()->id();

        return view('L');
    }
}
