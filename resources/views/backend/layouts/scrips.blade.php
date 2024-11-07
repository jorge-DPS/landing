<script src="{{ asset('assetsBackend/js/core.bundle.js') }}"></script>
<script src="{{ asset('assetsBackend/vendors/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assetsBackend/js/widgets/general.js') }}"></script>
<script src="{{ asset('assetsBackend/js/layouts/demo1.js') }}"></script>
<script src="{{ asset('assetsBackend/vendors/sweet/sweetalert2.js') }}"></script>
<script>
    function mostrarCargando() {
        document.getElementById('cargando-overlay').style.display = 'flex';
    }
</script>
<script src="{{ asset('assetsBackend/vendors/alpinejs/js/alpine.js') }}"></script>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>

@stack('scripts')