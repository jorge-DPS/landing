@extends('backend.layouts.app')

@section('title')
    <title>MetaWeb</title>
@endsection

@section('breadcrumbs')
    <div class="flex [.header_&amp;]:below-lg:hidden items-center gap-1.25 text-xs lg:text-sm font-medium mb-2.5 lg:mb-0"
         data-reparent="true" data-reparent-mode="prepend|lg:prepend"
         data-reparent-target="#content_container|lg:#header_container">
       <span class="text-gray-600">
        {{ Breadcrumbs::render('home') }}
       </span>
        <i class="ki-filled ki-right text-gray-500 text-3xs">
        </i>
        <span class="text-gray-700">
            {{ Breadcrumbs::render('metatags.index') }}
       </span>
    </div>
@endsection

@section('content')
    <main class="grow content pt-5" id="content" role="content">
        <div class="container-fixed">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-semibold leading-none text-gray-900">
                        Cabecera (metatags)
                    </h1>
                    <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                        La cabecera del sitio es crucial para proporcionar información relevante y optimizada sobre tu
                        sitio web.
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fixed">
            <div class="grid gap-5 lg:gap-7.5">
                <div class="col-span-2">
                    <div class="flex flex-col gap-5 lg:gap-7.5">
                        @include('backend.metatag.data')
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')

    <?php if (session('success')) { ?>
    <script>
        Swal.fire({
            position: "top-end",
            title: "!Registro exitoso¡",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            icon: "success",
            timer: 2000,
            scrollbarPadding: false,
            heightAuto: false,
            backdrop: false,
            customClass: {
                popup: 'swal-alert-success',
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
    @if ($errors->any())
        <script>
            Swal.fire({
                position: "top-end",
                title: "¡Error!",
                text: "{{ $errors->first() }}",
                icon: "error",
                showConfirmButton: false,
                timer: 5000,
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
    @endif

    <script>
        document.getElementById('upload-favicon-button').addEventListener('click', function () {
            document.getElementById('favicon-input').click();
        });

        document.getElementById('favicon-input').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('favicon-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        function removeFavicon() {
            document.getElementById('favicon-preview').src = '/assetsBackend/media/avatars/blank.png';
            document.getElementById('favicon-input').value = '';
        }

        document.getElementById('upload-twitter-image-button').addEventListener('click', function () {
            document.getElementById('twitter-image-input').click();
        });

        document.getElementById('twitter-image-input').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('twitter-image-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        function removeTwitterImage() {
            document.getElementById('twitter-image-preview').src = '/assetsBackend/media/avatars/blank.png';
            document.getElementById('twitter-image-input').value = '';
        }

        document.getElementById('upload-og-image-button').addEventListener('click', function () {
            document.getElementById('og-image-input').click();
        });

        document.getElementById('og-image-input').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('og-image-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        function removeOgImage() {
            document.getElementById('og-image-preview').src = '/assetsBackend/media/avatars/blank.png';
            document.getElementById('og-image-input').value = '';
        }
    </script>

    <script>
        function enviarFormulario() {
            mostrarCargando();
            document.getElementById('updateInfoMetatagas').submit();
        }
    </script>
@endpush



