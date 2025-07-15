<?php

namespace App\Repositories;

use App\Models\Actividade;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ActividadeRepository
 * @package App\Repositories
 * @version March 7, 2019, 1:06 pm CET
 *
 * @method Actividade findWithoutFail($id, $columns = ['*'])
 * @method Actividade find($id, $columns = ['*'])
 * @method Actividade first($columns = ['*'])
*/
class ActividadeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Actividade::class;
    }
}
