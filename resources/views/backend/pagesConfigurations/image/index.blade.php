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
            <!-- Header Section -->
            <div class="flex flex-wrap items-center justify-between gap-5 pb-7.5">
                <div>
                    <h1 class="text-xl font-semibold text-gray-900">
                        Imágenes de la Sección: {{ $section->title }}
                    </h1>
                    <p class="text-sm text-gray-600">Lista de imágenes asociadas a esta sección</p>
                </div>
            </div>

            <!-- Subir imágenes -->
            
            <livewire:backend.gallery-section.images-create :page="$page" :section="$section"/>

            <!-- Galería de imágenes -->
            <livewire:backend.gallery-section.images-index :page="$page" :section="$section"/>
        </div>
    </main>
    @vite('resources/js/deleteImages.js')
@endsection
