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
        {{ Breadcrumbs::render('landing.index') }}
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
                    <a class="btn btn-sm btn-light" href="#">
                        Agregar nuevo deslizador
                    </a>
                </div>
            </div>
        </div>

        <div class="container-fixed">
            <div class="grid gap-5 lg:gap-7.5">
                <!-- begin: cards -->
                <div id="integrations_cards">
                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">
                        <div class="card">
                            <div class="card-body p-5 lg:p-7.5">
                                <div class="flex items-center justify-between mb-3 lg:mb-5">
                                    <div class="flex items-center justify-center">
                                        <img alt="" class="h-11 shrink-0" src="assets/media/brand-logos/jira.svg"/>
                                    </div>
                                    <div class="btn btn-sm btn-icon btn-clear btn-light">
                                        <i class="ki-filled ki-exit-right-corner">
                                        </i>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 lg:gap-2.5">
                                    <a class="text-base font-semibold text-gray-900 hover:text-primary-active" href="html/demo1/account/billing/basic.html">
                                        Jira
                                    </a>
                                    <span class="text-2sm font-medium text-gray-600">
             Project management for agile teams, tracking issues and tasks.
            </span>
                                </div>
                            </div>
                            <div class="card-footer justify-between items-center py-3.5">
                                <a class="btn btn-light btn-sm">
                                    <i class="ki-filled ki-mouse-square">
                                    </i>
                                    Connect
                                </a>
                                <div class="flex items-center gap-2.5">
                                    <div class="switch">
                                        <input checked="" name="param" type="checkbox" value="1"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body p-5 lg:p-7.5">
                                <div class="flex items-center justify-between mb-3 lg:mb-5">
                                    <div class="flex items-center justify-center">
                                        <img alt="" class="h-11 shrink-0" src="assets/media/brand-logos/inferno.svg"/>
                                    </div>
                                    <div class="btn btn-sm btn-icon btn-clear btn-light">
                                        <i class="ki-filled ki-exit-right-corner">
                                        </i>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1 lg:gap-2.5">
                                    <a class="text-base font-semibold text-gray-900 hover:text-primary-active" href="html/demo1/account/billing/enterprise.html">
                                        Inferno
                                    </a>
                                    <span class="text-2sm font-medium text-gray-600">
             Ensures healthcare app compatibility with FHIR standards.
            </span>
                                </div>
                            </div>
                            <div class="card-footer justify-between items-center py-3.5">
                                <a class="btn btn-light btn-sm">
                                    <i class="ki-filled ki-mouse-square">
                                    </i>
                                    Connect
                                </a>
                                <div class="flex items-center gap-2.5">
                                    <div class="switch switch-sm">
                                        <input name="param" type="checkbox" value="1"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
