<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Incidencia
 * @package App\Models
 * @version February 4, 2020, 7:22 am CET
 *
 * @property \App\Models\Coordinador coordinador
 * @property \App\Models\Espazo espazo
 * @property string incidencia
 * @property integer coordinador_id
 * @property string espazo_id
 * @property integer aval_monitores
 * @property integer aval_usuarios
 * @property integer suxestions
 * @property integer cartel_suxestions
 * @property integer boligrafos
 * @property integer celo
 * @property integer carnes
 * @property integer cartel_fai_carne
 * @property integer carne_adultos
 * @property integer carne_menores
 * @property integer numeros_sorteos
 * @property integer cartel_sorteos
 * @property integer completo
 * @property integer programas
 * @property integer papel_hixienico
 * @property integer bolsas_lixo
 * @property integer panos_limpeza
 * @property integer produtos_limpieza
 * @property integer cartel_premios
 * @property integer cartel_servizos
 * @property integer vestiarios_mozos
 * @property integer vestiarios_mozas
 * @property integer controla_pertenzas
 * @property integer cartel_servizos
 * @property integer cinta_non_pasar
 * @property integer cartel_non_pasar
 * @property integer cartel_tiro
 * @property string outros
 */
class Incidencia extends Model
{
    use SoftDeletes;

    public $table = 'incidencias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'incidencia',
        'coordinador_id',
        'espazo_id',
        'aval_monitores',
        'aval_usuarios',
        'suxestions',
        'cartel_suxestions',
        'boligrafos',
        'celo',
        'carnes',
        'cartel_fai_carne',
        'carne_adultos',
        'carne_menores',
        'numeros_sorteos',
        'cartel_sorteos',
        'completo',
        'programas',
        'papel_hixienico',
        'bolsas_lixo',
        'panos_limpeza',
        'produtos_limpieza',
        'cartel_premios',
        'cartel_servizos',
        'vestiarios_mozos',
        'vestiarios_mozas',
        'controla_pertenzas',
        'cinta_non_pasar',
        'cartel_non_pasar',
        'cartel_tiro',
        'outros',
        'imaxe'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'incidencia' => 'string',
        'coordinador_id' => 'integer',
        'espazo_id' => 'string',
        'aval_monitores' => 'integer',
        'aval_usuarios' => 'integer',
        'suxestions' => 'integer',
        'cartel_suxestions' => 'integer',
        'boligrafos' => 'integer',
        'celo' => 'integer',
        'carnes' => 'integer',
        'cartel_fai_carne' => 'integer',
        'carne_adultos' => 'integer',
        'carne_menores' => 'integer',
        'numeros_sorteos' => 'integer',
        'cartel_sorteos' => 'integer',
        'completo' => 'integer',
        'programas' => 'integer',
        'papel_hixienico' => 'integer',
        'bolsas_lixo' => 'integer',
        'panos_limpeza' => 'integer',
        'produtos_limpieza' => 'integer',
        'cartel_premios' => 'integer',
        'cartel_servizos' => 'integer',
        'vestiarios_mozos' => 'integer',
        'vestiarios_mozas' => 'integer',
        'controla_pertenzas' => 'integer',
        'cinta_non_pasar' => 'integer',
        'cartel_non_pasar' => 'integer',
        'cartel_tiro' => 'integer',
        'outros' => 'string',
        'imaxe' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'coordinador_id' => 'required',
        'espazo_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function coordinador()
    {
        return $this->belongsTo(\App\Coordinador::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function espazo()
    {
        return $this->belongsTo(\App\Models\Espazo::class);
    }
}
