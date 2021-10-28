<?php

namespace App\Repositories;

use App\Models\Animelists;
use App\Repositories\BaseRepository;

/**
 * Class AnimelistsRepository
 * @package App\Repositories
 * @version October 27, 2021, 11:58 pm UTC
*/

class AnimelistsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'AnimeTitle',
        'Genre',
        'Episodes',
        'Released',
        'Description'
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
        return Animelists::class;
    }
}
