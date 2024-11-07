@extends('backend.layouts.app')

@section('title')
    <title>Crear carrusel</title>
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
        <span class="text-gray-600">
            {{ Breadcrumbs::render('carrusel.index') }}
        </span>
        <i class="ki-filled ki-right text-gray-500 text-3xs">
        </i>
        <span class="text-gray-700">
            {{ Breadcrumbs::render('carrusel.create') }}
        </span>
    </div>
@endsection

@section('content')
    <main class="grow content pt-5" id="content" role="content">
        <div class="container-fixed">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-semibold leading-none text-gray-900">
                        Agreagar nuevo carrusel
                    </h1>
                    <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                        Un carrusel es un desplegador de información en el inicio del la página.
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <div class="btn-conteiner">
                        <a class="btn-content" href="{{ route('carrusel.index') }}">
                            <span class="btn-title">TODOS</span>
                            <span class="icon-arrow">
                                <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path id="arrow-icon-one"
                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                            fill="#FFFFFF"></path>
                                        <path id="arrow-icon-two"
                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                            fill="#FFFFFF"></path>
                                        <path id="arrow-icon-three"
                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                            fill="#FFFFFF"></path>
                                    </g>
                                </svg>
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
                            <form id="createCarrusel" action="{{ route('carrusel.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-header gap-2">
                                    <h3 class="card-title">
                                        Datos de para mostrar
                                    </h3>
                                </div>
                                <div class="card-body lg:py-7.5 py-5">
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Título pequeño
                                            </div>
                                        </div>
                                        <label class="input">
                                            <input type="text" value="" placeholder="Este título aprece primero."
                                                name="small_title" required />
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Título grande
                                            </div>
                                        </div>
                                        <label class="input">
                                            <input type="text" value="" name="big_title"
                                                placeholder="Segundo título que parece." required />
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Descripción
                                            </div>
                                        </div>
                                        <label class="w-full">
                                            <textarea name="description" class="textarea w-full" placeholder="Agregar su descripción..." rows="6"></textarea>
                                        </label>
                                    </div>
                                    <div class="border-t border-gray-200 my-7.5"></div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Fondo para celulares (mobile)
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                                            <img id="mobile-bg-preview" class="mt-2"
                                                src="{{ asset('/assetsBackend/media/avatars/blank.png') }}"
                                                style="height:100px;" />
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="image-input size-[500px]" data-image-input="true">
                                                <input id="mobile-bg-input" accept=".png, .jpg, .jpeg"
                                                    name="mobile_background" type="file" class="custom-file-input"
                                                    style="display: none;" />
                                                <button type="button" class="upload-button" id="upload-mobile-bg-button">
                                                    <i class="ki-duotone ki-file-up text-2xl upload-svgIcon"></i>
                                                </button>
                                                <button type="button" class="delete-button ml-5"
                                                    onclick="removeMobileBg()">
                                                    <i class="ki-solid ki-trash text-2xl delete-svgIcon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Fondo para monitor (desktop)
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                                            <img id="desktop-bg-preview" class="mt-2"
                                                src="{{ asset('/assetsBackend/media/avatars/blank.png') }}"
                                                style="height:100px;" />
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="image-input size-[500px]" data-image-input="true">
                                                <input id="desktop-bg-input" accept=".png, .jpg, .jpeg"
                                                    name="desktop_background" type="file" class="custom-file-input"
                                                    style="display: none;" />
                                                <button type="button" class="upload-button"
                                                    id="upload-desktop-bg-button">
                                                    <i class="ki-duotone ki-file-up text-2xl upload-svgIcon"></i>
                                                </button>
                                                <button type="button" class="delete-button ml-5"
                                                    onclick="removeDesktopBg()">
                                                    <i class="ki-solid ki-trash text-2xl delete-svgIcon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Fondo para tableta (tablet)
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                                            <img id="tablet-bg-preview" class="mt-2"
                                                src="{{ asset('/assetsBackend/media/avatars/blank.png') }}"
                                                style="height:100px;" />
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="image-input size-[500px]" data-image-input="true">
                                                <input id="tablet-bg-input" accept=".png, .jpg, .jpeg"
                                                    name="tablet_background" type="file" class="custom-file-input"
                                                    style="display: none;" />
                                                <button type="button" class="upload-button"
                                                    id="upload-tablet-bg-button">
                                                    <i class="ki-duotone ki-file-up text-2xl upload-svgIcon"></i>
                                                </button>
                                                <button type="button" class="delete-button ml-5"
                                                    onclick="removeTabletBg()">
                                                    <i class="ki-solid ki-trash text-2xl delete-svgIcon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-200 my-7.5"></div>

                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Agragar botones
                                            </div>
                                        </div>

                                        <div x-data="buttonManager()" class="mt-4 w-full">
                                            <template x-for="(button, index) in buttons" :key="index">
                                                <div class="w-full">
                                                    <div class="flex flex-col max-w-72 w-20">
                                                        <div class="text-gray-900 text-sm font-semibold">
                                                            Botón <span x-text="index + 1"></span>
                                                        </div>
                                                    </div>
                                                    <label class="input">
                                                        <input type="text" x-model="button.name"
                                                            :name="'buttons[' + index + '][name]'"
                                                            placeholder="Título del botón" @input="validateFields(index)"
                                                            :id="'button-name-' + index" />
                                                    </label>
                                                    <br>
                                                    <label class="input" style="margin-bottom: 10px;">
                                                        <input type="text" x-model="button.link"
                                                            :name="'buttons[' + index + '][link]'"
                                                            placeholder="Botón para (url), (enlace), (link), (https://ejemplo.bo.edu)."
                                                            @input="validateFields(index)" />
                                                    </label>
                                                    <div class="border-t border-gray-200 my-7.5"></div>
                                                </div>
                                            </template>
                                            <button type="button" class="btn btn-primary mt-3"
                                                @click.prevent="addButtonAndFocus()"
                                                x-show="canAddButton && buttons.length < maxButtons">
                                                Agregar nuevo botón
                                            </button>
                                        </div>
                                        </label>
                                    </div>

                                    <div class="border-t border-gray-200 my-7.5"></div>

                                    <div class="flex justify-end">
                                        <div class="btn-conteiner">
                                            <a class="btn-content" href="javascript:void(0);"
                                                onclick="enviarFormulario(); return false;">

                                                <span class="btn-title">CREAR</span>
                                                <span class="icon-arrow">
                                                    <svg width="66px" height="43px" viewBox="0 0 66 43"
                                                        version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="arrow" stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <path id="arrow-icon-one"
                                                                d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                                fill="#FFFFFF"></path>
                                                            <path id="arrow-icon-two"
                                                                d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                                fill="#FFFFFF"></path>
                                                            <path id="arrow-icon-three"
                                                                d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                                fill="#FFFFFF"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function buttonManager() {
            return {
                buttons: [{
                    name: '',
                    link: ''
                }],
                maxButtons: 3,

                validateFields(index) {
                    this.canAddButton = this.buttons.every(button => button.name && button.link);
                },

                addButtonAndFocus() {
                    if (this.buttons.length < this.maxButtons) {
                        this.buttons.push({
                            name: '',
                            link: ''
                        });
                        this.canAddButton = false;

                        this.$nextTick(() => {
                            document.getElementById('button-name-' + (this.buttons.length - 1)).focus();
                        });

                        if (this.buttons.length === this.maxButtons) {
                            Swal.fire({
                                position: "top-end",
                                title: "Límite de botones alcanzado",
                                text: "Has agregado el último botón permitido. No se pueden agregar más botones.",
                                showConfirmButton: false,
                                icon: "warning",
                                timer: 5000,
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
                        }
                    }
                },
            }
        }
    </script>


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
        document.getElementById('upload-mobile-bg-button').addEventListener('click', function() {
            document.getElementById('mobile-bg-input').click();
        });

        document.getElementById('mobile-bg-input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('mobile-bg-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        function removeMobileBg() {
            document.getElementById('mobile-bg-preview').src = '/assetsBackend/media/avatars/blank.png';
            document.getElementById('mobile-bg-input').value = '';
        }

        document.getElementById('upload-desktop-bg-button').addEventListener('click', function() {
            document.getElementById('desktop-bg-input').click();
        });

        document.getElementById('desktop-bg-input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('desktop-bg-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        function removeDesktopBg() {
            document.getElementById('desktop-bg-preview').src = '/assetsBackend/media/avatars/blank.png';
            document.getElementById('desktop-bg-input').value = '';
        }

        document.getElementById('upload-tablet-bg-button').addEventListener('click', function() {
            document.getElementById('tablet-bg-input').click();
        });

        document.getElementById('tablet-bg-input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('tablet-bg-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        function removeTabletBg() {
            document.getElementById('tablet-bg-preview').src = '/assetsBackend/media/avatars/blank.png';
            document.getElementById('tablet-bg-input').value = '';
        }
    </script>

    <script>
        function enviarFormulario() {
            mostrarCargando();
            document.getElementById('createCarrusel').submit();
        }
    </script>

@endpush
