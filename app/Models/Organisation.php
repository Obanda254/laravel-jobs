<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Organisation
 * @package App\Models
 * @version April 26, 2021, 1:45 pm UTC
 *
 * @property integer $user_id
 * @property string $name
 * @property string $description
 * @property string $city
 * @property string $state
 * @property string $country_id
 * @property string $contact_details
 */
class Organisation extends Model
{
    use SoftDeletes;

    public $table = 'organisations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'name',
        'description',
        'city',
        'state',
        'country_id',
        'contact_details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country_id' => 'string',
        'contact_details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'city' => 'nullable|string|max:255',
        'state' => 'nullable|string|max:255',
        'country_id' => 'nullable|string|max:255',
        'contact_details' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
