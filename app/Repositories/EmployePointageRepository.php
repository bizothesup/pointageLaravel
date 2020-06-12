<?php

namespace App\Repositories;

use App\Models\EmployePointage;
use App\Repositories\BaseRepository;

/**
 * Class EmployePointageRepository
 * @package App\Repositories
 * @version May 8, 2020, 10:44 pm UTC
*/

class EmployePointageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employe_id',
        'date-service',
        'num_carte',
        'matricule_employe',
        'mois',
        'annees',
        'heure_debut_service',
        'heure_fin_service'
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
        return EmployePointage::class;
    }
}
