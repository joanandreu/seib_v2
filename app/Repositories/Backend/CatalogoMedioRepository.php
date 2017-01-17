<?php

namespace App\Repositories\Backend;

use App\Models\Backend\CatalogoMedio;
use InfyOm\Generator\Common\BaseRepository;

class CatalogoMedioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'parent_id',
        'tipo',
        'codigo',
        'descripcion',
        'unidad_medida'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatalogoMedio::class;
    }
}
