<?php

namespace App\Repositories;

use App\Models\CartRfid;
use App\Repositories\BaseRepository;

/**
 * Class CartRfidRepository
 * @package App\Repositories
 * @version May 8, 2020, 10:53 pm UTC
*/

class CartRfidRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employe_id',
        'is_valid',
        'matricule',
        'numero_carte',
        'identifiant_carte'
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
        return CartRfid::class;
    }


}
