<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class rolModel
 * @package App\Models
 * @version February 6, 2020, 9:52 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection usuarios
 * @property string rol
 * @property string descripcion
 */
class rolModel extends Model
{

    /**
     * variables de roles
     */

    const ROL_DGVyS = 140;
    const ROL_DGA = 190;
    const ROL_ENTIDAD_FEDERATIVA_1 = 20;
    const ROL_ENTIDAD_FEDERATIVA_2 = 25;
    const ROL_MUNICIPIO_1 = 31;
    const ROL_MUNICIPIO_2 = 32;


    public $table = 'rol';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    protected $primaryKey = 'idrol';

    public $fillable = [
        'rol',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idrol' => 'integer',
        'rol' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'idrol');
    }
}
