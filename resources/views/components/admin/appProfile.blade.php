<div class="profile__content absolute text-shadeDark bottom-0    left-0 w-full bg-secondary rounded-b-md h-[87px] flex items-center justify-between">
    <div class="profile relative py-3 px-3 flex justify-between w-full">
        <div class="profile__details opacity-100 flex">
            <img class="h-11 w-11 object-cover rounded-md" src="{{ auth()->user()->profile_photo_url }}" alt="">

            <a href="{{route('profile.show')}}" class="hover:text-primary transition-all duration-150">
                <div class="name__job ml-3">
                    <div class="name font-semibold whitespace-nowrap">{{ auth()->user()->name}}</div>
                    <div class="job text-sm">{{auth()->user()->getRoleNames()[0];}}</div>
                </div>
            </a>
        </div>

        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                
                <i class="bi bi-box-arrow-right absolute left-[88%] bottom-[12px] -translate-x-2/4 min-w-[50px] leading-10 text-xl rounded-md cursor-pointer text-center hover:text-red-600" id="log_out"></i>
            </a>
        </form>
        
    </div>
</div>