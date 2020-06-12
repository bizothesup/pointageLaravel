<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeSortiePointage
 * @package App\Models
 * @version May 9, 2020, 12:37 am UTC
 *
 * @property string $employe_id
 * @property string $jour
 * @property string $mois
 * @property string $annes
 * @property time $heure_sortie
 * @property time $heure_retour
 * @property string $numero_carte
 * @property string $matricule_employe
 */
class EmployeSortiePointage extends Model
{
    use SoftDeletes;

    public $table = 'employe_sortie_pointage';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employe_id' => 'string',
        'jour' => 'string',
        'mois' => 'string',
        'annes' => 'string',
        'numero_carte' => 'string',
        'matricule_employe' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    
}
