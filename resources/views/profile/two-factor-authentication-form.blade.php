<x-jet-action-section>
    <x-slot name="title">
        <h3 class="font-mont text-lg font-medium">Autenticación en dos pasos</h3>
        {{-- {{ __('Two Factor Authentication') }} --}}
    </x-slot>

    <x-slot name="description">
        <p class="font-mont text-sm">Añade seguridad a tu cuenta usando la autenticación en dos pasos.</p>
        {{-- {{ __('Add additional security to your account using two factor authentication.') }} --}}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-mont font-medium">
            @if ($this->enabled)
                @if ($showingConfirmation)
                    Terminar de activar autenticación en dos pasos.
                    {{-- {{ __('Finish enabling two factor authentication.') }} --}}
                @else
                    La autenticación en dos pasos está activada.
                    {{-- {{ __('You have enabled two factor authentication.') }} --}}
                @endif
            @else
                La autenticación en dos pasos no está habilitada.
                {{-- {{ __('You have not enabled two factor authentication.') }} --}}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                Cuando la autenticación en dos pasos esta activada, durante el proceso se te será proporcionado un token seguro y aleatorio. Podrás recuperar este token desde tu teléfono con la app Google Authenticator.
                {{-- {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }} --}}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        @if ($showingConfirmation)
                        Escanea el siguiente código QR usando la app Google Authenticator o ingresa la clave de configuración e ingresa el código OTP proporcionado para terminar de habilitar la autenticación en dos pasos.
                            {{-- {{ __('To finish enabling two factor authentication, scan the following QR code using your phone\'s authenticator application or enter the setup key and provide the generated OTP code.') }} --}}
                        @else
                            La autenticación en dos pasos está habilitada, escanea el siguente código QR usando tu app Google Authenticator o ingresa la clave de configuración
                            {{-- {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application or enter the setup key.') }} --}}
                        @endif
                    </p>
                </div>

                <div class="mt-4">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>

                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{-- {{ __('Setup Key') }}:  --}}
                        Clave de configuración:
                        {{ decrypt($this->user->two_factor_secret) }}
                    </p>
                </div>

                @if ($showingConfirmation)
                    <div class="mt-4">
                        <x-jet-label for="code" value="Código" />

                        <x-jet-input id="code" type="text" name="code" class="block mt-1 w-1/2" inputmode="numeric" autofocus autocomplete="one-time-code"
                            wire:model.defer="code"
                            wire:keydown.enter="confirmTwoFactorAuthentication" />

                        <x-jet-input-error for="code" class="mt-2" />
                    </div>
                @endif
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        Guarda estos códigos de recuperación en un gestor de contraseñas confiable. Estos códigos puedes ser utilizados para recuperar el acceso a tu cuenta en caso de que tu dispositivo se extravíe.
                        {{-- {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }} --}}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        Activar
                        {{-- {{ __('Enable') }} --}}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            Regenerar códigos de recuperación
                            {{-- {{ __('Regenerate Recovery Codes') }} --}}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @elseif ($showingConfirmation)
                    <x-jet-confirms-password wire:then="confirmTwoFactorAuthentication">
                        <x-jet-button type="button" class="mr-3" wire:loading.attr="disabled">
                            Confirmar
                            {{-- {{ __('Confirm') }} --}}
                        </x-jet-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            Mostrar códigos de recuperación
                            {{-- {{ __('Show Recovery Codes') }} --}}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                @if ($showingConfirmation)
                    <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-jet-secondary-button wire:loading.attr="disabled">
                            Cancelar
                            {{-- {{ __('Cancel') }} --}}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-jet-danger-button wire:loading.attr="disabled">
                            Desactivar
                            {{-- {{ __('Disable') }} --}}
                        </x-jet-danger-button>
                    </x-jet-confirms-password>
                @endif

            @endif
        </div>
    </x-slot>
</x-jet-action-section>
