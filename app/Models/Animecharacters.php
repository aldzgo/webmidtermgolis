<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Animecharacters
 * @package App\Models
 * @version October 28, 2021, 12:22 am UTC
 *
 * @property string $img
 * @property string $name
 * @property string $FromAnime
 * @property string $Description
 */
class Animecharacters extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'animecharacters';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'img',
        'name',
        'FromAnime',
        'Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'img' => 'string',
        'name' => 'string',
        'FromAnime' => 'string',
        'Description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'img' => 'nullable|string|max:5000',
        'name' => 'nullable|string|max:100',
        'FromAnime' => 'nullable|string|max:100',
        'Description' => 'nullable|string|max:200',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
