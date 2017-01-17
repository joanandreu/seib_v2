<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Entidad;
use InfyOm\Generator\Common\BaseRepository;

class EntidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'parent_id',
        'nombre',
        'abreviatura',
        'tipoentidad',
        'nivel',
        'cif',
        'estado',
        'telefonos',
        'emails',
        'horarios',
        'responsable',
        'municipio',
        'nucleo',
        'calle',
        'ine_via',
        'numero',
        'piso',
        'puerta',
        'escalera',
        'lon',
        'lat'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Entidad::class;
    }
}
