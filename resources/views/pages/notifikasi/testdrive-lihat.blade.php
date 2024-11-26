@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="text-2xl font-ibm mb-4">Data Customer</div>
    <div class="space-y-4">
        <div class="pt-3">
            <span class="badge-blue">Data Kendaraan</span>
            <div class="w-full md:w-1/2 grid md:grid-cols-2 font-poppins text-sm mt-2 border-b border-gray-300 pb-2">
                <div class="grow font-medium">Model</div>
                <div class="grow font-semibold">WR-V</div>
            </div>
        </div>
        <div class="pt-3">
            <span class="badge-blue">Data Diri</span>
            <div class="w-full md:w-1/2 grid md:grid-cols-2 font-poppins text-sm mt-2 border-b border-gray-300 pb-2">
                <div class="grow font-medium">Nama</div>
                <div class="grow font-semibold">Esmeralda Kulas</div>
            </div>
            <div class="w-full md:w-1/2 grid md:grid-cols-2 font-poppins text-sm mt-2 border-b border-gray-300 pb-2">
                <div class="grow font-medium">Alamat</div>
                <div class="grow font-semibold">Depok</div>
            </div>
            <div class="w-full md:w-1/2 grid md:grid-cols-2 font-poppins text-sm mt-2 border-b border-gray-300 pb-2">
                <div class="grow font-medium">Tanggal Testdrive</div>
                <div class="grow font-semibold">11 Desember 2024</div>
            </div>
            <div class="w-full md:w-1/2 grid md:grid-cols-2 font-poppins text-sm mt-2 border-b border-gray-300 pb-2">
                <div class="grow font-medium">Waktu</div>
                <div class="grow font-semibold">09:00</div>
            </div>
            <div class="w-full md:w-1/2 grid md:grid-cols-2 font-poppins text-sm mt-2 border-b border-gray-300 pb-2">
                <div class="grow font-medium">Phone</div>
                <div class="grow font-semibold">+628291829489</div>
            </div>
            <div class="w-full md:w-1/2 grid md:grid-cols-2 font-poppins text-sm mt-2 border-b border-gray-300 pb-2">
                <div class="grow font-medium">Deskripsi</div>
                <div class="grow font-semibold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti</div>
            </div>
            <div class="w-full md:w-1/2 grid md:grid-cols-2 font-poppins text-sm mt-2 border-b border-gray-300 pb-2">
                <div class="grow font-medium">Tanggal Dibuat</div>
                <div class="grow font-semibold">25 Oktober 2024</div>
            </div>
        </div>
        <div class="pt-6">
            <a href="{{ route('requesttestdrive', app()->getLocale()) }}" class="buttons-outline py-2 w-full md:w-1/2 rounded-md text-sm text-center hover:bg-gray-500 hover:text-white">Kembali</a>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript" defer>
    addEventListener("DOMContentLoaded", (event) => {

    });
</script>
@endsection