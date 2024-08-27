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
        {{ Breadcrumbs::render('backend.user.index') }}
       </span>
    </div>
@endsection

@section('content')
    <main class="grow content pt-5" id="content" role="content">
        <div class="container-fixed" id="content_container">
        </div>
        <div class="container-fixed">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-semibold leading-none text-gray-900">
                        Lista de usuarios
                    </h1>
                    <div class="flex items-center flex-wrap gap-1.5 font-medium">
         <span class="text-md text-gray-600">
          Todos los usuarios:
         </span>
                        <span class="text-md text-gray-800 font-semibold me-2">
          {{ $countUser }}
         </span>
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <button class="btn btn-primary bhover:bg-primary-light hover:text-secondary text-white"
                            data-modal-toggle="#modal_settings">
                        Agragar usuario
                        <i class="ki-filled ki-plus-squared"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="container-fixed">
            <div class="grid gap-5 lg:gap-7.5">
                <div class="card card-grid min-w-full">
                    <div class="card-header flex-wrap gap-2">
                        <h3 class="card-title font-medium text-sm">

                        </h3>
                        <div class="flex flex-wrap gap-2 lg:gap-5">
                            <div class="flex">
                                <label class="input input-sm">
                                    <i class="ki-filled ki-magnifier">
                                    </i>
                                    <input placeholder="Search users" type="text" value="">
                                    </input>
                                </label>
                            </div>
                            <div class="flex flex-wrap gap-2.5">
                                <select class="select select-sm w-28">
                                    <option value="1">
                                        Latest
                                    </option>
                                    <option value="2">
                                        Older
                                    </option>
                                    <option value="3">
                                        Oldest
                                    </option>
                                </select>
                                <button class="btn btn-sm btn-outline btn-primary">
                                    <i class="ki-filled ki-setting-4">
                                    </i>
                                    Filters
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div data-datatable="true" data-datatable-page-size="20">
                            <div class="scrollable-x-auto">
                                @include('backend.user.board')
                            </div>
                            <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                <div class="flex items-center gap-2 order-2 md:order-1">
                                    Ver
                                    <select class="select select-sm w-16" data-datatable-size="true" name="perpage">
                                    </select>
                                    por página
                                </div>

                                <div class="flex items-center gap-4 order-1 md:order-2">
            <span data-datatable-info="true">
            </span>
                                    <div class="pagination" data-datatable-pagination="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('backend.user.modal')
@endsection
