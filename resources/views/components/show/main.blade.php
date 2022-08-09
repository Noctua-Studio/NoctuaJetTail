@props([
    'title',
    'route',
    'id'
])
<div class="view">

    <div class="manager-table__top">
        <h3 class="manager-table__caption">{{$title}}</h3>
    </div>

    <div class="view__container">
        <div>
            {{$slot}}
        </div>
        @isset($images)
            <div>
                {{$images}}
            </div>
        @endisset
    </div>

</div>
{{-- Cambiar ruta de regreso --}}

<form action="{{route('admin.'.$route.'.destroy',$id)}}" method="POST">
    
    @csrf
    @method('DELETE')

    <a class="contacto__button nta-btn-common view__button" href="{{route('admin.'.$route.'.index')}}">Regresar</a>
    
    <input class="contacto__button nta-btn-danger view__button" type="submit" value="Eliminar">
</form>