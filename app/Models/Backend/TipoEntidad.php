<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="TipoEntidad",
 *      required={"tipo"},
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
 *          property="tipo_funcional",
 *          description="tipo_funcional",
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
        'tipo_funcional'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'parent_id' => 'string',
        'tipo' => 'string',
        'tipo_funcional' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'parent_id' => 'nullable',
        'tipo' => 'required'
    ];

    
}
