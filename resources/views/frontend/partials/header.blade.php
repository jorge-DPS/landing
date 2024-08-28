<header class="absolute z-[99] top-0 inset-x-[100px] xxl:inset-x-[30px] xl:inset-x-0 bg-white rounded-bl-[10px] rounded-br-[10px]">
    <div class="px-[30px] xxl:px-[15px] lg:px-[20px] lg:py-[18px] flex justify-between to-be-fixed"
         style="padding-bottom: 9px; padding-top: 9px;">
        <div class="logo flex items-center">
            <a href="index.html" class="flex items-center">
                <img src="favicon.png" alt="logo" class="logo" style="width: 40px; margin-right: 10px;">
                <h2 style="font-size: 20px;">Saint George</h2>
            </a>
        </div>

        <div class="flex lg:items-center lg:gap-[60px] xxs:gap-[30px]">
            <div class="flex items-center gap-[100px] xl:gap-[30px] lg:gap-y-0">

                <div class="ed-header-nav-container">
                    <ul class="to-go-to-sidebar-in-mobile ed-header-nav flex lg:flex-col gap-x-[43px] xl:gap-x-[33px] font-kanit text-[17px] font-normal">
                        @foreach($menuGeneral as $menu)
                            <li class="has-sub-menu relative">
                                <a role="button">{{ $menu->title }}</a>
                                @if($menu->pages->isNotEmpty())
                                    <ul class="ed-header-submenu">
                                        @foreach($menu->pages as $page)
                                            <li><a href="">{{ $page->title }}</a></li>
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

                    /* btnLogin */
                    .custom-menu {
                        position: relative;
                        display: flex;
                        gap: 25px;
                    }

                    .custom-menu li {
                        position: relative;
                        list-style: none;
                        width: 60px;
                        height: 60px;
                        background: #fff;
                        border-radius: 60px;
                        cursor: pointer;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                        transition: 0.5s;
                    }

                    .custom-menu li:hover {
                        width: 180px;
                        box-shadow: 0 10px 25px rgba(0, 0, 0, 0);
                    }

                    .custom-menu li::before {
                        content: "";
                        position: absolute;
                        inset: 0;
                        border-radius: 60px;
                        background: linear-gradient(45deg, var(--i), var(--j));
                        opacity: 0;
                        transition: 0.5s;
                    }

                    .custom-menu li:hover::before {
                        opacity: 1;
                    }

                    .custom-menu li::after {
                        content: "";
                        position: absolute;
                        top: 10px;
                        width: 100%;
                        height: 100%;
                        border-radius: 60px;
                        background: linear-gradient(45deg, var(--i), var(--j));
                        transition: 0.5s;
                        filter: blur(15px);
                        z-index: -1;
                        opacity: 0;
                    }

                    .custom-menu li:hover::after {
                        opacity: 0.5;
                    }

                    .custom-menu li .icon {
                        color: #777;
                        font-size: 1.5em;
                        transition: 0.5s;
                        transition-delay: 0.25s;
                    }

                    .custom-menu li:hover .icon {
                        transform: scale(0);
                        color: #fff;
                        transition-delay: 0s;
                    }

                    .custom-menu li span {
                        position: absolute;
                    }

                    .custom-menu li .title {
                        color: #fff;
                        font-size: 1.1em;
                        text-transform: uppercase;
                        letter-spacing: 0.1em;
                        transform: scale(0);
                        transition: 0.5s;
                        transition-delay: 0s;
                    }

                    .custom-menu li:hover .title {
                        transform: scale(1);
                        transition-delay: 0.25s;
                    }

                </style>




                <div class="flex items-center gap-x-[60px] xxs:gap-[30px]">
                    <a href="{{ route('login') }}">
                        <ul class="custom-menu">
                            <li style="--i:#B12A38;--j:#B12A38;">
                                <span class="icon">🔐</span>
                                <span class="title">Acceder</span>
                            </li>
                        </ul>
                    </a>
                </div>

                <div class="logo-container flex items-center">
                    <img src="character.jpg" alt="Character Logo" class="logo-character">
                    <img src="berlitz.jpg" alt="Berlitz Logo" class="logo-berlitz">

                </div>
            </div>
            <button type="button" class="ed-mobile-menu-open-btn hidden lg:inline-block text-edblue text-[18px]"><i
                        class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</header>