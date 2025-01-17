<main>
    <!-- BREADCRUMB SECTION START -->
    <section style="background-image: url('{{ asset('assetsFrontend/img/breadcrumb-bg-banner.jpg') }}')" class="pt-[327px] xl:pt-[287px] lg:pt-[237px] sm:pt-[200px] xxs:pt-[180px] pb-[158px] xl:pb-[118px] lg:pb-[98px] sm:pb-[68px] xs:pb-[48px] text-center bg-no-repeat bg-cover bg-center relative z-[1] overflow-hidden before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <h1 class="font-semibold text-[clamp(35px,6vw,56px)] text-white">Contactanos</h1>
            <ul class="flex items-center justify-center gap-[10px] text-white">
                <li><a href="{{'/'}}" class="text-edyellow">Inicio</a></li>
                <li><span class="text-[12px]"><i class="fa-solid fa-angle-double-right"></i></span></li>
                <li>Contactos</li>
            </ul>
        </div>

        <div class="vectors">
            <img src="{{ asset("assetsFrontend/img/breadcrumb-vector-1.svg") }}" alt="vector" class="absolute -z-[1] pointer-events-none bottom-[34px] left-0 xl:left-auto xl:right-[90%]">
            <img src="{{ asset("assetsFrontend/img/breadcrumb-vector-2.svg") }}" alt="vector" class="absolute -z-[1] pointer-events-none bottom-0 right-0 xl:right-auto xl:left-[60%]">
        </div>
    </section>
    <!-- BREADCRUMB SECTION END -->


    <!-- CONTACT SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px]">
        <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
            <div class="grid grid-cols-2 md:grid-cols-1 gap-[60px] xl:gap-[40px] items-center">
                <!-- left side contact infos -->
                <div class="rounded-[16px] overflow-hidden">
                    <div id="map" >

                    </div>
                </div>

                <!-- right side contact form -->
                <div>
                    <h2 class="text-[40px] md:text-[35px] sm:text-[30px] xxs:text-[28px] font-semibold text-edblue mb-[7px]">Contactanos</h2>
                    <p class="text-edgray font-normal text-[16px] mb-[38px]">{{ $company->description }}</p>

                    <div class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] xs:gap-[20px] text-[16px]">
                        <div>
                            <label class="font-lato font-semibold text-edblue block mb-[12px]">Nombre</label>
                            <div class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] flex items-center">
                                {{$company->company_name}}
                            </div>
                        </div>
                        <div>
                            <label class="font-lato font-semibold text-edblue block mb-[12px]">Dirección</label>
                            <div class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] flex items-center">
                                {{$company->address}}
                            </div>
                        </div>
                        <div>
                            <label class="font-lato font-semibold text-edblue block mb-[12px]">Celular</label>
                            <div class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] flex items-center">
                                {{ str_replace('+591', '', $company->mobile) }} / {{ str_replace('+591', '', $company->phone) }}

                            </div>
                        </div>
                        <div>
                            <label class="font-lato font-semibold text-edblue block mb-[12px]">Correo</label>
                            <div class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] flex items-center">
                                {{$company->email}}
                            </div>
                        </div>
                        <div class="col-span-2 xxs:col-span-1">
                            <label class="font-lato font-semibold text-edblue block mb-[12px]">Horario</label>
                            <div class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] flex items-center">
                                {{$company->horario}}
                            </div>
                        </div>
                        <div>
                            <a href="https://wa.me/59178825555?text=Hola,%20quiero%20más%20información."
                               target="_blank"
                               class="bg-edpurple h-[55px] px-[24px] rounded-[10px] text-[16px] font-medium text-white hover:bg-edblue flex items-center justify-center">
                                Enviar un mensaje <span class="icon pl-[10px]"><i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION END -->
</main>


@vite('resources/js/frontend/mapa.js')