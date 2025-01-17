@extends('frontend.layouts.app')

@section('title')
    <title>saint-george</title>
@endsection

@section('content')
    <livewire:frontend.page.activity.activity :activities="$activities"/>
@endsection
