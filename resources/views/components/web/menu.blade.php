@props([
    'options' => 'Hola'
])

@php
    $menuOptions = explode('|', $options);
    $last = end($menuOptions);
@endphp

<header class="bg-white w-full h-20 transition-all duration-150 ease-linear fixed z-50 shadow-lg md:h-16 max-h-full" id="main-menu"> 
    <div class="w-full h-full max-h-full flex justify-between">
        <div class="nta-container w-full flex flex-nowrap justify-between items-center max-h-full lg:max-h-full lg:items-center gap-4 realative">
            
            <a class="hidden lg:inline" href="#">
                <img class="inline w-12 min-w-[2.5rem] select-none my-2.5 md:w-10" src="{{asset('img/logo-min.webp')}}" alt="">
            </a> 
            
            <nav class="lg:hidden">
                <ul class="m-0 p-0 select-none overflow-auto scrollbar-menu">
                    @for ($i = 0; $i < count($menuOptions)-1; $i ++)
                    <li class="inline-block select-none">
                        <a class="block py-2 px-4 transition-all duration-100 ease-linear rounded-sm font-mont font-medium text-darken text-base hover:text-primary" href="/" title="Inicio">{{strtoupper($menuOptions[$i])}}</a>
                    </li>
                    @endfor
                </ul>
            </nav>

            <a class="lg:hidden absolute left-[calc(50%-24px)]" href="https://munimm.org">
                <img class="inline w-12 py-1 select-none my-2.5" src="{{asset('img/logo-min.webp')}}" alt="Logo MUNIMM 9">
            </a>
            
            <div class="flex flex-nowrap items-center gap-x-4">
                <div class="flex justify-between items-center gap-x-4">
                    <div class="relative cursor-pointer font-mont lg:ml-0 md:w-fit">
                        <div class="bg-zinc-50 flex items-center justify-center px-3 py-3 rounded-md transition-all ease-linear duration-100 select-none focus:outline-0 hover:bg-shadeWhite hover:text-darken md:mr-0 w-16" id="main-menu__lang-button">
                            <h3 class="mr-2 font-medium text-sm">ES</h3>
                            <img class="w-4" src="{{asset('img/chevron-down.svg')}}" alt="">
                        </div>
        
                        <div class="rounded-lg bg-shadeWhite absolute mt-1 w-16 opacity-0 hidden transition-opacity ease-linear duration-100 shadow-lg" id="main-menu__lang-list">
                            <ul id="en" class="flex flex-col rounded-sm">
                                <li class="rounded-t-lg text-sm transition-all ease-linear duration-100 border-b-2 border-solid border-slate-300 hover:bg-complementary text-darken p-2 hover:text-white">ES</li>
                                <li class="rounded-b-lg text-sm transition-all ease-linear duration-100 hover:bg-complementary text-darken p-2 hover:text-white">EN</li>
                            </ul>
                        </div>
                    </div>
        
                    <a class="block py-2 px-4 transition-all duration-100 ease-linear rounded-md font-mont font-medium text-environmental text-base hover:text-complementary border-2 border-solid border-environmental hover:border-complementary hover:scale-110 md:hidden" key="inscripcion" href="/inscripcion" title="Inscripción">{{strtoupper($last)}}</a>
                </div>
        
                <div class="bg-zinc-50 px-3 py-3 rounded-md hidden lg:block">
                    <button class="hamburger main-menu__icon hidden w-8 h-[20px] border-none bg-transparent relative cursor-pointer focus:outline-none after:w-full after:h-1 after:rounded-full after:absolute after:left-0 after:top-0 after:mt-0 after:bg-primary content-none before:w-full before:h-1 before:rounded-full before:absolute before:left-0 before:bottom-0 before:mb-0 before:bg-primary lg:block lg:cursor-pointer lg:select-none">
                    </button>
                </div>
                <!-- ... -->
            </div>
        </div>
        
    </div>
    <nav class="bg-white main-menu__nav hidden lg:block lg:w-full text-center my-0 mx-auto">
        <ul class="hidden m-0 p-0 select-none overflow-auto scrollbar-menu lg:p-4 lg:h-screen lg:flex-col lg:items-center lg:justify-start lg:animate-slidein">
            <li class="inline-block select-none lg:block lg:w-fit lg:text-center lg:my-12 lg:mx-auto lg:text-8xl md:my-5 md:mx-auto">
                <a class="block py-2 px-4 transition-all duration-100 ease-linear rounded-sm font-mont font-medium text-darken text-base hover:text-primary lg:text-center lg:text-6xl md:text-3xl md:my-0 md:mx-auto xs:text-2xl" key="inicio" href="/" title="Inicio">INICIO</a>
            </li>
            <li class="inline-block select-none lg:block lg:w-fit lg:text-center lg:my-12 lg:mx-auto lg:text-8xl md:my-5 md:mx-auto">
                <a class="block py-2 px-4 transition-all duration-100 ease-linear rounded-sm font-mont font-medium text-darken text-base hover:text-primary lg:text-center lg:text-6xl md:text-3xl md:my-0 md:mx-auto xs:text-2xl" key="evento" href="/evento" title="Evento">EVENTO</a>
            </li>
            <li class="inline-block select-none lg:block lg:w-fit lg:text-center lg:my-12 lg:mx-auto lg:text-8xl md:my-5 md:mx-auto">
                <a class="block py-2 px-4 transition-all duration-100 ease-linear rounded-sm font-mont font-medium text-darken text-base hover:text-primary lg:text-center lg:text-6xl md:text-3xl md:my-0 md:mx-auto xs:text-2xl" key="comites" href="/comites" title="Comités">COMITÉS</a>
            </li>
            <a class="hidden py-2 px-4 transition-all duration-100 ease-linear rounded-sm font-mont font-medium text-complementary text-3xl hover:text-primary lg:text-center lg:text-6xl md:text-3xl md:block md:w-fit md:py-2 md:px-4 md:my-5 md:mx-auto xs:text-2xl main-menu__main-link2 " key="inscripcion" href="/inscripcion" title="Inscripción">INSCRÍBETE</a>
        </ul>
    </nav>
</header>