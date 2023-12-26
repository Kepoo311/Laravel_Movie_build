<nav class="container flex items-center justify-evenly xl:gap-[200px] z-30">
    <a class="shrink-0 xl:ml-[120px]" href="/">
        <img class="h-auto w-44" src="/image/kepoflix.png" alt="Kepoflix Logo">
    </a>
    <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown"
        class="text-white bg-[rgb(15_25_30)] focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
        type="button">KepoFlix Menu <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
        </svg>
    </button>
    <div id="multi-dropdown"
        class="z-30 hidden divide-y divide-gray-100 rounded-lg shadow w-44 bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
            aria-labelledby="multiLevelDropdownButton">
            <li>
                <a href="/"
                    class="block px-4 py-2 text-white hover:bg-gray-600 hover:text-white">Home</a>
            </li>
            <li>
                <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                    data-dropdown-placement="bottom" type="button"
                    class="flex items-center justify-between w-full px-4 py-2 text-white hover:bg-gray-600 hover:text-white">Genre<svg
                        class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg></button>
                <div id="doubleDropdown"
                    class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-44 bg-gray-700">
                    <ul class="py-2 text-sm text-gray-200"
                        aria-labelledby="doubleDropdownButton">
                        @foreach ($genre as $gen)
                        <li>
                            <a href="/genre/{{$gen->genres}}"
                                class="block px-4 py-2 text-white hover:bg-gray-600 hover:text-white">{{$gen->genres}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li>
                <a data-tooltip-target="tooltip-log-out" data-tooltip-placement="right" href="#"
                    class="block px-4 py-2 text-white hover:bg-gray-600 hover:text-white">Sign
                    out</a>
                    <div id="tooltip-log-out" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Coming Soon KK!
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
            </li>
        </ul>
    </div>
    <a data-tooltip-target="tooltip-login" data-tooltip-placement="bottom" class="text-white xl:ml-10 font-poppins rounded-md text-center p-2 h-10 w-20 bg-blue-500 duration-500 hover:bg-blue-700"
        href="#">LOGIN</a>
        <div id="tooltip-login" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Coming Soon KK!
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
</nav>

<section>

    <form method="post" action="/search">
        @csrf
        <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" name="sercing"
                class="block w-full p-4 ps-10 text-sm rounded-lg bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                placeholder="Search Movies,Series....." autocomplete="off" required>
            <button type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>

</section>