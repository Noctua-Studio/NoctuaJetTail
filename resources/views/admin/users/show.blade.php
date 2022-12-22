<x-app-layout>
    <div class="w-full h-full">    
        <x-admin.header>
            <x-slot name='title'>Datos de usuario</x-slot>
        </x-admin.header>
        <x-admin.viewContainerImg route="{{asset('storage/' . $user->profile_photo_path)}}">
            <x-admin.label>Nombre</x-admin.label>
            <x-admin.data>{{$user->name}}</x-admin.data>

            <x-admin.label>Email</x-admin.label>
            <x-admin.data>{{$user->email}}</x-admin.data>

            <x-admin.btnContainer>
                <x-admin.btn type="cancel">Cancelar</x-admin.btn>
            </x-admin.btnContainer>
        </x-admin.viewContainerImg>
    </div>
        <script src="{{asset('js/admin/preview.js')}}"></script>
</x-app-layout>