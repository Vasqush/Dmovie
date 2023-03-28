<?php

namespace App\ViewModels;

use Illuminate\Support\Carbon;
use Spatie\ViewModels\ViewModel;

class TvShowViewModel extends ViewModel
{
    public $tv;
    public function __construct($tv)
    {
        $this->tv = $tv;
    }

    public function tv()
    {
        return collect($this->tv)->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w300/' . $this->tv['poster_path'],
            'vote_average' => $this->tv['vote_average'] * 10 . '%',
            'first_air_date' => Carbon::parse($this->tv['first_air_date'])->format('M d, Y'),
            'genres' => collect($this->tv['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->tv['credits']['crew'])->take(2),
            'cast' => collect($this->tv['credits']['cast'])->take(5),
            'images' => collect($this->tv['images']['backdrops'])->take(9),
        ])->only([
            'poster_path', 'vote_average', 'first_air_date', 'genres', 'crew', 'cast', 'images', 'overview', 'videos', 'name', 'original_name', 'id', 'number_of_seasons', 'number_of_episodes', 'created_by', 'last_episode_to_air', 'next_episode_to_air', 'homepage', 'in_production', 'languages', 'last_air_date', 'status', 'tagline', 'type'
        ]);
    }
}
