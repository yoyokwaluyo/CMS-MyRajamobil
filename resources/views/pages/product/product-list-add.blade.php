@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">

    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="produk-tab" data-tabs-target="#produk" type="button" role="tab" aria-controls="produk" aria-selected="false">Produk</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="informasi-tab" data-tabs-target="#informasi" type="button" role="tab" aria-controls="informasi" aria-selected="false">Informasi Produk (Opsional)</button>
            </li>
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="produk" role="tabpanel" aria-labelledby="produk-tab">
            <form action="#" class="space-y-4">
                <div>
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Produk" autocomplete="off">
                </div>
                <div>
                    <label for="kategori" class="form-label">Kategori</label>
                    <select name="kategori" id="kategori" class="form-select">
                        <option value="" selected disabled>Pilih Kategori</option>
                        <option value="Honda Genuine">Honda Genuine</option>
                        <option value="Honda Automobile Oil">Honda Automobile Oil</option>
                    </select>
                </div>
                <div>
                    <label for="harga" class="form-label">Harga</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <span class="font-medium">Rp</span>
                        </div>
                        <input type="text" name="harga" id="harga" class="form-control group" placeholder="xxx-xxx-xxx" required>
                    </div>
                </div>
                <div>
                    <label for="image" class="form-label">Foto</label>
                    <input type="file" name="foto" id="image" class="form-files">
                </div>
                <div>
                    <label for="active" class="form-label">Status</label>
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
                    <label for="sort" class="form-label">Urutan</label>
                    <input type="number" class="form-control" id="sort">
                </div>
                <div>
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="2"></textarea>
                </div>
                <div>&nbsp;</div>
                <div class="grid grid-cols-2 gap-4">
                    <button class="buttons orange py-2.5 rounded-md w-full">Simpan</button>
                    <a href="{{ route('product.list', app()->getLocale()) }}" class="buttons-outline py-2.5 rounded-md w-full text-center">Kembali</a>
                </div>
            </form>
        </div>
        <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="informasi" role="tabpanel" aria-labelledby="informasi-tab">
            <form action="#">
                <div class="space-y-4" id="form-opsional">
                    <div class="relative space-y-4 p-4 border border-gray-400 rounded-md form-content" id="form-content-1" data-form="1">
                        <div>
                            <label for="foto-opsional" class="form-label">Foto</label>
                            <input type="file" name="foto-opsional[]" id="foto-opsional" class="form-files" required>
                        </div>
                        <div>
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul[]" id="judul" placeholder="Judul" required>
                        </div>
                        <div>
                            <label for="ringkasan" class="form-label">Ringkasan</label>
                            <textarea name="ringkasan[]" id="ringkasan" class="form-control" cols="2" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-end p-4">
                    <button type="button" class="buttons py-2.5 px-8 rounded-md inline-block" id="add-info">
                        <i class='bx bx-plus'></i>
                        Tambah Informasi
                    </button>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-10 p-4">
                    <button type="submit" class="buttons orange py-2.5 rounded-md w-full">Simpan</button>
                    <a href="{{ route('product.list', app()->getLocale()) }}" class="buttons-outline py-2.5 rounded-md w-full text-center">Kembali</a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            infoproduk.init();
        }, 1000);

        let infoproduk = {
            init: function() {
                infoproduk.addform();
            },
            addform: function() {
                let btn = document.querySelector("#add-info"),
                    form = document.querySelector("#form-opsional");

                btn.addEventListener("click", function() {
                    var countElement = document.querySelectorAll(".form-content"),
                        getLastForm = parseInt(countElement[countElement.length - 1].getAttribute("data-form")) + 1;
                    
                    form.insertAdjacentHTML("beforeend", infoproduk.templateForm(getLastForm));

                    let btnDelete = document.querySelectorAll(".btn-delete");
                    btnDelete.forEach(element => {
                        element.addEventListener("click", function() {
                            var attr = element.getAttribute("data-delete");
                            var form = document.querySelector("#form-content-" + attr);
                            
                            if (form) form.remove();
                        });
                    });
                });

            },
            templateForm: function(countForm) {
                var html = `<div class="relative space-y-4 p-4 border border-gray-400 rounded-md form-content" id="form-content-${countForm}" data-form="${countForm}">
                        <button type="button" class="absolute top-0 right-1 rounded-md hover:bg-gray-100 btn-delete" data-delete="${countForm}"><i class='bx bx-x text-2xl'></i></button>
                        <div>
                            <label for="foto-opsional-${countForm}" class="form-label">Foto</label>
                            <input type="file" name="foto-opsional[]" id="foto-opsional-${countForm}" class="form-files" required>
                        </div>
                        <div>
                            <label for="judul-${countForm}" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul[]" id="judul-${countForm}" placeholder="Judul" required>
                        </div>
                        <div>
                            <label for="ringkasan-${countForm}" class="form-label">Ringkasan</label>
                            <textarea name="ringkasan[]" id="ringkasan-${countForm}" class="form-control" cols="2" required></textarea>
                        </div>
                    </div>`;

                return html;
            }
        }
    });
</script>
@endsection