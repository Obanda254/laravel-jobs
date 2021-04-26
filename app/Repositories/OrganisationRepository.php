<?php

namespace App\Repositories;

use App\Models\Organisation;
use App\Repositories\BaseRepository;

/**
 * Class OrganisationRepository
 * @package App\Repositories
 * @version April 26, 2021, 1:45 pm UTC
*/

class OrganisationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'name',
        'description',
        'city',
        'state',
        'country_id',
        'contact_details'
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
        return Organisation::class;
    }
}
