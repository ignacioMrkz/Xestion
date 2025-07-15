<?php

namespace App\Repositories;

use App\Models\Espazo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EspazoRepository
 * @package App\Repositories
 * @version March 7, 2019, 10:03 am CET
 *
 * @method Espazo findWithoutFail($id, $columns = ['*'])
 * @method Espazo find($id, $columns = ['*'])
 * @method Espazo first($columns = ['*'])
*/
class EspazoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'enderezo',
        'postal',
        'localidade',
        'mapa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Espazo::class;
    }
}
