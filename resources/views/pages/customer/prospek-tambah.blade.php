@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="text-2xl font-ibm mb-10">Tambah Prospek</div>
    <form method="POST" action="#" class="grid md:grid-cols-2 gap-6">
        @csrf
        <div class="md:col-span-2">
            <label class="form-label">Status <span class="text-red-500">*</span></label>
            <div class="flex gap-6">
                <div class="flex items-center border border-gray-400 rounded-md">
                    <input type="radio" checked id="showroom_baru" value="showroom_baru" name="tipe_penjual" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                    <label for="showroom_baru" class="flex flex-col cursor-pointer p-3">
                        <span class="text-sm font-ibm">Baru</span>
                    </label>
                </div>
                <div class="flex items-center border border-gray-400 rounded-md">
                    <input type="radio" id="showroom_bekas" value="showroom_bekas" name="tipe_penjual" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                    <label for="showroom_bekas" class="flex flex-col cursor-pointer p-3">
                        <span class="text-sm font-ibm">Arsip (Prospek Pribadi)</span>
                    </label>
                </div>
            </div>
        </div>
        <div>
            <label for="nama" class="form-label">Nama <span class="text-red-500">*</span></label>
            <input type="text" id="nama" name="nama" class="form-control" required>
        </div>
        <div>
            <label for="model" class="form-label">Model <span class="text-red-500">*</span></label>
            <select name="model" class="form-control form-validation" id="model" required="">
                <option value="" selected="" disabled="">Pilih</option>
                <option label="Brv" value="0">Brv</option>
                <option label="Hrv" value="1">Hrv</option>
                <option label="Wrv" value="2">Wrv</option>
            </select>
        </div>
        <div>
            <label for="tipe" class="form-label">Tipe <span class="text-red-500">*</span></label>
            <select name="tipe" id="tipe" class="form-control" required="">
                <option value="" disabled="" selected="">Pilih</option>
                <option value="MT 1.5 CVT">MT 1.5 CVT</option>
                <option value="AT 1.5 VVT">AT 1.5 VVT</option>
            </select>
        </div>
        <div>
            <label for="sumber" class="form-label">Sumber Prospek <span class="text-red-500">*</span></label>
            <select name="sumber" id="sumber" class="form-control" required="">
                <option value="" disabled="" selected="">Pilih</option>
                <option value="pameran/movex">pameran/movex</option>
                <option value="referensi">referensi</option>
                <option value="canvasing">canvasing</option>
                <option value="sumber lainya">sumber lainya</option>
            </select>
        </div>
        <div>
            <label for="warna" class="form-label">Warna <span class="text-red-500">*</span></label>
            <select name="warna" id="warna" class="form-control" required="">
                <option value="" disabled="" selected="">Pilih</option>
                <option value="White Orchid Pearl">White Orchid Pearl</option>
            </select>
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
            <label for="email" class="form-label">Email <span class="text-red-500">*</span></label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div>
            <label for="provinsi" class="form-label">Provinsi <span class="text-red-500">*</span></label>
            <select name="provinsi" id="provinsi" class="form-control form-validation" required="">
                <option value="" disabled="" selected="">Pilih</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Banten">Banten</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
            </select>
        </div>
        <div>
            <label for="kota" class="form-label">Kota Dealer <span class="text-red-500">*</span></label>
            <select name="kota" id="kota" class="form-control form-validation" required="">
                <option value="" disabled="" selected="">Pilih</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Semarang">Semarang</option>
                <option value="Surabaya">Surabaya</option>
                <option value="Depok">Depok</option>
            </select>
        </div>
        <div>
            <label for="tanggal" class="form-label">Tanggal <span class="text-red-500">*</span></label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class='bx bxs-calendar text-xl'></i>
                </div>
                <input type="text" name="tanggal" id="tanggal" class="form-control group form-validation" required>
            </div>
        </div>
        <div>
            <label for="dp" class="form-label">DP <span class="text-red-500">*</span></label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <span class="font-medium">Rp</span>
                </div>
                <input type="text" name="dp" id="dp" class="form-control group form-validation" required>
            </div>
        </div>
        <div>
            <label for="angsuran" class="form-label">Angsuran <span class="text-red-500">*</span></label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <span class="font-medium">Rp</span>
                </div>
                <input type="text" name="angsuran" id="angsuran" class="form-control group form-validation" required>
            </div>
        </div>
        <div>
            <label for="tenor" class="form-label">Tenor <span class="text-red-500">*</span></label>
            <select name="tenor" id="tenor" class="form-control form-validation" required="">
                <option value="" disabled="" selected="">Pilih</option>
                <option value="1 Tahun">1 Tahun</option>
                <option value="2 Tahun">2 Tahun</option>
                <option value="3 Tahun">3 Tahun</option>
                <option value="4 Tahun">4 Tahun</option>
            </select>
        </div>
        <div>
            <label for="note" class="form-label">Catatan Lainnya <span class="text-red-500">*</span></label>
            <input type="text" id="note" name="note" class="form-control" required>
        </div>
        <div class="md:col-span-2 md:pr-6 mt-10 flex flex-col gap-4 items-center justify-center">
            <button type="submit" class="buttons py-2.5 bg-orange-500 hover:bg-orange-600 w-full md:w-1/2 rounded-md text-base">Tambah</button>
            <button type="submit" class="buttons-outline py-2.5 w-full md:w-1/2 rounded-md text-base hover:bg-gray-500 hover:text-white">Batal</button>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
<script>
    document.addEventListener("DOMContentLoaded", (event) => {
        flatpickr("#tanggal", {
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "today",
            maxDate: "2024-10-30",
            onChange: function(selectedDates, dateStr, instance) {
                console.log("change");
            },
        });
    });
</script>
@endsection