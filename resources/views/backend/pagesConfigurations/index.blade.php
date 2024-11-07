@extends('backend.layouts.app')

@section('title')
    <title>Páginas</title>
@endsection

@section('breadcrumbs')
    <div class="flex items-center gap-1.25 text-xs lg:text-sm font-medium mb-2.5 lg:mb-0" data-reparent="true"
        data-reparent-mode="prepend|lg:prepend" data-reparent-target="#content_container|lg:#header_container">
        <span class="text-gray-600">
            {{ Breadcrumbs::render('home') }}
        </span>
        <i class="ki-filled ki-right text-gray-500 text-3xs"></i>
        <span class="text-gray-700">
            {{ Breadcrumbs::render('carrusel.index') }}
        </span>
    </div>
@endsection

@section('content')
    <style>
        #table_respaldo tbody tr:hover {
            background-color: rgba(177, 42, 56, 0.14);
        }

        #table_respaldo tbody tr {
            cursor: pointer;
        }

        #table_respaldo tbody tr.sortable-chosen {
            background-color: rgba(213, 65, 80, 0.27);
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assetsBackend/css/select2.css') }}">
    <main class="grow content pt-5" id="content" role="content">
        <div class="container-fixed">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-semibold leading-none text-gray-900">
                        Secciones públicas
                    </h1>
                    <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                        Adminitración general de secciones web
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <button class="btn btn-primary" data-modal-toggle="#createSection">
                        Agregar
                    </button>
                    <div class="modal modal-dialog modal-center max-w-[600px]" data-modal="true" data-modal-backdrop="false"
                        data-modal-persistent="true" id="createSection">
                        <div class="modal-content shadow-lg"
                            style="background: #ffffff; border: 3px solid rgba(177,42,56,0.37); border-radius: 10px;">

                            <div class="modal-header">
                                <h3 class="modal-title">
                                    Agregar una sección nueva
                                </h3>
                                <button class="btn btn-xs btn-icon btn-danger" data-modal-dismiss="true">
                                    <i class="ki-outline ki-cross">
                                    </i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="postForm">
                                    <input type="hidden" value="{{ $page->id }}" name="page_id">
                                    <div class="w-full mt-2 mb-2">
                                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                            <label class="form-label max-w-32">
                                                Nombre
                                            </label>
                                            <div class="flex flex-col w-full gap-1">
                                                <input id="sectionTitle" class="input" name="title"
                                                    placeholder="Agragar un nombre" type="text" value="" />
                                                <span class="form-hint text-gray-500">
                                                    El nombre de la sección es obligatorio
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mt-2">
                                            <label class="form-label max-w-32">
                                                Tipo de sección
                                            </label>
                                            <div class="flex flex-col w-full gap-1">
                                                <select class="select" name="section_type_id">
                                                    <option value="">
                                                        Seleccionar una opción
                                                    </option>
                                                    @foreach ($sectionType as $secc)
                                                        <option value=" {{ $secc->id }}">
                                                            {{ $secc->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <span class="text-xs text-gray-500">
                                                    El tipo es obligatorio
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end">
                                        <button class="btn btn-primary" data-modal-toggle="#modal_6_2">
                                            Guardar
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fixed">
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-5 lg:gap-7.5">
                <div class="col-span-1">
                    <div class="grid gap-5 lg:gap-7.5">
                        <div class="card">
                            <div class="card-header gap-2">
                                <h3 class="card-title">
                                    Secciones vínculadas
                                </h3>
                            </div>
                            <div class="card-body pb-7.5">
                                <div class="grid gap-2.5">
                                    <table id="table_respaldo" class="min-w-full divide-y divide-gray-200">
                                        <tbody class="bg-white divide-y divide-gray-200" id="sortable">
                                            @foreach ($sectionsAll as $section)
                                                <tr data-id="{{ $section->id }}" class="hover:bg-gray-50 cursor-pointer">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                        <div class="relative size-[50px] shrink-0">
                                                            <svg class="w-full h-full
                                                                @if ($section->section_type_id == 1) fill-blue-200 stroke-blue-500
                                                                @elseif($section->section_type_id == 2) fill-green-200 stroke-green-500
                                                                @elseif($section->section_type_id == 3) fill-yellow-200 stroke-yellow-500 @endif"
                                                                fill="none" height="48" viewbox="0 0 44 48"
                                                                width="44" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
                                                                                18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
                                                                                39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z"
                                                                    fill="">
                                                                </path>
                                                                <path
                                                                    d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
                                                                                18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
                                                                                39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z"
                                                                    stroke="">
                                                                </path>
                                                            </svg>
                                                            <div
                                                                class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                                                @if ($section->section_type_id == 1)
                                                                    <img src="{{ asset('assetsBackend/media/illustrations/persons.svg') }}"
                                                                        alt="Persona">
                                                                @elseif($section->section_type_id == 2)
                                                                    <img src="{{ asset('assetsBackend/media/illustrations/galery.svg') }}"
                                                                        alt="Galería">
                                                                @elseif($section->section_type_id == 3)
                                                                    <img src="{{ asset('assetsBackend/media/illustrations/cover.svg') }}"
                                                                        alt="Portada">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ $section->title }}
                                                    </td>





                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <i class="ki-filled ki-arrow-up-down"></i>
                                                        <a href="{{ route('pages.configuration.employees', [$page, $section]) }}" title="configurar"
                                                            class="btn btn-sm btn-icon btn-clear btn-primary">
                                                            <i class="ki-filled ki-setting-2"></i>
                                                        </a>
                                                        <a href="{{ route('pages.configuration.edit', $section->id) }}" title="editar"
                                                            class="btn btn-sm btn-icon btn-clear btn-primary">
                                                            <i class="ki-filled ki-notepad-edit"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 card-relative">
                    <div class="relative w-full max-w-4xl mx-auto">
                        <div class="overflow-hidden relative">
                            <div class="carousel-item active transition-opacity duration-500 ease-in-out">
                                <div class="card flex-col gap-5 justify-between bg-[center_top_1.3rem] bg-no-repeat pt-5 lg:pt-10 px-5 start-now-bg bg-[length:700px]"
                                    style="border: 3px solid rgba(177,42,56,0.37); border-radius: 10px;">
                                    <div class="flex items-center justify-center gap-5">
                                        <img src="{{ asset('assetsBackend/media/illustrations/cover.svg') }}"
                                            width="80px" alt="Portada">
                                        <h3 class="text-gray-900 text-lg font-semibold leading-6 mb-1.5 ml-4">
                                            PORTADA
                                        </h3>
                                    </div>
                                    <div class="text-center">
                                        <img alt="Portada" class="dark:hidden max-h-[250px]"
                                            src="assetsBackend/media/example/cover.webp" />
                                        <img alt="Portada" class="light:hidden max-h-[250px]"
                                            src="assetsBackend/media/example/cover.webp" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item transition-opacity duration-500 ease-in-out">
                                <div class="card flex-col gap-5 justify-between bg-[center_top_1.3rem] bg-no-repeat pt-5 lg:pt-10 px-5 start-now-bg bg-[length:700px]"
                                    style="border: 3px solid rgba(177,42,56,0.37); border-radius: 10px;">
                                    <div class="flex items-center justify-center gap-5">
                                        <img src="{{ asset('assetsBackend/media/illustrations/persons.svg') }}"
                                            alt="Persona" width="80px">
                                        <h3 class="text-gray-900 text-lg font-semibold leading-6 mb-1.5">
                                            PERSONA
                                        </h3>
                                    </div>
                                    <div class="text-center">
                                        <img alt="Persona" class="dark:hidden max-h-[250px]"
                                            src="assetsBackend/media/example/person.webp" />
                                        <img alt="Persona" class="light:hidden max-h-[250px]"
                                            src="assetsBackend/media/example/person.webp" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item transition-opacity duration-500 ease-in-out">
                                <div class="card flex-col gap-5 justify-between bg-[center_top_1.3rem] bg-no-repeat pt-5 lg:pt-10 px-5 start-now-bg bg-[length:700px]"
                                    style="border: 3px solid rgba(177,42,56,0.37); border-radius: 10px;">
                                    <div class="flex items-center justify-center gap-5">
                                        <img src="{{ asset('assetsBackend/media/illustrations/galery.svg') }}"
                                            width="80px" alt="Galería">
                                        <h3 class="text-gray-900 text-lg font-semibold leading-6 mb-1.5">
                                            GALERÍA
                                        </h3>
                                    </div>
                                    <div class="text-center">
                                        <img alt="Galería" class="dark:hidden max-h-[250px]"
                                            src="assetsBackend/media/example/galery.webp" />
                                        <img alt="Galería" class="light:hidden max-h-[250px]"
                                            src="assetsBackend/media/example/galery.webp" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute inset-0 flex items-center justify-between px-4">
                            <button id="prev"
                                class="btn btn-primary text-white p-3 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 shadow-lg transform transition-transform duration-300 hover:scale-110">
                                &#10094;
                            </button>
                            <button id="next"
                                class="btn btn-primary text-white p-3 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 shadow-lg transform transition-transform duration-300 hover:scale-110">
                                &#10095;
                            </button>
                        </div>
                    </div>

                    <style>
                        .carousel-item {
                            display: none;
                            opacity: 0;
                            transition: opacity 0.5s ease-in-out;
                        }

                        .carousel-item.active {
                            display: block;
                            opacity: 1;
                        }

                        .card-relative {
                            position: fixed;
                            left: 62%;
                            width: 480px;
                            z-index: 1;
                        }

                        @media (max-width: 768px) {
                            .card-relative {
                                position: relative;
                                top: 0;
                                left: 0;
                                width: 100%;
                            }
                        }
                    </style>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const items = document.querySelectorAll('.carousel-item');
                            let currentItem = 0;

                            function showNextItem() {
                                items[currentItem].classList.remove('active');
                                currentItem = (currentItem + 1) % items.length;
                                items[currentItem].classList.add('active');
                            }

                            function showPrevItem() {
                                items[currentItem].classList.remove('active');
                                currentItem = (currentItem - 1 + items.length) % items.length;
                                items[currentItem].classList.add('active');
                            }

                            document.getElementById('next').addEventListener('click', showNextItem);
                            document.getElementById('prev').addEventListener('click', showPrevItem);

                            setInterval(showNextItem, 4000);
                        });
                    </script>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const modal = document.getElementById('createSection');
            const titleInput = document.getElementById('sectionTitle');

            function setFocus() {
                if (modal && titleInput) {
                    setTimeout(function() {
                        titleInput.focus();
                    }, 100);
                }
            }

            modal.addEventListener('show', setFocus);

            document.querySelector('[data-modal-toggle="#createSection"]').addEventListener('click', function() {
                setFocus();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#postForm').on('submit', function(event) {
                event.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: '{{ route('section.store') }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        const modalEl = document.querySelector('#createSection');
                        const modal = KTModal.getInstance(modalEl);
                        $('#postForm')[0].reset();
                        modal.hide();
                        Swal.fire({
                            position: 'top-end',
                            title: response.success ? '¡Éxito!' : '¡Error!',
                            text: response.message,
                            icon: response.success ? 'success' : 'error',
                            showConfirmButton: false,
                            timer: 2000,
                            scrollbarPadding: false,
                            heightAuto: false,
                            backdrop: false,
                            customClass: {
                                popup: response.success ? 'swal-alert-success' :
                                    'swal-alert-danger',
                                title: 'swal-title-overlay',
                                content: 'swal-content-overlay'
                            }
                        });

                        if (response.success) {
                            // Add the new section to the table
                            const newSection = response.section;
                            const editUrl =
                                `{{ url('pages/configuracion/edit') }}/${newSection.id}`;
                            const newRow = `
                        <tr data-id="${newSection.id}" class="hover:bg-gray-50 cursor-pointer">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <div class="relative size-[50px] shrink-0">
                                    <svg class="w-full h-full ${newSection.section_type_id == 1 ? 'fill-blue-200 stroke-blue-500' : newSection.section_type_id == 2 ? 'fill-green-200 stroke-green-500' : 'fill-yellow-200 stroke-yellow-500'}"
                                        fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
                                            18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
                                            39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z"
                                            fill="">
                                        </path>
                                        <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
                                            18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
                                            39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z"
                                            stroke="">
                                        </path>
                                    </svg>
                                    <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                        ${newSection.section_type_id == 1 ? '<img src="{{ asset('assetsBackend/media/illustrations/persons.svg') }}" alt="Persona">' : newSection.section_type_id == 2 ? '<img src="{{ asset('assetsBackend/media/illustrations/galery.svg') }}" alt="Galería">' : '<img src="{{ asset('assetsBackend/media/illustrations/cover.svg') }}" alt="Portada">'}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                ${newSection.title}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <i class="ki-filled ki-arrow-up-down"></i>
                                <a href="${editUrl}" class="btn btn-sm btn-icon btn-clear btn-primary">
                                    <i class="ki-filled ki-notepad-edit"></i>
                                </a>
                            </td>
                        </tr>
                    `;
                            $('#sortable').prepend(newRow);
                        }
                    }
                });
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tableBody = document.getElementById('table_respaldo').getElementsByTagName('tbody')[0];
            new Sortable(tableBody, {
                animation: 150,
                handle: 'tr',
                onEnd: function(evt) {
                    const order = Array.from(tableBody.children).map((row, index) => {
                        const idElement = row.querySelector('.id');

                        if (idElement) {
                            return {
                                id: idElement.value,
                                order: index + 1
                            };
                        } else {
                            console.error('Could not find necessary elements in row:', row);
                            return null;
                        }
                    }).filter(item => item !== null);

                    $.ajax({
                        url: "",
                        type: 'POST',
                        data: JSON.stringify(order),
                        contentType: 'application/json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success: function(response) {
                            if (response.Codigo == 0) {
                                $('#table_respaldo tbody').html($(response.Data).find(
                                    'tbody').html());
                                Swal.fire({
                                    position: "top-end",
                                    title: "Reordenado exitoso",
                                    text: response.Mensaje,
                                    showConfirmButton: false,
                                    icon: "success",
                                    timer: 3000,
                                    scrollbarPadding: false,
                                    heightAuto: false,
                                    backdrop: false,
                                    customClass: {
                                        popup: 'swal-alert-success',
                                        title: 'swal-title-overlay',
                                        content: 'swal-content-overlay'
                                    },
                                    didOpen: () => {
                                        document.body.classList.add(
                                            'swal-open');
                                    },
                                    willClose: () => {
                                        document.body.classList.remove(
                                            'swal-open');
                                    }
                                });
                            } else {
                                executeExample('error', response.Mensaje);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });


                }
            });
        });
    </script>
@endpush
