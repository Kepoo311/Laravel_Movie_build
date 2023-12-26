<?php

namespace App\Http\Controllers;

use App\Services\MovieService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MovieController extends Controller
{
    private MovieService $MovieService;

    public function __construct(MovieService $movieService){
        $this->MovieService = $movieService;
    }

    public function movie(Request $req){
        $bigMovie = $this->MovieService->getMovieBIG();
        $movie = $this->MovieService->getMovieRekomend();
        $latest = $this->MovieService->getMovieLatest();
        $genre = $this->MovieService->getMovieGenres();
        return Response()->view('movie.movie',[
            'title' => 'Its KepoFlix Time!!',
            'bigmov' => $bigMovie,
            'rekomend' => $movie,
            'latestmov' => $latest,
            'genre' => $genre
        ]);
    }

    public function genre(Request $req,String $genre){
        $genres = $this->MovieService->getMovieGenres();
        $getGenre = $this->MovieService->movieGenre($genre);
        return Response()->view('movie.genre',[
            'title' => 'What A Good Choose!!',
            'genre' => $genres,
            'movieGenre' => $getGenre,
            'genreSearch' => $genre
        ]);
    }
    public function search(Request $req){
        $searchnya = $req->input("sercing");
        $genres = $this->MovieService->getMovieGenres();
        $getSearch = $this->MovieService->movieSearch($searchnya);
        return Response()->view('movie.search',[
            'title' => 'What A Good Choose!!',
            'genre' => $genres,
            'movieSearch' => $getSearch,
            'Search' => $searchnya
        ]);
    }

    public function getEmbed(Request $req,string $idMovie){
        $genres = $this->MovieService->getMovieGenres();
        $getInfo = $this->MovieService->getMovieInfo($idMovie);
        $embed = $this->MovieService->trailerEmbed($getInfo[0]->trailer);
        return Response()->view('movie.player',[
            'title' => "KepoFlix ". $getInfo[0]->title,
            'movie' => $getInfo,
            'genre' => $genres,
            'embed' => $embed
        ]);
    }

}
 