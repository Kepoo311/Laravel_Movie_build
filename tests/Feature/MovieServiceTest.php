<?php

namespace Tests\Feature;

use App\Services\MovieService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MovieServiceTest extends TestCase
{
    private MovieService $MovieService;

    public function setUp():void{
        parent::setUp();
        $this->MovieService = $this->app->make(MovieService::class);
    }

    public function testSample(){
        $cek = $this->MovieService->getMovieBIG();
        self::assertEquals('Animal',$cek[1]->title);
    }
}
