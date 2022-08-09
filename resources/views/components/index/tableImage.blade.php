@props([
    'label',
    'folder',
    'alt' => 'image'
])
<td class="manager-table__data" scope="row" data-label="{{$label}}"><img src="{{asset('storage/'.$folder.'/'.$slot)}}" alt="{{$alt}}"></td>
