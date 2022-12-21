@props([
    'name' => 'name',
    'accept' => 'image/*',
    'id'
])

<input class="view__input border-0 bg-shadeWhite rounded-md  p-3 transition-all ease-linear duration-100 m-0 w-full" type="file" accept="image/*" name="{{$name}}" @if(isset($id)) id="{{$id}}" @endif>