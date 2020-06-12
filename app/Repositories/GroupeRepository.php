<?php

namespace App\Repositories;

use App\Models\Groupe;
use App\Repositories\BaseRepository;

/**
 * Class GroupeRepository
 * @package App\Repositories
 * @version May 9, 2020, 12:38 am UTC
*/

class GroupeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Groupe::class;
    }
}
