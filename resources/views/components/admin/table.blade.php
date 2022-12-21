<div class="table__container w-[calc(100%)] overflow-auto h-[calc(100%-166px)] tablet:h-[calc(100%-160px)] phone:h-[calc(100%-135px)]">
    <table class="w-full">
      <thead class="manager-table__headers mt-5 bg-shadeWhite w-full h-10 text-gray-600 font-light sticky top-0 tablet:hidden">
        <tr class="manager-table__row">
          @foreach(explode('|', $headers) as $header)
            @if ($loop->first)
                <th class="manager-table__header border-collapse rounded-tl-md overflow-hidden" scope="col">{{$header}}</th>
            @elseif ($loop->last)
                <th class="manager-table__header border-collapse rounded-tr-md overflow-hidden" scope="col">{{$header}}</th>
            @else
                <th class="manager-table__header" scope="col">{{$header}}</th>
            @endif
          @endforeach
        </tr>
      </thead>
        <tbody class="manager-table__body">
            {{$slot}}
    </table>
</div>

<div class="bg-white block p-4 sticky -bottom-4 -left-4 -right-4 -mb-4 -mr-4 -ml-4 phone:absolute phone:-bottom-4 phone:left-0 phone:right-0 phone:m-0 phone:pt-2">
  {{$paginacion}}
</div>