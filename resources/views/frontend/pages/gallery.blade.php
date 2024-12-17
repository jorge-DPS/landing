@extends('frontend.layouts.app')

@section('title')
    <title>saint-george</title>
@endsection

@section('content')


        <livewire:frontend.page.pages.gallery :page="$page" :section="$section"/>


@endsection