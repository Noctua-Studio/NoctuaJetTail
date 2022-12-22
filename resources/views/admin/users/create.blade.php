<x-app-layout>
<div class="w-full h-full">    
    <x-admin.header>
        <x-slot name='title'>Agregar usuario</x-slot>
    </x-admin.header>

    <x-admin.formContainer>
        <form action="{{route('admin.users.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-admin.formWithImg>
                <x-admin.label>Nombre</x-admin.label>
                <x-admin.input placeholder="Nombre" name="name"></x-admin.input>
                @error('name')
                <x-admin.errorInput>{{$message}}</x-admin.errorInput>
                @enderror

                <x-admin.label>Email</x-admin.label>
                <x-admin.input placeholder="Correo" name="email" type="email"></x-admin.input>
                @error('email')
                <x-admin.errorInput>{{$message}}</x-admin.errorInput>
                @enderror

                <x-admin.label>Contraseña</x-admin.label>
                <x-admin.input placeholder="Contraseña" name="password" type="password"></x-admin.input>
                <x-admin.input placeholder="Confirmar Contraseña" name="password_confirmation" type="password"></x-admin.input>
                @error('password')
                <x-admin.errorInput>{{$message}}</x-admin.errorInput>
                @enderror

                @if($errors->any())
                {!! implode('', $errors->all('<x-admin.errorInputs>:message</x-admin.errorInputs>')) !!}
                @endif
            </x-admin.formWithImg>

            <x-admin.sendBtn>Crear usuario</x-admin.sendBtn>
        </form>
    </x-admin.formContainer>
</div>
    <script src="{{asset('js/admin/preview.js')}}"></script>
</x-app-layout>