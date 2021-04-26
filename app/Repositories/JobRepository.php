<?php

namespace App\Repositories;

use App\Models\Job;
use App\Repositories\BaseRepository;

/**
 * Class JobRepository
 * @package App\Repositories
 * @version April 26, 2021, 1:44 pm UTC
*/

class JobRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Job::class;
    }
}
