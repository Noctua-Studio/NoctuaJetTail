<x-app-layout>
    <div class="w-full h-full">
        <x-admin.header>
            <x-slot name='title'>Editar usuario</x-slot>
        </x-admin.header>

        <form action="{{route('admin.users.update', $user->id)}}" method="post">
            @csrf
            @method('PUT')

            <x-admin.input placeholder="Contraseña" name="password" type="password"></x-admin.input>
            <x-admin.input placeholder="Confirmar Contraseña" name="password_confirmation" type="password"></x-admin.input>

            <a href="{{route('admin.users.index')}}" >Cancelar</a>
            <input type="submit" value="Guardar" name="">
        </form>
    </div>
</x-app-layout>