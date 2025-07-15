<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Avaliacionmonitors
 * @package App\Models
 * @version March 7, 2019, 1:15 pm CET
 *
 * @property \App\Models\Actividade actividade
 * @property \App\Models\Espazo espazo
 * @property integer participantes
 * @property integer primeiravez
 * @property integer moza12
 * @property integer moza17
 * @property integer moza26
 * @property integer mozo12
 * @property integer mozo17
 * @property integer mozo26
 * @property integer valoracionespazo
 * @property integer valoracionmateriais
 * @property integer valoracionhorario
 * @property integer valoracionparticipacion
 * @property integer valoracionxeral
 * @property integer control
 * @property string obsevacions
 * @property integer actividade_id
 * @property integer espazo_id
 */
class Avaliacionmonitor extends Model
{
    use SoftDeletes;

    public $table = 'avaliacionmonitors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'monitors',
        'data',
        'participantes',
        'publico',
        'fora',
        'primeiravez',
        'moza12',
        'moza17',
        'moza26',
        'mozo12',
        'mozo17',
        'mozo26',
        'no_binaria12',
        'no_binaria17',
        'no_binaria26',
        'outro12',
        'outro17',
        'outro26',
        'no_contesta12',
        'no_contesta17',
        'no_contesta26',
        'valoracionespazo',
        'valoracionmateriais',
        'valoracionhorario',
        'valoracionparticipacion',
        'valoracionxeral',
        'control',
        'obsevacions',
        'revisada',
        'actividade_id',
        'espazo_id',
        'coordinador_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'monitors' => 'required',
        'data' => 'date',
        'participantes' => 'integer',
        'publico' => 'integer',
        'fora' => 'integer',
        'primeiravez' => 'integer',
        'moza12' => 'integer',
        'moza17' => 'integer',
        'moza26' => 'integer',
        'mozo12' => 'integer',
        'mozo17' => 'integer',
        'mozo26' => 'integer',
        'no_binaria12' => 'integer',
        'no_binaria17' => 'integer',
        'no_binaria26' => 'integer',
        'outro12' => 'integer',
        'outro17' => 'integer',
        'outro26' => 'integer',
        'no_contesta12' => 'integer',
        'no_contesta17' => 'integer',
        'no_contesta26' => 'integer',
        'valoracionespazo' => 'integer',
        'valoracionmateriais' => 'integer',
        'valoracionhorario' => 'integer',
        'valoracionparticipacion' => 'integer',
        'valoracionxeral' => 'integer',
        'control' => 'integer',
        'obsevacions' => 'string',
        'actividade_id' => 'integer',
        'espazo_id' => 'integer',
        'coordinador_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'data' => 'required',
        'participantes' => 'required',
        'primeiravez' => 'required',
        'actividade_id' => 'required',
        'espazo_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function actividade()
    {
        return $this->belongsTo(\App\Models\Actividade::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function espazo()
    {
        return $this->belongsTo(\App\Models\Espazo::class);
    }
    
    public function coordinador()
    {
        return $this->belongsTo(\App\Coordinador::class);
    }

}
