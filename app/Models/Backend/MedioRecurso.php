<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="MedioRecurso",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="entidad",
 *          description="entidad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipo_medio",
 *          description="tipo_medio",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="codigo",
 *          description="codigo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="descripcion",
 *          description="descripcion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="valor",
 *          description="valor",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="medida",
 *          description="medida",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipo_riesgo",
 *          description="tipo_riesgo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="modelo",
 *          description="modelo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="matricula",
 *          description="matricula",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="transporte",
 *          description="transporte",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="grua",
 *          description="grua",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="responsable",
 *          description="responsable",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="contacto",
 *          description="contacto",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="municipio",
 *          description="municipio",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nucleo",
 *          description="nucleo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="calle",
 *          description="calle",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ine_via",
 *          description="ine_via",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="numero",
 *          description="numero",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="piso",
 *          description="piso",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="puerta",
 *          description="puerta",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="escalera",
 *          description="escalera",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="lon",
 *          description="lon",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="lat",
 *          description="lat",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class MedioRecurso extends Model
{
    use SoftDeletes;

    public $table = 'medio_recursos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'entidad' => 'string',
        'tipo_medio' => 'string',
        'codigo' => 'string',
        'descripcion' => 'string',
        'valor' => 'string',
        'medida' => 'string',
        'tipo_riesgo' => 'string',
        'modelo' => 'string',
        'matricula' => 'string',
        'transporte' => 'string',
        'grua' => 'string',
        'responsable' => 'string',
        'contacto' => 'string',
        'municipio' => 'string',
        'nucleo' => 'string',
        'calle' => 'string',
        'ine_via' => 'string',
        'numero' => 'string',
        'piso' => 'string',
        'puerta' => 'string',
        'escalera' => 'string',
        'lon' => 'string',
        'lat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
