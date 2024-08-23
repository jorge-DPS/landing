@extends('backend.layouts.app')

@section('title')
    <title>Carrusel</title>
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
        {{ Breadcrumbs::render('carrusel.index') }}
       </span>
    </div>
@endsection

@section('content')
    <main class="grow content pt-5" id="content" role="content">
        <div class="container-fixed">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-semibold leading-none text-gray-900">
                        Deslizador de contenido
                    </h1>
                    <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                        Un deslizador muestra varias imágenes, mensajes, botones, etc. Uno tras otro, en el inicio.
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <a class="btn btn-primary pulse-button" href="{{ route('carrusel.create') }}">
                        Agregar nuevo
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fixed">
            <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
                <div class="flex flex-wrap items-center gap-5 justify-between">
                    <h3 class="text-lg text-gray-900 font-semibold">
                        {{ $countCarrusel }} Páginas
                    </h3>
                    <div class="btn-tabs" data-tabs="true">
                        <a class="btn btn-icon active" data-tab-toggle="#works_cards" href="#">
                            <i class="ki-filled ki-category">
                            </i>
                        </a>
                        <a class="btn btn-icon" data-tab-toggle="#works_list" href="#">
                            <i class="ki-filled ki-row-horizontal">
                            </i>
                        </a>
                    </div>
                </div>

                <div id="works_cards">
                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">
                        @foreach($carrusel as $car)
                            <a href="{{ route('carrusel.edit',$car->id) }}" class="card-link">
                                <div class="card border-0">
                                    <img alt="" class="rounded-t-xl"
                                         src="{{ $car->desktop_background ? asset($car->desktop_background) : asset('/assetsBackend/media/avatars/blank.png') }}"
                                         style="width: 320px; max-width: 350px; max-height: 130px;"/>
                                    <div class="card-border card-rounded-b flex flex-col gap-2 px-5 py-4.5">
                                        <div class="text-lg font-semibold text-gray-900 hover:text-primary">
                                            {{ $car->big_title }}
                                        </div>
                                        <div class="flex items-center justify-between grow">
                                            <div class="flex items-center grow">
                        <span class="text-2sm font-medium text-gray-700 hover:text-primary mb-px">
                            {{ $car->description }}
                        </span>
                                            </div>
                                            <i class="ki-filled ki-eye"></i>
                                        </div>
                                        <span class="edit-text">Editar</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="hidden" id="works_list">
                    <div class="flex flex-col gap-5 lg:gap-7.5">
                        @foreach($carrusel as $car)
                            <a href="{{ route('carrusel.edit', $car->id) }}" class="card-link">
                                <div class="card border-0 p-5">
                                    <div class="flex flex-wrap justify-between items-center gap-7">
                                        <div class="flex flex-wrap items-center gap-5">
                                            <img alt="" class="rounded-md max-h-20 max-w-full shrink-0"
                                                 src="{{ $car->desktop_background ? asset($car->desktop_background) : asset('/assetsBackend/media/avatars/blank.png') }}"
                                                 style="width: 320px; max-width: 350px; max-height: 130px;"/>
                                            <div class="grid grid-cols gap-1">
                                                <div class="text-lg font-semibold text-gray-900 hover:text-primary mb-px">
                                                    {{ $car->big_title }}
                                                </div>
                                                <span class="text-sm font-medium text-gray-600">
                        {{ $car->description }}
                    </span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-5 lg:gap-7.5">
                                            <span class="edit-text text-2sm font-medium text-gray-700 hover:text-primary-active">
                    Editar
                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
