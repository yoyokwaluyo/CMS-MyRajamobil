@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <h1>Welcome to the Dashboard, {{ auth()->user()->name }}</h1>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection