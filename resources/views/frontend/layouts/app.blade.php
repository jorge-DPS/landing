<!DOCTYPE html>
<html lang="es-BO">

<head>
    @include('frontend.layouts.metas')
    @include('frontend.layouts.styles')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsSwcXKpZO6cpmV0lStja92i1jTPip2h4&libraries=maps,marker&v=beta"
        defer>
    </script>
    @vite('resources/css/frontend/mapa.css')
    @livewireStyles
</head>

<body>
    <div class="ed-overlay group">
        <div
            class="fixed inset-0 z-[100] group-[.active]:bg-edblue/80 duration-[400ms] pointer-events-none group-[.active]:pointer-events-auto">
        </div>
    </div>
    @include('frontend.partials.cart')
    @include('frontend.partials.search')
    @include('frontend.partials.sidebar')
    @include('frontend.partials.header')
    @yield('content')
    <!-- Page Content -->

    {{-- <x-frontend.app-layout/> --}}
    @livewireScripts

    @include('frontend.partials.footer')
    @include('frontend.layouts.scripts')
</body>

</html>
