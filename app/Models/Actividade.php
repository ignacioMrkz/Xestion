<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Actividade
 * @package App\Models
 * @version March 7, 2019, 1:06 pm CET
 *
 * @property \Illuminate\Database\Eloquent\Collection Avaliacionsatisfacion
 * @property \Illuminate\Database\Eloquent\Collection Avaliacionmonitor
 * @property string nome
 * @property integer capacidade
 * @property date data
 * @property string horario
 * @property string materiais
 * @property string empresa
 */
class Actividade extends Model
{
    use SoftDeletes;

    public $table = 'actividades';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'subtitulo',
        'descripcion',
        'capacidade',
        'idade',
        'data',
        'horario',
        'materiais',
        'empresa',
        'ano',
        'edicion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string',
        'subtitulo' => 'string',
        'descripcion' => 'text',
        'capacidade' => 'integer',
        'idade' => 'string',
        'data' => 'date',
        'horario' => 'string',
        'materiais' => 'string',
        'empresa' => 'string',
        'ano' => 'integer',
        'edicion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        //'capacidade' => 'required',
        //'data' => 'required'
        'edicion' => 'required',
        'ano' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function avaliacionsatisfacions()
    {
        return $this->hasMany(\App\Models\Avaliacionsatisfacion::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function avaliacionmonitors()
    {
        return $this->hasMany(\App\Models\Avaliacionmonitor::class);
    }

    public function monitors()
    {
        return $this->belongsToMany('App\Monitor')->withTimestamps();
    }

    public function espazos()
    {
        return $this->belongsToMany('App\Models\Espazo')->withTimestamps();
    }

    public function eventos()
    {
        return $this->hasMany(\App\Models\Evento::class);
    }

    public function totalEstados()
    {
        $avaliacions = $this->avaliacionsatisfacions()->get();
        $totalEstados = [];
        foreach ($avaliacions as $avaliacion) {
            $estados = explode('|', $avaliacion->estado);
            $totalEstados = array_merge($totalEstados, $estados);
        }
        return $totalEstados;
    }

    public function totalMotivacion()
    {
        $avaliacions = $this->avaliacionsatisfacions()->get();
        $totalMotivacion = [];
        foreach ($avaliacions as $avaliacion) {
            $motivacions = explode('|', $avaliacion->motivacion);
            $totalMotivacion = array_merge($totalMotivacion, $motivacions);
        }
        return $totalMotivacion;
    }
    
    public function totalEncontrou()
    {
        $avaliacions = $this->avaliacionsatisfacions()->get();
        $totalEncontrou = [];
        foreach ($avaliacions as $avaliacion) {
            $encontrous = explode('|', $avaliacion->encontrou);
            $totalEncontrou = array_merge($totalEncontrou, $encontrous);
        }
        return $totalEncontrou;
    }
}
