<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemunicipioRequest;
use App\Http\Requests\UpdatemunicipioRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
            ->select('estado.estado')
            ->where('usuario_estado.idusuario_estado',1)
            ->first();

        $municipio = DB::table('usuario_municipio')
            ->join('municipio','municipio.idmunicipio','=','usuario_municipio.idmunicipio')
            ->select('municipio.municipio')
            ->where('usuario_municipio.idusuario',1)
            ->first();

//        $this->cargaArchivos($estado->estado);
        return view('MUNICIPIO.dashboard')
            ->with('estado',$estado->estado)
            ->with('municipio',$municipio->municipio);
    }

    public function cargaArchivos(Request $request)
    {

        //respuesta
        $file_comprobante_nombramiento = !empty($request->file('constancia_nombramiento')) ? $request->file('constancia_nombramiento') : '';
        $file_comprobante_domicilio_fiscal = !empty($request->file('comprobante_domicilio_fiscal')) ? $request->file('comprobante_domicilio_fiscal') : '';
        $file_comprobante_oficio = !empty($request->file('oficio')) ? $request->file('oficio') : '';
        $file_comprobante_carta_bancaria = !empty($request->file('carta_bancaria')) ? $request->file('carta_bancaria') : '';
        $file_comprobante_cedula_fiscal = !empty($request->file('cedula_fiscal')) ? $request->file('cedula_fiscal') : '';


        //nombre archivos
        $name_comprobante_nombramiento = $file_comprobante_nombramiento->getClientOriginalName();
        $name_comprobante_domicilio_fiscal = $file_comprobante_domicilio_fiscal->getClientOriginalName();
        $name_comprobante_oficio =$file_comprobante_oficio->getClientOriginalName();
        $name_comprobante_carta_bancaria = $file_comprobante_carta_bancaria->getClientOriginalName();
        $name_comprobante_cedula_fiscal  = $file_comprobante_cedula_fiscal->getClientOriginalName();

        //extension
        $extension_constancia_nombramiento = $file_comprobante_nombramiento->getClientOriginalExtension();
        $extension_comprobante_domicilio_fiscal = $file_comprobante_domicilio_fiscal->getClientOriginalExtension();
        $extension_comprobante_oficio = $file_comprobante_oficio->getClientOriginalExtension();
        $extension_comprobante_carta_bancaria = $file_comprobante_carta_bancaria->getClientOriginalExtension();
        $extension_comprobante_cedula_fiscal = $file_comprobante_cedula_fiscal->getClientOriginalExtension();


        //Almacenar archivo en temporal:
        Storage::disk('storage_constancia_nombramiento')->putFileAs('comprobante_nombramiento'.$municipio.'',$file_comprobante_nombramiento, $name_comprobante_nombramiento);
        Storage::disk('storage_comprobante_domicilio_fiscal')->putFileAs('comprobante_domicilio_fiscal'.$municipio.'',$file_comprobante_domicilio_fiscal, $name_comprobante_domicilio_fiscal);
        Storage::disk('storage_oficio')->putFileAs('comprobante_oficio'.$municipio.'',$file_comprobante_oficio, $name_comprobante_oficio);
        Storage::disk('storage_carta_bancaria')->putFileAs('comprobante_carta_bancaria'.$municipio.'',$file_comprobante_carta_bancaria, $name_comprobante_carta_bancaria);
        Storage::disk('storage_cedula_fiscal')->putFileAs('comprobante_cedula_fiscal'.$municipio.'',$file_comprobante_cedula_fiscal, $name_comprobante_cedula_fiscal);

        $filePath = Storage::disk('v')->getDriver()->getAdapter()->applyPathPrefix('conciliacion/'.$name);
    }
}
