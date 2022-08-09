@props([
    'title',
    'method',
    'object',
    'route',
    'id',

    'image' => 'false',
    'folder',
    'preview'


])
<div class="view">
    
    <div class="manager-table__top">
        <h3 class="manager-table__caption">{{$title}}</h3>
    </div>

    
    @switch($route)
        @case('update')

            <form action="{{route('admin.'.$object.'.'.$route , $id)}}" 
            method="POST"
            @isset($image)
                enctype="multipart/form-data"
            @endisset
            >

            @break
        @case('store')

            <form action="{{route('admin.'.$object.'.'.$route)}}" 
            method="POST"
            @isset($image)
                enctype="multipart/form-data"
            @endisset
            >
            
            @break
        @default
        <form action="{{route('admin.'.$object.'.'.$route,$id)}}" 
        method="POST"
        @isset($image)
            enctype="multipart/form-data"
        @endisset
        >
    @endswitch
    
        @csrf
        @method($method)

        <div class="view__container">
            <div>
                {{$slot}}
            </div>

            @if ($image=="true")
                @if (isset($preview))
                <div>
                    <img class="view__img" id="preview" src="{{asset('storage/'.$folder.'/'.$preview)}}">
                </div>
                @else
                <div>
                    <img class="view__img" id="preview" src="{{asset('storage/placeholder.png')}}">
                </div>
                @endif
            @endif

        </div>
        {{-- Cambiar ruta de regreso --}}
        <a href="{{route('admin.'.$object.'.index')}}" class="contacto__button nta-btn-common view__button">Cancelar</a>
        <input class="contacto__button nta-btn-envieronmental view__button" type="submit" value="Guardar">
    </form>

</div>