@props([
    'bgColor' => 'bg-primary',
])

<div class="{{$bgColor}} h-44 rounded-md p-4 flex flex-col gap-4 justify-center text-white">
    <div class="flex w-full items-start justify-between">
        <i class="bi bi-bag-check text-5xl"></i>
        <i class="bi bi-three-dots-vertical p-1 rounded-full w-8 h-8 flex items-center justify-center hover:bg-[#ffffff17] transition-all duration-200 ease-linear"></i>
    </div>

    <a href="">
        <div>
            <h3 class="text-xl font-medium font-mont">Productos</h3>
            <p class="text-sm font-medium font-mont">Products</p>
        </div>
    </a>
</div>