@props([
    'object',
    'id'
])
<tr class="manager-table__row" scope="col">

    {{$slot}}

    <td class="manager-table__data manager-table__option" data-label="Ver">
        <a href="{{route('admin.'.$object.'.show',$id)}}"><i class="bi bi-search"></i></a>
    </td>
    <td class="manager-table__data manager-table__option" data-label="Editar">
        <a href="{{route('admin.'.$object.'.edit',$id)}}"><i class="bi bi-pencil"></i></a>
    </td>
</tr>
