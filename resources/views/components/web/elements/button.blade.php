<!-- Notas
    - 

    -->

@props([
    'route' => '#',
    'color' => 'primary',
    'textColor' => 'white',
    'width' => '44',
    'hoverScale' => 'true',
    'hoverDarken' => 'false',
    'hoverLighten' => 'false'
])

<a style="background-color: {{$color}}; color: {{$textColor}}" class="nta-btn-envieronmental bg- border-none transition-all duration-100 ease-linear w-{{$width}} text-center py-4 px-7 rounded-md select-none font-mont font-bold text-xl sm:w-full cursor-pointer {{$hoverScale == 'true' ? 'hover:scale-110' : ''}} @if ($hoverDarken == 'true') hover:brightness-90 @endif @if ($hoverLighten == 'true') hover:brightness-110 @endif" href="{{route($route)}}">{{$slot}}</a>