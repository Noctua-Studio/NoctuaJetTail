@props([
    'route' => '#'
])

<a class="manager-table__add bg-environmental flex w-28 h-10 items-center justify-center rounded-md text-white gap-2 s-phone:w-10 hover:bg-primary duration-200 font-medium" href="{{$route}}"><p class="s-phone:hidden">Agregar</p> <i class="bi bi-plus-lg tablet:text-2xl"></i></a>