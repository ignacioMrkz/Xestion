<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Evento
 * @package App\Models
 * @version May 22, 2019, 8:25 am CEST
 *
 * @property \App\Models\Actividade actividade
 * @property date inicio
 * @property date fin
 * @property integer actividade_id
 */
class Evento extends Model
{
    use SoftDeletes;

    public $table = 'eventos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'inicio',
        'fin',
        'actividade_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'inicio' => 'datetime',
        'fin' => 'datetime',
        'actividade_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'inicio' => 'required',
        'fin' => 'required',
        'actividade_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function actividade()
    {
        return $this->belongsTo(\App\Models\Actividade::class);
    }
}
