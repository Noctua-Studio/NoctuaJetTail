@props([
    'icon' => 'bi-house-door-fill',
    'route' => '#'
])

<a href="{{$route}}"><i class="bi {{$icon}} h-12 text-2xl rounded-2xl leading-10 text-center flex justify-center items-center text-darken hover:bg-darken hover:text-white transition-all duration-150 ease-linear py-2 px-3 cursor-pointer fold:text-xl"></i></a>