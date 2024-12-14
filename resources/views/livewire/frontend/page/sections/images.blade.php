<!-- GALLERY SECTION START -->
<div class="overflow-hidden">
    <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
        <h5 class="font-semibold text-[24px] text-edblue text-center mb-[40px] relative z-[1] before:absolute before:-z-[1] before:w-[100%] before:h-[1px] before:left-0 before:top-[50%] before:bg-[#D9D9D9] before:-translate-y-[50%]"><span class="bg-white px-[20px]">{{ $name }}</span></h5>

        <!-- gallery slider -->
        <div class="ed-gallery-slider swiper overflow-visible">
            <div class="swiper-wrapper">
                @forelse ($images as $image)
                    <div class="swiper-slide max-w-max">
                        <a href="assets/img/gallery-img-1.jpg" data-fslightbox="gallery" class="block rounded-[40px] overflow-hidden">
                            <img src="{{ asset('storage/uploads/images/' . $image->filename) }}" alt="Gallery image" style="height: 450px; object-fit: cover; width: 100%; border-radius: 20px;">
                        </a>
                    </div>
                    
                @empty
                    No hay imagenes que mostrar
                @endforelse
                
            </div>
        </div>
    </div>
</div>
<!-- GALLERY SECTION END -->