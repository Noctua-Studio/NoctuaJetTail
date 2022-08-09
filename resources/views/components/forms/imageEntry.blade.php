@props([
    'label',
    'name',
    'preview'=>'false',
    'previous',
    'folder',
    'id'=>'image'
])

<label class="view__label" for="{{$name}}">{{$label}}</label>
<input class="view__input" type="file" name="{{$name}}" id="{{$id}}" accept="image/*">
@if($preview)
    @if (isset($previous))
    <input type="hidden" name="imageh" id="imageh" value="{{asset('storage/'.$folder.'/'.$previous)}}">
    @else
    <input type="hidden" name="imageh" id="imageh" value="{{asset('storage/placeholder.png')}}">
    @endif
@endif