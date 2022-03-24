@include('includes._header-home')

@if(Route::current()->getName() !== 'home')
    <div id="breadcrumb" class="breadcrumb mb-0 text-white text-center rounded-0 {{ Request::is('cursos/*/*') ? 'pt-3' : (Request::is('cursos-*') ? 'py-1' : 'py-4') }} {{ Request::is('cursos') ? 'bg-alternative' : '' }}">
        @yield('breadcrumb')
    </div>
@endif