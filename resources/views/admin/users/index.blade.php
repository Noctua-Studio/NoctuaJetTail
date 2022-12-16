<x-app-layout>
    <div class="bg-white flex flex-col gap-4 -mx-4 p-4 sticky -top-4 -left-4 -mt-4 z-20 tablet:flex-row tablet:justify-between h-32 tablet:h-[70px]">
        <x-admin.header>Usuarios</x-admin.header>  

        <x-admin.addBtn></x-admin.addBtn>  
      
    </div>
    <table class="w-full">
      <thead class="manager-table__headers mt-5 bg-shadeWhite w-full h-10 text-gray-600 font-light sticky top-28 tablet:hidden">
        <tr class="manager-table__row">
          <th class="manager-table__header border-collapse rounded-tl-md overflow-hidden" scope="col">Id</th>
          <th class="manager-table__header" scope="col">Nombre</th>
          <th class="manager-table__header" scope="col">Correo</th>
          <th class="manager-table__header" scope="col">Rol</th>
          <th class="manager-table__header" scope="col">Imagen</th>
          <th class="manager-table__header" scope="col">Ver</th>
          <th class="manager-table__header border-collapse rounded-tr-md overflow-hidden" scope="col">Editar</th>
        </tr>
      </thead>
        <tbody class="manager-table__body">
            @foreach ($users as $user)
            {{-- @if ($user->role=='admin')
            <tr class="manager-table__row block border-[1px] border-gray-200 p-4 mt-4">
              <td class="manager-table__data" scope="row" data-label="Nombre">{{$user->name}}</td>
              <td class="manager-table__data" data-label="Correo">{{$user->email}}</td>
              <td class="manager-table__data" data-label="Rol">{{$user->role}}</td>
              <td class="manager-table__data" data-label="Imagen"><img class="manager-table__img" src="{{asset('storage/profile_pictures/'.$user->image)}}" alt="Imagen de usuario"></td>
  
              <td class="manager-table__data manager-table__option" data-label="Ver"><a href="{{route('admin.users.show',$user->id)}}"><i class="bi bi-search"></i></a></td>
            </tr>   
            @else --}}
            <tr class="manager-table__row p-1 even:bg-gray-100 h-16 text-center tablet:border-2 tablet:block tablet:h-max tablet:rounded-md mt-5">
              <td class="manager-table__data px-5 py-1 tablet:border-b-[1px] tablet:block tablet:text-base phone:text-sm tablet:text-right s-phone:px-2 tablet:before:[content:attr(data-label)] tablet:before:text-left tablet:before:mb-3 tablet:before:block tablet:before:font-bold tablet:before:uppercase" scope="row" data-label="Id">{{$user->id}}</td>
              <td class="manager-table__data px-5 py-1 tablet:border-b-[1px] tablet:block tablet:text-base phone:text-sm tablet:text-right s-phone:px-2 tablet:before:[content:attr(data-label)] tablet:before:text-left tablet:before:mb-3 tablet:before:block tablet:before:font-bold tablet:before:uppercase" scope="row" data-label="Nombre">{{$user->name}}</td>
              <td class="manager-table__data px-5 py-1 tablet:border-b-[1px] tablet:block tablet:text-base phone:text-sm tablet:text-right s-phone:px-2 tablet:before:[content:attr(data-label)] tablet:before:text-left tablet:before:mb-3 tablet:before:block tablet:before:font-bold tablet:before:uppercase" data-label="Correo">{{$user->email}}</td>
              <td class="manager-table__data px-5 py-1 tablet:border-b-[1px] tablet:block tablet:text-base phone:text-sm tablet:text-right s-phone:px-2 tablet:before:[content:attr(data-label)] tablet:before:text-left tablet:before:mb-3 tablet:before:block tablet:before:font-bold tablet:before:uppercase" data-label="Rol">{{$user->role}}</td>
              <td class="manager-table__data px-5 py-5 tablet:border-b-[1px] tablet:block tablet:text-base phone:text-sm tablet:text-right s-phone:px-2 tablet:before:[content:attr(data-label)] tablet:before:text-left tablet:before:mb-3 tablet:before:block tablet:before:font-bold tablet:before:uppercase " data-label="Imagen"><img class="manager-table__img w-[4rem] rounded tablet:w-4/12 block m-auto tablet:mr-0 tablet:ml-auto" src="{{asset('storage/' . $user->profile_photo_path)}}" alt="Imagen de usuario"></td>
  
              <x-admin.optionTableBtn route="#">Ver</x-admin.optionTableBtn>
              <x-admin.optionTableBtn type="edit" bgColor="bg-complementary" route="#">Editar</x-admin.optionTableBtn>
            </tr>
            
            {{-- @endif --}}
            @endforeach
    </table>

    <div class="bg-white block p-4 sticky -bottom-4 -left-4 -right-4 -mb-4 -mr-4 -ml-4">
      {{$users->links('pagination::tailwind')}}
    </div>
 
    
</x-app-layout>  