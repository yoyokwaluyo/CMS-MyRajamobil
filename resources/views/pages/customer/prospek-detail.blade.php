@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="navtabs">
    <ul class="">
        <li>
            <a href="{{ route('myprospect.detail', ['language' => app()->getLocale(), 'id' => 1234, 'slug' => 'detail']) }}" class="@if (\Request::route('slug') == 'detail') active @endif">
                Detail
            </a>
        </li>
        <li>
            <a href="{{ route('myprospect.detail', ['language' => app()->getLocale(), 'id' => 1234, 'slug' => 'schedule']) }}" class="@if (\Request::route('slug') == 'schedule') active @endif">
                Schedule
                <i class='bx bxs-info-circle text-xl'></i> <!-- ada icon ketika history baru belom di isi note -->
            </a>
        </li>
        <li>
            <a href="{{ route('myprospect.detail', ['language' => app()->getLocale(), 'id' => 1234, 'slug' => 'history']) }}" class="@if (\Request::route('slug') == 'history') active @endif">
                History
                <i class='bx bxs-info-circle text-xl'></i> <!-- ada icon ketika history baru belom di isi note -->
            </a>
        </li>
    </ul>
</div>

<div class="wrapper-card">
    @if (\Request::route('slug') == 'detail')
        @include ('pages.customer._content-prospek-detail')
    @endif

    @if (\Request::route('slug') == 'schedule')
        @include ('pages.customer._content-prospek-schedule')
    @endif

    @if (\Request::route('slug') == 'history')
        @include ('pages.customer._content-prospek-history')
    @endif
</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            
        }, 1000);

        // code
    });
</script>
@endsection