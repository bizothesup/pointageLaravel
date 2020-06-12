<?php

namespace App\Repositories;

use App\Models\EmployeSortiePointage;
use App\Repositories\BaseRepository;

/**
 * Class EmployeSortiePointageRepository
 * @package App\Repositories
 * @version May 9, 2020, 12:37 am UTC
*/

class EmployeSortiePointageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employe_id',
        'jour',
        'mois',
        'annes',
        'heure_sortie',
        'heure_retour',
        'numero_carte',
        'matricule_employe'
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
        return EmployeSortiePointage::class;
    }
}
