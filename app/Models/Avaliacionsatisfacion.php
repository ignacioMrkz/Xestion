<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Avaliacionsatisfacion
 * @package App\Models
 * @version March 7, 2019, 1:34 pm CET
 *
 * @property \App\Models\Actividade actividade
 * @property boolean xenero
 * @property select idade12
 * @property select idade17
 * @property select idade26
 * @property select concello
 * @property select estado
 * @property select motivacion
 * @property select encontrou
 * @property integer monitores
 * @property integer espazo
 * @property integer materiais
 * @property integer horario
 * @property integer xeral
 * @property string falta
 * @property string suxerencias
 * @property integer actividade_id
 */
class Avaliacionsatisfacion extends Model
{
    use SoftDeletes;

    public $table = 'avaliacionsatisfacions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'xenero',
        'idade',
        'concello',
        'estado',
        'motivacion',
        'encontrou',
        'monitores',
        'espazo',
        'materiais',
        'horario',
        'xeral',
        'falta',
        'suxerencias',
        'actividade_id',
        'coordinador_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'xenero' => 'string',
        'monitores' => 'integer',
        'espazo' => 'integer',
        'materiais' => 'integer',
        'horario' => 'integer',
        'xeral' => 'integer',
        'falta' => 'string',
        'suxerencias' => 'string',
        'actividade_id' => 'integer',
        'coordinador_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'xenero' => 'required',
        'idade' => 'required|integer|between:12,30',
        'concello' => 'required',
        'estado' => 'required',
        'motivacion' => 'required',
        'encontrou' => 'required',
        'actividade_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function actividade()
    {
        return $this->belongsTo(\App\Models\Actividade::class);
    }

    public function coordinador()
    {
        return $this->belongsTo(\App\Coordinador::class);
    }

}
