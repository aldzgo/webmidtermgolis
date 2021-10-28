<?php

namespace App\Repositories;

use App\Models\Animecharacters;
use App\Repositories\BaseRepository;

/**
 * Class AnimecharactersRepository
 * @package App\Repositories
 * @version October 28, 2021, 12:22 am UTC
*/

class AnimecharactersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'img',
        'name',
        'FromAnime',
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
        return Animecharacters::class;
    }
}
