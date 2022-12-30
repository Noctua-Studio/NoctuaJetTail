<ul class="nav__list mt-3 flex flex-col gap-0 relative h-[calc(100%-60px)]">
    
    <x-admin.appSearch></x-admin.appSearch>

    <div class="sidebar__items pr-1 h-[calc(100%-150px)] w-full absolute top-16 overflow-y-auto overflow-x-hidden">
    
    {{$slot}}
    
</div>
</ul>