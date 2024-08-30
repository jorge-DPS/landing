<header class="header fixed top-0 z-10 left-0 right-0 flex items-stretch shrink-0 bg-[#fefefe] dark:bg-coal-500"
        data-sticky="true" data-sticky-class="shadow-sm dark:border-b dark:border-b-coal-100"
        data-sticky-name="header" id="header">
    <div class="container-fixed flex justify-between items-stretch lg:gap-4" id="header_container">
        <div class="flex gap-1 lg:hidden items-center -ml-1">
            <a class="shrink-0" href="html/demo1.html">
                <img class="max-h-[25px] w-full" src="assetsBackend/media/app/mini-logo.svg"/>
            </a>
            <div class="flex items-center">
                <button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#sidebar">
                    <i class="ki-filled ki-menu">
                    </i>
                </button>
                <button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#megamenu_wrapper">
                    <i class="ki-filled ki-burger-menu-2">
                    </i>
                </button>
            </div>
        </div>
        <div class="flex items-stretch" id="megamenu_container">
            @yield('breadcrumbs')
        </div>
        <div class="flex items-center gap-2 lg:gap-3.5">
            <div class="dropdown" data-dropdown="true" data-dropdown-offset="70px, 10px"
                 data-dropdown-placement="bottom-end" data-dropdown-trigger="click|lg:click">
                <button
                        class="dropdown-toggle btn btn-icon btn-icon-lg relative cursor-pointer size-9 rounded-full hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary text-gray-500">
                    <i class="ki-filled ki-notification-on">
                    </i>
                    <span
                            class="badge badge-dot badge-success size-[5px] absolute top-0.5 right-0.5 transform translate-y-1/2">
         </span>
                </button>
                <div class="dropdown-content light:border-gray-300 w-full max-w-[460px]">
                    <div
                            class="flex items-center justify-between gap-2.5 text-sm text-gray-900 font-semibold px-5 py-2.5"
                            id="notifications_header">
                        <span>No es accesible.</span>
                        <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0"
                                data-dropdown-dismiss="true">
                            <i class="ki-filled ki-cross">
                            </i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="menu" data-menu="true">
                <div class="menu-item" data-menu-item-offset="20px, 10px" data-menu-item-placement="bottom-end"
                     data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                    <div class="menu-toggle btn btn-icon rounded-full">
                        <img alt="" class="size-9 rounded-full border-2 border-success shrink-0" src="{{ auth()->user()->avatar ? asset(auth()->user()->avatar) : asset('/assetsBackend/media/avatars/blank.png') }}">
                        </img>
                    </div>
                    <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[250px]">
                        <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
                            <div class="flex items-center gap-2">
                                <img alt="" class="size-9 rounded-full border-2 border-success"
                                     src="{{ auth()->user()->avatar ? asset(auth()->user()->avatar) : asset('/assetsBackend/media/avatars/blank.png') }}">
                                <div class="flex flex-col gap-1.5">
              <span class="text-sm text-gray-800 font-semibold leading-none">
               {{ auth()->user()->name }}
              </span>
                                    <a class="text-xs text-gray-600 hover:text-primary font-medium leading-none"
                                       href="{{ route('profile.index') }}">
                                        {{ auth()->user()->email }}
                                    </a>
                                </div>
                                </img>
                            </div>
                        </div>
                        <div class="menu-separator">
                        </div>
                        <div class="flex flex-col" data-menu-dismiss="true">
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('profile.index') }}">
             <span class="menu-icon">
              <i class="ki-filled ki-profile-circle">
              </i>
             </span>
                                    <span class="menu-title">
              Mi perfil
             </span>
                                </a>
                            </div>
                            <div class="menu-item" data-menu-item-offset="-10px, 0"
                                 data-menu-item-placement="left-start" data-menu-item-toggle="dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link">
             <span class="menu-icon">
              <i class="ki-filled ki-icon">
              </i>
             </span>
                                    <span class="menu-title">
              Language
             </span>
                                    <div
                                            class="flex items-center gap-1.5 rounded-md border border-gray-300 text-gray-600 p-1.5 text-2xs font-medium shrink-0">
                                        Español
                                        <img alt="" class="inline-block size-3.5 rounded-full"
                                             src="assetsBackend/media/flags/bolivia.svg"/>
                                    </div>
                                </div>
                                <div
                                        class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[170px]">
                                    <div class="menu-item active">
                                        <a class="menu-link h-10" href="#">
               <span class="menu-icon">
                <img alt="" class="inline-block size-4 rounded-full" src="assetsBackend/media/flags/bolivia.svg"/>
               </span>
                                            <span class="menu-title">
                Español
               </span>
                                            <span class="menu-badge">
                <i class="ki-solid ki-check-circle text-success text-base">
                </i>
               </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-separator">
                        </div>
                        <div class="flex flex-col">
                            <div class="menu-item mb-0.5">
                                <div class="menu-link">
             <span class="menu-icon">
              <i class="ki-filled ki-moon">
              </i>
             </span>
                                    <span class="menu-title">
              Dark Mode
             </span>
                                    <label class="switch switch-sm">
                                        <input data-theme-state="dark" data-theme-toggle="true" name="check"
                                               type="checkbox" value="1">
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="menu-item px-4 py-1.5">
                                <a class="btn btn-sm btn-light justify-center"
                                   href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"
                                >
                                    salir
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
