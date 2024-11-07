<!DOCTYPE html>
<html lang="es-BO">

<head>
    @include('frontend.layouts.metas')
    @include('frontend.layouts.styles')
</head>

<body>
    <div class="ed-overlay group">
        <div class="fixed inset-0 z-[100] group-[.active]:bg-edblue/80 duration-[400ms] pointer-events-none group-[.active]:pointer-events-auto"></div>
    </div>
    @include('frontend.partials.cart')
    @include('frontend.partials.search')
    @include('frontend.partials.sidebar')
    @include('frontend.partials.header')
    @yield('content')
    @include('frontend.partials.footer')
    @include('frontend.layouts.scripts')
</body>

</html>