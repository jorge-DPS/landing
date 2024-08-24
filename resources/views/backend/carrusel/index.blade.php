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
        /* From Uiverse.io by D3OXY */
        .card {
            position: relative;
            width: 350px;
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
            font-size: 20px;
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
            background: rgba(82, 2, 13, 0.7);
            border-radius: 10px;
            width: auto;
            padding: 12px;
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
            background: #6366f1;
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
                    <a class="btn btn-primary pulse-button" href="{{ route('carrusel.create') }}">
                        Agregar nuevo
                    </a>
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
                        <span>Cambio</span>
                        <label class="slidersss">
                            <input type="range" class="level" min="1" max="50" value="10" id="sliderRange" oninput="updateSliderValue(this.value)">
                            <span class="level-value" id="sliderValue">2s</span>
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
                                        <p class="card__title">{{ $car->small_title }}</p>
                                        <p class="card__title">{{ $car->big_title }}</p>
                                        <p class="card__description">{{ $car->description }}</p>
                                        <a class="btn btn-primary" target="_blank" href="{{ url('/') }}">En línea</a>
                                        <a class="btn btn-secondary" href="{{ route('carrusel.edit', $car->id) }}">Editar</a>
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
@endpush