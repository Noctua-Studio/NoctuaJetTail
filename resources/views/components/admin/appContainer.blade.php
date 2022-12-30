<div class="min-h-screen bg-slate-200 tablet:bg-white">
            
    <div class="sidebar fixed top-0 left-0 h-[calc(100%-(16px*2))] w-80 bg-white py-2 px-3 transition-all duration-150 ease-linear m-4 rounded-md shadow z-50 tablet:hidden">
        {{$title}}
        
        {{$desktop}}
    </div>

    {{$mobile}}
    <!-- Page Heading -->
    {{-- @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif --}}
    <div class="home__content transition-all duration-150 ease-linear absolute h-full w-[calc(100%-320px-(16px*2))] tablet:w-full left-[calc(320px+(16px*2))] p-4 tablet:left-0 pl-0 tablet:p-0 z-0 tablet:top-16 tablet:h-[calc(100%-135px)] tablet:block">
        <!-- Page Content -->
        <main class="main__content bg-white w-full h-full rounded-md shadow py-4 tablet:pt-4 px-4 font-mont overflow-auto tablet:rounded-none tablet:shadow-none">
            {{$app}}   
        </main>
    </div>
</div>