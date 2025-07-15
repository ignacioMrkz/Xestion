<?php

namespace App\Repositories;

use App\Models\Incidencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class IncidenciaRepository
 * @package App\Repositories
 * @version February 4, 2020, 7:22 am CET
 *
 * @method Incidencia findWithoutFail($id, $columns = ['*'])
 * @method Incidencia find($id, $columns = ['*'])
 * @method Incidencia first($columns = ['*'])
*/
class IncidenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Incidencia::class;
    }
}
