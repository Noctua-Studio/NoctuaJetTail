@props([
    'label' => 'Imagen',
    'route' => '#'
])
<td class="manager-table__data px-5 py-5 tablet:border-b-[1px] tablet:block tablet:text-base phone:text-sm tablet:text-right s-phone:px-2 tablet:before:[content:attr(data-label)] tablet:before:text-left tablet:before:mb-3 tablet:before:block tablet:before:font-bold tablet:before:uppercase " data-label="{{$label}}">
    <img class="manager-table__img w-[4rem] rounded tablet:w-4/12 block m-auto tablet:mr-0 tablet:ml-auto" src="{{$route}}" alt="Imagen de registro">
</td>