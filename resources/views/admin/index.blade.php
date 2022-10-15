
<x-app-layout>
    <div class="flex flex-col gap-8">
        <h1 class="nta-title nta-title-lg text-3xl font-semibold font-mont text-darken">Inicio</h1>
    
            <div class="inicio bg-secondary flex gap-12 flex-wrap p-8 w-full rounded-md justify-between">
                <div>
                    <h1 class="nta-title nta-title-lg text-6xl font-bold font-mont text-darken">Bienvenido <br> <span class="text-primary">{{Auth::user()->name}}</span></h1>
                </div>
                <img class="w-72" src="{{asset('img/welcome.svg')}}" alt="">
            </div>
            <div class="gap-5 grid grid-cols-[repeat(auto-fit,minmax(12rem,1fr))]">
                <x-admin.itemChart bgColor="bg-primary"></x-admin.itemChart>
                <x-admin.itemChart bgColor="bg-complementary"></x-admin.itemChart>
                <x-admin.itemChart bgColor="bg-darken"></x-admin.itemChart>
                <x-admin.itemChart bgColor="bg-secondary"></x-admin.itemChart>
                <x-admin.itemChart bgColor="bg-environmental"></x-admin.itemChart>
            </div>
    </div>
</x-app-layout>

@section('scripts')

@endsection