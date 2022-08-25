@props([
    'link' => '#',
    'lang' => 'false',
    'transparent' => 'false',
    'contrast' => 'false'
])

<header class="{{$transparent == 'true' ? 'transparent bg-transparent' : 'bg-white shadow-lg'}} main-menu w-full left-0 top-0 h-20 transition-all duration-150 ease-linear fixed z-50 md:h-16 max-h-full" id="main-menu"> 
    <div class="w-full h-full max-h-full flex justify-between items-center">
    <div class="main-menu__container nta-container flex justify-between items-center flex-wrap min-h-[inherit] max-h-full w-full">

        <a class="main-menu__alogo outline-none" href="/">
            <img class="inline w-12 min-w-[2.5rem] select-none my-2.5 md:w-10" src="{{asset('img/logo-min.webp')}}" alt="Noctua logo">
        </a>
        
        <button class="hamburger hidden w-8 h-[20px] border-none bg-transparent relative cursor-pointer focus:outline-none after:w-full after:h-1 after:rounded-full after:absolute after:left-0 after:top-0 after:mt-0 after:bg-primary content-none before:w-full before:h-1 before:rounded-full before:absolute before:left-0 before:bottom-0 before:mb-0 before:bg-primary lg:block lg:cursor-pointer lg:select-none after:transition-all after:duration-300 before:transition-all before:duration-300"></button>
        
        <nav class="main-menu__nav lg:w-full lg:text-center lg:my-0 lg:mx-auto">
            <ul class="lg:hidden lg:p-4 animate-slidein duration-100">
                <li class="inline-block lg:block lg:w-fit lg:my-3 lg:mx-4">
                    <a class="main-menu__link block py-1.5 px-4 transition-all duration-150 ease-linear rounded-md font-semibold text-darken text-lg hover:text-primary text-left" href="/" title="Inicio">Inicio</a>
                </li>
                <li class="inline-block lg:block lg:w-fit lg:my-3 lg:mx-4">
                    <a class="main-menu__link block py-1.5 px-4 transition-all duration-150 ease-linear rounded-md font-semibold text-darken text-lg hover:text-primary text-left" href="/nosotros" title="Nosotros">Nosotros</a>
                </li>
                <li class="inline-block lg:block lg:w-fit lg:my-3 lg:mx-4">
                    <a class="main-menu__link block py-1.5 px-4 transition-all duration-150 ease-linear rounded-md font-semibold text-darken text-lg hover:text-primary text-left" href="/servicios" title="Servicios">Servicios</a>
                </li>
                <li class="inline-block lg:block lg:w-fit lg:my-3 lg:mx-4">
                    <a class="main-menu__link block py-1.5 px-4 transition-all duration-150 ease-linear rounded-md font-semibold text-darken text-lg hover:text-primary text-left" href="/portafolio" title="Portafolio">Portafolio</a>
                </li>
                <li class="inline-block lg:block lg:w-fit lg:my-3 lg:mx-4">
                    <a class="main-menu__link main-menu__main-link block py-1.5 px-4 transition-all duration-150 ease-linear rounded-md font-semibold text-white text-lg bg-complementary hover:scale-110 text-left lg:py-3 lg:px-5" id="contacto__button" href="/contacto" title="Contacto">Contacto</a>
                </li>
            </ul>
        </nav>

    </div>
</div>
</header>