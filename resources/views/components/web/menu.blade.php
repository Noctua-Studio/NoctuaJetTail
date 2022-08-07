<header class="bg-white w-full min-h-60 max-h-[60px] transition-all duration-150 ease-linear fixed z-50 shadow-lg" id="main-menu"> 
    <div class="flex justify-between items-center flex-wrap max-h-full container lg:max-h-full lg:items-center">
        
        <a class="hidden lg:inline" href="#">
            <img class="inline w-10 select-none my-2.5" src="{{asset('img/logo-min.webp')}}" alt="">
        </a> 
        
        <nav class="lg:hidden">
            <ul class="m-0 p-0 select-none overflow-auto scrollbar-menu">
                <li class="inline-block select-none">
                    <a class="block py-2 px-4 transition-all duration-100 ease-linear rounded-sm font-mont font-medium text-darken text-base hover:text-primary" key="inicio" href="/" title="Inicio">INICIO</a>
                </li>
                <li class="inline-block select-none">
                    <a class="block py-2 px-4 transition-all duration-100 ease-linear rounded-sm font-mont font-medium text-darken text-base hover:text-primary" key="evento" href="/evento" title="Evento">EVENTO</a>
                </li>
                <li class="inline-block select-none">
                    <a class="block py-2 px-4 transition-all duration-100 ease-linear rounded-sm font-mont font-medium text-darken text-base hover:text-primary" key="comites" href="/comites" title="Comités">COMITÉS</a>
                </li>
            </ul>
        </nav>
        <a class="lg:hidden" href="https://munimm.org">
            <img class="inline w-10 select-none my-2.5" src="{{asset('img/logo-min.webp')}}" alt="Logo MUNIMM 9">
        </a>
        <div class="lg:flex">
            <div class="flex justify-between items-center lg:mr-7 md:mr-4">
                <div class="relative cursor-pointer font-mont ml-20 w-85 lg:ml-0 md:w-fit">
                    <div class="flex items-center justify-center mr-4 px-2 rounded-sm transition-all ease-linear duration-100 select-none focus:outline-0 hover:bg-shadeWhite hover:text-darken md:mr-0 w-16" id="main-menu__lang-button">
                        <h3 class="mr-2 font-medium text-sm">ES</h3>
                        <img class="w-4" src="{{asset('img/chevron-down.svg')}}" alt="">
                    </div>
    
                    <div class="rounded-sm bg-shadeWhite absolute mt-2 w-16 opacity-0 hidden transition-opacity ease-linear duration-100 shadow-lg" id="main-menu__lang-list">
                        <ul id="en" class="flex flex-col rounded-sm">
                            <li class="text-lg transition-all ease-linear duration-100 border-b-2 border-solid border-slate-300 hover:bg-complementary text-white">ES</li>
                            <li class="text-lg transition-all ease-linear duration-100 border-b-2 border-solid border-slate-300 hover:bg-complementary text-white">EN</li>
                        </ul>
                    </div>
                </div>
    
                <a class="block py-2 px-4 transition-all duration-100 ease-linear rounded-sm font-mont font-medium text-complementary text-base hover:text-environmental border-2 border-solid border-complementary hover:border-environmental hover:scale-110 md:hidden" key="inscripcion" href="/inscripcion" title="Inscripción">INSCRÍBETE</a>
            </div>
    
            <button class="main-menu__icon hidden w-8 h-6 border-none mt-1 bg-transparent relative cursor-pointer focus:outline-none after:w-full after:h-1 after:rounded-full after:absolute after:left-0 after:top-0 after:mt-0 after:transition-transform after:bg-primary content-none before:w-full before:h-4 before:rounded-full before:absolute before:left-0 before:bottom-0 before:mb-0 before:transition-transform before:bg-primary before:content-none lg:block lg:cursor-pointer lg:select-none xs:w-6 xs:h-4"><span class="w-full h-1 rounded-full absolute left-0 bg-primary"></span></button>
        </div>
            <!-- ... -->
          </div>
        <nav class="main-menu__nav hidden lg:block lg:w-full text-center my-0 mx-auto">
            <ul class="hidden m-0 p-0 select-none overflow-auto scrollbar-menu lg:p-4 lg:h-[95vh] lg:flex-col lg:items-center lg:justify-start lg:animate-slidein">
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
    </div>
</header>