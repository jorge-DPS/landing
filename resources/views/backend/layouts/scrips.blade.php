<script src="{{ asset('assetsBackend/js/core.bundle.js') }}"></script>
<script src="{{ asset('assetsBackend/vendors/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assetsBackend/js/widgets/general.js') }}"></script>
<script src="{{ asset('assetsBackend/js/layouts/demo1.js') }}"></script>
<script src="{{ asset('assetsBackend/vendors/sweet/sweetalert2.js') }}"></script>
@stack('scripts')
<script>
    function mostrarCargando() {
        document.getElementById('cargando-overlay').style.display = 'flex';
    }
</script>

<script src="{{ asset('assetsBackend/vendors/alpinejs/js/alpine.js') }}"></script>
