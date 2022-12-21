@props([
    'for' => 'x'
])

<label class="view__label text-base font-medium block mt-3 mb-1 first-of-type:mt-0" for="{{$for}}">{{$slot}}</label>