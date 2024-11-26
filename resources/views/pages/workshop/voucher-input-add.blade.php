@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <form action="#" class="space-y-4">
        <div>
            <label for="target" class="form-label">Target Customer</label>
            <select name="target" id="target" class="form-select" required>
                <option value="" selected disabled>Pilih</option>
                <option value="ABC Zone">ABC Zone</option>
                <option value="Body Pain (BP)">Body Pain (BP)</option>
                <option value="Service 5k, 10k">Service 5k, 10k</option>
            </select>
        </div>
        <div>
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
        </div>
        <div>
            <label for="code" class="form-label">Kode Voucher</label>
            <input type="text" name="code" id="code" class="form-control" required>
        </div>
        <div class="md:w-1/2 md:pr-3">
            <label for="masa_berlaku" class="form-label">Masa Berlaku</label>
            <input type="text" name="masa_berlaku" id="masa_berlaku" class="form-control" required>
        </div>
        <div class="md:grid md:grid-cols-2 md:gap-4">
            <div>
                <label for="banner_desk" class="form-label">Upload Banner Desktop</label>
                <input type="file" name="banner_desk" id="banner_desk" class="form-files" required>
            </div>
            <div>
                <label for="banner_mob" class="form-label">Upload Banner Mobile</label>
                <input type="file" name="banner_mob" id="banner_mob" class="form-files" required>
            </div>
        </div>
        <div>
            <label for="snk" class="form-label">Syarat & Ketentuan</label>
            <textarea name="snk" id="snk" class="form-control" cols="3" required></textarea>
        </div>
        <div>&nbsp;</div>
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