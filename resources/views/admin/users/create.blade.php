<x-app-layout>
    <div class="bg-white flex flex-col gap-4 -mx-4 p-4 sticky -top-4 -left-4 -mt-4 z-20 tablet:flex-row tablet:justify-between h-16 tablet:h-[70px]">
        <x-admin.header>Crear nuevo usuario</x-admin.header>  
    </div>

    <div class="w-full font-mont">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="view__container grid grid-cols-[40%_calc(60%-3rem)] gap-10 laptop:grid-cols-[50%_calc(50%-2rem)] laptop:gap-6 tablet:grid-cols-1 tablet:gap-4">
                <div>
                    <label class="view__label text-base font-medium block mt-3 mb-2" for="nombre">Nombre</label>
                    <input class="view__input border-0 bg-shadeWhite rounded-md  p-3 transition-all ease-linear duration-100 m-0 w-full" type="text" placeholder="Nombre" name="name" id="name">
                    @error('name')
                        <p>{{$message}}</p>
                    @enderror
                    <label class="view__label text-base font-medium block mt-3 mb-2" for="email">Email</label>
                    <input class="view__input border-0 bg-shadeWhite rounded-md  p-3 transition-all ease-linear duration-100 m-0 w-full" type="email" placeholder="Email" name="email" id="email">
                    @error('email')
                        <p>{{$message}}</p>
                    @enderror
                    <label class="view__label text-base font-medium block mt-3 mb-2" for="password">Contraseña</label>
                    <input class="view__input border-0 bg-shadeWhite rounded-md  p-3 transition-all ease-linear duration-100 m-0 w-full" type="password" placeholder="Contraseña" name="password" id="password">
                    <input class="view__input border-0 bg-shadeWhite rounded-md  p-3 transition-all ease-linear duration-100 m-0 mt-2 w-full" type="password" placeholder="Confirmar Contraseña" name="password_confirmation" id="password_confirmation">
                    @error('password')
                        <p>{{$message}}</p>
                    @enderror
                    <label class="view__label text-base font-medium block mt-3 mb-2" for="role">Rol</label>
                    <select class="view__input border-0 bg-shadeWhite rounded-md  p-3 transition-all ease-linear duration-100 m-0 w-full" name="role">>
                        <option class="" disabled selected hidden value="" selected>Rol</option>
                        <option value="editor">Editor</option>
                        <option value="contact">Patrocinios</option>
                        <option value="registration">Inscripciones</option>
                        <option value="general">General</option>
                    </select>
                    @error('role')
                        <p>{{$message}}</p>
                    @enderror
    
                    <label class="view__label text-base font-medium block mt-3 mb-2" for="image">Imagen</label>
                    <input class="view__input border-0 bg-shadeWhite rounded-md  p-3 transition-all ease-linear duration-100 m-0 w-full" type="file" accept="image/*" name="imagen" id="imagen">
                    
                    <input type="hidden" id="imagenh" value="{{asset('storage/placeholder.png')}}">
    
                    @error('image')
                        <p>{{$message}}</p>
                    @enderror
    
                    @if($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                </div>
                <img class="view__img mt-5 h-fit mr-2 w-full" id="preview" src="" alt="Imagen de Usuario">
            </div>
    
            <input class="login__button nta-btn-envieronmental" type="submit" value="Crear Usuario" name="enviar">
        </form>
    </div>

    <script src="{{asset('js/admin/preview.js')}}"></script>
</x-app-layout>