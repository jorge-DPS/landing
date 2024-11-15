@extends('backend.layouts.app')

@section('title')
    <title>Empleados de la Sección: {{ $section->title }}</title>
@endsection

@section('breadcrumbs')
    <div class="flex [.header_&amp;]:below-lg:hidden items-center gap-1.25 text-xs lg:text-sm font-medium mb-2.5 lg:mb-0"
        data-reparent="true" data-reparent-mode="prepend|lg:prepend"
        data-reparent-target="#content_container|lg:#header_container">
        <span class="text-gray-600">
            {{ Breadcrumbs::render('home') }}
        </span>
        <i class="ki-filled ki-right text-gray-500 text-3xs"></i>
        <span class="text-gray-600">
            {{ Breadcrumbs::render('section-gallery.index', $page, $section) }}
        </span>

    </div>
    {{--
    <div class="flex [.header_&amp;]:below-lg:hidden items-center gap-1.25 text-xs lg:text-sm font-medium mb-2.5 lg:mb-0"
         data-reparent="true" data-reparent-mode="prepend|lg:prepend"
         data-reparent-target="#content_container|lg:#header_container">
         {{ Breadcrumbs::render('employees.create', $page, $section) }}
    </div> --}}
@endsection


@section('content')
    <main class="grow content pt-5">
        <div class="container-fixed">
            <div class="flex flex-wrap items-center justify-between gap-5 pb-7.5">
                <div>
                    <h1 class="text-xl font-semibold text-gray-900">
                        Imagenes de la Sección: {{ $section->title }}
                    </h1>
                    <p class="text-sm text-gray-600">Lista de empleados asociados a esta sección</p>
                </div>
            </div>

            <div class="container-fixed">
                <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                    <div class="flex flex-col justify-center gap-2">
                        <h1 class="text-xl font-semibold leading-none text-gray-900">
                            Lista de imagenes
                        </h1>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <div class="btn-conteiner">
                            <button class="btn btn-primary" data-modal-toggle="#uploadImagesModal">
                                Subir Imágenes
                            </button>
                            
                               <livewire:backend.GalerySection.images-create :page="$page" :section="$section"/>
                        </div>
                    </div>
                </div>
            </div>
            {{-- aqui las imagenes  --}}

            {{-- livewire:backend.employee.mostrar-employees --}}
        </div>
    </main>
@endsection
