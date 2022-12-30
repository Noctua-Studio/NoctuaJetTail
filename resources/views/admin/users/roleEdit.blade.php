<x-app-layout>
<div class="w-full h-full">
    <x-admin.header back="true">
        <x-slot name='title'>Rol de usuario</x-slot>
    </x-admin.header>

    <div class="w-full font-mont mb-2">
        <div class="view__container w-4/6 tablet:w-full tablet:grid-cols-1 tablet:gap-4">
            <div>
                <label class="view__label text-lg font-medium block mt-3 mb-2" for="nombre">Usuario</label>
                <input class="view__input border-0 bg-shadeWhite rounded-md  p-3 transition-all ease-linear duration-100 m-0 w-full" type="text" placeholder="Nombre" name="name" id="name" value="{{$user->name}}" disabled>

                <h2 class="mt-5 text-lg">Listado de roles</h2>
                {!! Form::model($user, ['route' => ['admin.users.roleUpdate', $user], 'method' => 'put']) !!}
                    @foreach ($roles as $role)
                        <div class="mt-5 text-base">
                            <label class="flex gap-3 items-center justify-start" for="">
                                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'text-complementary rounded border-none bg-gray-300 cursor-pointer p-4']) !!}
                                {{$role->name}}
                            </label>
                        </div>
                    @endforeach

                    <x-admin.btnContainer>
                        <x-admin.btnSubContainer>
                            {!! Form::submit('Asignar', ['class' => 'login__button nta-btn-envieronmental bg-primary text-white border-none transition-all duration-100 ease-linear w-fit text-center px-7 py-3 rounded-md select-none font-mont font-bold text-lg tablet:w-full cursor-pointer hover:scale-105 hover:brightness-110 phone:h-12']) !!}
                        </x-admin.btnSubContainer>
                    </x-admin.btnContainer>
                    
                {!! Form::close() !!}
            </div>    
        </div>
    </div>

    @if(session('info'))
        <div>{{session('info')}}</div>
    @endif
</div>
</x-app-layout>