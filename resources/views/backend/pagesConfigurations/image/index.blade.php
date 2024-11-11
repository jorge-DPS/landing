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
            {{ Breadcrumbs::render('images.index', $page, $section) }}
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
                            {{-- <a class="btn-content"
                                href="{{ route('images.create', ['section' => $section, 'page' => $page]) }}" >
                                <span class="btn-title">AGREGAR NUEVO</span>
                                <span class="icon-arrow">
                                    <svg width="66px" height="43px" viewBox="0 0 66 43"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="arrow" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <path id="arrow-icon-one"
                                                d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                fill="#FFFFFF"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal para subir imágenes -->
            {{-- <div class="flex items-center gap-2.5">

                <div class="modal modal-dialog modal-center max-w-[600px]" data-modal="true" data-modal-backdrop="false"
                    data-modal-persistent="true" id="uploadImagesModal">
                    <div class="modal-content shadow-lg"
                        style="background: #ffffff; border: 3px solid rgba(177,42,56,0.37); border-radius: 10px;">

                        <div class="modal-header">
                            <h3 class="modal-title">
                                Subir Imágenes
                            </h3>
                            <button class="btn btn-xs btn-icon btn-danger" data-modal-dismiss="true">
                                <i class="ki-outline ki-cross"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="uploadImagesForm" method="POST" action="{{ route('images.store', ['page' => $page, 'section' => $section]) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="w-full mt-2 mb-2">
                                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                        <label class="form-label max-w-32">
                                            Selecciona Imágenes
                                        </label>
                                        <div class="flex flex-col w-full gap-1">
                                            <input id="images" class="input" name="images[]" type="file" multiple accept="image/*" />
                                            <span class="form-hint text-gray-500">
                                                Puedes seleccionar varias imágenes.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button class="btn btn-primary" type="submit">
                                        Subir
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            aqui las imagenes --}}

            <livewire:backend.pages-configuracion.images.create-images :page="$page" :section="$section"/>
            {{-- livewire:backend.employee.mostrar-employees --}}

        </div>
    </main>
@endsection
