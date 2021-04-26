<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrganisationUser
 * @package App\Models
 * @version April 26, 2021, 1:48 pm UTC
 *
 * @property integer $user_id
 * @property integer $organisation_id
 * @property string $start_date
 * @property string $end_date
 * @property string $role
 */
class OrganisationUser extends Model
{
    use SoftDeletes;

    public $table = 'organisation_user';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'organisation_id',
        'start_date',
        'end_date',
        'role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'organisation_id' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'role' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'organisation_id' => 'required|integer',
        'start_date' => 'nullable',
        'end_date' => 'nullable',
        'role' => 'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
