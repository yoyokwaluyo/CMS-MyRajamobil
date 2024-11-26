@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="text-2xl font-ibm mb-10">Data Customer</div>
    <form method="POST" action="#" class="space-y-4">
        @csrf
        <div class="space-y-4">
            <span class="badge-blue">Data Diri</span>
            <div>
                <label for="nama" class="form-label">Nama <span class="text-red-500">*</span></label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            <div>
                <label for="nohp" class="form-label">Telepon <span class="text-red-500">*</span></label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <span class="font-medium">+62</span>
                    </div>
                    <input type="text" name="nohp" id="nohp" class="form-control group form-validation" placeholder="123-45-678" required>
                </div>
            </div>
            <div>
                <label for="nohp_lain" class="form-label">Telepon Lainnya <span class="text-red-500">*</span></label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <span class="font-medium">+62</span>
                    </div>
                    <input type="text" name="nohp_lain" id="nohp_lain" class="form-control group form-validation" placeholder="123-45-678" required>
                </div>
            </div>
            <div>
                <label for="email" class="form-label">Email <span class="text-red-500">*</span></label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div>
                <label for="alamat" class="form-label">Alamat <span class="text-red-500">*</span></label>
                <input type="text" id="alamat" name="alamat" class="form-control" required>
            </div>
            <div>
                <label for="hub_via" class="form-label">Minta Dihubungi Via <span class="text-red-500">*</span></label>
                <select name="hub_via" id="hub_via" class="form-control" required="">
                    <option value="" disabled="" selected="">Pilih</option>
                    <option value="telephone">Telephone</option>
                    <option value="email">Email</option>
                    <option value="whatsapp">Whatsapp</option>
                </select>
            </div>
        </div>

        <div class="space-y-4">
            <span class="badge-blue">Jenis Mobil</span>
            <div>
                <label for="model" class="form-label">Model <span class="text-red-500">*</span></label>
                <select name="model" class="form-control form-validation" id="model" required="">
                    <option value="">Pilih</option>
                    <option label="Brv" value="0" selected>Brv</option>
                    <option label="Hrv" value="1">Hrv</option>
                    <option label="Wrv" value="2">Wrv</option>
                </select>
            </div>
            <div>
                <label for="no_polisi" class="form-label">No Polisi <span class="text-red-500">*</span></label>
                <input type="text" id="no_polisi" name="no_polisi" class="form-control" required>
            </div>
            <div>
                <label for="kilometer" class="form-label">Kilometer <span class="text-red-500">*</span></label>
                <input type="text" id="kilometer" name="kilometer" class="form-control" required>
            </div>
            <div>
                <label for="keluhan" class="form-label">Keluhan <span class="text-red-500">*</span></label>
                <input type="text" id="keluhan" name="keluhan" class="form-control" required>
            </div>
        </div>

        <div class="space-y-4">
            <span class="badge-blue">Rencana Service</span>
            <div>
                <label for="model" class="form-label">Tipe Service <span class="text-red-500">*</span></label>
                <select name="model" class="form-control form-validation" id="model" required="">
                    <option value="">Pilih</option>
                    <option label="PM" value="0" selected>General Service</option>
                    <option label="GM" value="1">Service Berkala</option>
                </select>
            </div>
            <div>
                <label for="tgl_service" class="form-label">Tanggal Service <span class="text-red-500">*</span></label>
                <input type="text" id="tgl_service" name="tgl_service" class="form-control" required>
            </div>
            <div>
                <label for="jam_service" class="form-label">Jam Service <span class="text-red-500">*</span></label>
                <select name="jam_service" class="form-control form-validation" id="jam_service" required="">
                    <option value="">Pilih</option>
                    <option value="08:00" selected>08:00</option>
                    <option value="09:00">09:00</option>
                </select>
            </div>
        </div>
        <div>&nbsp;</div>
        <div class="md:col-span-2 md:pr-6 mt-10 flex flex-col gap-4 items-center justify-center">
            <button type="submit" class="buttons py-2.5 bg-orange-500 hover:bg-orange-600 w-full md:w-1/2 rounded-md text-base">Edit</button>
            <a href="{{ route('requestservice.sa', app()->getLocale()) }}" class="buttons-outline py-2.5 w-full md:w-1/2 rounded-md text-base text-center hover:bg-gray-500 hover:text-white">Kembali</a>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<script type="text/javascript" defer>
    addEventListener("DOMContentLoaded", (event) => {

    });
</script>
@endsection