<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Skill
 * @package App\Models
 * @version April 26, 2021, 1:50 pm UTC
 *
 * @property string $name
 * @property integer $user_id
 * @property string $start_date
 * @property string $skill_level
 * @property string $past_work_history
 * @property string $any_other_information
 * @property string|\Carbon\Carbon $admin_interview
 * @property integer $admin_user_id
 * @property string $score
 * @property string $interview_status
 * @property number $interview_amount_paid
 */
class Skill extends Model
{
    use SoftDeletes;

    public $table = 'skills';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'user_id',
        'start_date',
        'skill_level',
        'past_work_history',
        'any_other_information',
        'admin_interview',
        'admin_user_id',
        'score',
        'interview_status',
        'interview_amount_paid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'user_id' => 'integer',
        'start_date' => 'date',
        'skill_level' => 'string',
        'past_work_history' => 'string',
        'any_other_information' => 'string',
        'admin_interview' => 'datetime',
        'admin_user_id' => 'integer',
        'score' => 'string',
        'interview_status' => 'string',
        'interview_amount_paid' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'user_id' => 'required|integer',
        'start_date' => 'required',
        'skill_level' => 'nullable|string|max:255',
        'past_work_history' => 'nullable|string',
        'any_other_information' => 'nullable|string',
        'admin_interview' => 'nullable',
        'admin_user_id' => 'nullable|integer',
        'score' => 'nullable|string|max:255',
        'interview_status' => 'required|string|max:255',
        'interview_amount_paid' => 'nullable|numeric',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
