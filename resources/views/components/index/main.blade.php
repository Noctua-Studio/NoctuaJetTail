@props([
    'title',
    'object'
])
<div>
    <table class="manager-table">
        <div class="manager-table__top">
            <h3 class="manager-table__caption">{{$title}}</h3>
            <a class="manager-table__add" href="{{route('admin.'.$object.'.create')}}"><i class="bi bi-plus-lg"></i></a>
        </div>
        {{$slot}}
    </table>
</div>