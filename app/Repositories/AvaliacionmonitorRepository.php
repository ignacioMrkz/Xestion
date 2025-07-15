<?php

namespace App\Repositories;

use App\Models\Avaliacionmonitor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AvaliacionmonitorsRepository
 * @package App\Repositories
 * @version March 7, 2019, 1:15 pm CET
 *
 * @method Avaliacionmonitors findWithoutFail($id, $columns = ['*'])
 * @method Avaliacionmonitors find($id, $columns = ['*'])
 * @method Avaliacionmonitors first($columns = ['*'])
*/
class AvaliacionmonitorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'monitors',
        'data',
        'participantes',
        'primeiravez',
        'publico',
        'fora',
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
     * Configure the Model
     **/
    public function model()
    {
        return Avaliacionmonitor::class;
    }
}
