<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Socio
 * @package App\Models
 * @version January 15, 2020, 7:38 am CET
 *
 * @property integer edicion
 * @property integer ano
 * @property string numero
 * @property string nome
 * @property integer idade
 * @property boolean cesion
 * @property string localidade
 * @property string telefono
 * @property string email
 * @property boolean xenero
 */
class Socio extends Model
{
    use SoftDeletes;

    public $table = 'socios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'edicion',
        'ano',
        'numero',
        'espazo',
        'nome',
        'idade',
        'cesion',
        'localidade',
        'telefono',
        'telefono2',
        'email',
        'xenero'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'edicion' => 'integer',
        'ano' => 'integer',
        'numero' => 'string',
        'espazo' => 'string',
        'nome' => 'string',
        'idade' => 'integer',
        'cesion' => 'string',
        'localidade' => 'string',
        'telefono' => 'string',
        'telefono2' => 'string',
        'email' => 'string',
        'xenero' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'edicion' => 'required',
        'ano' => 'required',
        'numero' => 'required',
        'espazo' => 'required',
        'nome' => 'required',
        'idade' => 'required',
        'cesion' => 'required',
        'localidade' => 'required',
        'telefono' => 'required',
        'email' => 'required',
        'xenero' => 'required'
    ];

    
}
