@extends('backend.layouts.app')

@section('title')
    <title>Usuarios</title>
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
        {{ Breadcrumbs::render('users.index') }}
       </span>
    </div>
@endsection

@section('content')
    <main class="grow content pt-5" id="content" role="content">
        <div class="container-fixed">
            <div class="xl:grid-cols-2 gap-5 lg:gap-7.5 mr-10 ml-10">
                <div class="col-span-1">
                    <div class="grid gap-5 lg:gap-7.5">
                        <div class="card min-w-full">
                            <form id="updateProfile" method="POST" action="{{ route('profile.store') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Información personal
                                    </h3>
                                </div>
                                <div class="card-table scrollable-x-auto pb-3">
                                    <table class="table align-middle text-sm text-gray-500">
                                        <tr>
                                            <td class="py-2 min-w-28">
                                                Foto de perfil
                                            </td>
                                            <td class="py-2 text-gray-600 min-w-32 text-2sm">
                                                <img
                                                        alt="Imagen de perfil"
                                                        class="size-16 rounded-full border-2 border-success"
                                                        src="{{ auth()->user()->avatar ? asset(auth()->user()->avatar) : asset('/assetsBackend/media/avatars/blank.png') }}">
                                            </td>
                                            <td class="py-2 text-center">
                                                <div class="flex justify-center items-center">
                                                    <input id="avatar" type="file"
                                                           class="form-control @error('avatar') is-invalid @enderror"
                                                           name="avatar"
                                                           value="{{ old('avatar') }}" autocomplete="avatar">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">
                                                Nombre
                                            </td>
                                            <td class="py-2 text-gray-700 text-sm">
                                                {{ auth()->user()->name }}
                                            </td>
                                            <td class="py-2 text-center">
                                                <input class="input form-control" type="text" id="name" name="name"
                                                       value="{{ auth()->user()->name }}" autofocus=""/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">
                                                Correo electronico
                                            </td>
                                            <td class="py-3 text-gray-700">
                                                {{ auth()->user()->email }}
                                            </td>
                                            <td class="py-3 text-center">
                                                <input class="input form-control" type="text" id="email" name="email"
                                                       value="{{ auth()->user()->email }}" autofocus="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">
                                                Celular
                                            </td>
                                            <td class="py-3 text-gray-600 text-2sm">
                                                {{ auth()->user()->phone }}
                                            </td>
                                            <td class="py-3 text-center">
                                                <input class="input form-control" type="text" id="phone" name="phone"
                                                       value="{{ auth()->user()->phone }}" autofocus="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">
                                                Ciudad
                                            </td>
                                            <td class="py-3 text-gray-600 text-2sm">
                                                {{ auth()->user()->city }}
                                            </td>
                                            <td class="py-3 text-center">
                                                <input class="input form-control" type="text" id="city" name="city"
                                                       value="{{ auth()->user()->city }}" autofocus="">
                                            </td>
                                        </tr>

                                    </table>

                                    <div class="border-t border-gray-200 my-7.5"></div>

                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Información de seguridad
                                        </h3>
                                    </div>
                                    <table class="table align-middle text-sm text-gray-500">
                                        <tr>
                                            <td class="py-3">
                                                Clave de seguridad
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <input class="input form-control" type="password" id="password"
                                                       name="password"
                                                       autofocus="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">
                                                Confirmar clave de seguridad
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <input class="input form-control" type="password" id="confirm_password"
                                                       name="confirm_password" autofocus="">
                                            </td>
                                        </tr>

                                    </table>

                                </div>



                                <div class="flex justify-end">
                                    <div class="btn-conteiner p-10">
                                        <a class="btn-content" href="#" onclick="enviarFormulario(); return false;">
                                            <span class="btn-title">ACTUALIZAR</span>
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
        function enviarFormulario() {
            mostrarCargando();
            document.getElementById('updateProfile').submit();
        }
    </script>
@endpush