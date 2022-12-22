<x-app-layout>
    <div class="w-full h-full">    
        <x-admin.header>
            <x-slot name='title'>Usuariosuario</x-slot>
        </x-admin.header>
    {{$user->name}}
    {{$user->email}}
    </div>
        <script src="{{asset('js/admin/preview.js')}}"></script>
    </x-app-layout>