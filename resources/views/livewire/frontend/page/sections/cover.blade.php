<!-- ABOUT SECTION START -->
<section class="py-[120px] xl:py-[80px] md:py-[60px]">
    <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
        @if ($cover)
        <div class="flex md:flex-col justify-between items-center gap-x-[60px] xl:gap-x-[40px] gap-y-[40px]">
            <!-- img -->
            <div class="max-w-[50%] md:max-w-full grow relative">
                <img src="{{ asset('storage/cover/images/' . $cover->image) }}" alt="{{ $cover->title }}">
                <img src="assets/img/about-img-vector.svg" alt="vector"
                    class="absolute -top-[25px] left-[25px] -z-[1] w-[90%] max-w-[100%]">
            </div>

            <!-- txt -->
            <div class="max-w-[50%] md:max-w-full shrink-0 grow">
                <h6 class="ed-section-sub-title">{{ $name }}</h6>
                    <!-- Títulos y Descripción del Cover -->
                    <h2 class="ed-section-title mb-[9px]">{{ $cover->title }}</h2>
                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">{{ $cover->subtitle }}</h3>
                    <p class="text-edgray"> {{ $cover->description }} </p>


                    <!-- Botón -->
                    <div class="flex items-center mt-6">
                        <a href="{{ 'https://' . $cover->button_url }}"
                            class="ed-btn px-6 py-2 rounded-lg text-white bg-primary hover:bg-primary-dark transition-colors duration-300"
                            @if ($cover->open_in_new_tab) target="_blank" @endif>
                            {{ $cover->button_text }}
                        </a>
                    </div>
                </div>
            </div>--
            @else
                <!-- Mensaje cuando no hay cover -->
                <p class="text-gray-500 text-lg mt-4">No se ha asignado un cover para esta sección. <span
                        class="font-semibold text-primary">Añádelo para mejorar la presentación visual.</span></p>
            @endif
    </div>
</section>
<!-- ABOUT SECTION END -->
