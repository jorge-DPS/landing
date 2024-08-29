@extends('backend.layouts.app')

@section('title')
    <title>Carrusel</title>
@endsection

@section('breadcrumbs')
    <div class="flex [.header_&amp;]:below-lg:hidden items-center gap-1.25 text-xs lg:text-sm font-medium mb-2.5 lg:mb-0"
         data-reparent="true" data-reparent-mode="prepend|lg:prepend"
         data-reparent-target="#content_container|lg:#header_container">
       <span class="text-gray-600">
        {{ Breadcrumbs::render('home') }}
       </span>
        <i class="ki-filled ki-right text-gray-500 text-3xs">
        </i>
        <span class="text-gray-700">
        {{ Breadcrumbs::render('carrusel.index') }}
       </span>
    </div>
@endsection

@section('content')

    <style>
        .card {
            position: relative;
            width: 300px;
            aspect-ratio: 15/9;
            background-color: #f2f2f2;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            perspective: 1000px;
            box-shadow: 0 0 0 5px #ffffff80;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin: 10px; /* Espacio entre tarjetas */
        }

        .card svg {
            width: 48px;
            fill: #333;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card__image {
            width: 100%;
            height: 100%;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
        }

        .card__content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 20px;
            box-sizing: border-box;
            background-color: #f2f2f2;
            transform: rotateX(-90deg);
            transform-origin: bottom;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card:hover .card__content {
            transform: rotateX(0deg);
        }

        .card__title {
            margin: 0;
            font-size: 16px;
            color: #333;
            font-weight: 700;
        }

        .card:hover svg {
            scale: 0;
        }

        .card__description {
            margin: 15px 0 15px;
            font-size: 12px;
            color: #777;
            line-height: 1.4;
        }

        .card__button {
            padding: 5px;
            border-radius: 8px;
            background: #777;
            border: none;
            color: white;
        }

        .secondary {
            background: transparent;
            color: #777;
            border: 1px solid #777;
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card__icon {
            position: absolute;
            top: 60%;
            right: 70%;
            font-size: 34px;
            color: rgba(255, 255, 255);
            background: rgba(177, 42, 56, 0.8);
            border-radius: 10px;
            width: auto;
            padding: 3px 12px 3px 12px;
        }


        /* tiempo de espera */
        .slidersss {
            --slider-width: 200px;
            --slider-height: 8px;
            --slider-bg: #d1d5db;
            --slider-thumb-bg: #b12a38;
            --slider-thumb-size: 18px;
            --slider-thumb-border-radius: 50%;
            --slider-border-radius: 10px;
            --slider-transition: 0.3s ease;
        }

        .slidersss {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .slidersss .level {
            -webkit-appearance: none;
            appearance: none;
            width: var(--slider-width);
            height: var(--slider-height);
            background: var(--slider-bg);
            border-radius: var(--slider-border-radius);
            outline: none;
            cursor: pointer;
            transition: background var(--slider-transition);
        }

        .slidersss .level:hover {
            background: #a1a1aa;
        }

        .slidersss .level::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: var(--slider-thumb-size);
            height: var(--slider-thumb-size);
            background: var(--slider-thumb-bg);
            border-radius: var(--slider-thumb-border-radius);
            cursor: pointer;
            transition: background var(--slider-transition), transform 0.15s ease;
        }

        .slidersss .level::-webkit-slider-thumb:hover {
            background: #5b020b;
            transform: scale(1.1);
        }

        .slidersss .level::-moz-range-thumb {
            width: var(--slider-thumb-size);
            height: var(--slider-thumb-size);
            background: var(--slider-thumb-bg);
            border-radius: var(--slider-thumb-border-radius);
            cursor: pointer;
            transition: background var(--slider-transition), transform 0.15s ease;
        }

        .slidersss .level::-moz-range-thumb:hover {
            background: rgba(189, 37, 73, 0.77);
            transform: scale(1.1);
        }

        .slidersss .level-value {
            font-size: 14px;
            color: #4b5563;
            min-width: 30px;
            text-align: center;
        }

    </style>

    <main class="grow content pt-5" id="content" role="content">
        <div class="container-fixed">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-semibold leading-none text-gray-900">
                        Deslizador de contenido
                    </h1>
                    <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                        Un deslizador muestra varias imágenes, mensajes, botones, etc. Uno tras otro, en el inicio.
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <div class="btn-conteiner">
                        <a class="btn-content" href="{{ route('carrusel.create') }}">
                            <span class="btn-title">AGREGAR NUEVO</span>
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
            </div>
        </div>
        <div class="container-fixed">
            <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
                <div class="flex flex-wrap items-center gap-5 justify-between">
                    <h3 class="text-lg text-gray-900 font-semibold">
                        {{ $countCarrusel }} Páginas
                    </h3>
                    <div class="btn-tabs" data-tabs="true">
                        <span>Tiempo de cambio</span>
                        <label class="slidersss">
                            <input type="range" class="level" min="1" max="50" value="{{ $carruselTime }}" id="sliderRange">
                            <span class="level-value" id="sliderValue">{{ $carruselTime }}s</span>
                        </label>
                    </div>
                </div>

                <div id="works_cards">
                    <div class="cards-container">
                        @foreach($carrusel as $car)
                            <div class="card">
                                <i class="ki-duotone ki-eye card__icon"></i>
                                <img alt="" class="rounded-t-xl"
                                     src="{{ $car->desktop_background ? asset($car->desktop_background) : asset('/assetsBackend/media/avatars/blank.png') }}"/>
                                <div class="card__content">
                                    <p class="card__title">{{ Str::limit($car->small_title, 30) }}</p>
                                    <p class="card__title">{{ Str::limit($car->big_title, 20) }}</p>
                                    <p class="card__description">{{ Str::limit($car->description), 40 }}</p>
                                    <a class="btn-primary" target="_blank" href="{{ url('/') }}">En línea</a>
                                    <a class="btn btn-secondary"
                                       href="{{ route('carrusel.edit', $car->id) }}">Editar</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        function updateSliderValue(value) {
            document.getElementById('sliderValue').textContent = value + 's';
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slider = document.getElementById('sliderRange');
            const sliderValue = document.getElementById('sliderValue');

            slider.addEventListener('input', function() {
                sliderValue.textContent = this.value + 's';
            });

            slider.addEventListener('change', function() {
                const seconds = this.value;
                $.ajax({
                    url: "{{ route('backend.configuracion.updateTimeCarrusel') }}",
                    type: "PUT",
                    data: {
                        _token: "{{ csrf_token() }}",
                        seconds: seconds
                    },
                    success: function(response) {
                        if (response.Codigo === 0) {
                            Swal.fire({
                                position: "top-end",
                                title: "!Registro exitoso¡",
                                text: response.Mensaje,
                                showConfirmButton: false,
                                icon: "success",
                                timer: 2000,
                                scrollbarPadding: false,
                                heightAuto: false,
                                backdrop: false,
                                customClass: {
                                    popup: 'swal-alert-success',
                                    title: 'swal-title-overlay',
                                    content: 'swal-content-overlay'
                                },
                                didOpen: () => {
                                    document.body.classList.add('swal-open');
                                },
                                willClose: () => {
                                    document.body.classList.remove('swal-open');
                                }
                            });


                        } else {
                            alertaError(response.Mensaje);
                        }
                    },
                    error: function() {
                        alertaError("Error al actualizar el tiempo de carrusel.");
                    }
                });
            });
        });
    </script>
@endpush