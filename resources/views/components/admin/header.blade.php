@props([
    'title' => 'Index',
    'create' => 'false',
    'buscar' => 'false',
    'back' => 'false',
    'buscarPlaceholder' => 'Buscar'
])

<div class="bg-white flex flex-col gap-4 -mx-4 p-4 sticky -top-4 -left-4 -mt-4 z-20 tablet:flex-row tablet:justify-between {{$create == 'false' && $buscar == 'false' ? 'h-fit' : 'h-32'}} {{$create == 'true' || $buscar == 'true' ? 'tablet:h-[120px]' : ''}}">
    
    <h1 class="text-3xl font-semibold tablet:text-xl flex items-center tablet:items-start tablet:m-1">{{$title}}</h1>  

    <div class="flex justify-between">
      @if ($back == 'true')
      <a href="{{URL::previous()}}" class="flex items-center justify-center gap-2 text-environmental hover:scale-95 duration-150 h-fit">
        <i class="bi bi-arrow-left-square-fill text-3xl"></i>
        <span class="tablet:hidden">Volver</span>
      </a>
      @endif
      @if ($create == 'true' && isset($createRoute))
        {{$createRoute}}
      @endif
      @if ($buscar == 'true')
          <div class="h-full right-0 font-mont flex items-center tablet:absolute tablet:h-10 tablet:top-[70px] tablet:right-4 tablet:w-full tablet:left-4">
            <i class="bi bi-search w-12 rounded-md leading-10 text-center absolute z-20 text-gray-900 flex justify-center items-center cursor-text tablet:text-sm" id="search-btn"></i>
            <input wire:model="search" class="h-full rounded-md mx-[2px] outline-none border-none bg-gray-200 pl-12 text-lg text-gray-900 w-[250px] focus:w-[300px] laptop:focus:w-[250px] transition-all duration-150 tablet:w-[calc(100%-32px)] tablet:focus:w-[calc(100%-32px)] tablet:text-sm" type="text" id="search" placeholder="{{$buscarPlaceholder}}">
          </div>
      @endif
     
    </div>
  
</div>
    