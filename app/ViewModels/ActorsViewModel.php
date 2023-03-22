<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ActorsViewModel extends ViewModel
{
    public $popularActors;
    public $page;
    public function __construct($popularActors, $page)
    {
        $this->popularActors = $popularActors;
        $this->page = $page;
    }

    public function popularActors()
    {
        return collect($this->popularActors)->map(function ($actor){
            return collect($actor)->merge([
                'profile_path' =>$actor['profile_path']
                    ? 'https://image.tmdb.org/t/p/w500/' . $actor['profile_path'] : 'https://via.placeholder.com/400x600' ,
                'known_for' => collect($actor['known_for'])
                    ->where('media_type', 'tv')
                    ->pluck('name')
                    ->union(collect($actor['known_for'])
                        ->where('media_type', 'movie')
                        ->pluck('title'))
                    ->implode(', '),
            ])->only([
                'name', 'id', 'known_for_department', 'profile_path', 'known_for'
            ]);
        });
    }

    public function previous()
    {
        return $this->page > 1 ? $this->page - 1 : null;
    }
    public function next()
    {
        return $this->page < 500 ? $this->page + 1 : null;
    }
}
