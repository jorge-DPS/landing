<!-- Galery SECTION START -->
<section class="bg-edoffwhite py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
    <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
        <!-- heading -->
        <div class="text-center mb-[46px] lg:mb-[36px] md:mb-[26px]">
            <h2 class="ed-section-sub-title">Galeria</h2>
            <h6 class="ed-section-title">{{ $section->title }}</h6>
        </div>

        <!-- instructor cards -->
        <div class="grid grid-cols-3 sm:grid-cols-2 xs:grid-cols-2 xxs:grid-cols-1 gap-[30px] md:gap-[15px]">
            <!-- single instructor -->
            @forelse ($images->take(6) as $image)
                <div class="text-center group">
                    <!-- img -->
                    <div class="relative mb-[18px] overflow-hidden rounded-[12px]">
                        <img src="{{ asset('storage/uploads/images/' . $image->filename) }}"
                            alt="{{ 'imagen' . $image->id }}"
                            class="w-full aspect-[270/320] object-cover group-hover:scale-110">

                    </div>

                </div>

            @empty
            <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
                No hay imagenes que mostrar

            </div>
            @endforelse

        </div>
        @if ($images->count() > 6)
            
        <a href="{{ route('page.gallery', [$page, $section]) }}"
            class="ed-btn !bg-transparent border border-edpurple !text-edpurple hover:!bg-edpurple hover:!text-white">
                view all teacher 
            <span class="icon pl-[10px]">
                <i class="fa-solid fa-arrow-right-long"></i>
            </span>
        </a>
        @endif

        <!-- vectors -->
        {{-- <div class="lg:hidden">
                <div class="pointer-events-none w-[434px] aspect-square rounded-full bg-edpurple/15 absolute -z-[1] top-0 left-[56px] -translate-y-[50%]"></div>
                <div class="pointer-events-none w-[694px] aspect-square rounded-full bg-edpurple/10 absolute -z-[1] bottom-0 right-[21px] translate-y-[50%]"></div>
                <img src="assets/img/admission-vector-2.svg" alt="vector" class="absolute -z-[1] bottom-[154px] right-[58px]">
                <img src="assets/img/instructor-vector.svg" alt="vector" class="absolute -z-[1] top-[120px] left-0">
            </div> --}}
    </div>
</section>
<!-- Galery SECTION END -->
