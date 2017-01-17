<?php

namespace App\Repositories\Backend;

use App\Models\Backend\MedioRecurso;
use InfyOm\Generator\Common\BaseRepository;

class MedioRecursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'entidad',
        'tipo_medio',
        'codigo',
        'descripcion',
        'valor',
        'medida',
        'tipo_riesgo',
        'modelo',
        'matricula',
        'transporte',
        'grua',
        'responsable',
        'contacto',
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
        return MedioRecurso::class;
    }
}
