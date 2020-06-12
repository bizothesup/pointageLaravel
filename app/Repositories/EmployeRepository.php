<?php

namespace App\Repositories;

use App\Models\Employe;
use App\Repositories\BaseRepository;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class EmployeRepository
 * @package App\Repositories
 * @version May 8, 2020, 10:46 pm UTC
 */
class EmployeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'matricule',
        'nom',
        'prenom',
        'date_naissance',
        'lieu_naissance',
        'profession',
        'service',
        'email',
        'adressse',
        'photo'
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
        return Employe::class;
    }

    public function EmployeNoCard()
    {
       $result = DB::table('employes','emp')
               ->leftJoin('cart_rfids', 'emp.id', '!=', 'cart_rfids.employe_id')
                ->pluck('emp.matricule','emp.id');

           return $result;
    }

    public function generationMatricule(){
        $mytime = Carbon::now()->getTimestamp();
        $count = DB::table('employes')->count()+1;
        $matricule = 'EMP-'.$mytime.'/00'.$count;
        return $matricule;
    }
}
