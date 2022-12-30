@props([
    'placeholder' => 'Nombre',
    'name' => 'name',
    'type' => 'text',
    'id',
    'value'
])

<input class="view__input border-0 bg-shadeWhite rounded-md  p-3 transition-all ease-linear duration-100 mt-2 w-[calc(100%-4px)] mx-[2px]" type="{{$type}}" placeholder="{{$placeholder}}" name="{{$name}}" @if(isset($id)) id="{{$id}}" @endif @if(isset($value)) value="{{$value}}" @endif>