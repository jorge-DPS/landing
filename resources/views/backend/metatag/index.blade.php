@extends('backend.layouts.app')

@section('title')
    <title>MetaWeb</title>
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
        <!-- begin: container -->
        <div class="container-fixed" id="content_container">
        </div>
        <!-- end: container -->
        <div class="flex flex-nowrap items-center lg:items-end justify-between border-b border-b-gray-200 dark:border-b-coal-100 gap-6 mb-5 lg:mb-10">
            <!-- begin: container -->
            <div class="container-fixed">

            </div>
            <!-- end: container -->
        </div>
        <!-- begin: container -->
        <div class="container-fixed">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-4 p-4 bg-white rounded-lg shadow-md">
                    <h1 class="text-2xl font-bold leading-tight text-gray-900">
                        Cabecera del sitio web
                    </h1>
                    <div class="flex items-center gap-3 text-base font-medium text-gray-700">
                        La cabecera del sitio es crucial para proporcionar información relevante y optimizada sobre tu sitio web.
                    </div>
                </div>
            </div>
        </div>
        <!-- end: container -->
        <!-- begin: container -->
        <div class="container-fixed">
            <!-- begin: grid -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-5 lg:gap-7.5">
                <div class="col-span-2">
                    <div class="flex flex-col gap-5 lg:gap-7.5">
                        <style>
                            .branding-bg {
                                background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-5.png');
                            }
                            .dark .branding-bg {
                                background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-5-dark.png');
                            }
                        </style>
                        <div class="card min-w-full">
                            <div class="card-header gap-2">
                                <h3 class="card-title">
                                    Enalces
                                </h3>
                                <div class="flex items-center gap-2">
                                    <label class="switch switch-sm">
             <span class="switch-label">
              Publish
             </span>
                                        <input name="check" type="checkbox" value="1"/>
                                    </label>
                                </div>
                            </div>
                            <div class="card-body lg:py-7.5 py-5">
                                <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
                                    <div class="flex flex-col max-w-72 w-full">
                                        <div class="text-gray-900 text-sm font-semibold">
                                            Company Logo
                                        </div>
                                        <span class="text-gray-600 text-2sm font-medium">
              Emblematic Corporate Identity Symbol
             </span>
                                    </div>
                                    <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                                        <img alt="" class="h-[35px] mt-2" src="assets/media/brand-logos/hex-lab.svg"/>
                                        <div class="flex bg-center max-w-72 lg:w-full p-5 lg:p-7 bg-no-repeat bg-[length:550px] border border-gray-300 rounded-xl border-dashed branding-bg">
                                            <div class="flex flex-col place-items-center place-content-center text-center rounded-xl w-full">
                                                <div class="flex items-center mb-2.5">
                                                    <div class="relative size-11 shrink-0">
                                                        <svg class="w-full h-full stroke-brand-clarity fill-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
										18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
										39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
                                                            </path>
                                                            <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
										18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
										39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="" stroke-opacity="0.2">
                                                            </path>
                                                        </svg>
                                                        <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                                            <i class="ki-filled ki-picture text-xl ps-px text-brand">
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="text-gray-800 text-[0.75rem] font-semibold hover:text-primary-active mb-px" href="html/demo1/network/user-cards/mini-cards.html">
                                                    Click or Drag &amp; Drop
                                                </a>
                                                <span class="text-2xs font-medium text-gray-600 text-nowrap">
                SVG,PNG, JPG (max. 800x400)
               </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200 my-7.5">
                                </div>
                                <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
                                    <div class="flex flex-col max-w-72 w-full">
                                        <div class="text-gray-900 text-sm font-semibold">
                                            Brand Color
                                        </div>
                                        <span class="text-gray-600 text-2sm font-medium">
              Signature Palette Branding Element
             </span>
                                    </div>
                                    <label class="input">
                                        <i class="ki-solid ki-mouse-square text-success">
                                        </i>
                                        <input type="text" value="#BA35A0">
                                        </input>
                                    </label>
                                </div>
                                <div class="border-t border-gray-200 my-7.5">
                                </div>
                                <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
                                    <div class="flex flex-col max-w-72 w-full">
                                        <div class="text-gray-900 text-sm font-semibold">
                                            Branding
                                        </div>
                                        <span class="text-gray-600 text-2sm font-medium">
              Comprehensive Image Identity Design
             </span>
                                    </div>
                                    <div class="flex flex-col gap-5 grow">
                                        <div class="flex flex-col gap-2.5">
                                            <label class="checkbox-group">
                                                <input class="checkbox checkbox-sm" type="checkbox" value="1"/>
                                                <span class="checkbox-label">
                Security Questionaries
               </span>
                                            </label>
                                            <div class="form-hint">
                                                Detailed Risk Assessment &amp; Compliance Verification
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2.5">
                                            <label class="checkbox-group">
                                                <input checked="" class="checkbox checkbox-sm" type="checkbox" value="1"/>
                                                <span class="checkbox-label">
                Emails
               </span>
                                            </label>
                                            <div class="form-hint">
                                                Electronic Message Communication
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2.5">
                                            <label class="checkbox-group">
                                                <input checked="" class="checkbox checkbox-sm" type="checkbox" value="1"/>
                                                <span class="checkbox-label">
                Vendor Reports
               </span>
                                            </label>
                                            <div class="form-hint">
                                                Supplier Performance &amp; Reliability Evaluations
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200 my-7.5">
                                </div>
                                <div class="flex justify-end">
                                    <button class="btn btn-primary">
                                        Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="flex flex-col gap-5 lg:gap-7.5">
                        <div class="card">
                            <div class="card-body py-10 flex flex-col gap-5 lg:gap-7.5">
                                <div class="flex flex-col items-start gap-2.5">
                                    <div class="mb-2.5">
                                        <div class="relative size-[50px] shrink-0">
                                            <svg class="w-full h-full stroke-brand-clarity fill-brand-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
			18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
			39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
                                                </path>
                                                <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
			18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
			39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
                                                </path>
                                            </svg>
                                            <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                                <i class="ki-filled ki-emoji-happy text-1.5xl ps-px text-brand">
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="text-base font-semibold text-gray-900 hover:text-primary" href="#">
                                        ¿Qué es la Cabecera del Sitio?
                                    </a>
                                    <p class="text-sm text-gray-700">
                                        La cabecera del sitio es la parte superior de una página web, donde generalmente se encuentra el logotipo, el nombre del sitio, y enlaces importantes como el menú de navegación. Es la primera impresión que los visitantes tienen de tu sitio, ayudando a que encuentren fácilmente la información que buscan.
                                    </p>
                                </div>

                                <span class="hidden [&amp;:not(:last-child)]:block [&amp;:not(:last-child)]:border-b border-b-gray-200">
           </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: grid -->
        </div>
        <!-- end: container -->
    </main>
@endsection
