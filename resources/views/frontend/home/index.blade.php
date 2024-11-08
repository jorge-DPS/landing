@extends('frontend.layouts.app')

@section('title')
    <title>saint-george</title>
@endsection

@section('content')
    <style>
        @keyframes fadeInScaleBounce {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            60% {
                opacity: 1;
                transform: scale(1.1);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .fade-in-scale-bounce {
            animation: fadeInScaleBounce 1s cubic-bezier(0.68, -0.55, 0.27, 1.55) forwards;
        }

        .transparent-background {
            background: rgba(177, 42, 56, 0.6);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 20px;
        }

        .text-color-change {
            animation: colorChange 1s ease-in forwards;
        }

        @keyframes colorChange {
            0% {
                color: #ffffff;
            }
            100% {
                color: #fffafa;
            }
        }


    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const slides = document.querySelectorAll('.swiper-slide');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    const introSection = entry.target.querySelector('#intro-section');

                    if (entry.isIntersecting && introSection) {
                        introSection.classList.add('fade-in-scale-bounce', 'transparent-background');
                        const texts = introSection.querySelectorAll('h6, h2, p, a');
                        texts.forEach(text => {
                            text.classList.add('text-color-change');
                        });
                    } else if (introSection) {
                        introSection.classList.remove('fade-in-scale-bounce', 'transparent-background');
                        const texts = introSection.querySelectorAll('h6, h2, p, a');
                        texts.forEach(text => {
                            text.classList.remove('text-color-change');
                        });
                    }
                });
            }, { threshold: 0.5 });

            slides.forEach(slide => {
                observer.observe(slide);
            });
        });

    </script>
    <main>
        <section>
            <div class="ed-banner-slider swiper relative">
                <div class="swiper-wrapper">
                    @foreach($carrusels as $carr)
                        <div class="swiper-slide">
                            <div class="pb-[205px] bg-no-repeat bg-center bg-cover relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none"
                                 style="background-image: url('{{ asset($carr->desktop_background) }}'); padding-top: 200px;">
                                <div class="mx-[10%] md:mx-[15px]">
                                    <div id="intro-section"
                                         class="relative overflow-hidden text-white w-[48%] xl:w-[60%] md:w-[70%] sm:w-[80%] xs:w-full">
                                        <h6 class="font-medium uppercase tracking-[3px]">{{ $carr->small_title }}</h6>
                                        <h3 class="font-bold text-[clamp(35px,4.57vw,80px)] leading-[1.13] mb-[15px]">
                                            {{ $carr->big_title }}
                                        </h3>
                                        <p class="leading-[1.75] mb-[41px]">{{ $carr->description }}</p>
                                        <div class="flex items-center gap-[20px]">
                                            @if($carr->buttons->isNotEmpty())
                                                <div class="buttons">
                                                    @foreach($carr->buttons as $button)
                                                        <a href="{{ $button->url }}" class="ed-btn">
                                                            {{ $button->text }}
                                                        </a>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="ed-banner-slider-nav absolute z-[1] top-[50%] xs:top-[80%] right-[130px] md:right-[60px] sm:right-[40px] xs:hidden flex flex-col gap-[15px] *:w-[40px] *:h-[40px] *:rounded-full *:border *:border-white/20 *:text-white *:text-[18px]">
                    <button class="prev hover:bg-edyellow hover:border-edyellow hover:text-black">
                        <i class="fa-solid fa-angle-up"></i>
                    </button>
                    <button class="next leading-[43px] hover:bg-edyellow hover:border-edyellow hover:text-black">
                        <i class="fa-solid fa-angle-down"></i>
                    </button>
                </div>
            </div>
        </section>

        <section class="-mt-[70px] relative z-[2]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-[30px]">
                    <!-- single feature -->
                    <div class="bg-[#FAF9F6] hover:bg-edyellow border-t-[7px] border-edyellow hover:border-edpurple duration-[400ms] p-[30px] sm:p-[25px] group relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-[url('../assetsFrontend/img/faeture-bg.jpg')] before:mix-blend-hard-light before:opacity-0 before:duration-[400ms] hover:before:opacity-15">
                        <span class="icon">
                            <img src="assetsFrontend/img/feature-1.svg" alt="feature" class="mb-[11px]">
                        </span>
                        <h4 class="font-semibold text-[24px] xl:text-[22px] mb-[3px] text-school"><a href="#"
                                                                                                     class="hover:text-school">School
                                Life</a></h4>
                        <p class="text-edgray2 group-hover:text-black mb-[18px]">Eimply dummy text printing ypese tting
                            industry. Ipsum has been the</p>
                        <a href="#" class="text-school hover:text-school"><span class="text-[14px]"><i
                                        class="fa-solid fa-angle-right"></i></span> View More</a>
                    </div>

                    <!-- single feature -->
                    <div class="bg-[#FAF9F6] hover:bg-edyellow border-t-[7px] border-edyellow hover:border-edpurple duration-[400ms] p-[30px] sm:p-[25px] group relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-[url('../assetsFrontend/img/faeture-bg.jpg')] before:mix-blend-hard-light before:opacity-0 before:duration-[400ms] hover:before:opacity-15">
                        <span class="icon">
                            <img src="assetsFrontend/img/feature-2.svg" alt="feature" class="mb-[11px]">
                        </span>
                        <h4 class="font-semibold text-[24px] xl:text-[22px] mb-[3px] text-school"><a href="#"
                                                                                                     class="hover:text-school">Academics </a>
                        </h4>
                        <p class="text-black group-hover:text-black mb-[18px]">Eimply dummy text printing ypese tting
                            industry. Ipsum has been the</p>
                        <a href="#" class="text-school hover:text-school"><span class="text-[14px]"><i
                                        class="fa-solid fa-angle-right"></i></span> View More</a>
                    </div>

                    <!-- single feature -->
                    <div class="bg-[#FAF9F6] hover:bg-edyellow border-t-[7px] border-edyellow hover:border-edpurple duration-[400ms] p-[30px] sm:p-[25px] group relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-[url('../assetsFrontend/img/faeture-bg.jpg')] before:mix-blend-hard-light before:opacity-0 before:duration-[400ms] hover:before:opacity-15">
                        <span class="icon">
                            <img src="assetsFrontend/img/feature-3.svg" alt="feature" class="mb-[11px]">
                        </span>
                        <h4 class="font-semibold text-[24px] xl:text-[22px] mb-[3px] text-school"><a href="#"
                                                                                                     class="hover:text-school">Community</a>
                        </h4>
                        <p class="text-edgray2 group-hover:text-black mb-[18px]">Eimply dummy text printing ypese tting
                            industry. Ipsum has been the</p>
                        <a href="#" class="text-edblue hover:text-edpurple"><span class="text-[14px]"><i
                                        class="fa-solid fa-angle-right"></i></span> View More</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-[120px] xl:py-[80px] md:py-[60px]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex md:flex-col justify-between items-center gap-x-[60px] xl:gap-x-[40px] gap-y-[40px]">
                    <!-- img -->
                    <div class="max-w-[50%] md:max-w-full grow relative">
                        <img src="assetsFrontend/img/about-img.png" alt="about image">
                        <img src="assetsFrontend/img/about-img-vector.svg" alt="vector"
                             class="absolute -top-[25px] left-[25px] -z-[1] w-[90%] max-w-[100%]">
                    </div>

                    <!-- txt -->
                    <div class="max-w-[50%] md:max-w-full shrink-0 grow">
                        <h6 class="ed-section-sub-title">about us</h6>
                        <h2 class="ed-section-title mb-[9px]">Welcome to best school for your child</h2>
                        <p class="text-edgray">luctus. Curabitur nibh justo imperdiet non ex non tempus faucibus urna
                            Aliquam at elit vitae dui sagittis maximus eget vitae diam In fermentum </p>
                        <!-- infos -->
                        <div class="flex xs:flex-col gap-y-[15px] gap-x-[30px] xxl:gap-x-[20px] mt-[16px] xxs:mb-[30px] pb-[30px] border-b border-[#dbdbdb] mb-[26px]">
                            <!-- single info -->
                            <div class="flex items-center lg:flex-col lg:items-start md:flex-row md:items-center gap-[20px] xl:gap-[15px]">
                                <div class="shrink-0 bg-edpurple h-[80px] xl:h-[70px] aspect-square rounded-[6px] flex items-center justify-center">
                                    <img src="assetsFrontend/img/icon/target.svg" alt="icon">
                                </div>

                                <!-- txt -->
                                <div>
                                    <h6 class="font-semibold text-[18px] text-edblue mb-[5px]">Our Mission</h6>
                                    <p class="text-[16px] text-edgray">Aliquam erat volutpat nullam imperdiet</p>
                                </div>
                            </div>

                            <div class="flex items-center lg:flex-col lg:items-start md:flex-row md:items-center gap-[20px] xl:gap-[15px]">
                                <div class="shrink-0 bg-edpurple h-[80px] xl:h-[70px] aspect-square rounded-[6px] flex items-center justify-center">
                                    <img src="assetsFrontend/img/icon/book-light.svg" alt="icon">
                                </div>

                                <!-- txt -->
                                <div>
                                    <h6 class="font-semibold text-[18px] text-edblue mb-[5px]">Our Vision</h6>
                                    <p class="text-[16px] text-edgray">Ut vehiculadictumst maecenas ante.</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center gap-x-[24px] gap-y-[20px]">
                            <div class="flex gap-x-[8px]">
                                <div class="rounded-full overflow-hidden w-[58px] aspect-square shrink-0">
                                    <img src="assetsFrontend/img/user.png" alt="Principal"
                                         class="w-[58px] aspect-square">
                                </div>
                                <div>
                                    <h5 class="font-semibold text-[18px] text-black mb-[4px]">Ronald Richards</h5>
                                    <h6 class="text-edgray">Principal <span class="text-edpurple">Edutics</span></h6>
                                </div>
                            </div>
                            <a href="#" class="ed-btn">Message Principal</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT SECTION END -->


        <!-- CLASSES SECTION START -->
        <section
                class="py-[120px] xl:py-[80px] md:py-[60px] bg-[url('../assetsFrontend/img/classes-bg.jpg')] bg-cover bg-top bg-no-repeat">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <!-- section heading -->
                <div class="text-center mb-[46px] lg:mb-[36px] xxs:mb-[26px]">
                    <h6 class="ed-section-sub-title">academic classes</h6>
                    <h2 class="ed-section-title">Edutics academic classes</h2>
                </div>

                <!-- cards -->
                <div class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 xs:max-w-[80%] xxs:max-w-full mx-auto gap-[30px] lg:gap-[20px]">
                    <!-- single class card -->
                    <div class="bg-[url('../assetsFrontend/img/class-bg.png')] bg-no-repeat bg-center bg-[length:100%_100%] p-[25px] sm:p-[20px]">
                        <div class="mb-[22px]">
                            <img src="assetsFrontend/img/class-1.png" alt="class image"
                                 class="aspect-[161/108] object-cover w-full">
                        </div>
                        <!-- txt -->
                        <div>
                            <h5 class="font-semibold text-[20px] text-edblue mb-[8px]"><a href="#"
                                                                                          class="hover:text-edpurple">English
                                    Classes</a></h5>
                            <p class="text-edgray mb-[15px]">Nulla a auctor leo. Vestibulum viverra mattis arcu nec
                                viverra. Vivamus </p>
                            <!-- infos -->
                            <div class="flex gap-x-[20px] sm:flex-wrap justify-between sm:justify-start pt-[17px] border-t border-dashed border-edyellow">
                                <div class="font-semibold">
                                    <span class="text-[14px] text-edyellow">Age</span>
                                    <h6>3-5 years</h6>
                                </div>
                                <div class="font-semibold">
                                    <span class="text-[14px] text-edyellow">Weekly </span>
                                    <h6>5 Days</h6>
                                </div>
                                <div class="font-semibold">
                                    <span class="text-[14px] text-edyellow">Time</span>
                                    <h6>4.30 Hrs</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single class card -->
                    <div class="bg-[url('../assetsFrontend/img/class-bg.png')] bg-no-repeat bg-center bg-[length:100%_100%] p-[25px] sm:p-[20px]">
                        <div class="mb-[22px]">
                            <img src="assetsFrontend/img/class-2.png" alt="class image"
                                 class="aspect-[161/108] object-cover w-full">
                        </div>
                        <!-- txt -->
                        <div>
                            <h5 class="font-semibold text-[20px] text-edblue mb-[8px]"><a href="#"
                                                                                          class="hover:text-edpurple">Tutoring
                                    Individual</a></h5>
                            <p class="text-edgray mb-[15px]">Nulla a auctor leo. Vestibulum viverra mattis arcu nec
                                viverra. Vivamus </p>
                            <!-- infos -->
                            <div class="flex gap-x-[20px] sm:flex-wrap justify-between sm:justify-start pt-[17px] border-t border-dashed border-edyellow">
                                <div class="font-semibold">
                                    <span class="text-[14px] text-edyellow">Age</span>
                                    <h6>3-5 years</h6>
                                </div>
                                <div class="font-semibold">
                                    <span class="text-[14px] text-edyellow">Weekly </span>
                                    <h6>5 Days</h6>
                                </div>
                                <div class="font-semibold">
                                    <span class="text-[14px] text-edyellow">Time</span>
                                    <h6>4.30 Hrs</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single class card -->
                    <div class="bg-[url('../assetsFrontend/img/class-bg.png')] bg-no-repeat bg-center bg-[length:100%_100%] p-[25px] sm:p-[20px]">
                        <div class="mb-[22px]">
                            <img src="assetsFrontend/img/class-3.png" alt="class image"
                                 class="aspect-[161/108] object-cover w-full">
                        </div>
                        <!-- txt -->
                        <div>
                            <h5 class="font-semibold text-[20px] text-edblue mb-[8px]"><a href="#"
                                                                                          class="hover:text-edpurple">Tutoring
                                    Online</a></h5>
                            <p class="text-edgray mb-[15px]">Nulla a auctor leo. Vestibulum viverra mattis arcu nec
                                viverra. Vivamus </p>
                            <!-- infos -->
                            <div class="flex gap-x-[20px] sm:flex-wrap justify-between sm:justify-start pt-[17px] border-t border-dashed border-edyellow">
                                <div class="font-semibold">
                                    <span class="text-[14px] text-edyellow">Age</span>
                                    <h6>3-5 years</h6>
                                </div>
                                <div class="font-semibold">
                                    <span class="text-[14px] text-edyellow">Weekly </span>
                                    <h6>5 Days</h6>
                                </div>
                                <div class="font-semibold">
                                    <span class="text-[14px] text-edyellow">Time</span>
                                    <h6>4.30 Hrs</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CLASSES SECTION END -->


        <!-- ADMISSION PROCESS SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px] bg-[#FAF9F6] relative z-[1]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex flex-col gap-x-[85px] items-start relative">
                    <!-- heading -->
                    <div class="relative w-full before:absolute before:bottom-0 before:mb-[8%] before:left-0 before:bg-[url('../assetsFrontend/img/admission-title-vector.svg')] before:bg-no-repeat before:bg-[length:100%_100%] before:w-[100%] before:h-[88px] before:pointer-events-none lg:before:hidden">
                        <div class="shrink-0 max-w-[290px]">
                            <h6 class="ed-section-sub-title">Admission</h6>
                            <h2 class="ed-section-title !text-[30px] pb-[42px] lg:pb-0 mb-[40px] lg:mb-[20px]">Admission
                                Process</h2>
                            <a href="#" class="ed-btn">Admission Now</a>
                        </div>
                    </div>

                    <!-- cards -->
                    <div class="grid grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[24px] -mt-[140px] lg:mt-[25px] w-[66%] ml-auto lg:w-[100%]">
                        <!-- single process -->
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                            <span class="icon block mb-[13px]">
                                <img src="assetsFrontend/img/admission-process-icon.svg" alt="admission process"
                                     class="mb-[11px]">
                            </span>
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue"><a href="#"
                                                                                          class="hover:text-edpurple">Request
                                    Info</a></h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">Penatibus Et Magnis Dis
                                Parturient.</p>
                            <a href="#"
                               class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Read
                                More</a>
                        </div>

                        <!-- single process -->
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                            <span class="icon block mb-[13px]">
                                <img src="assetsFrontend/img/admission-process-icon.svg" alt="admission process"
                                     class="mb-[11px]">
                            </span>
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue"><a href="#"
                                                                                          class="hover:text-edpurple">Apply
                                    Online</a></h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">Penatibus Et Magnis Dis
                                Parturient.</p>
                            <a href="#"
                               class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Read
                                More</a>
                        </div>

                        <!-- single process -->
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                            <span class="icon block mb-[13px]">
                                <img src="assetsFrontend/img/admission-process-icon.svg" alt="admission process"
                                     class="mb-[11px]">
                            </span>
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue"><a href="#"
                                                                                          class="hover:text-edpurple">Submit
                                    Form</a></h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">Penatibus Et Magnis Dis
                                Parturient.</p>
                            <a href="#"
                               class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- vectors -->
            <div>
                <img src="assetsFrontend/img/admission-vector-1.svg" alt="vector"
                     class="absolute -z-[1] top-[156px] left-0">
                <img src="assetsFrontend/img/admission-vector-2.svg" alt="vector"
                     class="absolute -z-[1] bottom-[130px] right-[80px]">
            </div>
        </section>
        <!-- ADMISSION PROCESS SECTION END -->


        <!-- FORM & NOTICE SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex lg:flex-col rounded-[20px] overflow-hidden bg-[#f5f4fe]">
                    <!-- form -->
                    <div class="grow max-w-[49%] lg:max-w-full">
                        <!-- heading -->
                        <div class="bg-edpurple p-[22px] pl-[170px] xxl:pl-[130px] xs:pl-[40px] xxs:pl-[22px]">
                            <h6 class="ed-section-sub-title ed-section-sub-title--white">Form</h6>
                            <h3 class="font-semibold text-[30px] xxs:text-[25px] text-white">Admission Form</h3>
                        </div>

                        <!-- main content -->
                        <div class="p-[40px] pr-0 lg:pr-[40px] text-center">
                            <img src="assetsFrontend/img/form-img.png" alt="form image"
                                 class="mx-auto drop-shadow-[0_4px_30px_rgba(0,0,0,0.1)] mb-[17px]">
                            <h5 class="text-[20px] text-edblue mb-[28px]">Free Download Admission Form</h5>
                            <a href="assetsFrontend/pdf/notice.pdf" download class="ed-btn">Download Free</a>
                        </div>
                    </div>

                    <!-- notice -->
                    <div class="grow max-w-[51%] lg:max-w-full">
                        <!-- heading -->
                        <div class="bg-edpurple p-[22px] pl-[170px] xxl:pl-[130px] xs:pl-[40px] xxs:pl-[22px]">
                            <h6 class="ed-section-sub-title ed-section-sub-title--white">notice</h6>
                            <h3 class="font-semibold text-[30px] xxs:text-[25px] text-white">Important Notice</h3>
                        </div>

                        <!-- main content -->
                        <div class="p-[40px] xl:px-[25px] lg:pl-[70px] sm:pl-[50px] xxs:p-[15px] space-y-[22px]">
                            <!-- single notice -->
                            <div class="flex gap-x-[20px] items-center relative before:absolute before:h-[1px] before:w-[40px] xl:before:w-[30px] before:bg-edpurple before:right-[100%] before:top-[50%] before:-translate-y-[50%] xxs:before:content-none after:absolute after:w-[1px] after:h-[114%] after:bg-edpurple after:bottom-[50%] after:right-[calc(100%+40px)] xl:after:right-[calc(100%+30px)] xxs:after:content-none first:after:content-none">
                                <div class="xxs:hidden icon shrink-0 p-[14px] bg-white border border-[#d9d9d9] rounded-[10px] w-[110px] xl:w-[90px] aspect-square flex items-center justify-center">
                                    <img src="assetsFrontend/img/notice-icon.png" alt="icon">
                                </div>

                                <div class="pb-[26px] md:pb-[16px] border-b border-[#D9D9D9]">
                                    <h5 class="font-semibold text-[20px] text-edblue mb-[6px]"><a href="#"
                                                                                                  class="hover:text-edpurple">Summer
                                            Course Starts From 1st June</a></h5>
                                    <h6 class="font-medium text-edpurple mb-[10px]">September 14, 2024</h6>
                                    <p class="text-edgray">There are many variations of passages of Lorem Ipsum
                                        available, but the majority</p>
                                </div>
                            </div>

                            <!-- single notice -->
                            <div class="flex gap-x-[20px] items-center relative before:absolute before:h-[1px] before:w-[40px] xl:before:w-[30px] before:bg-edpurple before:right-[100%] before:top-[50%] before:-translate-y-[50%] xxs:before:content-none after:absolute after:w-[1px] after:h-[114%] after:bg-edpurple after:bottom-[50%] after:right-[calc(100%+40px)] xl:after:right-[calc(100%+30px)] xxs:after:content-none first:after:content-none">
                                <div class="xxs:hidden icon shrink-0 p-[14px] bg-white border border-[#d9d9d9] rounded-[10px] w-[110px] xl:w-[90px] aspect-square flex items-center justify-center">
                                    <img src="assetsFrontend/img/notice-icon.png" alt="icon">
                                </div>

                                <div class="pb-[26px] md:pb-[16px] border-b border-[#D9D9D9]">
                                    <h5 class="font-semibold text-[20px] text-edblue mb-[6px]"><a href="#"
                                                                                                  class="hover:text-edpurple">Summer
                                            Course Starts From 1st June</a></h5>
                                    <h6 class="font-medium text-edpurple mb-[10px]">September 14, 2024</h6>
                                    <p class="text-edgray">There are many variations of passages of Lorem Ipsum
                                        available, but the majority</p>
                                </div>
                            </div>

                            <!-- single notice -->
                            <div class="flex gap-x-[20px] items-center relative before:absolute before:h-[1px] before:w-[40px] xl:before:w-[30px] before:bg-edpurple before:right-[100%] before:top-[50%] before:-translate-y-[50%] xxs:before:content-none after:absolute after:w-[1px] after:h-[114%] after:bg-edpurple after:bottom-[50%] after:right-[calc(100%+40px)] xl:after:right-[calc(100%+30px)] xxs:after:content-none first:after:content-none">
                                <div class="xxs:hidden icon shrink-0 p-[14px] bg-white border border-[#d9d9d9] rounded-[10px] w-[110px] xl:w-[90px] aspect-square flex items-center justify-center">
                                    <img src="assetsFrontend/img/notice-icon.png" alt="icon">
                                </div>

                                <div class="pb-[26px] md:pb-[16px] border-b border-[#D9D9D9]">
                                    <h5 class="font-semibold text-[20px] text-edblue mb-[6px]"><a href="#"
                                                                                                  class="hover:text-edpurple">Summer
                                            Course Starts From 1st June</a></h5>
                                    <h6 class="font-medium text-edpurple mb-[10px]">September 14, 2024</h6>
                                    <p class="text-edgray">There are many variations of passages of Lorem Ipsum
                                        available, but the majority</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- vectors -->
            <div>
                <img src="assetsFrontend/img/form-notice-vector-1.svg" alt="vector"
                     class="absolute -z-[1] bottom-[296px] left-0">
                <img src="assetsFrontend/img/form-notice-vector-2.svg" alt="vector"
                     class="absolute -z-[1] bottom-[192px] right-[90px]">
            </div>
        </section>
        <!-- FORM & NOTICE SECTION END -->


        <!-- CTA SECTION START -->
        <section class="bg-edpurple relative z-[1] overflow-hidden">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex md:flex-col items-center gap-[60px] lg:gap-[40px] md:gap-y-[20px]">
                    <div class="grow md:pt-[60px]">
                        <h6 class="ed-section-sub-title ed-section-sub-title--white">ARE YOU READY FOR THIS OFFER</h6>
                        <h2 class="ed-section-title !text-white mb-[36px]">50% Offer For Very First 60 <span
                                    class="font-normal text-[40px] xxl:text-[35px] xl:text-[30px] xs:text-[28px] xxs:text-[25px]">Student’s & Mentors</span>
                        </h2>
                        <div class="flex flex-wrap gap-[16px]">
                            <a href="#" class="ed-btn !bg-edyellow !text-black hover:!bg-edblue hover:!text-white">Become
                                a student</a>
                            <a href="#"
                               class="ed-btn !bg-transparent !text-white border border-white hover:!bg-white hover:!text-edblue">Become
                                a teacher</a>
                        </div>
                    </div>

                    <!-- image -->
                    <div class="shrink-0 relative z-[1] pr-[40px] lg:pr-0">
                        <img src="assetsFrontend/img/cta-img.png" alt="image">
                        <img src="assetsFrontend/img/cta-img-vector.svg" alt="vector"
                             class="absolute right-[0] lg:right-[-40px] top-[20px] -z-[1] max-w-[460px]">
                    </div>
                </div>
            </div>

            <!-- vector -->
            <div>
                <img src="assetsFrontend/img/cta-vector-1.png" alt="vector"
                     class="absolute -z-[1] bottom-0 left-0 pointer-events-none">
                <img src="assetsFrontend/img/cta-vector-2.png" alt="vector"
                     class="absolute -z-[1] top-0 right-0 pointer-events-none">
            </div>
        </section>
        <!-- CTA SECTION END -->


        <!-- SERVICES SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex md:flex-col gap-[45px] items-center">
                    <div>
                        <h6 class="ed-section-sub-title">my services</h6>
                        <h2 class="ed-section-title mb-[19px]">Learn to play, converse with confidence.</h2>
                        <p class="mb-[31px]">luctus. Curabitur nibh justo imperdiet non ex non tempus faucibus urna
                            Aliquam at elit vitae dui sagittis maximus eget vitae.</p>

                        <div class="flex flex-wrap gap-x-[24px] gap-y-[15px]">
                            <a href="#" class="ed-btn">know more</a>
                            <div class="flex items-center gap-[16px]">
                                <span class="icon bg-edyellow w-[44px] aspect-square rounded-full outline-[1px] outline outline-edyellow outline-offset-[2px] flex items-center justify-center">
                                    <img src="assetsFrontend/img/icon/phone.svg" alt="call icon" class="w-[22px]">
                                </span>

                                <span class="txt font-semibold text-etBlack">
                                    <span class="block text-[16px] font-medium text-edgray mb-[2px] opacity-80">Call Us Now</span>
                                    <a href="tel:+208-555-0112" class="font-semibold text-[18px] hover:text-edyellow">+208-555-0112</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-[30px] max-w-[50%] md:max-w-full shrink-0 grow">
                        <!-- single service -->
                        <div class="flex xxs:flex-col items-center xxs:items-start gap-x-[20px] gap-y-[15px] odd:ml-[86px] lg:odd:ml-[56px] xxs:odd:ml-[26px]">
                            <!-- icon -->
                            <span class="shrink-0 w-[90px] aspect-square rounded-[8px] bg-[#F39F5F]/20 flex items-center justify-center">
                                <img src="assetsFrontend/img/service-1.svg" alt="icon">
                            </span>

                            <div>
                                <h6 class="font-semibold text-[18px] text-edblue mb-[5px]">Maths</h6>
                                <p class="text-edgray">Adipiscing elit Praesent luctus laoreet iaculis Curabitur rutrum
                                    lectus augue, ut pulvinar.</p>
                            </div>
                        </div>

                        <!-- single service -->
                        <div class="flex xxs:flex-col items-center xxs:items-start gap-x-[20px] gap-y-[15px] odd:ml-[86px] lg:odd:ml-[56px] xxs:odd:ml-[26px]">
                            <!-- icon -->
                            <span class="shrink-0 w-[90px] aspect-square rounded-[8px] bg-edpurple/15 flex items-center justify-center">
                                <img src="assetsFrontend/img/service-2.svg" alt="icon">
                            </span>

                            <div>
                                <h6 class="font-semibold text-[18px] text-edblue mb-[5px]">Bible Studies</h6>
                                <p class="text-edgray">Adipiscing elit Praesent luctus laoreet iaculis Curabitur rutrum
                                    lectus augue, ut pulvinar.</p>
                            </div>
                        </div>

                        <!-- single service -->
                        <div class="flex xxs:flex-col items-center xxs:items-start gap-x-[20px] gap-y-[15px] odd:ml-[86px] lg:odd:ml-[56px] xxs:odd:ml-[26px]">
                            <!-- icon -->
                            <span class="shrink-0 w-[90px] aspect-square rounded-[8px] bg-[#70A6B1]/20 flex items-center justify-center">
                                <img src="assetsFrontend/img/service-3.svg" alt="icon">
                            </span>

                            <div>
                                <h6 class="font-semibold text-[18px] text-edblue mb-[5px]">Flex-care</h6>
                                <p class="text-edgray">Adipiscing elit Praesent luctus laoreet iaculis Curabitur rutrum
                                    lectus augue, ut pulvinar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- vectors -->
            <div class="xxl:hidden">
                <img src="assetsFrontend/img/service-vector-1.svg" alt="vector"
                     class="absolute -z-[1] bottom-[140px] left-[45px]">
                <img src="assetsFrontend/img/form-notice-vector-1.svg" alt="vector"
                     class="absolute -z-[1] top-[140px] right-[40px]">
            </div>
        </section>
        <!-- SERVICES SECTION END -->


        <!-- GALLERY SECTION START -->
        <div class="overflow-hidden">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <h5 class="font-semibold text-[24px] text-edblue text-center mb-[40px] relative z-[1] before:absolute before:-z-[1] before:w-[100%] before:h-[1px] before:left-0 before:top-[50%] before:bg-[#D9D9D9] before:-translate-y-[50%]">
                    <span class="bg-white px-[20px]">Our School Gallery</span></h5>

                <!-- gallery slider -->
                <div class="ed-gallery-slider swiper overflow-visible">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide max-w-max">
                            <a href="assetsFrontend/img/gallery-img-1.jpg" data-fslightbox="gallery"
                               class="block rounded-[40px] overflow-hidden"><img
                                        src="assetsFrontend/img/gallery-img-1.jpg" alt="Gallery image"></a>
                        </div>
                        <div class="swiper-slide max-w-max">
                            <div class="relative rounded-[40px] overflow-hidden">
                                <img src="assetsFrontend/img/gallery-img-2.jpg" alt="Gallery image">
                                <a href="https://youtu.be/5ppDzM8m9lI?si=zml3HbV176DBsZlg" data-fslightbox="gallery"
                                   class="flex items-center justify-center w-[60px] aspect-square bg-white rounded-full text-[#3746D2] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] before:border before:absolute before:top-[50%] before:-translate-y-[50%] before:left-[50%] before:-translate-x-[50%] before:w-[calc(100%+15px)] before:h-[calc(100%+15px)] before:rounded-full before:transition before:duration-[400ms] hover:bg-edpurple hover:text-white hover:before:border-edpurple"><i
                                            class="fa-solid fa-play"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide max-w-max">
                            <a href="assetsFrontend/img/gallery-img-3.jpg" data-fslightbox="gallery"
                               class="block rounded-[40px] overflow-hidden"><img
                                        src="assetsFrontend/img/gallery-img-3.jpg" alt="Gallery image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- GALLERY SECTION END -->


        <!-- TESTIMONIAL SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex md:flex-col items-start gap-y-[40px]">
                    <!-- testimonial -->
                    <div class="max-w-[50%] md:max-w-full">
                        <!-- heading -->
                        <div class="pb-[40px] sm:pb-[20px] bg-[url('../assetsFrontend/img/testimonial-heading-vector.svg')] bg-no-repeat bg-left-bottom bg-[length:1000px] mb-[40px]  md:bg-none md:mb-0">
                            <h6 class="ed-section-sub-title">Testimonials</h6>
                            <h2 class="ed-section-title !text-[30px]">Students Feedback</h2>
                        </div>

                        <div class="flex xxs:flex-col gap-[15px] items-center relative pr-[35px]">
                            <div class="ed-testimonial-slider swiper max-w-full">
                                <div class="swiper-wrapper">
                                    <!-- single testimony -->
                                    <div class="swiper-slide">
                                        <div>
                                            <div class="inline-flex gap-[6px] text-[14px] mb-[20px]">
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#BCBCBC]"><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <p class="text-edgray mb-[24px]">Nullam dignissim ante scelerisque the is
                                                euismod fermentum odio sem semper the is erat a feugiat leo urna eget
                                                eros. Duis Aenean a imperdiet risus. Aliquam pellentesque.</p>
                                            <div>
                                                <h6 class="font-semibold text-[18px] text-edblue mb-[4px]">Ronald
                                                    Richards</h6>
                                                <span class="text-edgray">Co, Founder</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single testimony -->
                                    <div class="swiper-slide">
                                        <div>
                                            <div class="inline-flex gap-[6px] text-[14px] mb-[20px]">
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#BCBCBC]"><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <p class="text-edgray mb-[24px]">Nullam dignissim ante scelerisque the is
                                                euismod fermentum odio sem semper the is erat a feugiat leo urna eget
                                                eros. Duis Aenean a imperdiet risus. Aliquam pellentesque.</p>
                                            <div>
                                                <h6 class="font-semibold text-[18px] text-edblue mb-[4px]">Ronald
                                                    Richards</h6>
                                                <span class="text-edgray">Co, Founder</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single testimony -->
                                    <div class="swiper-slide">
                                        <div>
                                            <div class="inline-flex gap-[6px] text-[14px] mb-[20px]">
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#F39F5F]"><i class="fa-solid fa-star"></i></span>
                                                <span class="text-[#BCBCBC]"><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <p class="text-edgray mb-[24px]">Nullam dignissim ante scelerisque the is
                                                euismod fermentum odio sem semper the is erat a feugiat leo urna eget
                                                eros. Duis Aenean a imperdiet risus. Aliquam pellentesque.</p>
                                            <div>
                                                <h6 class="font-semibold text-[18px] text-edblue mb-[4px]">Ronald
                                                    Richards</h6>
                                                <span class="text-edgray">Co, Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-[10px] items-center absolute z-[1] bottom-[10px] right-0 ed-testimonial-slider-controls">
                                    <button class="prev hover:text-edpurple"><i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                    <div class="ed-testimonial-slider-pagination font-semibold text-[14px] text-edblue"></div>
                                    <button class="next hover:text-edpurple"><i
                                                class="fa-solid fa-arrow-right-long"></i></button>
                                </div>
                            </div>

                            <!-- slider dots -->
                            <div class="flex items-start flex-col xxs:hidden shrink-0 space-y-[40px] relative z-[1] before:absolute before:top-[50%] before:-translate-y-[50%] before:right-[28px] before:w-[138px] before:h-[420px] before:bg-[url('../assetsFrontend/img/testimonial-img-slider-vector.svg')] before:bg-no-repeat before:bg-center before:bg-[length:100%_100%] before:-z-[1] before:opacity-10 before:pointer-events-none">
                                <div class="rounded-full overflow-hidden inline-block border border-edpurple p-[5px] even:ml-[40px]">
                                    <img src="assetsFrontend/img/user-2.png" alt="user"
                                         class="rounded-full w-[90px] aspect-square">
                                </div>
                                <div class="rounded-full overflow-hidden inline-block border border-edpurple p-[5px] even:ml-[40px]">
                                    <img src="assetsFrontend/img/user-3.png" alt="user"
                                         class="rounded-full w-[90px] aspect-square">
                                </div>
                                <div class="rounded-full overflow-hidden inline-block border border-edpurple p-[5px] even:ml-[40px]">
                                    <img src="assetsFrontend/img/user-4.png" alt="user"
                                         class="rounded-full w-[90px] aspect-square">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- upcoming events -->
                    <div>
                        <!-- heading -->
                        <div class="pb-[40px] sm:pb-[20px] flex justify-end md:justify-start bg-[url('../assetsFrontend/img/testimonial-heading-vector.svg')] bg-no-repeat bg-right-bottom bg-[length:1000px] mb-[40px] md:bg-none md:mb-0">
                            <div>
                                <h6 class="ed-section-sub-title">Event</h6>
                                <h2 class="ed-section-title !text-[30px]">Upcoming Events</h2>
                            </div>
                        </div>
                        <div class="grow space-y-[30px]">
                            <!-- single upcoming event -->
                            <div class="bg-white flex lg:flex-col items-start gap-x-[20px] gap-y-[10px] shadow-[0_4px_30px_rgba(0,0,0,0.1)] rounded-[20px] p-[30px] xxs:p-[20px]">
                                <!-- date -->
                                <div class="bg-edyellow rounded-[10px] font-medium text-[16px] text-black inline-block uppercase overflow-hidden text-center shrink-0">
                                    <span class="bg-edpurple text-white text-[20px] block py-[7px] px-[30px] rounded-[10px]">2024</span>
                                    <span class="px-[15px] p-[10px] block leading-[1.44] font-semibold">20 <span
                                                class="block">Oct</span></span>
                                </div>

                                <!-- text -->
                                <div>
                                    <h5 class="font-semibold text-[20px] mb-[7px]"><a href="#"
                                                                                      class="hover:text-edpurple">SAT
                                            Implementation Workshops November 2026</a></h5>
                                    <h6 class="text-edpurple font-medium">11:00 - 13:30</h6>
                                    <p class="border-t border-[#002147]/20 pt-[17px] mt-[10px]">There are many
                                        variations of passages of Lorem Ipsum available, but the majority</p>
                                </div>
                            </div>

                            <!-- single upcoming event -->
                            <div class="bg-white flex lg:flex-col items-start gap-x-[20px] gap-y-[10px] shadow-[0_4px_30px_rgba(0,0,0,0.1)] rounded-[20px] p-[30px] xxs:p-[20px]">
                                <!-- date -->
                                <div class="bg-edyellow rounded-[10px] font-medium text-[16px] text-black inline-block uppercase overflow-hidden text-center shrink-0">
                                    <span class="bg-edpurple text-white text-[20px] block py-[7px] px-[30px] rounded-[10px]">2024</span>
                                    <span class="px-[15px] p-[10px] block leading-[1.44] font-semibold">20 <span
                                                class="block">Oct</span></span>
                                </div>

                                <!-- text -->
                                <div>
                                    <h5 class="font-semibold text-[20px] mb-[7px]"><a href="#"
                                                                                      class="hover:text-edpurple">SAT
                                            Implementation Workshops November 2026</a></h5>
                                    <h6 class="text-edpurple font-medium">11:00 - 13:30</h6>
                                    <p class="border-t border-[#002147]/20 pt-[17px] mt-[10px]">There are many
                                        variations of passages of Lorem Ipsum available, but the majority</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- TESTIMONIAL SECTION END -->


        <!-- TEACHER SECTION START -->
        <section class="bg-[#FAF9F6] py-[120px] xl:py-[80px] md:py-[60px] relative z-[1]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <!-- heading -->
                <div class="flex flex-wrap xs:flex-col xs:text-center justify-between items-center gap-y-[15px] mb-[46px] md:mb-[30px]">
                    <div>
                        <h6 class="ed-section-sub-title">Our Expert</h6>
                        <h2 class="ed-section-title">Our Expert teacher</h2>
                    </div>

                    <a href="#"
                       class="ed-btn !bg-transparent border border-edpurple !text-edpurple hover:!bg-edpurple hover:!text-white">view
                        all teacher <span class="icon pl-[10px]"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                </div>

                <div class="grid grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px]">
                    <!-- single teacher -->
                    <div class="ed-teacher group">
                        <div class="ed-teacher__img rounded-[16px] overflow-hidden">
                            <img src="assetsFrontend/img/teacher-1.jpg" alt="Team Member Image"
                                 class="w-full aspect-[370/375] duration-[400ms] group-hover:scale-110">
                        </div>

                        <div class="ed-teacher__txt bg-white relative z-[1] mx-[25px] lg:mx-[20px] md:mx-[15px] xs:mx-[5px] -mt-[44px] md:-mt-[15px] xs:mt-0 rounded-[16px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] px-[25px] xl:px-[20px] md:px-[15px] pb-[30px] lg:pb-[25px] md:pb-[20px] before:w-full before:absolute before:-z-[1] before:h-full before:bg-white before:left-0 before:rounded-[16px] before:-top-[33px] before:skew-y-[4deg]">
                            <div class="ed-teacher-socials absolute right-[20px] -top-[43px]">
                                <div class="ed-speaker__socials flex flex-col gap-[8px] absolute -z-[2] text-[14px] opacity-0 transition duration-[400ms] bottom-[calc(100%+8px)] translate-y-[100%] group-hover:translate-y-0 group-hover:opacity-100">
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-instagram"></i></a>
                                </div>
                                <div class="ed-teacher-socials__icon bg-edpurple w-[36px] aspect-square rounded-full bg-etBlue flex items-center justify-center">
                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.89361 9.41703C9.22284 9.41703 8.61849 9.70668 8.19906 10.1675L4.42637 7.83088C4.52995 7.56611 4.58305 7.28429 4.58294 6.99999C4.58307 6.71568 4.52997 6.43386 4.42637 6.16909L8.19906 3.83238C8.61851 4.29318 9.22284 4.58297 9.89361 4.58297C11.1572 4.58297 12.1851 3.55501 12.1851 2.29143C12.1851 1.02785 11.1572 0 9.89361 0C8.63005 0 7.60209 1.02796 7.60209 2.29154C7.60204 2.57583 7.65514 2.85763 7.75866 3.1224L3.98608 5.45903C3.56663 4.99824 2.96231 4.70845 2.29154 4.70845C1.02796 4.70845 0 5.73652 0 6.99999C0 8.26354 1.02796 9.29152 2.29154 9.29152C2.96228 9.29152 3.56666 9.00185 3.98608 8.54094L7.75869 10.8776C7.65515 11.1424 7.60204 11.4242 7.60209 11.7085C7.60209 12.972 8.63003 14 9.89361 14C11.1572 14 12.1851 12.972 12.1851 11.7086C12.1851 10.445 11.1572 9.41703 9.89361 9.41703ZM8.43766 2.29154C8.43766 1.48873 9.09082 0.835596 9.89361 0.835596C10.6964 0.835596 11.3495 1.48873 11.3495 2.29154C11.3495 3.09435 10.6964 3.74748 9.89361 3.74748C9.09079 3.74748 8.43766 3.09432 8.43766 2.29154ZM2.29154 8.45593C1.48862 8.45593 0.835487 7.80277 0.835487 6.99999C0.835487 6.1972 1.48862 5.54404 2.29154 5.54404C3.09435 5.54404 3.74737 6.1972 3.74737 6.99999C3.74737 7.80277 3.09432 8.45593 2.29154 8.45593ZM8.43766 11.7085C8.43766 10.9057 9.09082 10.2525 9.89361 10.2525C10.6964 10.2525 11.3495 10.9057 11.3495 11.7084C11.3495 12.5112 10.6964 13.1644 9.89361 13.1644C9.09079 13.1644 8.43766 12.5112 8.43766 11.7084V11.7085Z"
                                              fill="white"></path>
                                    </svg>
                                </div>
                            </div>
                            <h5 class="font-semibold text-[20px] text-etBlack mb-[4px]"><a href="teacher-details.html"
                                                                                           class="hover:text-etBlue">Cameron
                                    Williamson</a></h5>
                            <span class="text-etGray text-[16px]">President of Sales</span>
                        </div>
                    </div>

                    <!-- single teacher -->
                    <div class="ed-teacher group">
                        <div class="ed-teacher__img rounded-[16px] overflow-hidden">
                            <img src="assetsFrontend/img/teacher-2.jpg" alt="Team Member Image"
                                 class="w-full aspect-[370/375] duration-[400ms] group-hover:scale-110">
                        </div>

                        <div class="ed-teacher__txt bg-white relative z-[1] mx-[25px] lg:mx-[20px] md:mx-[15px] xs:mx-[5px] -mt-[44px] md:-mt-[15px] xs:mt-0 rounded-[16px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] px-[25px] xl:px-[20px] md:px-[15px] pb-[30px] lg:pb-[25px] md:pb-[20px] before:w-full before:absolute before:-z-[1] before:h-full before:bg-white before:left-0 before:rounded-[16px] before:-top-[33px] before:skew-y-[4deg]">
                            <div class="ed-teacher-socials absolute right-[20px] -top-[43px]">
                                <div class="ed-speaker__socials flex flex-col gap-[8px] absolute -z-[2] text-[14px] opacity-0 transition duration-[400ms] bottom-[calc(100%+8px)] translate-y-[100%] group-hover:translate-y-0 group-hover:opacity-100">
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-instagram"></i></a>
                                </div>
                                <div class="ed-teacher-socials__icon bg-edpurple w-[36px] aspect-square rounded-full bg-etBlue flex items-center justify-center">
                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.89361 9.41703C9.22284 9.41703 8.61849 9.70668 8.19906 10.1675L4.42637 7.83088C4.52995 7.56611 4.58305 7.28429 4.58294 6.99999C4.58307 6.71568 4.52997 6.43386 4.42637 6.16909L8.19906 3.83238C8.61851 4.29318 9.22284 4.58297 9.89361 4.58297C11.1572 4.58297 12.1851 3.55501 12.1851 2.29143C12.1851 1.02785 11.1572 0 9.89361 0C8.63005 0 7.60209 1.02796 7.60209 2.29154C7.60204 2.57583 7.65514 2.85763 7.75866 3.1224L3.98608 5.45903C3.56663 4.99824 2.96231 4.70845 2.29154 4.70845C1.02796 4.70845 0 5.73652 0 6.99999C0 8.26354 1.02796 9.29152 2.29154 9.29152C2.96228 9.29152 3.56666 9.00185 3.98608 8.54094L7.75869 10.8776C7.65515 11.1424 7.60204 11.4242 7.60209 11.7085C7.60209 12.972 8.63003 14 9.89361 14C11.1572 14 12.1851 12.972 12.1851 11.7086C12.1851 10.445 11.1572 9.41703 9.89361 9.41703ZM8.43766 2.29154C8.43766 1.48873 9.09082 0.835596 9.89361 0.835596C10.6964 0.835596 11.3495 1.48873 11.3495 2.29154C11.3495 3.09435 10.6964 3.74748 9.89361 3.74748C9.09079 3.74748 8.43766 3.09432 8.43766 2.29154ZM2.29154 8.45593C1.48862 8.45593 0.835487 7.80277 0.835487 6.99999C0.835487 6.1972 1.48862 5.54404 2.29154 5.54404C3.09435 5.54404 3.74737 6.1972 3.74737 6.99999C3.74737 7.80277 3.09432 8.45593 2.29154 8.45593ZM8.43766 11.7085C8.43766 10.9057 9.09082 10.2525 9.89361 10.2525C10.6964 10.2525 11.3495 10.9057 11.3495 11.7084C11.3495 12.5112 10.6964 13.1644 9.89361 13.1644C9.09079 13.1644 8.43766 12.5112 8.43766 11.7084V11.7085Z"
                                              fill="white"></path>
                                    </svg>
                                </div>
                            </div>
                            <h5 class="font-semibold text-[20px] text-etBlack mb-[4px]"><a href="teacher-details.html"
                                                                                           class="hover:text-etBlue">Cameron
                                    Williamson</a></h5>
                            <span class="text-etGray text-[16px]">President of Sales</span>
                        </div>
                    </div>

                    <!-- single teacher -->
                    <div class="ed-teacher group">
                        <div class="ed-teacher__img rounded-[16px] overflow-hidden">
                            <img src="assetsFrontend/img/teacher-3.jpg" alt="Team Member Image"
                                 class="w-full aspect-[370/375] duration-[400ms] group-hover:scale-110">
                        </div>

                        <div class="ed-teacher__txt bg-white relative z-[1] mx-[25px] lg:mx-[20px] md:mx-[15px] xs:mx-[5px] -mt-[44px] md:-mt-[15px] xs:mt-0 rounded-[16px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] px-[25px] xl:px-[20px] md:px-[15px] pb-[30px] lg:pb-[25px] md:pb-[20px] before:w-full before:absolute before:-z-[1] before:h-full before:bg-white before:left-0 before:rounded-[16px] before:-top-[33px] before:skew-y-[4deg]">
                            <div class="ed-teacher-socials absolute right-[20px] -top-[43px]">
                                <div class="ed-speaker__socials flex flex-col gap-[8px] absolute -z-[2] text-[14px] opacity-0 transition duration-[400ms] bottom-[calc(100%+8px)] translate-y-[100%] group-hover:translate-y-0 group-hover:opacity-100">
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"
                                       class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                                class="fa-brands fa-instagram"></i></a>
                                </div>
                                <div class="ed-teacher-socials__icon bg-edpurple w-[36px] aspect-square rounded-full bg-etBlue flex items-center justify-center">
                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.89361 9.41703C9.22284 9.41703 8.61849 9.70668 8.19906 10.1675L4.42637 7.83088C4.52995 7.56611 4.58305 7.28429 4.58294 6.99999C4.58307 6.71568 4.52997 6.43386 4.42637 6.16909L8.19906 3.83238C8.61851 4.29318 9.22284 4.58297 9.89361 4.58297C11.1572 4.58297 12.1851 3.55501 12.1851 2.29143C12.1851 1.02785 11.1572 0 9.89361 0C8.63005 0 7.60209 1.02796 7.60209 2.29154C7.60204 2.57583 7.65514 2.85763 7.75866 3.1224L3.98608 5.45903C3.56663 4.99824 2.96231 4.70845 2.29154 4.70845C1.02796 4.70845 0 5.73652 0 6.99999C0 8.26354 1.02796 9.29152 2.29154 9.29152C2.96228 9.29152 3.56666 9.00185 3.98608 8.54094L7.75869 10.8776C7.65515 11.1424 7.60204 11.4242 7.60209 11.7085C7.60209 12.972 8.63003 14 9.89361 14C11.1572 14 12.1851 12.972 12.1851 11.7086C12.1851 10.445 11.1572 9.41703 9.89361 9.41703ZM8.43766 2.29154C8.43766 1.48873 9.09082 0.835596 9.89361 0.835596C10.6964 0.835596 11.3495 1.48873 11.3495 2.29154C11.3495 3.09435 10.6964 3.74748 9.89361 3.74748C9.09079 3.74748 8.43766 3.09432 8.43766 2.29154ZM2.29154 8.45593C1.48862 8.45593 0.835487 7.80277 0.835487 6.99999C0.835487 6.1972 1.48862 5.54404 2.29154 5.54404C3.09435 5.54404 3.74737 6.1972 3.74737 6.99999C3.74737 7.80277 3.09432 8.45593 2.29154 8.45593ZM8.43766 11.7085C8.43766 10.9057 9.09082 10.2525 9.89361 10.2525C10.6964 10.2525 11.3495 10.9057 11.3495 11.7084C11.3495 12.5112 10.6964 13.1644 9.89361 13.1644C9.09079 13.1644 8.43766 12.5112 8.43766 11.7084V11.7085Z"
                                              fill="white"></path>
                                    </svg>
                                </div>
                            </div>
                            <h5 class="font-semibold text-[20px] text-etBlack mb-[4px]"><a href="teacher-details.html"
                                                                                           class="hover:text-etBlue">Cameron
                                    Williamson</a></h5>
                            <span class="text-etGray text-[16px]">President of Sales</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- vector -->
            <div>
                <img src="assetsFrontend/img/teacher-vector-1.svg" alt="vecotr"
                     class="pointer-events-none absolute -z-[1] bottom-0 left-0">
                <img src="assetsFrontend/img/teacher-vector-2.svg" alt="vecotr"
                     class="pointer-events-none absolute -z-[1] top-[105px] right-0">
            </div>
        </section>
        <!-- TEACHER SECTION END -->


        <!-- BLOG SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <!-- heading -->
                <div class="text-center mb-[46px] md:mb-[30px]">
                    <h6 class="ed-section-sub-title">Latest Blog</h6>
                    <h2 class="ed-section-title">Our Latest News</h2>
                </div>

                <!-- blog cards -->
                <div class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 xs:max-w-[65%] xxs:max-w-full xs:mx-auto gap-[30px] lg:gap-[20px] sm:gap-[15px]">
                    <!-- single blog -->
                    <div class="et-blog bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                        <div class="ed-blog__img relative z-[1] mb-[45px]">
                            <div class="overflow-hidden rounded-[6px]">
                                <img src="assetsFrontend/img/blog-1.png" alt="blog image"
                                     class="w-full aspect-[37/24] object-cover transition duration-[400ms] group-hover:scale-105">
                            </div>

                            <div class="bg-white absolute left-[20px] bottom-0 translate-y-[50%] rounded-[10px] font-bold text-[14px] text-black inline-block uppercase overflow-hidden text-center shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                                <span class="bg-edyellow text-white block py-[3px] rounded-[10px]">10</span>
                                <span class="px-[11px] py-[2px] block">June</span>
                            </div>
                        </div>

                        <div class="et-blog__txt">
                            <div class="et-blog__infos flex gap-x-[30px] mb-[13px]">
                                <!-- single info -->
                                <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon"><img src="assetsFrontend/img/icon/user.svg" alt="icon"></span>
                                    <span class="text font-medium text-[14px] text-edgray">By Admin</span>
                                </div>

                                <!-- single info -->
                                <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon"><img src="assetsFrontend/img/icon/tag.svg" alt="icon"></span>
                                    <span class="text font-medium text-[14px] text-edgray">Meditation</span>
                                </div>
                            </div>

                            <h4 class="et-blog__title text-[20px] sm:text-[18px] font-semibold leading-[1.6] mb-[20px]">
                                <a href="blog-details.html" class="hover:text-edpurple">Which Yoga Hybrid Is Right For
                                    You?</a></h4>

                            <a href="blog-details.html"
                               class="font-semibold text-[16px] text-edgray inline-flex items-center gap-[10px] hover:text-edpurple">Read
                                More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>

                    <!-- single blog -->
                    <div class="et-blog bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                        <div class="ed-blog__img relative z-[1] mb-[45px]">
                            <div class="overflow-hidden rounded-[6px]">
                                <img src="assetsFrontend/img/blog-2.png" alt="blog image"
                                     class="w-full aspect-[37/24] object-cover transition duration-[400ms] group-hover:scale-105">
                            </div>

                            <div class="bg-white absolute left-[20px] bottom-0 translate-y-[50%] rounded-[10px] font-bold text-[14px] text-black inline-block uppercase overflow-hidden text-center shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                                <span class="bg-edyellow text-white block py-[3px] rounded-[10px]">10</span>
                                <span class="px-[11px] py-[2px] block">June</span>
                            </div>
                        </div>

                        <div class="et-blog__txt">
                            <div class="et-blog__infos flex gap-x-[30px] mb-[13px]">
                                <!-- single info -->
                                <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon"><img src="assetsFrontend/img/icon/user.svg" alt="icon"></span>
                                    <span class="text font-medium text-[14px] text-edgray">By Admin</span>
                                </div>

                                <!-- single info -->
                                <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon"><img src="assetsFrontend/img/icon/tag.svg" alt="icon"></span>
                                    <span class="text font-medium text-[14px] text-edgray">Meditation</span>
                                </div>
                            </div>

                            <h4 class="et-blog__title text-[20px] sm:text-[18px] font-semibold leading-[1.6] mb-[20px]">
                                <a href="blog-details.html" class="hover:text-edpurple">Which Yoga Hybrid Is Right For
                                    You?</a></h4>

                            <a href="blog-details.html"
                               class="font-semibold text-[16px] text-edgray inline-flex items-center gap-[10px] hover:text-edpurple">Read
                                More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>

                    <!-- single blog -->
                    <div class="et-blog bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                        <div class="ed-blog__img relative z-[1] mb-[45px]">
                            <div class="overflow-hidden rounded-[6px]">
                                <img src="assetsFrontend/img/blog-3.png" alt="blog image"
                                     class="w-full aspect-[37/24] object-cover transition duration-[400ms] group-hover:scale-105">
                            </div>

                            <div class="bg-white absolute left-[20px] bottom-0 translate-y-[50%] rounded-[10px] font-bold text-[14px] text-black inline-block uppercase overflow-hidden text-center shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                                <span class="bg-edyellow text-white block py-[3px] rounded-[10px]">10</span>
                                <span class="px-[11px] py-[2px] block">June</span>
                            </div>
                        </div>

                        <div class="et-blog__txt">
                            <div class="et-blog__infos flex gap-x-[30px] mb-[13px]">
                                <!-- single info -->
                                <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon"><img src="assetsFrontend/img/icon/user.svg" alt="icon"></span>
                                    <span class="text font-medium text-[14px] text-edgray">By Admin</span>
                                </div>

                                <!-- single info -->
                                <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon"><img src="assetsFrontend/img/icon/tag.svg" alt="icon"></span>
                                    <span class="text font-medium text-[14px] text-edgray">Meditation</span>
                                </div>
                            </div>

                            <h4 class="et-blog__title text-[20px] sm:text-[18px] font-semibold leading-[1.6] mb-[20px]">
                                <a href="blog-details.html" class="hover:text-edpurple">Which Yoga Hybrid Is Right For
                                    You?</a>
                                {{ asset('{{ $carr->desktop_background')}}
                            </h4>

                            <a href="blog-details.html"
                               class="font-semibold text-[16px] text-edgray inline-flex items-center gap-[10px] hover:text-edpurple">Read
                                More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- partners -->
                <div class="ed-partners-slider swiper mt-[100px] xl:mt-[70px] md:mt-[50px]">
                    <div class="swiper-wrapper">
                        <!-- single partner -->
                        <div class="swiper-slide"><img src="assetsFrontend/img/partner-1.png" alt="Partner Logo"
                                                       class="xxs:mx-auto"></div>
                        <!-- single partner -->
                        <div class="swiper-slide"><img src="assetsFrontend/img/partner-2.png" alt="Partner Logo"
                                                       class="xxs:mx-auto"></div>
                        <!-- single partner -->
                        <div class="swiper-slide"><img src="assetsFrontend/img/partner-3.png" alt="Partner Logo"
                                                       class="xxs:mx-auto"></div>
                        <!-- single partner -->
                        <div class="swiper-slide"><img src="assetsFrontend/img/partner-4.png" alt="Partner Logo"
                                                       class="xxs:mx-auto"></div>
                        <!-- single partner -->
                        <div class="swiper-slide"><img src="assetsFrontend/img/partner-5.png" alt="Partner Logo"
                                                       class="xxs:mx-auto"></div>
                        <!-- single partner -->
                        <div class="swiper-slide"><img src="assetsFrontend/img/partner-6.png" alt="Partner Logo"
                                                       class="xxs:mx-auto"></div>
                        <!-- single partner -->
                        <div class="swiper-slide"><img src="assetsFrontend/img/partner-1.png" alt="Partner Logo"
                                                       class="xxs:mx-auto"></div>
                        <!-- single partner -->
                        <div class="swiper-slide"><img src="assetsFrontend/img/partner-2.png" alt="Partner Logo"
                                                       class="xxs:mx-auto"></div>
                    </div>
                </div>
                <div>
                    <img src="assetsFrontend/img/form-notice-vector-1.svg" alt="vector"
                         class="absolute -z-[1] bottom-[288px] left-0 pointer-events-none">
                </div>
            </div>
        </section>
    </main>
@endsection
