<?php namespace Ad\Amadeus\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
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
    public $table = 'ad_amadeus_';
    public $belongsToMany = [
        'genres'=>['ad\amadeus\models\Genre',
        'table'=>'ad_amadeus_movie_genre',
        'order'=>'genre_name',
        ]];
}