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
                        Agreagar nuevo usuario
                    </h1>
                </div>
                <div class="flex items-center gap-2.5">
                    <div class="btn-conteiner">
                        <a class="btn-content" href="{{ route('people.index') }}">
                            <span class="btn-title">TODOS</span>
                            <span class="icon-arrow">
      <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
      >
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
                            <form id="createUser" action="{{ route('users.store') }}"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-header gap-2">
                                    <h3 class="card-title">
                                        Datos de usuario
                                    </h3>
                                </div>
                                <div class="card-body lg:py-7.5 py-5">
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Nombre
                                            </div>
                                        </div>
                                        <label class="input">
                                            <input type="text" value=""
                                                   placeholder="Este título aparece primero."
                                                   name="name"
                                                   required
                                            />
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Cargo / Posición
                                            </div>
                                        </div>
                                        <label class="input">
                                            <input type="email"
                                                   value=""
                                                   name="position"
                                                   placeholder="Segundo título que aparece."
                                                   required
                                            />
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Vínculo
                                            </div>
                                        </div>
                                        <label class="input relative w-full">
                                            <input type="password"
                                                   id="password"
                                                   name="person_section_id"
                                                   placeholder="Introduce tu clave de acceso."
                                                   required
                                                   class="w-full pr-10"
                                            />
                                            <span class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer"
                                                  onclick="togglePasswordVisibility('password', this)">
            <i class="ki-solid ki-eye"></i>
        </span>
                                        </label>
                                    </div>
                                    <div class="border-t border-gray-200 my-7.5"></div>
                                    <div class="flex justify-end">
                                        <div class="btn-conteiner">
                                            <a class="btn-content" href="javascript:void(0);"
                                               onclick="enviarFormulario(); return false;">

                                                <span class="btn-title">CREAR</span>
                                                <span class="icon-arrow">
      <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
      >
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
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        document.getElementById("password-confirm").addEventListener("blur", function () {
            var password = document.getElementById("password").value;
            var passwordConfirm = this.value;

            if (password !== passwordConfirm && passwordConfirm !== "") {
                Swal.fire({
                    position: "top-end",
                    title: "¡Error!",
                    text: "Las claves de acceso no coinciden",
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
            }
        });
    </script>

    <script>
        function togglePasswordVisibility(fieldId, element) {
            var input = document.getElementById(fieldId);
            var icon = element.querySelector('i');

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("ki-eye");
                icon.classList.add("ki-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("ki-eye-slash");
                icon.classList.add("ki-eye");
            }
        }
    </script>

    <script>

        function enviarFormulario() {
            mostrarCargando();
            document.getElementById('createUser').submit();
        }
    </script>

@endpush



