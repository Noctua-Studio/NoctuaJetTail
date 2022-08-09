@props([
    'label',
    'folder',
    'image',
    'alt'
])
<label class="view__label">{{$label}}</label>
<img class="view__img" src="{{asset('storage/'.$folder.'/'.$image)}}" alt="{{$alt}}">
