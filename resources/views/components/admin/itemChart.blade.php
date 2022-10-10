@props([
    'bgColor' => 'bg-primary',
])

<div class="{{$bgColor}} h-44 rounded-md p-4 flex flex-col gap-4 justify-center min-w-[60px]">
    <div class="flex w-full items-start justify-between">
        <i class="bi bi-bag-check text-5xl text-white "></i>
        <i class="bi bi-three-dots-vertical text-white p-1 rounded-full w-8 h-8 flex items-center justify-center hover:bg-[#ffffff17] transition-all duration-200 ease-linear"></i>
    </div>

    <a href="">
        <div>
            <h3 class="text-xl font-medium font-mont text-white">Productos</h3>
            <p class="text-sm font-medium font-mont text-white">Products</p>
        </div>
    </a>

</div>