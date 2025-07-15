<?php

namespace App\Repositories;

use App\Models\Socio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SocioRepository
 * @package App\Repositories
 * @version January 15, 2020, 7:38 am CET
 *
 * @method Socio findWithoutFail($id, $columns = ['*'])
 * @method Socio find($id, $columns = ['*'])
 * @method Socio first($columns = ['*'])
*/
class SocioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Socio::class;
    }
}
