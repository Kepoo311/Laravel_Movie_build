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
            @include('Component.ads')

            <section class="bg-[rgb(11,17,20)] rounded-xl min-h-screen">
                <main>
                    <h1 class="text-white font-poppins text-2xl m-5">Your Result For {{$Search}}:</h1>
                    <main class="grid justify-items-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 grid-cols-1 xl:ml-5">
                        @foreach ($movieSearch as $movGen)
                        <a class="w-48" data-popover-target="popover-bottom{{$loop->iteration}}" data-popover-placement="bottom" href="/player/{{$movGen->id}}">
                            <div class="mt-5 h-80 w-48 bg-[rgb(26,43,50)] overflow-hidden rounded-lg">
                                <section class="overflow-hidden h-[15rem]">
                                    <img class="" src="{{$movGen->banner}}" alt="">
                                </section>
                                <section class="m-2">
                                    <h1 class="text-white font-poppins">{{$movGen->title}}</h1>
                                    <p class="text-gray-300 font-monts text-xs mt-1">{{$movGen->rating}} . {{$movGen->rilis_date}} . {{$movGen->durasi}}</p>
                                </section>
                                <div data-popover id="popover-bottom{{$loop->iteration}}" role="tooltip"
                                    class="absolute z-10 invisible inline-block w-64 text-sm transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 text-gray-400 border-gray-600 bg-gray-800">
                                    <div
                                        class="px-3 py-2 rounded-t-lg border-gray-600 bg-gray-700">
                                        <h3 class="font-semibold text-white">{{$movGen->title}}</h3>
                                    </div>
                                    <div class="px-3 py-2">
                                        <p>
                                            {{$movGen->sinopsis}}
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
