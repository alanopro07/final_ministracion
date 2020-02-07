<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemunicipioRequest;
use App\Http\Requests\UpdatemunicipioRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;

class municipioController extends AppBaseController
{
    /** @var  municipioRepository */

//    public function __construct(municipioRepository $municipioRepo)
//    {
//        $this->municipioRepository = $municipioRepo;
//    }

    /**
     * Display a listing of the municipio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
//        $municipios = $this->municipioRepository->all();

    }


    public function dashboardMunicipio(Request $los)
    {

        $id = Auth::user()->id;
        //se obtienen los estados
        $estado = DB::table('usuario_estado')
            ->join('estado','estado.idestado','=','usuario_estado.idestado')
//            ->join('municipio','municipio.idestado','=','estado.idestado')
            ->select('estado.estado')
            ->where('usuario_estado.idusuario_estado',1)
            ->first();


        return view('MUNICIPIO.dashboard')->with('estado',$estado->estado);
    }
}
