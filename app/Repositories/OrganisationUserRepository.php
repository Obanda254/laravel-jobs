<?php

namespace App\Repositories;

use App\Models\OrganisationUser;
use App\Repositories\BaseRepository;

/**
 * Class OrganisationUserRepository
 * @package App\Repositories
 * @version April 26, 2021, 1:48 pm UTC
*/

class OrganisationUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'organisation_id',
        'start_date',
        'end_date',
        'role'
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
        return OrganisationUser::class;
    }
}
