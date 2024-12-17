@extends('frontend.layouts.app')

@section('title')
    <title>saint-george</title>
@endsection

@section('content')
    <main>

        <livewire:frontend.page.pages.employees :page="$page" :section="$section"/>

    </main>
@endsection
