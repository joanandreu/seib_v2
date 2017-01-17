<?php

namespace App\Repositories\Backend;

use App\Models\Backend\TipoEntidad;
use InfyOm\Generator\Common\BaseRepository;

class TipoEntidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'parent_id',
        'tipo',
        'abreviatura',
        'tipo_funcional',
        'cargos'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoEntidad::class;
    }
}
