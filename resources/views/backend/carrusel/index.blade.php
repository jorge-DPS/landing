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
                    <a class="btn btn-sm btn-light" href="#">
                        Agregar nuevo deslizador
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fixed">
            <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
                <!-- begin: toolbar -->
                <div class="flex flex-wrap items-center gap-5 justify-between">
                    <h3 class="text-lg text-gray-900 font-semibold">
                        8 Works
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
                <!-- end: toolbar -->
                <!-- begin: cards -->
                <div id="works_cards">
                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">
                        <div class="card border-0">
                            <img alt="" class="w-full h-auto rounded-t-xl" src="assetsBackend/media/images/600x400/21.jpg"/>
                            <div class="card-border card-rounded-b flex flex-col gap-2 px-5 py-4.5">
                                <a class="text-lg font-semibold text-gray-900 hover:text-primary" href="#">
                                    Urban Dreams
                                </a>
                                <div class="flex items-center justify-between grow">
                                    <div class="flex items-center grow">
                                        <img alt="" class="rounded-full size-7 me-2"
                                             src="assetsBackend/media/avatars/300-6.png"/>
                                        <span class="text-2sm font-medium text-gray-700 cursor-pointer hover:text-primary mb-px">
              Cody Fisher
             </span>
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-heart text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               24
              </span>
                                        </div>
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-messages text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               5
              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <img alt="" class="w-full h-auto rounded-t-xl" src="assetsBackend/media/images/600x400/3.jpg"/>
                            <div class="card-border card-rounded-b flex flex-col gap-2 px-5 py-4.5">
                                <a class="text-lg font-semibold text-gray-900 hover:text-primary" href="#">
                                    Whispered Emotions
                                </a>
                                <div class="flex items-center justify-between grow">
                                    <div class="flex items-center grow">
                                        <img alt="" class="rounded-full size-7 me-2"
                                             src="assetsBackend/media/avatars/300-14.png"/>
                                        <span class="text-2sm font-medium text-gray-700 cursor-pointer hover:text-primary mb-px">
              Wade Warren
             </span>
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-heart text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               187
              </span>
                                        </div>
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-messages text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               49
              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <img alt="" class="w-full h-auto rounded-t-xl" src="assetsBackend/media/images/600x400/22.jpg"/>
                            <div class="card-border card-rounded-b flex flex-col gap-2 px-5 py-4.5">
                                <a class="text-lg font-semibold text-gray-900 hover:text-primary" href="#">
                                    Golden Serenity
                                </a>
                                <div class="flex items-center justify-between grow">
                                    <div class="flex items-center grow">
                                        <img alt="" class="rounded-full size-7 me-2"
                                             src="assetsBackend/media/avatars/300-11.png"/>
                                        <span class="text-2sm font-medium text-gray-700 cursor-pointer hover:text-primary mb-px">
              Albert Flores
             </span>
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-heart text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               60
              </span>
                                        </div>
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-messages text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               13
              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <img alt="" class="w-full h-auto rounded-t-xl" src="assetsBackend/media/images/600x400/23.jpg"/>
                            <div class="card-border card-rounded-b flex flex-col gap-2 px-5 py-4.5">
                                <a class="text-lg font-semibold text-gray-900 hover:text-primary" href="#">
                                    Mystic Shadows
                                </a>
                                <div class="flex items-center justify-between grow">
                                    <div class="flex items-center grow">
                                        <img alt="" class="rounded-full size-7 me-2"
                                             src="assetsBackend/media/avatars/300-1.png"/>
                                        <span class="text-2sm font-medium text-gray-700 cursor-pointer hover:text-primary mb-px">
              Kathryn Murphy
             </span>
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-heart text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               37
              </span>
                                        </div>
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-messages text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               16
              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <img alt="" class="w-full h-auto rounded-t-xl" src="assetsBackend/media/images/600x400/14.jpg"/>
                            <div class="card-border card-rounded-b flex flex-col gap-2 px-5 py-4.5">
                                <a class="text-lg font-semibold text-gray-900 hover:text-primary" href="#">
                                    Wild Beauty
                                </a>
                                <div class="flex items-center justify-between grow">
                                    <div class="flex items-center grow">
                                        <img alt="" class="rounded-full size-7 me-2"
                                             src="assetsBackend/media/avatars/300-16.png"/>
                                        <span class="text-2sm font-medium text-gray-700 cursor-pointer hover:text-primary mb-px">
              Devon Lane
             </span>
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-heart text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               625
              </span>
                                        </div>
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-messages text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               109
              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <img alt="" class="w-full h-auto rounded-t-xl" src="assetsBackend/media/images/600x400/25.jpg"/>
                            <div class="card-border card-rounded-b flex flex-col gap-2 px-5 py-4.5">
                                <a class="text-lg font-semibold text-gray-900 hover:text-primary" href="#">
                                    Timeless Elegance
                                </a>
                                <div class="flex items-center justify-between grow">
                                    <div class="flex items-center grow">
                                        <img alt="" class="rounded-full size-7 me-2"
                                             src="assetsBackend/media/avatars/300-5.png"/>
                                        <span class="text-2sm font-medium text-gray-700 cursor-pointer hover:text-primary mb-px">
              Jenny Wilson
             </span>
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-heart text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               6
              </span>
                                        </div>
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-messages text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               1
              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <img alt="" class="w-full h-auto rounded-t-xl" src="assetsBackend/media/images/600x400/26.jpg"/>
                            <div class="card-border card-rounded-b flex flex-col gap-2 px-5 py-4.5">
                                <a class="text-lg font-semibold text-gray-900 hover:text-primary" href="#">
                                    Intrepid Travel
                                </a>
                                <div class="flex items-center justify-between grow">
                                    <div class="flex items-center grow">
                                        <img alt="" class="rounded-full size-7 me-2"
                                             src="assetsBackend/media/avatars/300-25.png"/>
                                        <span class="text-2sm font-medium text-gray-700 cursor-pointer hover:text-primary mb-px">
              Jhon Smith
             </span>
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-heart text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               30
              </span>
                                        </div>
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-messages text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               22
              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <img alt="" class="w-full h-auto rounded-t-xl" src="assetsBackend/media/images/600x400/2.jpg"/>
                            <div class="card-border card-rounded-b flex flex-col gap-2 px-5 py-4.5">
                                <a class="text-lg font-semibold text-gray-900 hover:text-primary" href="#">
                                    We rise together
                                </a>
                                <div class="flex items-center justify-between grow">
                                    <div class="flex items-center grow">
                                        <img alt="" class="rounded-full size-7 me-2"
                                             src="assetsBackend/media/avatars/300-29.png"/>
                                        <span class="text-2sm font-medium text-gray-700 cursor-pointer hover:text-primary mb-px">
              Adam Cruse
             </span>
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-heart text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               19
              </span>
                                        </div>
                                        <div class="flex gap-1 items-center">
                                            <i class="ki-filled ki-messages text-base text-gray-500">
                                            </i>
                                            <span class="text-2sm font-medium text-gray-700 py-2">
               23
              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .offer-bg {
                                background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-4.png');
                            }

                            .dark .offer-bg {
                                background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-4-dark.png');
                            }
                        </style>
                        <a class="card border-2 border-dashed border-brand-clarity bg-center bg-[length:750px] bg-no-repeat offer-bg"
                           href="#">
                            <div class="card-body grid items-center">
                                <div class="flex flex-col gap-5">
                                    <div class="flex justify-center pt-5">
                                        <div class="relative size-[90px] shrink-0">
                                            <svg class="w-full h-full stroke-brand-clarity fill-light" fill="none"
                                                 height="48" viewbox="0 0 44 48" width="44"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
			18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
			39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z"
                                                      fill="">
                                                </path>
                                                <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
			18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
			39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z"
                                                      stroke="">
                                                </path>
                                            </svg>
                                            <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                                <i class="ki-filled ki-rocket text-[2.25rem] text-brand">
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col text-center">
             <span class="text-1.5xl font-semibold text-gray-900 hover:text-primary-active mb-px">
              Offer a Work
             </span>
                                        <span class="text-sm font-medium text-gray-600">
              Ignite Professional Adventures
             </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex grow justify-center pt-5 lg:pt-7.5">
                        <a class="btn btn-link" href="#">
                            Show more works
                        </a>
                    </div>
                </div>
                <!-- end: cards -->
                <!-- begin: list -->
                <div class="hidden" id="works_list">
                    <div class="flex flex-col gap-5 lg:gap-7.5">
                        <div class="card p-5">
                            <div class="flex flex-wrap justify-between items-center gap-7">
                                <div class="flex flex-wrap items-center gap-5">
                                    <img alt="" class="rounded-md max-h-20 max-w-full shrink-0"
                                         src="assetsBackend/media/images/600x400/21.jpg"/>
                                    <div class="grid grid-col gap-1">
                                        <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                           href="#">
                                            Urban Dreams
                                        </a>
                                        <span class="text-sm font-medium text-gray-600">
              Cloud storage and file sharing
             </span>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-5 lg:gap-7.5">
                                    <div class="flex items-center gap-1.5">
                                        <img alt="" class="rounded-full h-7" src="assetsBackend/media/avatars/300-6.png"/>
                                        <a class="text-2sm font-medium text-gray-700 hover:text-primary-active mb-px"
                                           href="#">
                                            Cody Fisher
                                        </a>
                                    </div>
                                    <div class="flex gap-1 items-center w-20 justify-end">
                                        <i class="ki-filled ki-heart text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              24
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Likes
             </span>
                                    </div>
                                    <div class="flex gap-1 items-center w-28 justify-end">
                                        <i class="ki-filled ki-messages text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              5
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Comments
             </span>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card p-5">
                            <div class="flex flex-wrap justify-between items-center gap-7">
                                <div class="flex flex-wrap items-center gap-5">
                                    <img alt="" class="rounded-md max-h-20 max-w-full shrink-0"
                                         src="assetsBackend/media/images/600x400/3.jpg"/>
                                    <div class="grid grid-col gap-1">
                                        <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                           href="#">
                                            Whispered Emotions
                                        </a>
                                        <span class="text-sm font-medium text-gray-600">
              Neutrals are the epitome of timeless elegance
             </span>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-5 lg:gap-7.5">
                                    <div class="flex items-center gap-1.5">
                                        <img alt="" class="rounded-full h-7" src="assetsBackend/media/avatars/300-14.png"/>
                                        <a class="text-2sm font-medium text-gray-700 hover:text-primary-active mb-px"
                                           href="#">
                                            Wade Warren
                                        </a>
                                    </div>
                                    <div class="flex gap-1 items-center w-20 justify-end">
                                        <i class="ki-filled ki-heart text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              187
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Likes
             </span>
                                    </div>
                                    <div class="flex gap-1 items-center w-28 justify-end">
                                        <i class="ki-filled ki-messages text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              49
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Comments
             </span>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card p-5">
                            <div class="flex flex-wrap justify-between items-center gap-7">
                                <div class="flex flex-wrap items-center gap-5">
                                    <img alt="" class="rounded-md max-h-20 max-w-full shrink-0"
                                         src="assetsBackend/media/images/600x400/22.jpg"/>
                                    <div class="grid grid-col gap-1">
                                        <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                           href="#">
                                            Golden Serenity
                                        </a>
                                        <span class="text-sm font-medium text-gray-600">
              Choose the right time.
             </span>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-5 lg:gap-7.5">
                                    <div class="flex items-center gap-1.5">
                                        <img alt="" class="rounded-full h-7" src="assetsBackend/media/avatars/300-11.png"/>
                                        <a class="text-2sm font-medium text-gray-700 hover:text-primary-active mb-px"
                                           href="#">
                                            Albert Flores
                                        </a>
                                    </div>
                                    <div class="flex gap-1 items-center w-20 justify-end">
                                        <i class="ki-filled ki-heart text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              60
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Likes
             </span>
                                    </div>
                                    <div class="flex gap-1 items-center w-28 justify-end">
                                        <i class="ki-filled ki-messages text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              13
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Comments
             </span>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card p-5">
                            <div class="flex flex-wrap justify-between items-center gap-7">
                                <div class="flex flex-wrap items-center gap-5">
                                    <img alt="" class="rounded-md max-h-20 max-w-full shrink-0"
                                         src="assetsBackend/media/images/600x400/23.jpg"/>
                                    <div class="grid grid-col gap-1">
                                        <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                           href="#">
                                            Mystic Shadows
                                        </a>
                                        <span class="text-sm font-medium text-gray-600">
              Her alluring appearance radiates calmness.
             </span>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-5 lg:gap-7.5">
                                    <div class="flex items-center gap-1.5">
                                        <img alt="" class="rounded-full h-7" src="assetsBackend/media/avatars/300-1.png"/>
                                        <a class="text-2sm font-medium text-gray-700 hover:text-primary-active mb-px"
                                           href="#">
                                            Kathryn Murphy
                                        </a>
                                    </div>
                                    <div class="flex gap-1 items-center w-20 justify-end">
                                        <i class="ki-filled ki-heart text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              37
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Likes
             </span>
                                    </div>
                                    <div class="flex gap-1 items-center w-28 justify-end">
                                        <i class="ki-filled ki-messages text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              16
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Comments
             </span>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card p-5">
                            <div class="flex flex-wrap justify-between items-center gap-7">
                                <div class="flex flex-wrap items-center gap-5">
                                    <img alt="" class="rounded-md max-h-20 max-w-full shrink-0"
                                         src="assetsBackend/media/images/600x400/14.jpg"/>
                                    <div class="grid grid-col gap-1">
                                        <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                           href="#">
                                            Wild Beauty
                                        </a>
                                        <span class="text-sm font-medium text-gray-600">
              Pulled apart by reality
             </span>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-5 lg:gap-7.5">
                                    <div class="flex items-center gap-1.5">
                                        <img alt="" class="rounded-full h-7" src="assetsBackend/media/avatars/300-16.png"/>
                                        <a class="text-2sm font-medium text-gray-700 hover:text-primary-active mb-px"
                                           href="#">
                                            Devon Lane
                                        </a>
                                    </div>
                                    <div class="flex gap-1 items-center w-20 justify-end">
                                        <i class="ki-filled ki-heart text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              625
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Likes
             </span>
                                    </div>
                                    <div class="flex gap-1 items-center w-28 justify-end">
                                        <i class="ki-filled ki-messages text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              109
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Comments
             </span>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card p-5">
                            <div class="flex flex-wrap justify-between items-center gap-7">
                                <div class="flex flex-wrap items-center gap-5">
                                    <img alt="" class="rounded-md max-h-20 max-w-full shrink-0"
                                         src="assetsBackend/media/images/600x400/25.jpg"/>
                                    <div class="grid grid-col gap-1">
                                        <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                           href="#">
                                            Timeless Elegance
                                        </a>
                                        <span class="text-sm font-medium text-gray-600">
              The charm and limit of shadows
             </span>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-5 lg:gap-7.5">
                                    <div class="flex items-center gap-1.5">
                                        <img alt="" class="rounded-full h-7" src="assetsBackend/media/avatars/300-5.png"/>
                                        <a class="text-2sm font-medium text-gray-700 hover:text-primary-active mb-px"
                                           href="#">
                                            Jenny Wilson
                                        </a>
                                    </div>
                                    <div class="flex gap-1 items-center w-20 justify-end">
                                        <i class="ki-filled ki-heart text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              6
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Likes
             </span>
                                    </div>
                                    <div class="flex gap-1 items-center w-28 justify-end">
                                        <i class="ki-filled ki-messages text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              1
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Comments
             </span>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card p-5">
                            <div class="flex flex-wrap justify-between items-center gap-7">
                                <div class="flex flex-wrap items-center gap-5">
                                    <img alt="" class="rounded-md max-h-20 max-w-full shrink-0"
                                         src="assetsBackend/media/images/600x400/26.jpg"/>
                                    <div class="grid grid-col gap-1">
                                        <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                           href="#">
                                            Intrepid Travel
                                        </a>
                                        <span class="text-sm font-medium text-gray-600">
              Understand the world with us
             </span>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-5 lg:gap-7.5">
                                    <div class="flex items-center gap-1.5">
                                        <img alt="" class="rounded-full h-7" src="assetsBackend/media/avatars/300-25.png"/>
                                        <a class="text-2sm font-medium text-gray-700 hover:text-primary-active mb-px"
                                           href="#">
                                            Jhon Smith
                                        </a>
                                    </div>
                                    <div class="flex gap-1 items-center w-20 justify-end">
                                        <i class="ki-filled ki-heart text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              30
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Likes
             </span>
                                    </div>
                                    <div class="flex gap-1 items-center w-28 justify-end">
                                        <i class="ki-filled ki-messages text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              22
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Comments
             </span>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card p-5">
                            <div class="flex flex-wrap justify-between items-center gap-7">
                                <div class="flex flex-wrap items-center gap-5">
                                    <img alt="" class="rounded-md max-h-20 max-w-full shrink-0"
                                         src="assetsBackend/media/images/600x400/2.jpg"/>
                                    <div class="grid grid-col gap-1">
                                        <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                           href="#">
                                            We rise together
                                        </a>
                                        <span class="text-sm font-medium text-gray-600">
              We share the best experiences with you
             </span>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-5 lg:gap-7.5">
                                    <div class="flex items-center gap-1.5">
                                        <img alt="" class="rounded-full h-7" src="assetsBackend/media/avatars/300-29.png"/>
                                        <a class="text-2sm font-medium text-gray-700 hover:text-primary-active mb-px"
                                           href="#">
                                            Adam Cruse
                                        </a>
                                    </div>
                                    <div class="flex gap-1 items-center w-20 justify-end">
                                        <i class="ki-filled ki-heart text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              19
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Likes
             </span>
                                    </div>
                                    <div class="flex gap-1 items-center w-28 justify-end">
                                        <i class="ki-filled ki-messages text-base text-gray-500">
                                        </i>
                                        <span class="text-2sm font-medium text-gray-700 py-2">
              23
             </span>
                                        <span class="text-2sm font-medium text-gray-700">
              Comments
             </span>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <style>
                            .offer-bg {
                                background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-4.png');
                            }

                            .dark .offer-bg {
                                background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-4-dark.png');
                            }
                        </style>
                        <a class="card border-2 border-dashed border-brand-clarity bg-center bg-[length:600px] bg-no-repeat offer-bg"
                           href="#">
                            <div class="card-body">
                                <div class="flex items-center justify-center gap-5">
                                    <div class="flex justify-center">
                                        <div class="relative size-[70px] shrink-0">
                                            <svg class="w-full h-full stroke-brand-clarity fill-light" fill="none"
                                                 height="48" viewbox="0 0 44 48" width="44"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
			18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
			39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z"
                                                      fill="">
                                                </path>
                                                <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
			18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
			39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z"
                                                      stroke="">
                                                </path>
                                            </svg>
                                            <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                                <i class="ki-filled ki-rocket text-[1.875rem] text-brand">
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col text-start">
             <span class="text-xl font-semibold text-gray-900 hover:text-primary-active mb-px">
              Offer a Work
             </span>
                                        <span class="text-sm font-medium text-gray-600">
              Ignite Professional Adventures
             </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex grow justify-center pt-5 lg:pt-7.5">
                        <a class="btn btn-link" href="#">
                            Show more works
                        </a>
                    </div>
                </div>
                <!-- end: list -->
            </div>
            <!-- end: works -->
        </div>
        <!-- end: container -->
    </main>
@endsection
