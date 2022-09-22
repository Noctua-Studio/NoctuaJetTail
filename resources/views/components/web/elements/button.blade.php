@props([
    'route' => '#',
    'color' => 'primary',
    'textColor' => 'white',
    'width' => '44',
    'hoverScale' => 'true',
    'hoverColor' => '',
    'hoverTextColor' => ''
])

<a class="nta-btn-envieronmental bg-{{$color}} bg- border-none transition-all duration-100 ease-linear w-{{$width}} text-center py-4 px-7 rounded-md select-none text-{{$textColor}} font-mont font-bold text-xl sm:w-full {{$hoverScale == 'true' ? 'hover:scale-110' : ''}} @if ($hoverColor != '') hover:bg-{{$hoverColor}} @endif @if ($hoverTextColor != '') hover:text-{{$hoverTextColor}} @endif" href="{{$route}}">{{$slot}}</a>