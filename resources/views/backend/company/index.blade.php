@extends('backend.layouts.app')

@section('title')
    <title>empresa</title>
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
    <style>
        /* Prefijo personalizado para evitar conflictos */
        .custom-container {
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        .custom-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .custom-card-header {
            border-bottom: 1px solid #e2e8f0;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .custom-card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #2d3748;
        }

        .custom-input input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e0;
            border-radius: 4px;
            margin-top: 5px;
        }

        .custom-input i {
            margin-right: 10px;
        }

        .custom-btn-container {
            text-align: right;
            padding-top: 20px;
        }

        .custom-btn-content {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #3182ce;
            color: white;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
        }

        .custom-btn-content:hover {
            background-color: #2b6cb0;
        }

        .custom-icon-arrow svg {
            margin-left: 10px;
        }

        .custom-flex-gap {
            gap: 1.25rem;
        }

        .custom-lg-gap {
            gap: 1.875rem;
        }

        .custom-col-span-8 {
            grid-column: span 8 / span 8;
        }

        .custom-col-span-4 {
            grid-column: span 4 / span 4;
        }

    </style>
    <main class="grow content pt-5" id="content" role="content">
        <div class="container-fixed">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-semibold leading-none text-gray-900">
                        Datos empresariales
                    </h1>
                    <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                        La datos de la empresa son crucial para proporcionar información
                        relevante y optimizada sobre tu empresa.
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fixed">
            <div class="grid gap-5 lg:gap-7.5">
                <div class="col-span-2">
                    <div class="flex flex-col gap-5 lg:gap-7.5">
                        <div class="card min-w-full">
                            <form id="updateInfoCompany" action="{{ route('company.update',$companies->id) }}"
                                  method="POST"
                                  enctype="multipart/form-data"
                            >
                                @csrf
                                @method('PUT')
                                <div class="card-header gap-2">
                                    <h3 class="card-title">
                                        DATOS EMPRESARIALES
                                    </h3>
                                </div>
                                <div class="card-body lg:py-7.5 py-5" style="margin-bottom: 50px;">
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Nombre de la empresa
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $companies->company_name }}"
                                                   name="company_name">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Nombre del propietario
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $companies->owner_name }}" name="owner_name">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Descripción
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $companies->description }}" name="description">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Telefono
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $companies->phone }}" name="phone">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Celular
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $companies->mobile }}" name="mobile">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Dirección
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $companies->address }}" name="address">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Redes sociales
                                            </div>
                                        </div>
                                        <label class="input">
                                            <i class="ki-solid ki-information-2 text-school text-2xl">
                                            </i>
                                            <input type="text" value="{{ $companies->address }}" name="address">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="border-t border-gray-200 my-7.5"></div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Logo grande (big)
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                                            <img id="logo-big-preview"
                                                 class="mt-2"
                                                 src="{{ $companies->big_logo ? asset($companies->big_logo) : asset('/assetsBackend/media/avatars/blank.png') }}"
                                                 style="height:100px;"/>
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="image-input size-[500px]" data-image-input="true">
                                                <input id="logo-big-input" accept=".png, .jpg, .jpeg" name="big_logo"
                                                       type="file" class="custom-file-input" style="display: none;"/>
                                                <button type="button" class="upload-button" id="upload-logo-big-button">
                                                    <i class="ki-duotone ki-file-up text-2xl upload-svgIcon"></i>
                                                </button>
                                                <button type="button" class="delete-button ml-5"
                                                        onclick="removeLogoBig()">
                                                    <i class="ki-solid ki-trash text-2xl delete-svgIcon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Logo pequeño (small)
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                                            <img id="logo-small-preview"
                                                 class="mt-2"
                                                 src="{{ $companies->small_logo ? asset($companies->small_logo) : asset('/assetsBackend/media/avatars/blank.png') }}"
                                                 style="height:100px;"/>
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="image-input size-[500px]" data-image-input="true">
                                                <input id="logo-small-input" accept=".png, .jpg, .jpeg"
                                                       name="small_logo"
                                                       type="file" class="custom-file-input" style="display: none;"/>
                                                <button type="button" class="upload-button"
                                                        id="upload-logo-small-button">
                                                    <i class="ki-duotone ki-file-up text-2xl upload-svgIcon"></i>
                                                </button>
                                                <button type="button" class="delete-button ml-5"
                                                        onclick="removeLogoSmall()">
                                                    <i class="ki-solid ki-trash text-2xl delete-svgIcon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Logo oscuro (dark)
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                                            <img id="logo-dark-preview"
                                                 class="mt-2"
                                                 src="{{ $companies->dark_logo ? asset($companies->dark_logo) : asset('/assetsBackend/media/avatars/blank.png') }}"
                                                 style="height:100px;"/>
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="image-input size-[500px]" data-image-input="true">
                                                <input id="logo-dark-input" accept=".png, .jpg, .jpeg" name="dark_logo"
                                                       type="file" class="custom-file-input" style="display: none;"/>
                                                <button type="button" class="upload-button"
                                                        id="upload-logo-dark-button">
                                                    <i class="ki-duotone ki-file-up text-2xl upload-svgIcon"></i>
                                                </button>
                                                <button type="button" class="delete-button ml-5"
                                                        onclick="removeLogoDark()">
                                                    <i class="ki-solid ki-trash text-2xl delete-svgIcon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Logo claro (light)
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                                            <img id="logo-light-preview"
                                                 class="mt-2"
                                                 src="{{ $companies->light_logo ? asset($companies->light_logo) : asset('/assetsBackend/media/avatars/blank.png') }}"
                                                 style="height:100px;"/>
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="image-input size-[500px]" data-image-input="true">
                                                <input id="logo-light-input" accept=".png, .jpg, .jpeg"
                                                       name="light_logo"
                                                       type="file" class="custom-file-input" style="display: none;"/>
                                                <button type="button" class="upload-button"
                                                        id="upload-logo-light-button">
                                                    <i class="ki-duotone ki-file-up text-2xl upload-svgIcon"></i>
                                                </button>
                                                <button type="button" class="delete-button ml-5"
                                                        onclick="removeLogoLight()">
                                                    <i class="ki-solid ki-trash text-2xl delete-svgIcon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-conteiner"
                                         style="position: fixed; bottom: 60px; right: 50px; z-index: 1000;">
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
                        <div class="card min-w-full">
                            <form id="updateInfoCompany" action="{{ route('company.update',$companies->id) }}"
                                  method="POST"
                                  enctype="multipart/form-data"
                            >
                                @csrf
                                @method('PUT')
                                <div class="card-header gap-2">
                                    <h3 class="card-title">
                                        REDES SOCIALES
                                    </h3>
                                </div>
                                <div class="card-body lg:py-7.5 py-5" style="margin-bottom: 50px;">
                                    

                                    <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                                        <div class="flex flex-col max-w-72 w-full">
                                            <div class="text-gray-900 text-sm font-semibold">
                                                Enalces
                                            </div>
                                        </div>


                                        <div class="w-full">
                                            <div x-data="{
            socialMedia: [],
            platform: '',
            url: '',
            addSocialMedia() {
                if (this.platform && this.url) {
                    this.socialMedia.push({ platform: this.platform, url: this.url });
                    this.platform = '';
                    this.url = '';
                }
            }
        }">
                                                <!-- Formulario para añadir redes sociales -->
                                                <div class="mb-4">
                                                    <label for="platform" class="block text-gray-700">Nombre de la plataforma:</label>
                                                    <input type="text" id="platform" x-model="platform" class="input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                </div>

                                                <div class="mb-4">
                                                    <label for="url" class="block text-gray-700">URL:</label>
                                                    <input type="url" id="url" x-model="url" class="input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                </div>

                                                <button @click="addSocialMedia()" type="button" class="btn btn-primary">
                                                    Agregar
                                                </button>

                                                <!-- Div separado para la tabla -->
                                                <div class="mt-6 w-full">
                                                    <h3 class="text-lg font-medium text-gray-700">Redes Sociales Añadidas:</h3>
                                                    <div class="overflow-x-auto">
                                                        <table class="min-w-full bg-white">
                                                            <thead>
                                                            <tr>
                                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                    Plataforma
                                                                </th>
                                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                    URL
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <template x-for="(social, index) in socialMedia" :key="index">
                                                                <tr>
                                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                                        <span x-text="social.platform" class="text-sm leading-5 text-gray-700"></span>
                                                                    </td>
                                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                                        <span x-text="social.url" class="text-sm leading-5 text-gray-700"></span>
                                                                    </td>
                                                                </tr>
                                                            </template>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="btn-conteiner"
                                         style="position: fixed; bottom: 60px; right: 50px; z-index: 1000;">
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
    <?php if (session('success')) { ?>
    <script>
        Swal.fire({
            title: "!Registro exitoso¡",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            confirmButtonText: '¡Entendido!',
            icon: "success",
            timer: 10000,
            scrollbarPadding: false,
            heightAuto: false,
            backdrop: false,
            customClass: {
                popup: 'swal-alert-success',
                title: 'swal-title-overlay',
                content: 'swal-content-overlay',
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
        // Logo grande (big)
        document.getElementById('upload-logo-big-button').addEventListener('click', function () {
            document.getElementById('logo-big-input').click();
        });

        document.getElementById('logo-big-input').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('logo-big-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        function removeLogoBig() {
            document.getElementById('logo-big-preview').src = '/assetsBackend/media/avatars/blank.png';
            document.getElementById('logo-big-input').value = '';
        }

        // Logo pequeño (small)
        document.getElementById('upload-logo-small-button').addEventListener('click', function () {
            document.getElementById('logo-small-input').click();
        });

        document.getElementById('logo-small-input').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('logo-small-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        function removeLogoSmall() {
            document.getElementById('logo-small-preview').src = '/assetsBackend/media/avatars/blank.png';
            document.getElementById('logo-small-input').value = '';
        }

        // Logo oscuro (dark)
        document.getElementById('upload-logo-dark-button').addEventListener('click', function () {
            document.getElementById('logo-dark-input').click();
        });

        document.getElementById('logo-dark-input').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('logo-dark-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        function removeLogoDark() {
            document.getElementById('logo-dark-preview').src = '/assetsBackend/media/avatars/blank.png';
            document.getElementById('logo-dark-input').value = '';
        }

        // Logo claro (light)
        document.getElementById('upload-logo-light-button').addEventListener('click', function () {
            document.getElementById('logo-light-input').click();
        });

        document.getElementById('logo-light-input').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('logo-light-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        function removeLogoLight() {
            document.getElementById('logo-light-preview').src = '/assetsBackend/media/avatars/blank.png';
            document.getElementById('logo-light-input').value = '';
        }

    </script>
    <script>
        function enviarFormulario() {
            mostrarCargando();
            document.getElementById('updateInfoCompany').submit();
        }
    </script>
@endpush