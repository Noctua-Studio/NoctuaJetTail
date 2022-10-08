
<x-app-layout>
    <div class="flex flex-col gap-8">
        <h1 class="nta-title nta-title-lg text-3xl font-semibold font-mont text-darken">Inicio</h1>
    
            <div class="inicio bg-secondary flex gap-12 flex-wrap p-8 w-full rounded-md justify-between">
                <div>
                    <h1 class="nta-title nta-title-lg text-6xl font-bold font-mont text-darken">Bienvenido <br> <span class="text-primary">{{Auth::user()->name}}</span></h1>
                </div>
                <img class="w-72" src="{{asset('img/welcome.svg')}}" alt="">
            </div>
            <div class="gap-5 flex-wrap grid grid-cols-5 desktop:grid-cols-3 laptop:grid-cols-2 tablet:grid-cols-1">
                <div class="bg-primary h-44 rounded-md p-4 flex flex-col gap-4 justify-center min-w-[60px]">
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
    
                <div class="bg-complementary h-44 rounded-md p-4 flex flex-col gap-4 justify-center min-w-[60px]">
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

                <div class="bg-darken h-44 rounded-md p-4 flex flex-col gap-4 justify-center min-w-[60px]">
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

                <div class="bg-secondary h-44 rounded-md p-4 flex flex-col gap-4 justify-center min-w-[60px]">
                    <div class="flex w-full items-start justify-between">
                        <i class="bi bi-bag-check text-5xl text-shadeDark "></i>
                        <i class="bi bi-three-dots-vertical text-shadeDark p-1 rounded-full w-8 h-8 flex items-center justify-center hover:bg-[#ffffff17] transition-all duration-200 ease-linear"></i>
                    </div>
    
                    <a href="">
                        <div>
                            <h3 class="text-xl font-medium font-mont text-shadeDark">Productos</h3>
                            <p class="text-sm font-medium font-mont text-shadeDark">Products</p>
                        </div>
                    </a>
        
                </div>
                
                <div class="bg-environmental h-44 rounded-md p-4 flex flex-col gap-4 justify-center min-w-[60px]">
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

                
            </div>
    </div>
</x-app-layout>

@section('scripts')

@endsection