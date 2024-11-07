<div class="card min-w-full">
    <form id="updateInfoMetatagas" action="{{ route('metatags.update',$metatags->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-header gap-2">
            <h3 class="card-title">
                Enalces y datos relevantes
            </h3>
        </div>
        <div class="card-body lg:py-7.5 py-5">
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Nombre de la página
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->page_name }}"
                           placeholder="No asignado"
                           name="page_name"
                    >
                    </input>
                </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Título
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->title }}" name="title">
                    </input>
                </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Descripción
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->description }}" name="description">
                    </input>
                </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Palabras clave (keywords)
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->keywords }}" name="keywords">
                    </input>
                </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Autor
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->author }}" readonly>
                    </input>
                </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Palabras claves (robots)
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->robots }}" name="robots">
                    </input>
                </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Enlace canónico (canonical)
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->canonical }}" name="canonical">
                    </input>
                </label>
            </div>
            <div class="border-t border-gray-200 my-7.5"></div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Título OG (Open Graph)
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->og_title }}" name="og_title">
                    </input>
                </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Descripción OG (Open Graph)
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->og_description }}"
                           name="og_description">
                    </input>
                </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Tipo OG (Open Graph)
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->og_type }}" name="og_type">
                    </input>
                </label>
            </div>
            <div class="border-t border-gray-200 my-7.5"></div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Tarjeta de Twitter
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->twitter_card }}"
                           name="twitter_card">
                    </input>
                </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Título de Twitter
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->twitter_title }}"
                           name="twitter_title">
                    </input>
                </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Descripción de Twitter
                    </div>
                </div>
                <label class="input">
                    <i class="ki-solid ki-information-2 text-school text-2xl">
                    </i>
                    <input type="text" value="{{ $metatags->twitter_description }}"
                           name="twitter_description">
                    </input>
                </label>
            </div>
            <div class="border-t border-gray-200 my-7.5"></div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Icono favorito (favicon)
                    </div>
                </div>
                <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                    <img id="favicon-preview"
                         class="mt-2"
                         src="{{ $metatags->favicon ? asset($metatags->favicon) : asset('/assetsBackend/media/avatars/blank.png') }}"
                         style="height:100px;"/>
                </div>
                <div class="flex justify-center items-center">
                    <div class="image-input size-[500px]" data-image-input="true">
                        <input id="favicon-input" accept=".png, .jpg, .jpeg" name="favicon"
                               type="file" class="custom-file-input" style="display: none;"/>
                        <button type="button" class="upload-button" id="upload-favicon-button">
                            <i class="ki-duotone ki-file-up text-2xl upload-svgIcon"></i>
                        </button>
                        <button type="button" class="delete-button ml-5"
                                onclick="removeFavicon()">
                            <i class="ki-solid ki-trash text-2xl delete-svgIcon"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Imagen de Twitter
                    </div>
                </div>
                <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                    <img id="twitter-image-preview"
                         class="mt-2"
                         src="{{ $metatags->twitter_image ? asset($metatags->twitter_image) : asset('/assetsBackend/media/avatars/blank.png') }}"
                         style="height:100px;"/>
                </div>
                <div class="flex justify-center items-center">
                    <div class="image-input size-[500px]" data-image-input="true">
                        <input id="twitter-image-input" accept=".png, .jpg, .jpeg"
                               name="twitter_image" type="file" class="custom-file-input"
                               style="display: none;"/>
                        <button type="button" class="upload-button"
                                id="upload-twitter-image-button">
                            <i class="ki-duotone ki-file-up text-2xl upload-svgIcon"></i>
                        </button>
                        <button type="button" class="delete-button ml-5"
                                onclick="removeTwitterImage()">
                            <i class="ki-solid ki-trash text-2xl delete-svgIcon"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
                <div class="flex flex-col max-w-72 w-full">
                    <div class="text-gray-900 text-sm font-semibold">
                        Imagen OG (Open Graph)
                    </div>
                </div>
                <div class="flex flex-wrap sm:flex-nowrap w-full gap-5 lg:gap-7.5">
                    <img id="og-image-preview"
                         class="mt-2"
                         src="{{ $metatags->og_image ? asset($metatags->og_image) : asset('/assetsBackend/media/avatars/blank.png') }}"
                         style="height:100px;"/>
                </div>
                <div class="flex justify-center items-center">
                    <div class="image-input size-[500px]" data-image-input="true">
                        <input id="og-image-input" accept=".png, .jpg, .jpeg" name="og_image"
                               type="file" class="custom-file-input" style="display: none;"/>
                        <button type="button" class="upload-button" id="upload-og-image-button">
                            <i class="ki-duotone ki-file-up text-2xl upload-svgIcon"></i>
                        </button>
                        <button type="button" class="delete-button ml-5"
                                onclick="removeOgImage()">
                            <i class="ki-solid ki-trash text-2xl delete-svgIcon"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-200 my-7.5"></div>
            <div class="btn-conteiner"
                 style="position: fixed; bottom: 60px; right: 50px; z-index: 1000;">
                <a class="btn-content" href="#" onclick="enviarFormulario(); return false;">
                    <span class="btn-title">ACTUALIZAR</span>
                    <span class="icon-arrow">
      <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
      >
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path id="arrow-icon-one"
                d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                fill="#FFFFFF"></path>
          <path id="arrow-icon-two"
                d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                fill="#FFFFFF"></path>
          <path id="arrow-icon-three"
                d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                fill="#FFFFFF"></path>
        </g>
      </svg>
    </span>
                </a>
            </div>
        </div>
    </form>
</div>