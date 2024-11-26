@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="">
        <form action="#" class="space-y-4">
            <div>
                <label for="page" class="form-label">Pilih Halaman</label>
                <select name="page" id="page" class="form-select">
                    <option value="" selected disabled>Pilih</option>
                    <option value="spare-part">Spare Part</option>
                    <option value="body-paint">Body Paint</option>
                    <option value="service">Service</option>
                </select>
            </div>
            <div>
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul">
            </div>
            <div>
                <label for="caption" class="form-label">Caption</label>
                <input type="text" class="form-control" id="caption">
            </div>
            <div>
                <label for="active" class="form-label">Status</label>
                <div class="flex gap-6">
                    <div class="flex items-center border border-gray-400 rounded-md">
                        <input type="radio" checked id="active" value="active" name="status" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                        <label for="active" class="flex flex-col cursor-pointer p-3">
                            <span class="text-sm font-ibm">Aktif</span>
                        </label>
                    </div>
                    <div class="flex items-center border border-gray-400 rounded-md">
                        <input type="radio" id="notActive" value="notActive" name="status" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                        <label for="notActive" class="flex flex-col cursor-pointer p-3">
                            <span class="text-sm font-ibm">Tidak Aktif</span>
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <label for="ya" class="form-label">Tambahkan Button</label>
                <div class="flex gap-6">
                    <div class="flex items-center border border-gray-400 rounded-md">
                        <input type="radio" id="ya" value="ya" name="button" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                        <label for="ya" class="flex flex-col cursor-pointer p-3">
                            <span class="text-sm font-ibm">Ya</span>
                        </label>
                    </div>
                    <div class="flex items-center border border-gray-400 rounded-md">
                        <input type="radio" checked id="tidak" value="tidak" name="button" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                        <label for="tidak" class="flex flex-col cursor-pointer p-3">
                            <span class="text-sm font-ibm">Tidak</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label for="imageD" class="form-label">Image Upload</label>
                    <input type="file" name="foto" id="imageD" class="form-files">
                </div>
                <div><img src="" alt="" class="hidden w-56 max-h-36 object-contain" id="image-desk"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label for="imageM" class="form-label">Image Upload Mobile</label>
                    <input type="file" name="foto" id="imageM" class="form-files">
                </div>
                <div><img src="" alt="" class="hidden w-56 max-h-36 object-contain" id="image-mob"></div>
            </div>
            <div>&nbsp;</div>
            <div class="grid grid-cols-2 gap-4">
                <button class="buttons orange py-2.5 rounded-md w-full">Simpan</button>
                <a href="{{ route('posting.banner', app()->getLocale()) }}" class="buttons-outline py-2.5 rounded-md w-full text-center">Kembali</a>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            form.init();
        }, 1000);

        let form = {
            init: function() {
                form.showimage();
            },
            showimage: function() {
                var imgD = document.getElementById('imageD');
                var imgPreviewD = document.getElementById('image-desk');
                var imgM = document.getElementById('imageM');
                var imgPreviewM = document.getElementById('image-mob');

                imgD.addEventListener('change', (event) => {
                    displayImage(event, imgPreviewD);
                });

                imgM.addEventListener('change', (event) => {
                    displayImage(event, imgPreviewM);
                });

                function displayImage(event, preview) {
                    var file = event.target.files[0];
                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            preview.src = e.target.result;
                            preview.classList.remove("hidden");
                        };
                        reader.readAsDataURL(file);
                    }
                }
            }
        }
    });
</script>
@endsection