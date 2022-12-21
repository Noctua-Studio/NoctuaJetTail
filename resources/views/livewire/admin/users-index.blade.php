<div class="w-full h-full overflow-hidden">
    
    <x-admin.header create="true" buscar='true' buscarPlaceholder="Buscar usuario">
        <x-slot name='title'>Usuarios</x-slot>
        <x-slot name="createRoute">
            <x-admin.addBtn route="{{route('admin.users.create')}}"></x-admin.addBtn>
        </x-slot>
    </x-admin.header>
    
    @if($users->count())
        <x-admin.table headers="Id|Nombre|Correo|Imagen|Ver|Rol|Editar">

            <x-slot name="slot">
                @foreach ($users as $user)
                <x-admin.tableRow>
                    
                    <x-admin.tableData label="Id">
                        {{$user->id}}
                    </x-admin.tableData>
                    
                    <x-admin.tableData label="Nombre">
                        {{$user->name}}
                    </x-admin.tableData>

                    <x-admin.tableData label="Correo">
                        {{$user->email}}
                    </x-admin.tableData>
                    
                    <x-admin.tableImage label="Imagen" route="{{asset('storage/' . $user->profile_photo_path)}}">
                    </x-admin.tableImage>

                    <x-admin.optionTableBtn route="#">
                        Ver
                    </x-admin.optionTableBtn>

                    <x-admin.optionTableBtn route="{{route('admin.users.roleEdit',$user->id)}}" type="role" bgColor="bg-secondary">
                        Rol
                    </x-admin.optionTableBtn>

                    <x-admin.optionTableBtn route="#" type="edit" bgColor="bg-complementary" >
                        Editar
                    </x-admin.optionTableBtn>
                </x-admin.tableRow>
                @endforeach
            </x-slot>
            <x-slot name="paginacion">
                {{$users->links('pagination::tailwind')}}
            </x-slot>
        </x-admin.table>
    @else
        <x-admin.data-not-found></x-admin.data-not-found>
    @endif
</div>
