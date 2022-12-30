<x-app-layout>
    <div class="w-full h-full">
        <x-admin.header back="true">
            <x-slot name='title'>Editar usuario</x-slot>
        </x-admin.header>

        <x-admin.formContainer>
            <form action="{{route('admin.users.update', $user->id)}}" method="post">
                @csrf
                @method('PUT')
    
                <x-admin.form>
                    <x-admin.input placeholder="Contraseña" name="password" type="password"></x-admin.input>
                    <x-admin.input placeholder="Confirmar Contraseña" name="password_confirmation" type="password"></x-admin.input>
                </x-admin.form>
    
                <x-admin.btnContainer>
                    
                    <x-admin.btn type="delete">Eliminar</x-admin.btn>
                    <x-admin.btnSubContainer>
                        <x-admin.btn type="cancel">Cancelar</x-admin.btn>
                        <x-admin.btn>Guardar</x-admin.btn>
                    </x-admin.btnSubContainer>
                </x-admin.btnContainer>
            </form>
        </x-admin.formContainer>
    </div>
</x-app-layout>