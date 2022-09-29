<x-layouts.unlogged>
    <section class="w-screen overflow-y-auto block transition-all duration-100 ease-out phone:bg-white" id="login">
        <div class="login__container p-6 relative h-screen flex justify-center items-center w-screen">
            <div class="login__formulario p-8 mb-2 w-[350px] min-w-[100px] bg-white m-0 rounded-md shadow-md nta-text nta-text-sm phone:px-0 phone:shadow-none phone:w-screen">
                <h2 class="text-2xl font-bold text-primary font-mont phone:text-xl">Noctua Admin</h2>

                <x-jet-validation-errors class="mb-4" />
                
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
                
                <form action="{{ route('login') }}" class="flex flex-col mt-4 gap-4" method="POST">
                    @csrf
                    <input class="login__input border-0 bg-gray-100 rounded-md p-4 transition-all text-lg duration-100 ease-linear shadow-sm focus:outline-none focus:scale-105 h-14 phone:text-base phone:h-12" type="email" placeholder="Usuario" name="email" id="email" :value="old('email')" required autofocus>

                    <input class="login__input border-0 bg-gray-100 rounded-md p-4 transition-all text-lg duration-100 ease-linear shadow-sm focus:outline-none focus:scale-105 h-14 phone:text-base phone:h-12" type="password" placeholder="Contraseña" name="password" id="password" required autocomplete="current-password">
    
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600 font-mont font-medium">{{ __('Recordarme') }}</span>
                        </label>
                    </div>

                    <input class="bg-primary text-white border-none transition-all duration-100 ease-linear w-full text-center px-7 rounded-md select-none font-mont font-bold text-xl sm:w-full cursor-pointer hover:scale-105 hover:brightness-110 h-14 phone:h-12" type="submit" value="Ingresar" name="enviar">
                </form>
            </div>
        </div>
    </section>
</x-layouts.unlogged>
