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
