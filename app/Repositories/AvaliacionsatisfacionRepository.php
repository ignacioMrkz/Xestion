<?php

namespace App\Repositories;

use App\Models\Avaliacionsatisfacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AvaliacionsatisfacionRepository
 * @package App\Repositories
 * @version March 7, 2019, 1:34 pm CET
 *
 * @method Avaliacionsatisfacion findWithoutFail($id, $columns = ['*'])
 * @method Avaliacionsatisfacion find($id, $columns = ['*'])
 * @method Avaliacionsatisfacion first($columns = ['*'])
*/
class AvaliacionsatisfacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Avaliacionsatisfacion::class;
    }
}
