<script src="{{ asset('assetsFrontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assetsFrontend/vendor/fslightbox/fslightbox.js') }}"></script>
<script src="{{ asset('assetsFrontend/js/main.js') }}"></script>

<script>
    window.carruselConfig = {
        interval: {{ $carruselTime * 1000 }}
    };
</script>
