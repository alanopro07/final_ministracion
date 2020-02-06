<?php

namespace App\Repositories;

use App\Models\usuarioModel;
use App\Repositories\BaseRepository;

/**
 * Class usuarioModelRepository
 * @package App\Repositories
 * @version February 6, 2020, 5:55 am UTC
*/

class usuarioModelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return usuarioModel::class;
    }
}
