
<x-app-layout>
    <div class="flex flex-col gap-8">
        <h1 class="nta-title nta-title-lg text-3xl font-semibold font-mont text-darken">Inicio</h1>
    
            <div class="inicio bg-secondary flex gap-12 flex-wrap p-8 w-full rounded-md justify-between">
                <div>
                    <h1 class="nta-title nta-title-lg text-6xl font-bold font-mont text-darken">Bienvenido <br> <span class="text-primary">{{Auth::user()->name}}</span></h1>
                </div>
                <img class="w-72" src="{{asset('img/welcome.svg')}}" alt="">
            </div>
            <div class="gap-5 flex-wrap grid grid-cols-5 desktop:grid-cols-3 laptop:grid-cols-2 tablet:grid-cols-1">
                <x-admin.itemChart bgColor="bg-"></x-admin.itemChart>

                
            </div>
    </div>
</x-app-layout>

@section('scripts')

@endsection