<x-app-layout>
<div class="w-full h-full overflow-hidden">
    <div class="bg-white flex flex-col gap-4 -mx-4 p-4 sticky -top-4 -left-4 -mt-4 z-20 tablet:flex-row tablet:justify-between h-32 tablet:h-[120px]">
        <div class="logo__content bg-white tablet:bg-white items-center tablet:fixed tablet:top-0 tablet:justify-between tablet:w-full tablet:left-0 tablet:h-16 tablet:px-4 hidden tablet:flex z-50">
                
            <img class="h-11 w-11" src="{{asset('img/logo-min.webp')}}" alt="">
        
            <div class="profile__details opacity-100 tablet:flex transition-all duration-150 ease-linear" id="profileDetails">
                <img class="h-11 w-11 object-cover rounded-md tablet:rounded-full cursor-pointer block transition-all duration-150" src="{{asset('img/cube.jpg')}}" alt="">
                <i class="bi bi-x-lg hidden text-2xl items-center justify-center transition-all duration-150 cursor-pointer p-2"></i>
            </div>
        
            
        </div>
        
        <div class="header__menu absolute top-0 bg-white w-full left-0 h-fit flex-col justify-center shadow-md hidden animate-slideoutTop z-50" id="headerMenu">
            <a href="" class="leading-[60px] text-center text-lg border-b-2 border-slate-200 hover:bg-slate-200 transition-all duration-150">Gestionar Perfil</a>
            <a href="" class="leading-[60px] text-center text-lg text-red-500 hover:bg-slate-200 transition-all duration-150">Cerrar Sesión</a>
        </div>
    
        <h1 class="text-3xl font-semibold tablet:text-xl flex items-center tablet:items-start tablet:m-1">Usuarios</h1>  
    
        <div class="flex justify-between">
          <x-admin.addBtn route="{{route('admin.users.create')}}"></x-admin.addBtn>
          
          <div class="h-full right-0 font-mont flex items-center tablet:absolute tablet:h-10 tablet:top-[70px] tablet:right-4 tablet:w-full tablet:left-4">
            <i class="bi bi-search w-12 rounded-md leading-10 text-center absolute z-20 text-gray-900 flex justify-center items-center cursor-text tablet:text-sm" id="search-btn"></i>
            <input wire:model="search" class="h-full rounded-md mr-[2px] outline-none border-none bg-gray-200 pl-12 text-lg text-gray-900 w-[250px] focus:w-[300px] laptop:focus:w-[250px] transition-all duration-150 tablet:w-[calc(100%-32px)] tablet:focus:w-[calc(100%-32px)] tablet:text-sm" type="text" id="searchUserInput" placeholder="Buscar usuario">
          </div>
        </div>
      
    </div>
</div>
</x-app-layout>