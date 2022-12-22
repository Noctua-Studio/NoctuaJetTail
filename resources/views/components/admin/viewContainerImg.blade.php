@props([
    'route' => '#'
])

<div class="view__container grid grid-cols-[40%_calc(60%-3rem)] gap-10 laptop:grid-cols-[50%_calc(50%-2rem)] laptop:gap-6 tablet:grid-cols-1 tablet:gap-4">
    <div>
        {{$slot}}
    </div>
    <img class="view__img mt-5 max-h-[500px] mr-2 rounded-md" id="preview" src="{{$route}}" alt="Imagen">
</div>