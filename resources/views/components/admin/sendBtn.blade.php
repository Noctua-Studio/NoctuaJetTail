@props([
    'name' => 'enviar'
])

<input class="login__button nta-btn-envieronmental bg-primary text-white border-none transition-all duration-100 ease-linear w-fit text-center px-7 py-3 rounded-md select-none font-mont font-bold text-lg mt-5 mb-4 tablet:w-full cursor-pointer hover:scale-105 hover:brightness-110 phone:h-12" type="submit" value="{{$slot}}" name="{{$name}}">