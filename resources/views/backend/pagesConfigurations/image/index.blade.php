@extends('backend.layouts.app')

@section('title')
    <title>Imágenes de la Sección: {{ $section->title }}</title>
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
@endsection

@section('content')
    <main class="grow content pt-5">
        <div class="container-fixed">
            <div class="flex flex-wrap items-center justify-between gap-5 pb-7.5">
                <div>
                    <h1 class="text-xl font-semibold text-gray-900">
                        Imágenes de la Sección: {{ $section->title }}
                    </h1>
                    <p class="text-sm text-gray-600">Lista de imágenes asociadas a esta sección</p>
                </div>
            </div>

            <livewire:backend.GalerySection.images-create :page="$page" :section="$section" />

            <!-- Lista de Imágenes -->
            <div class="container mx-auto px-4">

                {{-- <livewire:backend.GalerySection.images-index :page="$page" :section="$section" :images="$images" /> --}}
                <livewire:backend.GalerySection.images-index :page="$page" :section="$section" />
            </div>
        </div>
    </main>
    @vite('resources/js/deleteImages.js')
    @endsection
