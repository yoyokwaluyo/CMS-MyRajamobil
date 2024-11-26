@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <form action="#" class="space-y-6">
        <div>
            <label for="passcode" class="form-label">Passcode</label>
            <input type="text" name="passcode" id="passcode" class="form-control" required>
        </div>
        <div class="md:grid md:grid-cols-2 md:gap-4">
            <button class="buttons orange py-2.5 text-sm rounded-md">Simpan</button>
            <a href="{{ route('voucher.inputvoucher', app()->getLocale()) }}" class="buttons-outline py-2.5 text-sm rounded-md text-center">Kembali</a>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            
        }, 1000);

    });
</script>
@endsection