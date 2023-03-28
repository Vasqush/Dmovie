<?php

namespace App\ViewModels;

use Illuminate\Support\Carbon;
use Spatie\ViewModels\ViewModel;

class ActorViewModel extends ViewModel
{
    public $actor;
    public $social;
    public $credits;
    public function __construct($actor, $social, $credits)
    {
        $this->actor = $actor;
        $this->social = $social;
        $this->credits = $credits;
    }

    public function popularActor()
    {
        return collect($this->actor)->merge([
            'birthday' => \Carbon\Carbon::parse($this->actor['birthday'])->format('M d, Y'),
            'age' => \Carbon\Carbon::parse($this->actor['birthday'])->age,
            'profile_path' => $this->actor['profile_path']
                ? 'https://image.tmdb.org/t/p/w300/' . $this->actor['profile_path']
                : 'https://ui-avatars.com/api/?size=235&name=' . $this->actor['name'],
        ]);
    }
    public function social()
    {
        return collect($this->social)->merge([
            'twitter' => $this->social['twitter_id']
                ? 'https://twitter.com/' . $this->social['twitter_id']
                : null,
            'facebook' => $this->social['facebook_id']
                ? 'https://facebook.com/' . $this->social['facebook_id']
                : null,
            'instagram' => $this->social['instagram_id']
                ? 'https://instagram.com/' . $this->social['instagram_id']
                : null,
        ]);
    }

    public function knownForTitles()
    {
        $castTitles = collect($this->credits)->get('cast');

        return collect($castTitles)->where('media_type', 'movie')->sortByDesc('popularity')->take(8)->map(function ($title) {
            if (isset($title['title'])) {
                $title['name'] = $title['title'];
            }
            return collect($title)->merge([
                'poster_path' => $title['poster_path']
                    ? 'https://image.tmdb.org/t/p/w185/' . $title['poster_path']
                    : 'https://via.placeholder.com/185x278',
                'media_type' => \Str::ucfirst($title['media_type']),
            ])->only([
                'poster_path', 'id', 'media_type', 'name',
            ]);
        });
    }
    public function credits()
    {
        $castMovies = collect($this->credits)->get('cast');

        return collect($castMovies)->map(function ($movie) {
            $releaseDate = $movie['release_date'] ?? $movie['first_air_date'] ?? null;

            $title = $movie['title'] ?? $movie['name'] ?? 'Untitled';

            return collect($movie)->merge([
                'release_date' => $releaseDate,
                'release_year' => isset($releaseDate) ? Carbon::parse($releaseDate)->format('Y') : 'Future',
                'title' => $title,
                'character' => $movie['character'].ob_get_length() < 2 ? 'N/A' : $movie['character'],
            ])->only([
                'release_date', 'release_year', 'title', 'character',
            ]);
        })->sortByDesc('release_date');
    }
}
