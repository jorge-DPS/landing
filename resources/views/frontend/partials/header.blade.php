<header class="absolute z-[99] top-0 inset-x-[100px] xxl:inset-x-[30px] xl:inset-x-0 bg-white rounded-bl-[10px] rounded-br-[10px]">
    <div class="px-[30px] xxl:px-[15px] lg:px-[20px] lg:py-[18px] flex justify-between to-be-fixed"
         style="padding-bottom: 9px; padding-top: 9px;">
        <div class="logo flex items-center">
            <a href="{{ url('/')}}" class="flex items-center">
                <img src="{{ asset('favicon.png') }}" alt="logo" class="logo" style="width: 40px; margin-right: 10px;">
                <h2 style="font-size: 20px;">Saint George</h2>
            </a>
        </div>

        <div class="flex lg:items-center lg:gap-[60px] xxs:gap-[30px]">
            <div class="flex items-center gap-[100px] xl:gap-[30px] lg:gap-y-0">

                <div class="ed-header-nav-container">
                    <ul class="to-go-to-sidebar-in-mobile ed-header-nav flex lg:flex-col gap-x-[43px] xl:gap-x-[33px] font-kanit text-[17px] font-normal">
                        <a href="{{ url('/')}}">Inicio</a>
                        @foreach($menuGeneral as $menu)
                            <li class="has-sub-menu relative">
                                <a role="button">{{ $menu->title }}</a>
                                @if($menu->pages->isNotEmpty())
                                    <ul class="ed-header-submenu">
                                        @foreach($menu->pages as $page)
                                            <li>
                                                <a href="{{ url('p', $page->slug) }}" target="_blank">{{ $page->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>

                <style>
                    .logo-container {
                        display: flex;
                        align-items: center;
                    }

                    .logo-berlitz {
                        width: 80px;
                        height: 40px;
                        margin-right: 10px;
                    }

                    .logo-character {
                        width: 60px;
                        margin-right: 0;
                    }


                    .button1 {
                        line-height: 1;
                        text-decoration: none;
                        display: inline-flex;
                        align-items: center;
                        gap: 0.75rem;
                        background-color: #b12a38;
                        color: #fff;
                        border-radius: 10rem;
                        font-weight: 600;
                        padding: 0.5rem 1.5rem;
                        padding-left: 20px;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        transition: background-color 0.3s;
                        font-size: 12px;
                    }

                    .button1__icon-wrapper {
                        flex-shrink: 0;
                        width: 20px;
                        height: 20px;
                        position: relative;
                        color: #b12a38;
                        background-color: #fff;
                        border-radius: 50%;
                        display: grid;
                        place-items: center;
                        overflow: hidden;
                    }

                    .button1:hover {
                        background-color: #fff;
                        color: #b12a38;
                    }

                    .button1:hover .button1__icon-wrapper {
                        color: #fff;
                        background-color: #b12a38;
                    }

                    .button1__icon-svg--copy {
                        position: absolute;
                        transform: translate(-150%, 150%);
                    }

                    .button1:hover .button1__icon-svg:first-child {
                        transition: transform 0.3s ease-in-out;
                        transform: translate(150%, -150%);
                    }

                    .button1:hover .button1__icon-svg--copy {
                        transition: transform 0.3s ease-in-out 0.1s;
                        transform: translate(0);
                    }

                </style>

                <div class="logo-container flex items-center">
                    <a href="{{ route('login') }}" class="button1" style="--clr: #7808d0; margin-right: 5px;">
  <span class="button1__icon-wrapper">
    <svg
            viewBox="0 0 14 15"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="button1__icon-svg"
            width="10"
    >
      <path
              d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
              fill="currentColor"
      ></path>
    </svg>

    <svg
            viewBox="0 0 14 15"
            fill="none"
            width="10"
            xmlns="http://www.w3.org/2000/svg"
            class="button1__icon-svg button1__icon-svg--copy"
    >
      <path
              d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
              fill="currentColor"
      ></path>
    </svg>
  </span>
                        POSTULANTE
                    </a>
                    <a href="#" class="button1" style="--clr: #7808d0; margin-right: 10px;">
  <span class="button1__icon-wrapper">
    <svg
            viewBox="0 0 14 15"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="button1__icon-svg"
            width="10"
    >
      <path
              d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
              fill="currentColor"
      ></path>
    </svg>

    <svg
            viewBox="0 0 14 15"
            fill="none"
            width="10"
            xmlns="http://www.w3.org/2000/svg"
            class="button1__icon-svg button1__icon-svg--copy"
    >
      <path
              d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
              fill="currentColor"
      ></path>
    </svg>
  </span>
                        EST. REGULAR
                    </a>
                    <img src="{{ asset('character.jpg') }}" alt="Character Logo" class="logo-character" style="padding-right: 10px;">
                    <img src="{{ asset('berlitz.jpg') }}" alt="Berlitz Logo" class="logo-berlitz">
                </div>
            </div>
            <button type="button" class="ed-mobile-menu-open-btn hidden lg:inline-block text-edblue text-[18px]"><i
                        class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</header>