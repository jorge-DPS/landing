<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="es-BO">

<head>
    <base href="../../">
    @include('backend.layouts.metas')
    @include('backend.layouts.styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>

<body class="flex h-full demo1 sidebar-fixed header-fixed bg-[#fefefe] dark:bg-coal-500">
<script src="{{ asset('assetsBackend/js/login/utilitis.js') }}"></script>
<style>

    /* From Uiverse.io by vikramsinghnegi */
    .blob {
        width: 112px;
        height: 112px;
        display: grid;
        background: #fff;
        filter: blur(5.6px) contrast(10);
        padding: 11.2px;
        mix-blend-mode: darken;
    }

    .blob:before,
    .blob:after {
        content: "";
        grid-area: 1/1;
        width: 44.8px;
        height: 44.8px;
        background: rgb(177, 42, 56);
        animation: blob-rhf26m 2s infinite;
    }

    .blob:after {
        animation-delay: -1s;
    }

    @keyframes blob-rhf26m {
        0% {
            transform: translate(0, 0);
        }

        25% {
            transform: translate(100%, 0);
        }

        50% {
            transform: translate(100%, 100%);
        }

        75% {
            transform: translate(0, 100%);
        }

        100% {
            transform: translate(0, 0);
        }
    }

</style>
<div id="cargando-overlay" class="overlay">
    <div class="loader">
        <div class="blob"></div>
    </div>
</div>


<div class="flex grow">
    @include('backend.partials.sidebar')
    <div class="wrapper flex grow flex-col">
        @include('backend.partials.header')
        @yield('content')
        @include('backend.partials.footer')
    </div>
</div>
@include('backend.layouts.scrips')
</body>

</html>
