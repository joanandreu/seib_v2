<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="TipoEntidad",
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
 *          property="tipo",
 *          description="tipo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="abreviatura",
 *          description="abreviatura",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipo_funcional",
 *          description="tipo_funcional",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cargos",
 *          description="cargos",
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
class TipoEntidad extends Model
{
    use SoftDeletes;

    public $table = 'tipo_entidads';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'parent_id',
        'tipo',
        'abreviatura',
        'tipo_funcional',
        'cargos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'parent_id' => 'string',
        'tipo' => 'string',
        'abreviatura' => 'string',
        'tipo_funcional' => 'string',
        'cargos' => 'string'
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
