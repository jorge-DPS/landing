@extends('frontend.layouts.app')

@section('title')
    <title>saint-george</title>
@endsection

@section('content')
    <main>
        {{-- <section>
            <div class="ed-banner-slider swiper relative" style="padding: 30%">
              YovanEnovore
            </div>


        </section> --}}

        {{ $page }}

        <livewire:frontend.pages.page-content :page="$page"/>
    </main>
@endsection

{{-- <x-frontend.app-layout>
    <!-- Este es el contenido que se inyectará en el slot -->
    <div class="ed-banner-slider swiper relative" style="padding: 30%">
        YovanEnovore
    </div>
</x-frontend.app-layout> --}}
