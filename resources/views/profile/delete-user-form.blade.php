<x-jet-action-section>
    <x-slot name="title">
        <h3 class="font-mont text-lg font-medium">Elimina tu cuenta</h3>
        
        {{-- {{ __('Delete Account') }} --}}
    </x-slot>

    <x-slot name="description">
        <p class="font-mont text-sm">Elimina tu cuenta permanentemente.</p>
        {{-- {{ __('Permanently delete your account.') }} --}}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            Una vez tu cuenta es eliminada, todos sus recursos e información serán eliminados.
            {{-- {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }} --}}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                Eliminar cuenta
                {{-- {{ __('Delete Account') }} --}}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                Eliminar cuenta
                {{ __('Delete Account') }}
            </x-slot>

            <x-slot name="content">
                ¿Estás seguro de que deseas eliminar tu cuenta? Toda tu información será eliminada. Por favor ingresa tu contraseña para confirmar su eliminación permanentemente.
                {{-- {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }} --}}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="Contraseña"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    Cancelar
                    {{-- {{ __('Cancel') }} --}}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    Eliminar cuenta
                    {{-- {{ __('Delete Account') }} --}}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
