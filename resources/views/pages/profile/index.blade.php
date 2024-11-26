@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="text-2xl font-ibm mb-10">Informasi akun Anda</div>
    <form method="POST" action="#" class="grid md:grid-cols-2 gap-6">
        @csrf
        <div>
            <label for="name" class="form-label">Nama Lengkap <span class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div>
            <label for="email" class="form-label">Email <span class="text-red-500">*</span></label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div>
            <label for="username" class="form-label">Username <span class="text-red-500">*</span></label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div>
            <label for="password" class="form-label">Password Baru <span class="text-red-500">*</span></label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div>
            <label for="password_confirm" class="form-label">Ketik Ulang Password <span class="text-red-500">*</span></label>
            <input type="password" id="password_confirm" name="password_confirm" class="form-control" required>
        </div>
        <div>
            <label for="hubungi_saya" class="form-label">Tipe Penjual <span class="text-red-500">*</span></label>
            <select name="hubungi_saya" class="form-control form-validation" id="hubungi_saya" required="">
                <option value="" selected="" disabled="">Pilih</option>
                <option label="Sales Authorized Dealer" value="0">Sales Authorized Dealer</option>
                <option label="Individu" value="1">Individu</option>
                <option label="Showroom" value="2">Showroom</option>
            </select>
        </div>
        <div>
            <label for="provinsi" class="form-label">Pilih Provinsi<span class="text-red-500">*</span></label>
            <select name="provinsi" id="provinsi" class="form-control" required="">
                <option value="" disabled="" selected="">Pilih</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Banten">Banten</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
            </select>
        </div>
        <div>
            <label for="kota" class="form-label">Pilih Kota<span class="text-red-500">*</span></label>
            <select name="kota" id="kota" class="form-control" required="">
                <option value="" disabled="" selected="">Pilih</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Semarang">Semarang</option>
                <option value="Surabaya">Surabaya</option>
                <option value="Depok">Depok</option>
            </select>
        </div>
        <div>
            <label for="alamat" class="form-label">Alamat <span class="text-red-500">*</span></label>
            <input type="text" id="alamat" name="alamat" class="form-control" required>
        </div>
        <div>
            <label for="ig_acc" class="form-label">Instagram Acccount <span class="text-red-500">*</span></label>
            <input type="text" id="ig_acc" name="ig_acc" class="form-control" required>
        </div>
        <div class="md:col-span-2 md:pr-6 mt-10 text-center">
            <button type="submit" class="buttons py-2.5 bg-orange-500 hover:bg-orange-600 w-full md:w-1/2 rounded-md text-lg">
                Perbarui
            </button>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection