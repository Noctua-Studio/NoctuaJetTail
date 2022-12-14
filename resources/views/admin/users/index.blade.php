<x-app-layout>
    <div class="bg-white flex flex-col gap-4 -mx-4 p-4 sticky -top-4 -mt-4 z-20 tablet:flex-row tablet:justify-between tablet:bg-shadeWhite h-32">
        <x-admin.header>Usuarios</x-admin.header>  

        <a class="manager-table__add bg-secondary flex w-28 h-10 items-center justify-center rounded-md text-darken gap-2 s-phone:w-10" href=""><p class="s-phone:hidden">Agregar</p> <i class="bi bi-plus-lg"></i></a>
      
    </div>
    <table class="w-full">
      <thead class="manager-table__headers mt-5 bg-shadeWhite w-full h-10 text-gray-600 font-light sticky top-28">
        <tr class="manager-table__row ">
          <th class="manager-table__header" scope="col">Nombre</th>
          <th class="manager-table__header" scope="col">Correo</th>
          <th class="manager-table__header" scope="col">Role</th>
          <th class="manager-table__header" scope="col">Imagen</th>
          <th class="manager-table__header" scope="col">Ver</th>
          <th class="manager-table__header" scope="col">Editar</th>
        </tr>
      </thead>
        <tbody class="manager-table__body">
            @foreach ($users as $user)
            @if ($user->role=='admin')
            <tr class="manager-table__row block border-[1px] border-gray-200 p-4 mt-4">
              <td class="manager-table__data" scope="row" data-label="Nombre">{{$user->name}}</td>
              <td class="manager-table__data" data-label="Correo">{{$user->email}}</td>
              <td class="manager-table__data" data-label="Rol">{{$user->role}}</td>
              <td class="manager-table__data" data-label="Imagen"><img class="manager-table__img" src="{{asset('storage/profile_pictures/'.$user->image)}}" alt="Imagen de usuario"></td>
  
              <td class="manager-table__data manager-table__option" data-label="Ver"><a href="{{route('admin.users.show',$user->id)}}"><i class="bi bi-search"></i></a></td>
            </tr>   
            @else
            <tr class="manager-table__row p-1 even:bg-gray-100 h-14 text-center">
              <td class="manager-table__data" scope="row" data-label="Nombre">{{$user->name}}</td>
              <td class="manager-table__data" data-label="Correo">{{$user->email}}</td>
              <td class="manager-table__data" data-label="Empresa">{{$user->role}}</td>
              <td class="manager-table__data" data-label="Imagen"><img class="manager-table__img" src="{{asset('storage/profile_pictures/'.$user->image)}}" alt="Imagen de usuario"></td>
  
              <td class="manager-table__data manager-table__option" data-label="Ver"><a class="bg-secondary p-3 rounded-md" href=""><i class="bi bi-search"></i></a></td>
              <td class="manager-table__data manager-table__option" data-label="Editar"><a class="bg-complementary p-3 rounded-md" href=""><i class="bi bi-pencil"></i></a></td>
              
            </tr>
            
            @endif
            @endforeach
    </table>

 
    
</x-app-layout>  