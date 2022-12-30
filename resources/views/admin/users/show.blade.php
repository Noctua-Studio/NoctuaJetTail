<x-app-layout>
    <div class="w-full h-full">    
        <x-admin.header back="true">
            <x-slot name='title'>Datos de usuario</x-slot>
        </x-admin.header>
        <x-admin.viewContainerImg route="{{asset('storage/' . $user->profile_photo_path)}}">
            <x-admin.label>Nombre</x-admin.label>
            <x-admin.data>{{$user->name}}</x-admin.data>

            <x-admin.label>Email</x-admin.label>
            <x-admin.data>{{$user->email}}</x-admin.data>
            
            <x-slot name='btns'>
                <x-admin.btnContainer>
                    <x-admin.btnSubContainer>
                        <x-admin.btn type="cancel">Cancelar</x-admin.btn>
                    </x-admin.btnSubContainer>
                </x-admin.btnContainer>
            </x-slot>
            

        </x-admin.viewContainerImg>

        
    </div>
</x-app-layout>