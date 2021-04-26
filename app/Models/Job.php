<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Job
 * @package App\Models
 * @version April 26, 2021, 1:44 pm UTC
 *
 * @property integer $user_id
 * @property integer $organisation_id
 * @property integer $country_id
 * @property integer $title
 * @property integer $skills_required
 * @property integer $description
 * @property string $work_type
 * @property string $job_type
 * @property string $status
 */
class Job extends Model
{
    use SoftDeletes;

    public $table = 'jobs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'organisation_id',
        'country_id',
        'title',
        'skills_required',
        'description',
        'work_type',
        'job_type',
        'status'
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
        'country_id' => 'integer',
        'title' => 'integer',
        'skills_required' => 'integer',
        'description' => 'integer',
        'work_type' => 'string',
        'job_type' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'organisation_id' => 'nullable|integer',
        'country_id' => 'nullable|integer',
        'title' => 'required|integer',
        'skills_required' => 'required|integer',
        'description' => 'required|integer',
        'work_type' => 'required|string|max:255',
        'job_type' => 'required|string|max:255',
        'status' => 'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
