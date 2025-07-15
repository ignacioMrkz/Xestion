<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Espazo
 * @package App\Models
 * @version March 7, 2019, 10:03 am CET
 *
 * @property \Illuminate\Database\Eloquent\Collection Avaliacionmonitor
 * @property string nome
 * @property string enderezo
 * @property string postal
 * @property string localidade
 * @property string mapa
 */
class Espazo extends Model
{
    use SoftDeletes;

    public $table = 'espazos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'enderezo',
        'postal',
        'localidade',
        'mapa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string',
        'enderezo' => 'string',
        'postal' => 'string',
        'localidade' => 'string',
        'mapa' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'enderezo' => '',
        'postal' => '',
        'localidade' => '',
        'mapa' => 'url|nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function avaliacionmonitors()
    {
        return $this->hasMany(\App\Models\Avaliacionmonitor::class);
    }

    public function actividades()
    {
    return $this->belongsToMany('App\Models\Actividade')->withTimestamps();
    }

    public function participantes()
    {
        $avaliacionmonitors = $this->avaliacionmonitors;
        $participantes = 0;
        foreach ($avaliacionmonitors as $avaliacion) {
            $participantes += $avaliacion->participantes;
        }
        return $participantes;
    }

    public function publico()
    {
        $avaliacionmonitors = $this->avaliacionmonitors;
        $publico = 0;
        foreach ($avaliacionmonitors as $avaliacion) {
            $publico += $avaliacion->publico;
        }
        return $publico;
    }

    public function fora()
    {
        $avaliacionmonitors = $this->avaliacionmonitors;
        $fora = 0;
        foreach ($avaliacionmonitors as $avaliacion) {
            $fora += $avaliacion->fora;
        }
        return $fora;
    }

    public function participantesFecha($inicio, $fin)
    {
        $avaliacionmonitors = $this->avaliacionmonitors->where('data', '>=', $inicio)->where('data', '<=', $fin);
        $participantes = 0;
        foreach ($avaliacionmonitors as $avaliacion) {
            $participantes += $avaliacion->participantes;
        }
        return $participantes;
    }

    public function publicoFecha($inicio, $fin)
    {
        $avaliacionmonitors = $this->avaliacionmonitors->where('data', '>=', $inicio)->where('data', '<=', $fin);
        $publico = 0;
        foreach ($avaliacionmonitors as $avaliacion) {
            $publico += $avaliacion->publico;
        }
        return $publico;
    }

    public function foraFecha($inicio, $fin)
    {
        $avaliacionmonitors = $this->avaliacionmonitors->where('data', '>=', $inicio)->where('data', '<=', $fin);
        $fora = 0;
        foreach ($avaliacionmonitors as $avaliacion) {
            $fora += $avaliacion->fora;
        }
        return $fora;
    }

}
