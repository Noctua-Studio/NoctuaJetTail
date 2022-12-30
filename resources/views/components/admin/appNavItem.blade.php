@props([
    'icon' => 'bi-house-door-fill',
    'route' => '#'
])

<li class="relative h-12 w-full my-0 mx-1 leading-10 font-mont font-medium">
    <a class="text-gray-900 flex items-center transition-all duration-100 ease-linear rounded-md hover:bg-primary hover:text-white" href="{{$route}}">
        <i class="bi {{$icon}} h-12 min-w-[48px] rounded-md leading-10 text-center flex justify-center items-center"></i>
        <span class="links__name">{{$slot}}</span>
    </a>
    <span class="tooltip absolute h-9 w-32 bg-white shadow-md left-32 -top-2/4 -translate-x-2/4 rounded-md leading-9 text-center hover:top-2/4 opacity-0 pointer-events-none transition-all duration-300 delay-75 ease-in hidden z-50 text-primary">{{$slot}}</span>
</li>