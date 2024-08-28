@extends('backend.layouts.app')

@section('title')
    <title>Inicio</title>
@endsection

@section('breadcrumbs')
    <div class="flex [.header_&amp;]:below-lg:hidden items-center gap-1.25 text-xs lg:text-sm font-medium mb-2.5 lg:mb-0"
         data-reparent="true" data-reparent-mode="prepend|lg:prepend"
         data-reparent-target="#content_container|lg:#header_container">
       <span class="text-gray-600">
        {{ Breadcrumbs::render('home') }}
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
                        Dashboard
                    </h1>
                    <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                        Optimiza tu perfil
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <a class="btn btn-sm btn-light" href="{{ route('profile.index') }}">
                        Ver perfil
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fixed">
            <div class="grid gap-5 lg:gap-7.5">
                <!-- begin: grid -->
                <div class="grid lg:grid-cols-3 gap-y-5 lg:gap-7.5 items-stretch">
                    <div class="lg:col-span-1">
                        <div class="grid grid-cols-2 gap-5 lg:gap-7.5 h-full items-stretch">
                            <style>
                                .channel-stats-bg {
                                    background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1600/bg-3.png');
                                }

                                .dark .channel-stats-bg {
                                    background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1600/bg-3-dark.png');
                                }
                            </style>
                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="w-7 mt-4 ms-5" src="assetsBackend/media/brand-logos/linkedin-2.svg"/>
                                <div class="flex flex-col gap-1 pb-4 px-5">
            <span class="text-3xl font-semibold text-gray-900">
             9.3k
            </span>
                                    <span class="text-2sm font-medium text-gray-600">
             Amazing mates
            </span>
                                </div>
                            </div>
                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="w-7 mt-4 ms-5" src="assetsBackend/media/brand-logos/youtube-2.svg"/>
                                <div class="flex flex-col gap-1 pb-4 px-5">
            <span class="text-3xl font-semibold text-gray-900">
             24k
            </span>
                                    <span class="text-2sm font-medium text-gray-600">
             Lessons Views
            </span>
                                </div>
                            </div>
                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="w-7 mt-4 ms-5" src="assetsBackend/media/brand-logos/instagram-03.svg"/>
                                <div class="flex flex-col gap-1 pb-4 px-5">
            <span class="text-3xl font-semibold text-gray-900">
             608
            </span>
                                    <span class="text-2sm font-medium text-gray-600">
             New subscribers
            </span>
                                </div>
                            </div>
                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="dark:hidden w-7 mt-4 ms-5"
                                     src="assetsBackend/media/brand-logos/tiktok.svg"/>
                                <img alt="" class="light:hidden w-7 mt-4 ms-5"
                                     src="assetsBackend/media/brand-logos/tiktok-dark.svg"/>
                                <div class="flex flex-col gap-1 pb-4 px-5">
            <span class="text-3xl font-semibold text-gray-900">
             2.5k
            </span>
                                    <span class="text-2sm font-medium text-gray-600">
             Stream audience
            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <style>
                            .entry-callout-bg {
                                background-image: url('/static/metronic-tailwind-html/dist/assetsBackend/media/images/2600x1600/2.png');
                            }

                            .dark .entry-callout-bg {
                                background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1600/2-dark.png');
                            }
                        </style>
                        <div class="card h-full h-full">
                            <div
                                class="card-body p-10 bg-[length:80%] [background-position:175%_25%] bg-no-repeat entry-callout-bg">
                                <div class="flex flex-col justify-center gap-4">
                                    <div class="flex -space-x-2">

                                        <div class="flex">
                                            <img
                                                class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10"
                                                src="favicon.png"/>
                                        </div>

                                    </div>
                                    <h2 class="text-1.5xl font-semibold text-gray-900">
                                        Hola bienvenido
                                        <br/>
                                        A
                                        <a class="link" href="#">
                                            Saint George
                                        </a>
                                    </h2>
                                    <p class="text-sm font-medium text-gray-700 leading-5.5">
                                        Interfaz de adminitración.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" href="html/demo1/account/home/get-started.html">
                                    Get Started
                                </a>
                            </div>
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
            position: "top-end",
            title: "Hola bienvenido(a)",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            icon: "success",
            timer: 1000,
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
@endpush