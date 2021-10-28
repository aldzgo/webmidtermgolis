<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Animelists
 * @package App\Models
 * @version October 27, 2021, 11:58 pm UTC
 *
 * @property string $AnimeTitle
 * @property string $Genre
 * @property string $Episodes
 * @property string $Released
 * @property string $Description
 */
class Animelists extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'animelists';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'AnimeTitle',
        'Genre',
        'Episodes',
        'Released',
        'Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'AnimeTitle' => 'string',
        'Genre' => 'string',
        'Episodes' => 'string',
        'Released' => 'date',
        'Description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'AnimeTitle' => 'nullable|string|max:100',
        'Genre' => 'nullable|string|max:50',
        'Episodes' => 'nullable|string|max:50',
        'Released' => 'nullable',
        'Description' => 'nullable|string|max:200',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
