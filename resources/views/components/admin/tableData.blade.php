@props([
    'label' => 'Dato'
])
<td class="manager-table__data px-5 py-1 tablet:border-b-[1px] tablet:block tablet:text-base phone:text-sm tablet:text-right s-phone:px-2 tablet:before:[content:attr(data-label)] tablet:before:text-left tablet:before:mb-3 tablet:before:block tablet:before:font-bold tablet:before:uppercase" scope="row" data-label="{{$label}}">{{$slot}}</td>