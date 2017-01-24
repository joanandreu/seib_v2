<?php

namespace App\Repositories\Backend;

use App\Models\Backend\CargosEntidad;
use InfyOm\Generator\Common\BaseRepository;

class CargosEntidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_entidads_id',
        'cargo',
        'abrv'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CargosEntidad::class;
    }
}
