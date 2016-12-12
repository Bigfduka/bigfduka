<?php namespace Ad\Amadeus\Controllers;

use Backend\Classes\Controller;
use BackendMenu;


class Movie extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Ad.Amadeus', 'main-menu-item');
    }
    public function boot()
{
    \Event::listen('offline.sitesearch.query', function ($query) {

        // Search your plugin's contents
        $items = Movie::where('name', "%${query}%")->get();

        // Now build a results array
        $results = $items->map(function ($item) use ($query) {

            // If the query is found in the title, set a relevance of 2
            $relevance = mb_stripos($item->name, $query) !== false ? 2 : 1;

            return [
                'title'     => $item->name,
                
                'url'       => '/search/' . $item->slug,
                'thumb'     => $item->image, // Instance of System\Models\File
                'relevance' => $relevance, // higher relevance results in a higher
                                           // position in the results listing
                // 'meta' => 'data',       // optional, any other information you want
                                           // to associate with this result
            ];
        });

        return [
            'provider' => 'Blog', // The badge to display for this result
            'results'  => $results,
        ];
    });
}
}