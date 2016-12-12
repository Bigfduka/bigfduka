<?php namespace Ad\Amadeus\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ad_amadeus_genre';
     public $belongsToMany = [
        'movies'=>['ad\amadeus\models\Movie',
        'table'=>'ad_amadeus_movie_genre',
        'order'=>'name',
        ]];
}