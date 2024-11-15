@extends('backend.layouts.app')

@section('title')
    <title>Crear Empleado</title>
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
        {{-- <i class="ki-filled ki-right text-gray-500 text-3xs"></i>
        <span class="text-gray-700">
            {{ Breadcrumbs::render('employees.create', $page, $section) }}
       </span> --}}
    </div>
{{--
    <div class="flex [.header_&amp;]:below-lg:hidden items-center gap-1.25 text-xs lg:text-sm font-medium mb-2.5 lg:mb-0"
         data-reparent="true" data-reparent-mode="prepend|lg:prepend"
         data-reparent-target="#content_container|lg:#header_container">
         {{ Breadcrumbs::render('employees.create', $page, $section) }}
    </div> --}}
@endsection

@section('content')
    <main class="grow content pt-5" id="content" role="content">
        <div class="container-fixed">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-semibold leading-none text-gray-900">
                        Agregar nueva imagen
                    </h1>
                </div>
                <div class="flex items-center gap-2.5">
                    <div class="btn-conteiner">
                        <a class="btn-content" href="{{ route('image.index', ['page' => $page->id, 'section' => $section->id]) }}">
                            <span class="btn-title">TODOS</span>
                            <span class="icon-arrow">
                                <!-- Icon SVG -->
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fixed">
            <div class="grid gap-5 lg:gap-7.5">
                <div class="col-span-2">
                    <div class="flex flex-col gap-5 lg:gap-7.5">
                        <div class="card min-w-full">

                            {{-- Depura los datos --}}

                            {{-- {{ dd($page) }} --}}
                            {{-- <livewire:backend.GalerySection.images-create :section="$section" :page="$page"/> --}}
                            {{-- <livewire:backend.GalerySection.images-index :page="$page" :section="$section"/> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
