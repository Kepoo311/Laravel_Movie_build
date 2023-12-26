<?php 
namespace App\Services\Imple;
use App\Services\MovieService;
use Cohensive\OEmbed\Facades\OEmbed;
use Illuminate\Support\Facades\DB;

class MovieServiceImple implements MovieService{
    public function getMovieBIG():array{
        $result = DB::table("movies")->orderBy('rilis_date','desc')->take(6)->get()->toArray();
        return $result;
    }
    public function getMovieRekomend():array{
        $result = DB::table("movies")->orderBy('rating','desc')->take(10)->get()->toArray();
        return $result;
    }

    public function getMovieLatest():array{
        $result = DB::table("movies")->orderBy('add_date','desc')->take(25)->get()->toArray();
        return $result;
    }

    public function getMovieGenres():array{
        $result = DB::table("genres")->get()->toArray();
        return $result;
    }

    public function movieGenre(string $genre):array{
        $result = DB::table("movies")->where("genre","like","%$genre%")
        ->get()->toArray();
        return $result;
    }

    public function movieSearch(string $search):array{
        $result = DB::table("movies")->where("title","like","%$search%")
        ->get()->toArray();
        return $result;
    }

    public function trailerEmbed(string $link){
        $embed = OEmbed::get("$link");
        return $embed;
    }

    public function getMovieInfo(string $idMovie):array{
        $result = DB::table("movies")->where("id","=","$idMovie")
        ->get()->toArray();
        return $result;
    }
}





?>