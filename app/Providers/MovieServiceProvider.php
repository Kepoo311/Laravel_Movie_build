<?php

namespace App\Providers;

use App\Services\Imple\MovieServiceImple;
use App\Services\MovieService;
use Illuminate\Support\ServiceProvider;

class MovieServiceProvider extends ServiceProvider
{
    public array $singletons = [
        MovieService::class => MovieServiceImple::class
    ];

    public function provides(){
        return [MovieService::class];
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
