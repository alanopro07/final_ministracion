<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemunicipioRequest;
use App\Http\Requests\UpdatemunicipioRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\movimientoModel;
use Carbon\Carbon;
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

        $id_usuario = Auth::user()->id;
        // se inicia el llenado de ministración
        DB::beginTransaction();
        DB::table('movimiento')->insert([
             'fechamovimiento' =>Carbon::now(),
             'numoficio' => $request['numero_oficio'],
             'fechaoficio' => $request['fecha_oficio'],
             'id_usuario' => $id_usuario,
             'tipomovimiento' => movimientoModel::MUNICIPIO,
             'comentario' => $request['comentario'],
             'paso' => movimientoModel::Paso_inicial,
             'origen' => movimientoModel::MUNICIPIO,
             'destino' => movimientoModel::DGVA,
             'status' => movimientoModel::ESTATUS_ENVIADO
            ]);
        DB::commit();

        //respuesta
        $file_comprobante_nombramiento = !empty($request->file('constancia_nombramiento')) ? $request->file('constancia_nombramiento') : '';
        $name_comprobante_nombramiento = $file_comprobante_nombramiento->getClientOriginalName();
        $extension_constancia_nombramiento = $file_comprobante_nombramiento->getClientOriginalExtension();
        $url_nombramiento = Storage::disk('storage_constancia_nombramiento')->putFileAs($request['estado'].'-/comprobante_nombramiento-'.$request['municipio'].'',$file_comprobante_nombramiento, $name_comprobante_nombramiento);
        $filePath_constancia_nombramiento = Storage::disk('storage_constancia_nombramiento')->getDriver()->getAdapter()->applyPathPrefix($url_nombramiento,$extension_constancia_nombramiento);

        $this->filepathSave($name_comprobante_nombramiento,$filePath_constancia_nombramiento,$extension_constancia_nombramiento);

        $file_comprobante_domicilio_fiscal = !empty($request->file('comprobante_domicilio_fiscal')) ? $request->file('comprobante_domicilio_fiscal') : '';
        $name_comprobante_domicilio_fiscal = $file_comprobante_domicilio_fiscal->getClientOriginalName();
        $extension_comprobante_domicilio_fiscal = $file_comprobante_domicilio_fiscal->getClientOriginalExtension();
        $url_domicilio_fiscal = Storage::disk('storage_comprobante_domicilio_fiscal')->putFileAs($request['estado'].'-/comprobante_domicilio_fiscal-'.$request['municipio'].'',$file_comprobante_domicilio_fiscal, $name_comprobante_domicilio_fiscal);
        $filePath_domicilio_fiscal = Storage::disk('storage_comprobante_domicilio_fiscal')->getDriver()->getAdapter()->applyPathPrefix($url_domicilio_fiscal,$extension_comprobante_domicilio_fiscal);

        $this->filepathSave($name_comprobante_domicilio_fiscal,$filePath_domicilio_fiscal,$extension_comprobante_domicilio_fiscal);


        $file_comprobante_oficio = !empty($request->file('oficio')) ? $request->file('oficio') : '';
        $name_comprobante_oficio =$file_comprobante_oficio->getClientOriginalName();
        $extension_comprobante_oficio = $file_comprobante_oficio->getClientOriginalExtension();
        $url_oficio = Storage::disk('storage_oficio')->putFileAs($request['estado'].'-/comprobante_oficio-'.$request['municipio'].'',$file_comprobante_oficio, $name_comprobante_oficio);
        $filePath_oficio = Storage::disk('storage_oficio')->getDriver()->getAdapter()->applyPathPrefix($url_oficio,$extension_comprobante_oficio);

        $this->filepathSave($name_comprobante_oficio,$filePath_oficio,$extension_comprobante_oficio);


        $file_comprobante_carta_bancaria = !empty($request->file('carta_bancaria')) ? $request->file('carta_bancaria') : '';
        $name_comprobante_carta_bancaria = $file_comprobante_carta_bancaria->getClientOriginalName();
        $extension_comprobante_carta_bancaria = $file_comprobante_carta_bancaria->getClientOriginalExtension();
        $url_carta_bancaria = Storage::disk('storage_carta_bancaria')->putFileAs($request['estado'].'-/comprobante_carta_bancaria-'.$request['municipio'].'',$file_comprobante_carta_bancaria, $name_comprobante_carta_bancaria);
        $filePath_carta_bancaria = Storage::disk('storage_carta_bancaria')->getDriver()->getAdapter()->applyPathPrefix($url_carta_bancaria,$extension_comprobante_carta_bancaria);

        $this->filepathSave($name_comprobante_carta_bancaria,$filePath_carta_bancaria,$extension_comprobante_carta_bancaria);

        $file_comprobante_cedula_fiscal = !empty($request->file('cedula_fiscal')) ? $request->file('cedula_fiscal') : '';
        $name_comprobante_cedula_fiscal  = $file_comprobante_cedula_fiscal->getClientOriginalName();
        $extension_comprobante_cedula_fiscal = $file_comprobante_cedula_fiscal->getClientOriginalExtension();
        $url_cedula_fiscal = Storage::disk('storage_cedula_fiscal')->putFileAs($request['estado'].'-/comprobante_cedula_fiscal-'.$request['municipio'].'',$file_comprobante_cedula_fiscal, $name_comprobante_cedula_fiscal);
        $filePath_cedula_fiscal = Storage::disk('storage_cedula_fiscal')->getDriver()->getAdapter()->applyPathPrefix($url_cedula_fiscal,$extension_comprobante_cedula_fiscal);

        $this->filepathSave($name_comprobante_cedula_fiscal,$filePath_cedula_fiscal,$extension_comprobante_cedula_fiscal);

        return back()->with('success','Operacion creada con exito!');
    }

    public function filepathSave($param1,$param2,$param3)
    {
        //guardado de datos
        DB::beginTransaction();
        DB::table('archivopdf')->insert([
            'nombre' => $param1,
            'path' => $param2,
            'tipoarchivo' => $param3
        ]);
        DB::commit();

    }
}
