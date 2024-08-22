<header class="absolute z-[99] top-0 inset-x-[100px] xxl:inset-x-[30px] xl:inset-x-0 bg-white rounded-bl-[10px] rounded-br-[10px]">
    <div class="px-[30px] xxl:px-[15px] lg:px-[20px] lg:py-[18px] flex justify-between to-be-fixed" style="padding-bottom: 9px; padding-top: 9px;">
        <div class="logo flex items-center">
            <a href="index.html" class="flex items-center">
                <img src="favicon.png" alt="logo" class="logo" style="width: 40px; margin-right: 10px;">
                <h2 style="font-size: 20px;">Saint George</h2>
            </a>
        </div>

        <div class="flex lg:items-center lg:gap-[60px] xxs:gap-[30px]">
            <div class="flex items-center gap-[100px] xl:gap-[30px] lg:gap-y-0">
                <!-- nav -->
                <div class="ed-header-nav-container">
                    <ul class="to-go-to-sidebar-in-mobile ed-header-nav flex lg:flex-col gap-x-[43px] xl:gap-x-[33px] font-kanit text-[17px] font-normal">
                        <li class="has-sub-menu relative">
                            <a role="button">Home</a>

                            <ul class="ed-header-submenu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About us</a></li>
                        <li class="has-sub-menu relative">
                            <a role="button">Courses</a>

                            <ul class="ed-header-submenu">
                                <li><a href="course-grid.html">Courses Grid</a></li>
                                <li><a href="course-filter.html">Courses Filter</a></li>
                                <li><a href="course-details.html">Course Details</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu relative">
                            <a role="button">Pages</a>

                            <ul class="ed-header-submenu">
                                <li><a href="teachers.html">Teachers</a></li>
                                <li><a href="teacher-details.html">Teacher Details</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="events-2.html">Events V.2</a></li>
                                <li><a href="event-details.html">Event Details</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                <li><a href="404.html">Error 404</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu relative">
                            <a role="button">News</a>

                            <ul class="ed-header-submenu">
                                <li><a href="news-grid.html">News Grid</a></li>
                                <li><a href="news-list.html">News List</a></li>
                                <li><a href="news-details.html">News Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div>
                <div class="flex items-center gap-x-[60px] xxs:gap-[30px]">
                    <button class="ed-search-opener-btn group">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M15.962 15.9063L12.0216 12.0025C13.0011 10.8356 13.5911 9.33716 13.5911 7.70448C13.5911 3.992 10.5427 0.97168 6.79561 0.97168C3.04849 0.97168 0 3.992 0 7.70448C0 11.4167 3.04849 14.4368 6.79561 14.4368C8.44348 14.4368 9.95601 13.8523 11.1338 12.8819L15.0743 16.7858C15.1968 16.9072 15.3575 16.9679 15.5181 16.9679C15.6788 16.9679 15.8395 16.9072 15.9621 16.7858C16.2072 16.5429 16.2072 16.1491 15.962 15.9063ZM1.25549 7.70448C1.25549 4.67786 3.74076 2.21553 6.79561 2.21553C9.85038 2.21553 12.3356 4.67786 12.3356 7.70448C12.3356 10.7309 9.85038 13.1929 6.79561 13.1929C3.74076 13.1929 1.25549 10.7309 1.25549 7.70448Z" class="fill-edblue group-hover:fill-edpurple" />
                            </g>
                        </svg>
                    </button>
                    <a href="{{ route('login') }}" class="ed-btn to-go-to-sidebar-in-mobile lg:m-[20px] flex items-center gap-x-[10px] font-light text-dark/80"><span class="icon shrink-0"><img src="assetsFrontend/img/icon/avatar.svg" alt="icon"></span> Login</a>
                </div>
            </div>
            <button type="button" class="ed-mobile-menu-open-btn hidden lg:inline-block text-edblue text-[18px]"><i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</header>