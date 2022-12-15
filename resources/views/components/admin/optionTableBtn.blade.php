@props([
    'type' => 'view',
    'bgColor' => 'bg-secondary',
    'route' => '#'
])

<td class="manager-table__data manager-table__option px-4 py-1 tablet:block tablet:pt-1 tablet:px-0 tablet:pb-0" data-label="Ver">
    <a class="{{$bgColor}} p-3 rounded-md hover:brightness-90 duration-200  tablet:w-full tablet:bg-secondary tablet:flex tablet:items-center tablet:justify-center tablet:gap-2" href="{{$route}}">
        <p class="hidden tablet:inline-block">{{$slot}}</p>
        @if ($type == 'view')
        <i class="bi bi-search"></i>
        @elseif ($type == 'edit')
        <i class="bi bi-pencil"></i>
        @elseif ($type == 'delete')
        <i class="bi bi-x-lg"></i>
        @endif
    </a>
</td>