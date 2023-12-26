<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .gepe a {
            margin-left: 20px
        }
    </style>
    <link
        href="https://fonts.googleapis.com/css2?family=Autour+One&family=Montserrat:wght@300&family=Nunito&family=Poppins:ital,wght@0,200;1,300&family=Quicksand&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>{{$title}}</title>
</head>

<body>
    <main class="bg-[rgb(15_25_30)] relative min-h-screen px-5 pt-5">
        <main class="flex flex-col gap-10">
            @include('Component.navbar')

            <section>
                <div id="default-carousel" class="relative w-full z-10" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-[3000ms] ease-in-out" data-carousel-item>
                            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 justify-items-center">
                                @for ($i = 0; $i < 3; $i++)
                                <div class="bg-[rgb(26,43,50)] h-[340px] w-96 overflow-hidden rounded-xl animate-[pulse_1s_linear]">
                                    <section
                                        class="overflow-hidden duration-500 delay-1000 hover:h-[10rem] h-[10rem] max-[900px]:hover:h-[5rem] xl:h-[16rem]  -z-20">
                                        <img src="{{$bigmov[$i]->banner}}" alt="">
                                    </section>
                                    <section class="flex flex-col">
                                        <h1 class="text-white font-poppins text-xl mx-3 mt-3">{{$bigmov[$i]->title}}</h1>
                                        <p class="font-nunito mx-3 text-sm text-white">{{$bigmov[$i]->rating}} | {{$bigmov[$i]->rilis_date}} | {{$bigmov[$i]->durasi}}</p>
                                        <section class="justify-self-center text-center mt-10">
                                            <a class="text-white font-poppins rounded-md text-center p-2 h-10 w-20 bg-[rgb(15_25_30)] border border-[rgba(255,255,255,0.17)] duration-500 hover:border-[rgba(255,215,0)]"
                                                href="/player/{{$bigmov[$i]->id}}">Watch Now!!</a>
                                            <a class="text-white ml-2 font-poppins rounded-md text-center p-2 h-10 w-20 border border-[rgba(255,255,255,0.17)] duration-500 hover:border-[rgba(255,215,0)]"
                                                href="#">Add To List</a>
                                        </section>
                                    </section>
                                </div>
                                @endfor
                            </section>
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-[3000ms] ease-in-out" data-carousel-item>
                            <section class="grid grid-cols-1 xl:grid-cols-3 justify-items-center">
                                @for ($i = 3; $i < 6; $i++)
                                <div class="bg-[rgb(26,43,50)] h-[340px] w-96 overflow-hidden rounded-xl animate-[pulse_1s_linear]">
                                    <section
                                        class="overflow-hidden duration-500 delay-1000 hover:h-[10rem] h-[10rem] max-[900px]:hover:h-[5rem] xl:h-[16rem]  -z-20">
                                        <img src="{{$bigmov[$i]->banner}}" alt="">
                                    </section>
                                    <section class="flex flex-col">
                                        <h1 class="text-white font-poppins text-xl mx-3 mt-3">{{$bigmov[$i]->title}}</h1>
                                        <p class="font-nunito mx-3 text-sm text-white">{{$bigmov[$i]->rating}} | {{$bigmov[$i]->rilis_date}} | {{$bigmov[$i]->durasi}}</p>
                                        <section class="justify-self-center text-center mt-10">
                                            <a class="text-white font-poppins rounded-md text-center p-2 h-10 w-20 bg-[rgb(15_25_30)] border border-[rgba(255,255,255,0.17)] duration-500 hover:border-[rgba(255,215,0)]"
                                                href="/player/{{$bigmov[$i]->id}}">Watch Now!!</a>
                                            <a class="text-white ml-2 font-poppins rounded-md text-center p-2 h-10 w-20 border border-[rgba(255,255,255,0.17)] duration-500 hover:border-[rgba(255,215,0)]"
                                                href="#">Add To List</a>
                                        </section>
                                    </section>
                                </div>
                                @endfor
                            </section>
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </section>

            <section class="bg-[rgb(11,17,20)] rounded-xl min-h-screen">
                <nav class="text-center mt-3">
                    <h1 class="text-white font-quicksand">"More Than a Website - A Cinematic Experience."</h1>
                </nav>
                <main>
                    <h1 class="text-white font-poppins text-2xl m-5">Recommended</h1>
                    <main class="grid sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 grid-cols-2 xl:ml-5">
                        @foreach ($rekomend as $reko)
                        <a class="w-48" data-popover-target="popover-bottom{{$loop->iteration}}" data-popover-placement="bottom" href="/player/{{$reko->id}}">
                            <div class="mt-5 h-80 w-48 bg-[rgb(26,43,50)] overflow-hidden rounded-lg animate-[pulse_1s_linear]">
                                <section class="overflow-hidden h-[15rem]">
                                    <img class="" src="{{$reko->banner}}" alt="">
                                </section>
                                <section class="m-2">
                                    <h1 class="text-white font-poppins">{{$reko->title}}</h1>
                                    <p class="text-gray-300 font-monts text-xs mt-1">{{$reko->tipe}} . {{$reko->rilis_date}} . {{$reko->durasi}}</p>
                                </section>
                                <div data-popover id="popover-bottom{{$loop->iteration}}" role="tooltip"
                                    class="absolute z-10 invisible inline-block w-64 text-sm transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 text-gray-400 border-gray-600 bg-gray-800">
                                    <div
                                    class="px-3 py-2 rounded-t-lg border-gray-600 bg-gray-700">
                                        <h3 class="font-semibold text-white">{{$reko->title}}</h3>
                                    </div>
                                    <div class="px-3 py-2">
                                        <p>
                                            {{$reko->sinopsis}}
                                        </p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </main>
                </main>
            </section>

            @include('Component.ads')

            <section class="bg-[rgb(24,33,37)] rounded-xl min-h-screen">
                <nav class="text-center mt-3">
                </nav>
                <main>
                    <h1 class="text-white font-poppins text-2xl m-5">All Movies</h1>
                    <main class="grid sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 grid-cols-2 xl:ml-5">
                        @foreach ($latestmov as $latest)
                        <a class="w-48" data-popover-target="popover-bottom{{$loop->iteration}}{{$loop->iteration}}" data-popover-placement="bottom" href="/player/{{$latest->id}}">
                            <div class="mt-5 h-80 w-48 bg-[rgb(26,43,50)] overflow-hidden rounded-lg animate-[pulse_1s_linear]">
                                <section class="overflow-hidden h-[15rem]">
                                    <img class="" src="{{$latest->banner}}" alt="">
                                </section>
                                <section class="m-2">
                                    <h1 class="text-white font-poppins">{{$latest->title}}</h1>
                                    <p class="text-gray-300 font-monts text-xs mt-1">{{$latest->rating}} . {{$latest->rilis_date}} . {{$latest->durasi}}</p>
                                </section>
                                <div data-popover id="popover-bottom{{$loop->iteration}}{{$loop->iteration}}" role="tooltip"
                                    class="absolute z-10 invisible inline-block w-64 text-sm transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 text-gray-400 border-gray-600 bg-gray-800">
                                    <div
                                        class="px-3 py-2 rounded-t-lg border-gray-600 bg-gray-700">
                                        <h3 class="font-semibold text-white">{{$latest->title}}</h3>
                                    </div>
                                    <div class="px-3 py-2">
                                        <p>
                                            {{$latest->sinopsis}}
                                        </p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </main>
                </main>
            </section>
            @include('Component.footer')
        </main>
    </main>

    <script src="https://kit.fontawesome.com/65fd5af23f.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
