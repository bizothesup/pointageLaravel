<?php

namespace App\Repositories;

use App\Models\PointageParam;
use App\Repositories\BaseRepository;

/**
 * Class PointageParamRepository
 * @package App\Repositories
 * @version May 9, 2020, 12:42 am UTC
*/

class PointageParamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'heure_debut_service',
        'heure_fin_service',
        'nombre_heure_travail'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PointageParam::class;
    }
}
