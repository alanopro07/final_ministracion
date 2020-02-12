<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class movimientoModel
 * @package App\Models
 * @version February 9, 2020, 10:19 pm CST
 *
 * @property \App\Models\Ministracion idministracion
 * @property \Illuminate\Database\Eloquent\Collection archivopdfs
// * @property integer idministracion
 * @property string|\Carbon\Carbon fechamovimiento
 * @property integer numoficio
 * @property string|\Carbon\Carbon fechaoficio
 * @property integer id_usuario
 * @property integer tipomovimiento
 * @property string comentario
 * @property integer paso
 * @property string origen
 * @property string destino
 * @property string observacion
 * @property integer status
 */
class movimientoModel extends Model
{

//    const MUNICIPIO = 2;
    const movimiento_municipio = 1;
    const movimiento_dgva = 2;
    const Paso_inicial = 1;
    const MUNICIPIO = 1;
    const  DGVA = 2;

    const ESTATUS_ENVIADO = 1;
    const ESTATUS_ATENDIDO = 2;
    const ESTATUS_APROBADO = 3;
    const ESTATUS_RECHAZADO = 4;
    public $table = 'movimiento';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    protected $primaryKey = 'idmovimiento';

    public $fillable = [
        'idministracion',
        'fechamovimiento',
        'numoficio',
        'fechaoficio',
        'id_usuario',
        'tipomovimiento',
        'comentario',
        'paso',
        'origen',
        'destino',
        'observacion',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idmovimiento' => 'integer',
        'idministracion' => 'integer',
        'fechamovimiento' => 'datetime',
        'numoficio' => 'integer',
        'fechaoficio' => 'datetime',
        'id_usuario' => 'integer',
        'tipomovimiento' => 'integer',
        'comentario' => 'string',
        'paso' => 'integer',
        'origen' => 'string',
        'destino' => 'string',
        'observacion' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idministracion()
    {
        return $this->belongsTo(\App\Models\Ministracion::class, 'idministracion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function archivopdfs()
    {
        return $this->hasMany(\App\Models\Archivopdf::class, 'idmovimiento');
    }
}
