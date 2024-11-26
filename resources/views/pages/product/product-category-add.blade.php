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
                <label class="form-label">Status</label>
                <div class="flex gap-6">
                    <div class="flex items-center border border-gray-400 rounded-md">
                        <input type="radio" checked id="active" value="active" name="tipe_penjual" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                        <label for="active" class="flex flex-col cursor-pointer p-3">
                            <span class="text-sm font-ibm">Aktif</span>
                        </label>
                    </div>
                    <div class="flex items-center border border-gray-400 rounded-md">
                        <input type="radio" id="notActive" value="notActive" name="tipe_penjual" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                        <label for="notActive" class="flex flex-col cursor-pointer p-3">
                            <span class="text-sm font-ibm">Tidak Aktif</span>
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <label for="sort" class="form-label">Sort</label>
                <input type="number" name="sort" id="sort" class="form-control">
            </div>
            <div>
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" cols="2"></textarea>
            </div>
            <div>&nbsp;</div>
            <div class="grid grid-cols-2 gap-4">
                <button class="buttons orange py-2.5 rounded-md w-full">Simpan</button>
                <a href="{{ route('product.category', app()->getLocale()) }}" class="buttons-outline py-2.5 rounded-md w-full text-center">Kembali</a>
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