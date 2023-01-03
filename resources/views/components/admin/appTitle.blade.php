<div class="logo__content">
    <div class="logo text-darken flex gap-2 h-12 w-full items-center opacity-100">
        <img class="h-11 w-11" src="{{asset('img/logo-min.webp')}}" alt="">
        <div class="logo__name text-xl text-primary font-semibold whitespace-nowrap">{{$slot}}</div>
    </div>
    <i class="bi bi-list absolute text-primary left-[90%] top-2 text-3xl h-12 w-12 text-center -translate-x-2/4 flex items-center justify-center cursor-pointer" id="admin-btn"></i>
</div>