<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Entidad",
 *      required={"abreviatura"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="parent_id",
 *          description="parent_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nombre",
 *          description="nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="abreviatura",
 *          description="abreviatura",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipoentidad",
 *          description="tipoentidad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nivel",
 *          description="nivel",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cif",
 *          description="cif",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="estado",
 *          description="estado",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="telefonos",
 *          description="telefonos",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="emails",
 *          description="emails",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="horarios",
 *          description="horarios",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="responsable",
 *          description="responsable",
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
class Entidad extends Model
{
    use SoftDeletes;

    public $table = 'entidads';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'parent_id' => 'string',
        'nombre' => 'string',
        'abreviatura' => 'string',
        'tipoentidad' => 'string',
        'nivel' => 'string',
        'cif' => 'string',
        'estado' => 'string',
        'telefonos' => 'string',
        'emails' => 'string',
        'horarios' => 'string',
        'responsable' => 'string',
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
        'abreviatura' => 'required'
    ];

    
}
