<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CartRfid
 * @package App\Models
 * @version May 8, 2020, 10:53 pm UTC
 *
 * @property integer $employe_id
 * @property boolean $is_valid
 * @property string $matricule
 * @property string $numero_carte
 * @property string $identifiant_carte
 */
class CartRfid extends Model
{
    use SoftDeletes;

    public $table = 'card_rfid';


    protected $dates = ['deleted_at'];

    public $timestamps = false;

    public $fillable = [
        'employe_id',
        'is_valid',
        'matricule',
        'numero_carte',
        'identifiant_carte'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employe_id' => 'integer',
        'is_valid' => 'boolean',
        'matricule' => 'string',
        'numero_carte' => 'string',
        'identifiant_carte' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero_carte' => 'unique:cart_rfids',
        'identifiant_carte' => 'required|unique:cart_rfids',
        'employe_id' => 'required|exists:employes,id'
    ];


    public function employe()
    {
    return $this->belongTo(Employe::class);
    }

}
