<x-layouts.unlogged>
    <section class="w-screen overflow-y-auto block transition-all duration-100 ease-out phone:bg-white" id="login">
        <div class="login__container p-6 relative h-screen flex justify-center items-center w-screen">
            <div class="login__formulario p-8 mb-2 w-[450px] min-w-[100px] bg-white m-0 rounded-md shadow-md nta-text nta-text-sm phone:px-0 phone:shadow-none phone:w-screen">
        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                Por favor ingresa tu código de autenticación proporcionado en tu app para acceder a tu cuenta.
                {{-- {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }} --}}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                Por favor ingresa uno de los códigos de emergencia para acceder a tu cuenta.
                {{-- {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }} --}}
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div class="mt-4" x-show="! recovery">
                    <x-jet-label for="code" value="Código" />
                    <x-jet-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4" x-show="recovery">
                    <x-jet-label for="recovery_code" value="Código de recuperación" />
                    <x-jet-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div class="flex items-center justify-end mt-4 tablet:flex-col-reverse">
                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        Usar código de recuperación
                    </button>

                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        Usar código de autenticación
                    </button>

                    <x-jet-button class="ml-4 tablet:ml-0 tablet:mb-4">
                        Confirmar
                    </x-jet-button>
                </div>
            </form>
        </div>
        </div>
        </div>
    </section>
</x-layouts.unlogged>
