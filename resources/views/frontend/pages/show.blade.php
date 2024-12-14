@extends('frontend.layouts.app')

@section('title')
    <title>saint-george</title>
@endsection

@section('content')
    <main>

        {{-- <livewire:frontend.page.sections.cover :page="$page"/>
        <livewire:frontend.page.sections.person :page="$page"/>
        <livewire:frontend.page.sections.images :page="$page"/> --}}

        <livewire:frontend.page.index :page="$page"/>

    </main>
@endsection

{{-- <x-frontend.app-layout>
    <!-- Este es el contenido que se inyectará en el slot -->
    <div class="ed-banner-slider swiper relative" style="padding: 30%">
        YovanEnovore
    </div>
</x-frontend.app-layout> --}}
