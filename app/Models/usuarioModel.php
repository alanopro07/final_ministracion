<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class usuarioModel
 * @package App\Models
 * @version February 6, 2020, 5:53 am UTC
 *
 * @property \App\Models\Rol idrol
 * @property \Illuminate\Database\Eloquent\Collection estados
 * @property \Illuminate\Database\Eloquent\Collection datosBancarios
// * @property integer idrol
 * @property string nombre
 * @property string apellidopaterno
 * @property string apellidomaterno
 * @property string titulo
 * @property string telefono
 * @property string extension
 * @property string celular
 * @property string login
 * @property string emailpersonal
 * @property string clave
 * @property integer status
 * @property string|\Carbon\Carbon fechaultvisita
 * @property string fechacreacion
 * @property string fechacaducidad
 * @property string comentario
 * @property string foto
 * @property string cargo
 * @property string dependencia
 * @property string direccion
 */
class usuarioModel extends Model
{

    public $table = 'usuario';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    protected $primaryKey = 'idusuario';

    public $fillable = [
        'idrol',
        'nombre',
        'apellidopaterno',
        'apellidomaterno',
        'titulo',
        'telefono',
        'extension',
        'celular',
        'login',
        'emailpersonal',
        'clave',
        'status',
        'fechaultvisita',
        'fechacreacion',
        'fechacaducidad',
        'comentario',
        'foto',
        'cargo',
        'dependencia',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idusuario' => 'integer',
        'idrol' => 'integer',
        'nombre' => 'string',
        'apellidopaterno' => 'string',
        'apellidomaterno' => 'string',
        'titulo' => 'string',
        'telefono' => 'string',
        'extension' => 'string',
        'celular' => 'string',
        'login' => 'string',
        'emailpersonal' => 'string',
        'clave' => 'string',
        'status' => 'integer',
        'fechaultvisita' => 'datetime',
        'fechacreacion' => 'date',
        'fechacaducidad' => 'date',
        'comentario' => 'string',
        'foto' => 'string',
        'cargo' => 'string',
        'dependencia' => 'string',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public static function last()
    {
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idrol()
    {
        return $this->belongsTo(\App\Models\Rol::class, 'idrol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function estados()
    {
        return $this->belongsToMany(\App\Models\Estado::class, 'usuario_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function datosBancarios()
    {
        return $this->hasMany(\App\Models\DatosBancario::class, 'id_usuario');
    }
}
