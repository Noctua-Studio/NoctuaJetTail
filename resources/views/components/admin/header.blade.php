
    <div class="logo__content bg-white tablet:bg-white items-center tablet:fixed tablet:top-0 tablet:justify-between tablet:w-full tablet:left-0 tablet:h-16 tablet:px-4 hidden tablet:flex z-50">
                
        <img class="h-11 w-11" src="{{asset('img/logo-min.webp')}}" alt="">
    
        <div class="profile__details opacity-100 tablet:flex transition-all duration-150 ease-linear" id="profileDetails">
            <img class="h-11 w-11 object-cover rounded-md tablet:rounded-full cursor-pointer block transition-all duration-150" src="{{asset('img/cube.jpg')}}" alt="">
            <i class="bi bi-x-lg hidden text-2xl items-center justify-center transition-all duration-150 cursor-pointer p-2"></i>
        </div>
    
        
    </div>
    
    <div class="header__menu absolute top-0 bg-white w-full left-0 h-fit flex-col justify-center shadow-md hidden animate-slideoutTop" id="headerMenu">
        <a href="" class="leading-[60px] text-center text-lg border-b-2 border-slate-200 hover:bg-slate-200 transition-all duration-150">Gestionar Perfil</a>
        <a href="" class="leading-[60px] text-center text-lg text-red-500 hover:bg-slate-200 transition-all duration-150">Cerrar Sesión</a>
    </div>

    <h1 class="text-3xl font-semibold tablet:text-xl">Inicio</h1>