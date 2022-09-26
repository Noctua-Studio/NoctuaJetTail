<section class="home full-container relative w-full h-auto flex justify-center items-center overflow-hidden pt-[170px] pb-[250px] px-0">
    <img  class="home__svg absolute w-full h-full object-cover top-0 left-0" id="home__svg-layer6" src="{{asset('img/placeholder-wrande.png')}}" alt="Fondo banner">

    <div class="home__text-container grid text-center text-white z-20 justify-center min-w-[150px] max-w-[650px] mx-5 mini:mt-16 gap-3">
        <h1 class="text-8xl font-bold text-stone-900 font-mont tablet:text-6xl phone:text-4xl mini:text-3xl text-center">Texto inicial<br>llamativo</h1>
        <p class="text-2xl font-normal text-stone-900 phone:text-xl min-w-[100px] max-w-[500px] md:max-w-[400px] mini:max-w-[300px] text-center mx-auto">Subtítulo con texto que explique un poco más de tu negocio</p>
        <div class="home__buttons w-full flex items-center justify-center my-5 mx-auto sm:flex-col gap-6">

            <x-web.elements.button route="products" color="blue" textColor="white" hoverScale="false" hoverDarken="true">Boton 1</x-web.elements.button>
            <x-web.elements.button route="us" color="black" textColor="white" hoverScale="true" hoverDarken="true">Boton 2</x-web.elements.button>
        </div>
    </div>
</section>