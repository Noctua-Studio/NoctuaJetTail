@props([
    'link' => '#',
    'lang' => 'true',
    'transparent' => 'false',
    'contrast' => 'false',
    'animate'=> 'true'
])

<header class="{{$transparent == 'true' ? 'transparent bg-transparent' : 'bg-white shadow-lg'}} main-menu w-full left-0 top-0 h-20 transition-all duration-150 ease-linear fixed z-50 md:h-16 max-h-full" id="main-menu"> 
    <div class="w-full h-full max-h-full flex justify-between items-center {{$animate == 'true' ? 'animate-slidein duration-1000 ease-in-out' : ''}}">
    <div class="main-menu__container nta-container flex justify-between items-center min-h-[inherit] max-h-full w-full h-full ">

        
        <a class="main-menu__alogo outline-none" href="{{$link}}">
            <img class="inline w-12 min-w-[48px] select-none my-2.5 md:w-10 md:min-w-[40px]" src="{{asset('img/logo-min.webp')}}" alt="Noctua logo">
        </a>
        
        <div class="flex w-fit justify-center items-center h-full gap-6  max-w-fit">
        @if ($lang == 'true')
        <div class="relative cursor-pointer font-mont lg:ml-0 md:w-fit {{$animate == 'true' ? '' : ''}}">
            <div class="{{$transparent == 'true' ? 'bg-transparent' : 'bg-zinc-50 hover:bg-shadeWhite'}} {{$contrast == 'true' ? 'text-white hover:text-secondary' : 'text-darken hover:text-primary'}} flex items-center justify-evenly px-3 py-3 rounded-md transition-all ease-linear duration-100 focus:outline-0 select-none md:mr-0 w-20" id="main-menu__lang-button">
                <h3 class="mr-2 font-medium text-sm select-none">{{Str::upper(app()->getLocale())}}</h3>
                
                <i class="bi bi-chevron-down w-4"></i>
            </div>

            <div class="rounded-lg bg-shadeWhite absolute mt-1 w-20 opacity-0 hidden transition-opacity ease-linear duration-100 shadow-lg text-center select-none" id="main-menu__lang-list">
                <ul id="en" class="flex flex-col rounded-sm">
                    @foreach (config('localized-routes.supported-locales') as $locale)
                        @if ($loop->last)
                        <a href="{{route(Route::currentRouteName(),[],true,$locale)}}">
                            <li class="rounded-b-lg text-xs transition-all ease-linear duration-100 hover:bg-environmental text-darken p-3 hover:text-white">
                                {{STR::upper(config('localized-routes.locales-name-native.'.$locale))}}
                            </li>
                        </a>
                        @else
                        @if ($loop->first)
                        <a href="{{route(Route::currentRouteName(),[],true,$locale)}}">
                            <li class="rounded-t-lg text-xs transition-all ease-linear duration-100 border-b-2 border-solid border-slate-300 hover:bg-environmental text-darken p-3 hover:text-white">
                                {{STR::upper(config('localized-routes.locales-name-native.'.$locale))}}
                            </li>
                        </a>
                        @else
                        <a href="{{route(Route::currentRouteName(),[],true,$locale)}}">
                            <li class="text-xs transition-all ease-linear duration-100 border-b-2 border-solid border-slate-300 hover:bg-environmental text-darken p-3 hover:text-white">
                                {{STR::upper(config('localized-routes.locales-name-native.'.$locale))}}
                            </li>
                        </a>
                        @endif
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        <button class="hamburger hidden w-8 h-[20px] border-none bg-transparent relative cursor-pointer focus:outline-none after:w-full after:h-1 after:rounded-full after:absolute after:left-0 after:top-0 after:mt-0 after:bg-primary content-none before:w-full before:h-1 before:rounded-full before:absolute before:left-0 before:bottom-0 before:mb-0 before:bg-primary lg:block lg:cursor-pointer lg:select-none after:transition-all after:duration-300 before:transition-all before:duration-300" id="main-menu__icon"></button>

        <nav class="main-menu__nav lg:absolute left-0 top-14 lg:bg-white lg:w-full lg:text-center lg:my-0 lg:mx-auto">
            <ul class="lg:hidden lg:my-8 w-full lg:p-0 lg:animate-slidein lg:duration-100 flex flex-nowrap">
                <li class="inline-block lg:block lg:w-fit lg:my-3">
                    <a class="main-menu__link block py-1.5 px-4 lg:px-0 mini:mx-8 lg:ml-12 transition-all duration-150 ease-linear rounded-md font-semibold text-darken text-lg hover:text-primary text-left" href="/" title="Inicio">Inicio</a>
                </li>
                <li class="inline-block lg:block lg:w-fit lg:my-3">
                    <a class="main-menu__link block py-1.5 px-4 lg:px-0 lg:mx-12 mini:mx-8 transition-all duration-150 ease-linear rounded-md font-semibold text-darken text-lg hover:text-primary text-left" href="/nosotros" title="Nosotros">Nosotros</a>
                </li>
                <li class="inline-block lg:block lg:w-fit lg:my-3">
                    <a class="main-menu__link block py-1.5 px-4 lg:px-0 lg:mx-12 mini:mx-8 transition-all duration-150 ease-linear rounded-md font-semibold text-darken text-lg hover:text-primary text-left" href="/servicios" title="Servicios">Servicios</a>
                </li>
                <li class="inline-block lg:block lg:w-fit lg:my-3">
                    <a class="main-menu__link block py-1.5 px-4 lg:px-0 lg:mx-12 mini:mx-8 transition-all duration-150 ease-linear rounded-md font-semibold text-darken text-lg hover:text-primary text-left" href="/portafolio" title="Portafolio">Portafolio</a>
                </li>
                <li class="inline-block lg:block lg:w-fit lg:my-3">
                    <a class="main-menu__link main-menu__main-link block py-1.5 px-4 lg:mx-12 mini:mx-8 transition-all duration-150 ease-linear rounded-md font-semibold text-white text-lg bg-complementary hover:scale-110 text-left" id="contacto__button" href="/contacto" title="Contacto">Contacto</a>
                </li>
            </ul>
        </nav>

    </div>
    </div>
</div>
</header>