<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="PersonaFisica",
 *      required={""},
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
 *          property="entidad",
 *          description="entidad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cargo",
 *          description="cargo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nombre",
 *          description="nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="apellidos",
 *          description="apellidos",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nif",
 *          description="nif",
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
 *          property="horarios",
 *          description="horarios",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="emails",
 *          description="emails",
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
class PersonaFisica extends Model
{
    use SoftDeletes;

    public $table = 'persona_fisicas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'parent_id' => 'string',
        'entidad' => 'string',
        'cargo' => 'string',
        'nombre' => 'string',
        'apellidos' => 'string',
        'nif' => 'string',
        'estado' => 'string',
        'telefonos' => 'string',
        'horarios' => 'string',
        'emails' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
