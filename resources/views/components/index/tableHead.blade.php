@props([
    'headers'
])
<tr class="manager-table__row">
    {{-- Headers de la tabla --}}
    @foreach(explode('|', $headers) as $header)
        <th class="manager-table__header" scope="col">{{$header}}</th>
    @endforeach

    {{-- Headers para edición --}}
    <th class="manager-table__header" scope="col">Ver</th>
    <th class="manager-table__header" scope="col">Editar</th>
</tr>
