@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="">
        <form action="#" class="space-y-4">
            <div>
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div>
                <label for="nohp" class="form-label">Telepon</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <span class="font-medium">+62</span>
                    </div>
                    <input type="text" name="nohp" id="nohp" class="form-control group" placeholder="123-45-678" required>
                </div>
            </div>
            <div>
                <label for="nowa" class="form-label">Whatsapp</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <span class="font-medium">+62</span>
                    </div>
                    <input type="text" name="nowa" id="nowa" class="form-control group" placeholder="123-45-678" required>
                </div>
            </div>
            <div>
                <label for="image" class="form-label">Image</label>
                <input type="file" name="foto" id="image" class="form-files">
            </div>
            <div>
                <label for="kategori" class="form-label">Kategori</label>
                <select name="kategori" id="kategori" class="form-select">
                    <option value="service">Service</option>
                    <option value="body repair">Body Repair</option>
                </select>
            </div>
            <div class="md:col-span-2">
                <label class="form-label">Terbitkan</label>
                <div class="flex gap-6">
                    <div class="flex items-center border border-gray-400 rounded-md">
                        <input type="radio" checked id="show" value="show" name="tipe_penjual" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                        <label for="show" class="flex flex-col cursor-pointer p-3">
                            <span class="text-sm font-ibm">Show</span>
                        </label>
                    </div>
                    <div class="flex items-center border border-gray-400 rounded-md">
                        <input type="radio" id="hide" value="hide" name="tipe_penjual" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                        <label for="hide" class="flex flex-col cursor-pointer p-3">
                            <span class="text-sm font-ibm">Hide</span>
                        </label>
                    </div>
                </div>
            </div>
            <div>&nbsp;</div>
            <div class="grid grid-cols-2 gap-4">
                <button class="buttons orange py-2.5 rounded-md w-full">Simpan</button>
                <a href="{{ route('salesadvisor', app()->getLocale()) }}" class="buttons-outline py-2.5 rounded-md w-full text-center">Kembali</a>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {

        }, 6000);

    });
</script>
@endsection