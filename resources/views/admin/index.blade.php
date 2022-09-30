
<x-app-layout>
    <div class="manager">
            <div class="inicio">
                <div>
                    <h1 class="nta-title nta-title-lg white">Bienvenido</h1>
                    <br>
                    <h3 class="nta-title nta-title-md complementary">{{Auth::user()->name}}</h3>
                </div>
                <img src="{{asset('img/svg/welcome.svg')}}" alt="">
            </div>
    </div>
</x-app-layout>

@section('scripts')

@endsection