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
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-semibold leading-none text-gray-900">
                        Appearance
                    </h1>
                    <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                        Central Hub for Personal Customization
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <a class="btn btn-sm btn-light" href="#">
                        Privacy Settings
                    </a>
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
                        <div class="card">
                            <div class="card-header" id="advanced_settings_appearance">
                                <h3 class="card-title">
                                    Theme
                                </h3>
                            </div>
                            <div class="card-body lg:py-7.5">
                                <div class="mb-5">
                                    <h3 class="text-md font-semibold text-gray-900">
                                        Theme mode
                                    </h3>
                                    <span class="text-2sm font-medium text-gray-700">
             Select or customize your ui theme
            </span>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-7.5">
                                    <div>
                                        <label class="flex items-end border bg-no-repeat bg-cover border-gray-300 rounded-xl has-[:checked]:border-success has-[:checked]:border-3 [&amp;_.checked]:has-[:checked]:flex h-[170px] mb-0.5" style="background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/600x400/28.jpg')">
                                            <input checked="" class="appearance-none" name="appearance_option" type="radio" value="2"/>
                                            <i class="ki-solid ki-check-circle checked ml-5 mb-5 text-xl text-success leading-none hidden">
                                            </i>
                                        </label>
                                        <span class="text-sm font-semibold text-gray-900">
              Dark
             </span>
                                    </div>
                                    <div>
                                        <label class="flex items-end border bg-no-repeat bg-cover border-gray-300 rounded-xl has-[:checked]:border-success has-[:checked]:border-3 [&amp;_.checked]:has-[:checked]:flex h-[170px] mb-0.5" style="background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/600x400/32.jpg')">
                                            <input class="appearance-none" name="appearance_option" type="radio" value="2"/>
                                            <i class="ki-solid ki-check-circle checked ml-5 mb-5 text-xl text-success leading-none hidden">
                                            </i>
                                        </label>
                                        <span class="text-sm font-semibold text-gray-900">
              Light
             </span>
                                    </div>
                                    <div>
                                        <label class="flex items-end border bg-no-repeat bg-cover border-gray-300 rounded-xl has-[:checked]:border-success has-[:checked]:border-3 [&amp;_.checked]:has-[:checked]:flex h-[170px] mb-0.5" style="background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/600x400/30.jpg')">
                                            <input class="appearance-none" name="appearance_option" type="radio" value="2"/>
                                            <i class="ki-solid ki-check-circle checked ml-5 mb-5 text-xl text-success leading-none hidden">
                                            </i>
                                        </label>
                                        <span class="text-sm font-semibold text-gray-900">
              Sistem
             </span>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200 mt-7 mb-8">
                                </div>
                                <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-8">
                                    <label class="form-label max-w-48">
                                        Transparent sidebar
                                    </label>
                                    <div class="flex items-center gap-7.5 grow">
                                        <label class="switch">
              <span class="switch-label">
               Active
              </span>
                                            <input checked="" type="checkbox" value="1"/>
                                        </label>
                                        <span class="form-info">
              Toggle the transparent sidebar for a sleek interface.Switch it on for
					transparency or off for a solid background.
             </span>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button class="btn btn-primary">
                                        Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
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
                                    Branding
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
                        <!-- begin: cards -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Accessibility
                                </h3>
                            </div>
                            <div id="notifications_cards">
                                <div class="card-group flex items-center justify-between py-4 gap-2.5">
                                    <div class="flex items-center gap-3.5">
                                        <div class="relative size-[50px] shrink-0">
                                            <svg class="w-full h-full stroke-gray-300 fill-gray-100" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
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
                                                <i class="ki-filled ki-exit-right-corner text-1.5xl text-gray-500">
                                                </i>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-0.5">
              <span class="flex items-center gap-1.5 leading-none font-semibold text-sm text-gray-900">
               Shortcuts require modifier
              </span>
                                            <span class="text-2sm text-gray-600 font-medium">
               Enable modifier keys for quick keyboard shortcuts.
              </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <div class="flex items-center gap-2.5">
                                            <div class="switch switch-sm">
                                                <input checked="" name="param" type="checkbox" value="1"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-group flex items-center justify-between py-4 gap-2.5">
                                    <div class="flex items-center gap-3.5">
                                        <div class="relative size-[50px] shrink-0">
                                            <svg class="w-full h-full stroke-gray-300 fill-gray-100" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
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
                                                <i class="ki-filled ki-disguise text-1.5xl text-gray-500">
                                                </i>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-0.5">
              <span class="flex items-center gap-1.5 leading-none font-semibold text-sm text-gray-900">
               High color contrast
              </span>
                                            <span class="text-2sm text-gray-600 font-medium">
               Improve readability with high-contrast interface colors.
              </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <div class="flex items-center gap-2.5">
                                            <div class="switch switch-sm">
                                                <input name="param" type="checkbox" value="1"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-group flex items-center justify-between py-4 gap-2.5">
                                    <div class="flex items-center gap-3.5">
                                        <div class="relative size-[50px] shrink-0">
                                            <svg class="w-full h-full stroke-gray-300 fill-gray-100" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
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
                                                <i class="ki-filled ki-double-right-arrow text-1.5xl text-gray-500">
                                                </i>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-0.5">
              <span class="flex items-center gap-1.5 leading-none font-semibold text-sm text-gray-900">
               Autoplay videos
              </span>
                                            <span class="text-2sm text-gray-600 font-medium">
               Choose preferences for automatic video playback.
              </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <div class="flex items-center gap-2.5">
                                            <div class="grow min-w-48">
                                                <select class="select w-full">
                                                    <option>
                                                        System preferences
                                                    </option>
                                                    <option>
                                                        Sound
                                                    </option>
                                                    <option>
                                                        Focus
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-group flex items-center justify-between py-4 gap-2.5">
                                    <div class="flex items-center gap-3.5">
                                        <div class="relative size-[50px] shrink-0">
                                            <svg class="w-full h-full stroke-gray-300 fill-gray-100" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
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
                                                <i class="ki-filled ki-screen text-1.5xl text-gray-500">
                                                </i>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-0.5">
              <span class="flex items-center gap-1.5 leading-none font-semibold text-sm text-gray-900">
               Open links in Desktop
              </span>
                                            <span class="text-2sm text-gray-600 font-medium">
               Links open in the desktop app for convenience.
              </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <div class="flex items-center gap-2.5">
                                            <div class="switch switch-sm">
                                                <input checked="" name="param" type="checkbox" value="1"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: cards -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    FAQ
                                </h3>
                            </div>
                            <div class="card-body py-3">
                                <div data-accordion="true" data-accordion-expand-all="true">
                                    <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
                                        <button class="accordion-toggle py-4" data-accordion-toggle="#faq_1_content">
              <span class="text-base text-gray-900 font-medium">
               How is pricing determined for each plan ?
              </span>
                                            <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                            </i>
                                            <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                            </i>
                                        </button>
                                        <div class="accordion-content hidden" id="faq_1_content">
                                            <div class="text-gray-700 text-md pb-4">
                                                Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
                                                Understanding the factors influencing each plan's pricing helps you make an informed decision.
                                                Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
                                                Understanding the factors influencing each plan's pricing helps you make an informed decision.
                                                Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
                                                Understanding the factors influencing each plan's pricing helps you make an informed decision
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
                                        <button class="accordion-toggle py-4" data-accordion-toggle="#faq_2_content">
              <span class="text-base text-gray-900 font-medium">
               What payment methods are accepted for subscriptions ?
              </span>
                                            <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                            </i>
                                            <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                            </i>
                                        </button>
                                        <div class="accordion-content hidden" id="faq_2_content">
                                            <div class="text-gray-700 text-md pb-4">
                                                Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
                                                Understanding the factors influencing each plan's pricing helps you make an informed decision
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
                                        <button class="accordion-toggle py-4" data-accordion-toggle="#faq_3_content">
              <span class="text-base text-gray-900 font-medium">
               Are there any hidden fees in the pricing ?
              </span>
                                            <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                            </i>
                                            <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                            </i>
                                        </button>
                                        <div class="accordion-content hidden" id="faq_3_content">
                                            <div class="text-gray-700 text-md pb-4">
                                                Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
                                                Understanding the factors influencing each plan's pricing helps you make an informed decision
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
                                        <button class="accordion-toggle py-4" data-accordion-toggle="#faq_4_content">
              <span class="text-base text-gray-900 font-medium">
               Is there a discount for annual subscriptions ?
              </span>
                                            <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                            </i>
                                            <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                            </i>
                                        </button>
                                        <div class="accordion-content hidden" id="faq_4_content">
                                            <div class="text-gray-700 text-md pb-4">
                                                Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
                                                Understanding the factors influencing each plan's pricing helps you make an informed decision
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
                                        <button class="accordion-toggle py-4" data-accordion-toggle="#faq_5_content">
              <span class="text-base text-gray-900 font-medium">
               Do you offer refunds on subscription cancellations ?
              </span>
                                            <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                            </i>
                                            <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                            </i>
                                        </button>
                                        <div class="accordion-content hidden" id="faq_5_content">
                                            <div class="text-gray-700 text-md pb-4">
                                                Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
                                                Understanding the factors influencing each plan's pricing helps you make an informed decision
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
                                        <button class="accordion-toggle py-4" data-accordion-toggle="#faq_6_content">
              <span class="text-base text-gray-900 font-medium">
               Can I add extra features to my current plan ?
              </span>
                                            <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                            </i>
                                            <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                            </i>
                                        </button>
                                        <div class="accordion-content hidden" id="faq_6_content">
                                            <div class="text-gray-700 text-md pb-4">
                                                Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget.
                                                Understanding the factors influencing each plan's pricing helps you make an informed decision
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body px-10 py-7.5 lg:pr-12.5">
                                <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
                                    <div class="flex flex-col items-start gap-3">
                                        <h2 class="text-1.5xl font-semibold text-gray-900">
                                            Contact Support
                                        </h2>
                                        <p class="text-sm font-medium text-gray-700 leading-5.5 mb-2.5">
                                            Need assistance? Contact our support team for prompt, personalized help your queries &amp; concerns.
                                        </p>
                                    </div>
                                    <img alt="image" class="dark:hidden max-h-[150px]" src="assets/media/illustrations/31.svg"/>
                                    <img alt="image" class="light:hidden max-h-[150px]" src="assets/media/illustrations/31-dark.svg"/>
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" href="">
                                    Contact Support
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="flex flex-col gap-5 lg:gap-7.5">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex items-center flex-wrap lg:flex-nowrap gap-1.5">
                                    <h3 class="card-title">
                                        Disable default Branding
                                    </h3>
                                    <span class="badge badge-xs badge-primary badge-outline">
             Pro
            </span>
                                </div>
                            </div>
                            <div class="card-body flex flex-col gap-4">
                                <div class="flex flex-col gap-1.5">
                                    <p class="text-2sm text-gray-700">
                                        Remove any ktstudio.io branding and media.
                                        I.e. powered by ktstudio.io
                                    </p>
                                    <div>
                                        <a class="btn btn-link flex-none" href="#">
                                            View Plans
                                        </a>
                                    </div>
                                </div>
                                <div class="switch">
                                    <input disabled="" name="param" type="checkbox" value="1"/>
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <button class="btn btn-secondary btn-sm disabled">
                                    Update
                                </button>
                            </div>
                        </div>
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
                                        Enhancing Usability: Adaptive Shortcut Controls
                                    </a>
                                    <p class="text-sm text-gray-700">
                                        Integrate modifier keys for activating shortcuts to streamline your navigation and enhance productivity without disrupting your typing flow.
                                    </p>
                                    <a class="btn btn-link flex-none" href="#">
                                        Learn more
                                    </a>
                                </div>
                                <span class="hidden [&amp;:not(:last-child)]:block [&amp;:not(:last-child)]:border-b border-b-gray-200">
           </span>
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
                                                <i class="ki-filled ki-picture text-1.5xl ps-px text-brand">
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="text-base font-semibold text-gray-900 hover:text-primary" href="#">
                                        Visual Accessibility: High Contrast Theme Activation
                                    </a>
                                    <p class="text-sm text-gray-700">
                                        Switch to a high-contrast color scheme to improve on-screen text readability, reduce eye strain, and facilitate better visual ergonomics for long work sessions.
                                    </p>
                                    <a class="btn btn-link flex-none" href="#">
                                        Learn more
                                    </a>
                                </div>
                                <span class="hidden [&amp;:not(:last-child)]:block [&amp;:not(:last-child)]:border-b border-b-gray-200">
           </span>
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
                                                <i class="ki-filled ki-mouse-square text-1.5xl ps-px text-brand">
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="text-base font-semibold text-gray-900 hover:text-primary" href="#">
                                        Media Handling: Autoplay Videos Customization Options
                                    </a>
                                    <p class="text-sm text-gray-700">
                                        Customize your video engagement experience with user-centric autoplay settings that align with your system preferences or manual selection for a tailored approach.
                                    </p>
                                    <a class="btn btn-link flex-none" href="#">
                                        Learn more
                                    </a>
                                </div>
                                <span class="hidden [&amp;:not(:last-child)]:block [&amp;:not(:last-child)]:border-b border-b-gray-200">
           </span>
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
                                                <i class="ki-filled ki-route text-1.5xl ps-px text-brand">
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="text-base font-semibold text-gray-900 hover:text-primary" href="#">
                                        Navigation Preferences: Desktop App Link Integration Features
                                    </a>
                                    <p class="text-sm text-gray-700">
                                        Enhance your workflow integration by configuring external links to open seamlessly within the desktop application, providing a unified and efficient user experience.
                                    </p>
                                    <a class="btn btn-link flex-none" href="#">
                                        Learn more
                                    </a>
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
