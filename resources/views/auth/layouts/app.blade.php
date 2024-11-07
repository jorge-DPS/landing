<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="es-BO">
<head>
    <base href="../../../../">
    @include('backend.layouts.metas')
    @include('backend.layouts.styles')
    <link rel="stylesheet" href="{{ asset('assetsBackend/vendors/sweet/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsBackend/css/swetAlert.css') }}">
</head>
<body class="flex h-full dark:bg-coal-500">
@yield('content')
<script src="{{ asset('assetsBackend/vendors/sweet/sweetalert2.js') }}"></script>
<script src="{{ asset('assetsBackend/js/login/utilitis.js') }}"></script>
<?php if (session('error')) { ?>
<script>
    Swal.fire({
        position: "top-end",
        title: "Error de Acceso",
        text: "{{ session('error') }}",
        showConfirmButton: false,
        timer: 5000,
        icon: "error",
        scrollbarPadding: false,
        heightAuto: false,
        backdrop: false,
        customClass: {
            popup: 'swal-alert-danger',
            title: 'swal-title-overlay',
            content: 'swal-content-overlay'
        },
        didOpen: () => {
            document.body.classList.add('swal-open');
        },
        willClose: () => {
            document.body.classList.remove('swal-open');
        }
    });
</script>
<?php } ?>
</body>
</html>
