@props([
    'route' => '#',
    'btns' => ''
])

<div class="view__container form-container grid grid-cols-[40%_calc(60%-3rem)] gap-10 laptop:grid-cols-[50%_calc(50%-2rem)] laptop:gap-6 tablet:grid-cols-1 tablet:gap-4 h-[calc(100%-200px)] tablet:h-[calc(100%-45px)] overflow-auto">
    <div>
        {{$slot}}
    </div>
    <img class="view__img mt-5 max-h-[400px] mr-2 rounded-md" id="preview" src="{{$route}}" alt="Imagen">

    {{$btns}}
</div>