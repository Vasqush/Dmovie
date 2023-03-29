<?php

namespace App\ViewModels;

use Illuminate\Support\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    public $popularMovies;
    public $nowPlayingMovies;
    public $genres;
    public function __construct($popularMovies, $nowPlayingMovies, $genres)
    {
        $this->popularMovies = $popularMovies;
        $this->nowPlayingMovies = $nowPlayingMovies;
        $this->genres = $genres;
    }
    public function popularMovies()
    {
        return $this->formatMovies($this->popularMovies);
    }
    public function nowPlayingMovies()
    {
        return $this->formatMovies($this->nowPlayingMovies);
    }
    public function genres()
    {
        return  collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }
    private function formatMovies($movies)
    {
        return collect($movies)->map(function ($movie){
            $formattedGenre = collect($movie['genre_ids'])->mapWithKeys(function ($genre_id) {
               return [$genre_id => $this->genres()->get($genre_id)];
            })->implode(', ');

            $releaseDate = $movie['release_date'] ?? $movie['first_air_date'] ?? null;

            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'],
                'vote_average' => $movie['vote_average'] * 10 . '%',
                'release_date' => Carbon::parse($releaseDate)->format('d M, Y') ?? '',
                'genres' => $formattedGenre,
            ])->only([
                'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'overview', 'release_date', 'genres', 'haha',
            ]);
        });
    }
}
