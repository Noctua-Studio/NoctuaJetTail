<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        <h3 class="font-mont text-lg font-medium">Actualizar contraseña</h3>
        
        {{-- {{ __('Update Password') }} --}}
    </x-slot>

    <x-slot name="description">
        <p class="font-mont text-sm">Asegurate de que tu contraseña sea larga y aleatoria para que sea segura</p>
        
        {{-- {{ __('Ensure your account is using a long, random password to stay secure.') }} --}}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="Contraseña actual" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="Nueva contraseña" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="Confirma tu contraseña" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            Guardada
            {{-- {{ __('Saved.') }} --}}
        </x-jet-action-message>

        <x-jet-button>
            Guardar
            {{-- {{ __('Save') }} --}}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
