<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PointageParam
 * @package App\Models
 * @version May 9, 2020, 12:42 am UTC
 *
 * @property string $heure_debut_service
 * @property string $heure_fin_service
 * @property string $nombre_heure_travail
 */
class PointageParam extends Model
{
    use SoftDeletes;

    public $table = 'pointage_param';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'heure_debut_service',
        'heure_fin_service',
        'nombre_heure_travail'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'heure_debut_service' => 'string',
        'heure_fin_service' => 'string',
        'nombre_heure_travail' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'heure_debut_service' => 'required',
        'heure_fin_service' => 'required'
    ];

    
}
