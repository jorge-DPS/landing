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
       </span>
    </div>
@endsection

@section('content')
    <main class="grow content pt-5" id="content" role="content">
        <div class="container-fixed">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-semibold leading-none text-gray-900">
                        Cabecera del sitio web
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
                        <div class="card min-w-full">
                            <form action="{{ route('metatags.update',$metatags->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-header gap-2">
                                    <h3 class="card-title">
                                        Enalces y datos relevantes para el Sitema Web
                                    </h3>
                                </div>
                                <div class="card-body lg:py-7.5 py-5">

                                    <style>
                                        .custom-file-button {
                                            display: block;
                                            width: 100%;
                                            padding: 0.5rem 1rem;
                                            font-size: 0.875rem;
                                            color: #ffffff;
                                            background-color: rgb(15, 155, 36);
                                            border-radius: 30px;
                                            text-align: center;
                                            font-weight: 500;
                                            cursor: pointer;
                                            transition: background-color 0.3s ease, border-color 0.3s ease;
                                        }

                                        .custom-file-button:hover {
                                            background-color: rgb(15, 155, 36, 0.8);
                                        }

                                        .custom-file-input {
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            width: 100%;
                                            height: 100%;
                                            opacity: 0;
                                            cursor: pointer;
                                        }

                                        .custom-remove-button {
                                            display: inline-block;
                                            margin-left: 1rem;
                                            padding: 0.5rem 1rem;
                                            background-color: rgb(177, 42, 56);
                                            color: #ffffff;
                                            border: none;
                                            border-radius: 30px;
                                            cursor: pointer;
                                            transition: background-color 0.3s ease;
                                        }

                                        .custom-remove-button:hover {
                                            background-color: rgb(177, 42, 56, 0.8);
                                        }
                                    </style>

                                    <!-- Primer bloque: Favicon -->
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Icono favorito (favicon)
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                                            <img id="favicon-preview"
                                                 class="mt-2"
                                                 src="{{ $metatags->favicon ? asset($metatags->favicon) : asset('/assetsBackend/media/avatars/blank.png') }}"
                                                 style="height:100px;" />
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="image-input size-[500px]" data-image-input="true">
                                                <input id="favicon-input" accept=".png, .jpg, .jpeg" name="favicon" type="file" class="custom-file-input" style="display: none;"/>
                                                <button type="button" class="custom-file-button" id="upload-favicon-button">
                                                    <i class="ki-solid ki-add-files text-2xl"></i>
                                                </button>
                                                <button type="button" onclick="removeFavicon()" class="custom-remove-button">
                                                    <i class="ki-solid ki-trash text-2xl"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Segundo bloque: Imagen de Twitter -->
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Imagen de Twitter
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                                            <img id="twitter-image-preview"
                                                 class="mt-2"
                                                 src="{{ $metatags->twitter_image ? asset($metatags->twitter_image) : asset('/assetsBackend/media/avatars/blank.png') }}"
                                                 style="height:100px;" />
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="image-input size-[500px]" data-image-input="true">
                                                <input id="twitter-image-input" accept=".png, .jpg, .jpeg" name="twitter_image" type="file" class="custom-file-input" style="display: none;"/>
                                                <button type="button" class="custom-file-button" id="upload-twitter-image-button">
                                                    <i class="ki-solid ki-add-files text-2xl"></i>
                                                </button>
                                                <button type="button" onclick="removeTwitterImage()" class="custom-remove-button">
                                                    <i class="ki-solid ki-trash text-2xl"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tercer bloque: Imagen OG (Open Graph) -->
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Imagen OG (Open Graph)
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                                            <img id="og-image-preview"
                                                 class="mt-2"
                                                 src="{{ $metatags->og_image ? asset($metatags->og_image) : asset('/assetsBackend/media/avatars/blank.png') }}"
                                                 style="height:100px;" />
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="image-input size-[500px]" data-image-input="true">
                                                <input id="og-image-input" accept=".png, .jpg, .jpeg" name="og_image" type="file" class="custom-file-input" style="display: none;"/>
                                                <button type="button" class="custom-file-button" id="upload-og-image-button">
                                                    <i class="ki-solid ki-add-files text-2xl"></i>
                                                </button>
                                                <button type="button" onclick="removeOgImage()" class="custom-remove-button">
                                                    <i class="ki-solid ki-trash text-2xl"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        // Funciones para el primer bloque (Favicon)
                                        document.getElementById('upload-favicon-button').addEventListener('click', function() {
                                            document.getElementById('favicon-input').click();
                                        });

                                        document.getElementById('favicon-input').addEventListener('change', function(event) {
                                            const file = event.target.files[0];
                                            if (file) {
                                                const reader = new FileReader();
                                                reader.onload = function(e) {
                                                    document.getElementById('favicon-preview').src = e.target.result;
                                                };
                                                reader.readAsDataURL(file);
                                            }
                                        });

                                        function removeFavicon() {
                                            document.getElementById('favicon-preview').src = '/assetsBackend/media/avatars/blank.png';
                                            document.getElementById('favicon-input').value = '';
                                        }

                                        // Funciones para el segundo bloque (Imagen de Twitter)
                                        document.getElementById('upload-twitter-image-button').addEventListener('click', function() {
                                            document.getElementById('twitter-image-input').click();
                                        });

                                        document.getElementById('twitter-image-input').addEventListener('change', function(event) {
                                            const file = event.target.files[0];
                                            if (file) {
                                                const reader = new FileReader();
                                                reader.onload = function(e) {
                                                    document.getElementById('twitter-image-preview').src = e.target.result;
                                                };
                                                reader.readAsDataURL(file);
                                            }
                                        });

                                        function removeTwitterImage() {
                                            document.getElementById('twitter-image-preview').src = '/assetsBackend/media/avatars/blank.png';
                                            document.getElementById('twitter-image-input').value = '';
                                        }

                                        // Funciones para el tercer bloque (Imagen OG)
                                        document.getElementById('upload-og-image-button').addEventListener('click', function() {
                                            document.getElementById('og-image-input').click();
                                        });

                                        document.getElementById('og-image-input').addEventListener('change', function(event) {
                                            const file = event.target.files[0];
                                            if (file) {
                                                const reader = new FileReader();
                                                reader.onload = function(e) {
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


                                    <div class="border-t border-gray-200 my-7.5"></div>

                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Nombre de la página
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->page_name }}"
                                                   placeholder="No asignado"
                                                   name="page_name"
                                            >
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Título
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->title }}" name="title">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Descripción
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->description }}" name="description">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Palabras clave (keywords)
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->keywords }}" name="keywords">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Autor
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->author }}" readonly>
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Palabras claves (robots)
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->robots }}" name="robots">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Enlace canónica (canonical)
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->canonical }}" name="canonical">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="border-t border-gray-200 my-7.5"></div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Título OG (Open Graph)
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->og_title }}" name="og_title">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Descripción OG (Open Graph)
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->og_description }}"
                                                   name="og_description">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Tipo OG (Open Graph)
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->og_type }}" name="og_type">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="border-t border-gray-200 my-7.5"></div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Tarjeta de Twitter
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->twitter_card }}"
                                                   name="twitter_card">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Título de Twitter
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->twitter_title }}"
                                                   name="twitter_title">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Descripción de Twitter
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $metatags->twitter_description }}"
                                                   name="twitter_description">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="border-t border-gray-200 my-7.5"></div>
                                    <div class="flex justify-end"
                                         style="position: fixed; bottom: 65px; right: 70px; z-index: 1000;">
                                        <button class="btn btn-primary pulse-button" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="icon icon-tabler icon-tabler-outline icon-tabler-device-floppy">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"/>
                                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                                                <path d="M14 4l0 4l-6 0l0 -4"/>
                                            </svg>
                                            Actualizar todo
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
                    timer: 2000,
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



@endpush



