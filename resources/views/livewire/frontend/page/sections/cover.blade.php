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
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
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
        </div>
    </section>
@endif
<!-- ABOUT SECTION END -->
