<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployePointage
 * @package App\Models
 * @version May 8, 2020, 10:44 pm UTC
 *
 * @property number $enmploye_id
 * @property string $date-service
 * @property string $num_carte
 * @property string $matricule_employe
 * @property string $mois
 * @property string $annees
 * @property time $heure_debut_service
 * @property time $heure_fin_service
 */
class EmployePointage extends Model
{
    use SoftDeletes;

    public $table = 'employee_pointage';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'employe_id',
        'date_service',
        'num_carte',
        'matricule_employe',
        'mois',
        'annees',
        'heure_debut_service',
        'heure_fin_service'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_service' => 'string',
        'num_carte' => 'string',
        'matricule_employe' => 'string',
        'mois' => 'string',
        'annees' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function employe()
    {
        return $this->belongTo(Employe::class);
    }



}
