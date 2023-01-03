@props([
    'name' => 'enviar',
    'type' => 'confirm',
    'route' => '#'
])

@if ($type == 'confirm')
<input class="login__button nta-btn-envieronmental bg-primary text-white border-none transition-all duration-100 ease-linear w-fit text-center px-7 py-3 rounded-md select-none font-mont font-bold text-lg mt-0 mb-1 tablet:hover:scale-100 mx-[2px] tablet:w-[calc(100%-4px)] cursor-pointer hover:scale-105 hover:brightness-110 phone:h-12" type="submit" value="{{$slot}}" name="{{$name}}">
@elseif ($type == 'cancel')
<a href="{{URL::previous()}}" class="bg-gray-300 inline-block text-shadeDark border-none transition-all duration-100 ease-linear w-fit text-center px-7 py-3 rounded-md select-none font-mont font-bold text-lg mt-0 mb-1 tablet:hover:scale-100 mx-[2px] tablet:w-[calc(100%-4px)] cursor-pointer hover:scale-105 hover:brightness-105 phone:h-12">{{$slot}}</a>
@elseif ($type == 'delete')
<a href="{{$route}}" class="bg-[#b85858] inline-block text-white border-none transition-all duration-100 ease-linear w-fit text-center px-7 py-3 rounded-md select-none font-mont font-bold text-lg mt-0 mb-1 tablet:hover:scale-100 mx-[2px] tablet:w-[calc(100%-4px)] cursor-pointer hover:scale-105 hover:brightness-105 phone:h-12">{{$slot}}</a>
@endif