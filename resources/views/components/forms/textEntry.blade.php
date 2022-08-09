@props([
    'label',
    'name',
    'value'
])

<label class="view__label" for="{{$name}}">{{$label}}</label>
<input class="view__input" name="{{$name}}" type="text" value="{{$value}}">
@error('{{$name}}')
    <div class="error">{{ $message }}</div>
@enderror