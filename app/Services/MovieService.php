<?php 
namespace App\Services;

interface MovieService {
    public function getMovieBIG():array;
    public function getMovieRekomend():array;
    public function getMovieLatest():array;
    public function getMovieGenres():array;
    public function movieGenre(string $genre):array;
    public function movieSearch(string $search):array;
    public function trailerEmbed(string $link);
    public function getMovieInfo(string $idMovie):array;
}


?>