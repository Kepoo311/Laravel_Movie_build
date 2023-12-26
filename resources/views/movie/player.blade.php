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

            <section class="bg-[rgb(11,17,20)] rounded-xl xl:min-h-screen">
                <main class="grid grid-cols-1 xl:grid-cols-4 gap-8" >
                    <div class="xl:col-span-3 bg-[rgb(13,29,33)] xl:min-h-screen rounded-lg">
                        <section class="container overflow-hidden xl:contents min-[350px]:hidden">
                            {!!$embed->html(['width' => 1050])!!}
                        </section>
                        <section class="container flex justify-center items-center overflow-hidden xl:hidden">
                            {!!$embed->html(['width' => 400])!!}
                        </section>
                        <section class="text-center mt-5" >
                            <h1 class="text-white font-poppins text-lg md:text-xl lg:text-xl xl:text-2xl" >Mohon Maaf Ya Kak!!, Kami Belum Ada Full Movie!!</h1>
                            <h1 class="text-white font-poppins text-sm mt-10" >Website Error??, <a class="text-blue-500" target="_blank" href="https://wa.me/6289633831593?text=BANG+BAGIAN+PLAYER+ERROR+BANG ({{$movie[0]->title}})!!+.">Contact</a> Kami Ya Kak!!</h1>
                        </section>
                    </div>
                    <div class="border border-[rgba(255,255,255,0.07)] bg-[rgb(13,29,33)] xl:min-h-screen rounded-lg overflow-hidden">
                        <section class="overflow-hidden flex justify-center items-center w-auto h-52 xl:h-auto">
                            <img src="{{$movie[0]->banner}}" alt="">
                        </section>
                        <section class="my-2" >
                            <h1 class="text-white ml-2 font-poppins font-semibold text-xl">{{$movie[0]->title}}</h1>
                            <div class="bg-[rgb(25,35,40)] mt-3 border border-[rgba(255,255,255,0.07)]" >
                                <p class="text-gray-300 font-poppins text-sm" >{{Str::limit($movie[0]->sinopsis, 200)}} <a href="#">Read More!</a></p>
                            </div>
                            <p class="text-white font-poppins text-sm ml-2 mt-3">Type: {{$movie[0]->tipe}}</p>
                            <p class="text-white font-poppins text-sm ml-2">Genre: {{$movie[0]->genre}}</p>
                            <p class="text-white font-poppins text-sm ml-2">Release: {{$movie[0]->rilis_date}}</p>
                        </section>
                    </div>
                </main>
            </section>

            @include('Component.ads')
            @include('Component.footer')

            
        </main>
    </main>

    <script src="https://kit.fontawesome.com/65fd5af23f.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
