<?php

namespace App\Repositories\Backend;

use App\Models\Backend\PersonaFisica;
use InfyOm\Generator\Common\BaseRepository;

class PersonaFisicaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'parent_id',
        'entidad',
        'cargo',
        'nombre',
        'apellidos',
        'nif',
        'estado',
        'telefonos',
        'horarios',
        'emails'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PersonaFisica::class;
    }
}
