@if ($cover)
    <!-- ABOUT SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px]">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            @if ($cover->image_position == 'left')
            <div class="flex md:flex-col justify-between items-center gap-x-[60px] xl:gap-x-[40px] gap-y-[40px]">
                <!-- img -->
                <div class="max-w-[50%] md:max-w-full grow relative">
                    <img src="{{ asset('storage/cover/images/' . $cover->image) }}" alt="{{ $cover->title }}">
                    <img src="{{ asset('assetsFrontend/img/about-img-vector.svg') }}" alt="vector"
                        class="absolute -top-[25px] left-[25px] -z-[1] w-[90%] max-w-[100%]">
                </div>

                <!-- txt -->
                <div class="max-w-[50%] md:max-w-full shrink-0 grow">
                    <div
                        class="gap-y-[15px] gap-x-[30px] xxl:gap-x-[20px] mt-[16px] xxs:mb-[30px] pb-[30px] border-b border-[#dbdbdb] mb-[26px]">
                        <h6 class="ed-section-sub-title">{{ $name }}</h6>
                        <!-- Títulos y Descripción del Cover -->
                        <h2 class="ed-section-title mb-[9px]">{{ $cover->title }}</h2>
                        <h3 class="text-2xl font-semibold text-gray-700 mb-4">{{ $cover->subtitle }}</h3>
                        <p class="text-edgray"> {{ $cover->description }} </p>
                    </div>

                    <!-- Botón -->
                    <div class="flex flex-wrap items-center gap-x-[24px] gap-y-[20px]">
                        <a href="{{ 'https://' . $cover->button_url }}" class="ed-btn flex gap-x-[8px]"
                            @if ($cover->open_in_new_tab) target="_blank" @endif>
                            {{ $cover->button_text }}
                        </a>
                    </div>
                </div>
            </div>
                
            @else
            <div class="flex md:flex-col justify-between items-center gap-x-[60px] xl:gap-x-[40px] gap-y-[40px]">

                <!-- txt -->
                <div class="max-w-[50%] md:max-w-full shrink-0 grow">
                    <div
                        class="gap-y-[15px] gap-x-[30px] xxl:gap-x-[20px] mt-[16px] xxs:mb-[30px] pb-[30px] border-b border-[#dbdbdb] mb-[26px]">
                        <h6 class="ed-section-sub-title">{{ $name }}</h6>
                        <!-- Títulos y Descripción del Cover -->
                        <h2 class="ed-section-title mb-[9px]">{{ $cover->title }}</h2>
                        <h3 class="text-2xl font-semibold text-gray-700 mb-4">{{ $cover->subtitle }}</h3>
                        <p class="text-edgray"> {{ $cover->description }} </p>
                    </div>

                    <!-- Botón -->
                    <div class="flex flex-wrap items-center gap-x-[24px] gap-y-[20px]">
                        <a href="{{ 'https://' . $cover->button_url }}" class="ed-btn flex gap-x-[8px]"
                            @if ($cover->open_in_new_tab) target="_blank" @endif>
                            {{ $cover->button_text }}
                        </a>
                    </div>
                </div>

                <!-- img -->
                <div class="max-w-[50%] md:max-w-full grow relative">
                    <img src="{{ asset('storage/cover/images/' . $cover->image) }}" alt="{{ $cover->title }}">
                    <img src="{{ asset('assetsFrontend/img/about-img-vector.svg') }}" alt="vector"
                        class="absolute -top-[25px] left-[25px] -z-[1] w-[90%] max-w-[100%]">
                </div>

            </div>
            @endif
        </div>
    </section>
@else
    <!-- Mensaje cuando no hay cover -->
    <!-- heading -->
    <section class="bg-[#FAF9F6] py-[120px] xl:py-[80px] md:py-[60px] relative z-[1]">
        {{-- <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <div
                class="flex flex-wrap xs:flex-col xs:text-center justify-between items-center gap-y-[15px] mb-[46px] md:mb-[30px]">
                <div>
                    <h2 class="ed-section-title">{{ $section->title }}</h2>
                </div>
            </div>
            <div
                class="flex flex-wrap xs:flex-col xs:text-center justify-between items-center gap-y-[15px] mb-[46px] md:mb-[30px]">
                <p class="text-gray-700 text-sm">No hay un cover signado para esta sección. </p>
            </div>
        </div> --}}
        <!-- ABOUT SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex md:flex-col justify-between items-center gap-x-[60px] xl:gap-x-[40px] gap-y-[40px]">

                    <!-- txt -->
                    <div class="max-w-[50%] md:max-w-full shrink-0 grow">
                        <h6 class="ed-section-sub-title">about us</h6>
                        <h2 class="ed-section-title mb-[9px]">Welcome to best school for your child</h2>
                        <p class="text-edgray">luctus. Curabitur nibh justo imperdiet non ex non tempus faucibus urna
                            Aliquam at elit vitae dui sagittis maximus eget vitae diam In fermentum </p>
                        <!-- infos -->
                        <div
                            class="flex xs:flex-col gap-y-[15px] gap-x-[30px] xxl:gap-x-[20px] mt-[16px] xxs:mb-[30px] pb-[30px] border-b border-[#dbdbdb] mb-[26px]">
                            <!-- single info -->
                            <div
                                class="flex items-center lg:flex-col lg:items-start md:flex-row md:items-center gap-[20px] xl:gap-[15px]">
                                <div
                                    class="shrink-0 bg-edpurple h-[80px] xl:h-[70px] aspect-square rounded-[6px] flex items-center justify-center">
                                    <img src="assets/img/icon/target.svg" alt="icon">
                                </div>

                                <!-- txt -->
                                <div>
                                    <h6 class="font-semibold text-[18px] text-edblue mb-[5px]">Our Mission</h6>
                                    <p class="text-[16px] text-edgray">Aliquam erat volutpat nullam imperdiet</p>
                                </div>
                            </div>

                            <div
                                class="flex items-center lg:flex-col lg:items-start md:flex-row md:items-center gap-[20px] xl:gap-[15px]">
                                <div
                                    class="shrink-0 bg-edpurple h-[80px] xl:h-[70px] aspect-square rounded-[6px] flex items-center justify-center">
                                    <img src="assets/img/icon/book-light.svg" alt="icon">
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
                                    <img src="assets/img/user.png" alt="Principal" class="w-[58px] aspect-square">
                                </div>
                                <div>
                                    <h5 class="font-semibold text-[18px] text-black mb-[4px]">Ronald Richards</h5>
                                    <h6 class="text-edgray">Principal <span class="text-edpurple">Edutics</span></h6>
                                </div>
                            </div>
                            <a href="#" class="ed-btn">Message Principal</a>
                        </div>
                    </div>

                    <!-- img -->
                    <div class="max-w-[50%] md:max-w-full grow relative">
                        <img src="assets/img/about-img.png" alt="about image">
                        <img src="assets/img/about-img-vector.svg" alt="vector"
                            class="absolute -top-[25px] left-[25px] -z-[1] w-[90%] max-w-[100%]">
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT SECTION END -->
    </section>
@endif
<!-- ABOUT SECTION END -->
