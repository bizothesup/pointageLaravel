<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employe
 * @package App\Models
 * @version May 8, 2020, 10:46 pm UTC
 *
 * @property string $matircule
 * @property string $nom
 * @property string $prenom
 * @property string $date_naissance
 * @property string $lieu_naissance
 * @property string $profession
 * @property string $service
 * @property string $email
 * @property string $adressse
 * @property string $photo
 */
class Employe extends Model
{
    use SoftDeletes;

    public $table = 'employes';
    

    protected $dates = ['deleted_at'];

    public $timestamps = false;

    public $fillable = [
        'matircule',
        'nom',
        'prenom',
        'date_naissance',
        'lieu_naissance',
        'profession',
        'service',
        'email',
        'adressse',
        'photo',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'matricule' => 'string',
        'nom' => 'string',
        'prenom' => 'string',
        'date_naissance' => 'date',
        'lieu_naissance' => 'string',
        'profession' => 'string',
        'service' => 'string',
        'email' => 'string',
        'adressse' => 'string',
        'photo' => 'string',
        'is_active'=>'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email|unique:employes',
    ];

    
}
