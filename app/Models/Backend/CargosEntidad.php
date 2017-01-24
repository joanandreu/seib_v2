<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="CargosEntidad",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="tipo_entidads_id",
 *          description="tipo_entidads_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="cargo",
 *          description="cargo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="abrv",
 *          description="abrv",
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
class CargosEntidad extends Model
{
    use SoftDeletes;

    public $table = 'cargos_entidads';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipo_entidads_id',
        'cargo',
        'abrv'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipo_entidads_id' => 'integer',
        'cargo' => 'string',
        'abrv' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
       
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoEntidad()
    {
        return $this->belongsTo(\App\Models\Backend\TipoEntidad::class, 'id');
    }
}
