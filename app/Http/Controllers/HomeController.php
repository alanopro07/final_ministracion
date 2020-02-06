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
        $user = Auth::user()->email;
        $id = Auth::user()->id;
        $rol = DB::table('usuario')
            ->join('rol','rol.idrol','=','usuario.idrol')
            ->select('rol.rol','rol.idrol')
            ->where('usuario.iduser',$id)
            ->first();

        //acceso a dashboard
        if ($rol->idrol == rolModel::ROL_MUNICIPIO_1 || $rol->idrol == rolModel::ROL_MUNICIPIO_2)
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
        dd('asdasd');
    }
}
