@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="grid-show-data grid-cols-2 md:grid-cols-4">
    <a href="{{ route('arsipdo', ['language' => app()->getLocale(), 'slug' => 'do']) }}" class="item-grid @if (\Request::segment(count(Request::segments())) == 'do') active @endif">
        <div class="item-title">50</div>
        <div class="item-subtitle">DO</div>
    </a>
    <a href="{{ route('arsipdo', ['language' => app()->getLocale(), 'slug' => 'prospek-pribadi']) }}" class="item-grid @if (\Request::segment(count(Request::segments())) == 'prospek-pribadi') active @endif">
        <div class="item-title">5</div>
        <div class="item-subtitle">Prospek Pribadi</div>
    </a>
    <a href="{{ route('arsipdo', ['language' => app()->getLocale(), 'slug' => 'others']) }}" class="item-grid @if (\Request::segment(count(Request::segments())) == 'others') active @endif">
        <div class="item-title">1</div>
        <div class="item-subtitle">Others</div>
    </a>
    <a href="{{ route('arsipdo', ['language' => app()->getLocale(), 'slug' => 'histori']) }}" class="item-grid @if (\Request::segment(count(Request::segments())) == 'histori') active @endif">
        <div class="item-title">1</div>
        <div class="item-subtitle">History</div>
    </a>
</div>
<div class="wrapper-card">
    <div class="flex justify-end items-end max-sm:justify-center gap-4">
        <div>
            <button class="buttons-outline rounded-md py-1.5 flex gap-2 items-center" data-modal-target="modal-filter" data-modal-toggle="modal-filter">
                <i class='bx bx-filter text-xl'></i>
                Filter
            </button>
        </div>
    </div>
    <div class="mt-6 md:mt-10 space-y-4">
        <!-- badge-blue, badge-gray, badge-red, badge-green, badge-yellow, badge-indigo, badge-purple, badge-pink -->

        <div class="card-list-prospek">
            <div class="list-info">
                <span class="badge-blue">Low Prospek</span>
                <div class="flex items-center gap-1">
                    <i class='bx bxs-map text-lg'></i>
                    <span class="font-poppins font-medium text-xs">Jakarta Selatan</span>
                </div>
            </div>
            <div class="list-detail">
                <div class="list-bio">
                    <div class="list-profile">
                        <a href="#">
                            <img src="http://127.0.0.1:8000/image/profil.jpg" alt="image" class="">
                        </a>
                    </div>
                    <div class="font-poppins text-sm">
                        <a href="#" class="font-semibold">Merryane</a>
                        <div class="font-medium mb-2">Brv N7X</div>
                        <button type='button' class='buttons orange py-1 text-xs rounded-md' data-modal-target="modal-detail" data-modal-toggle="modal-detail">Lihat</button>
                    </div>
                </div>
                <div class="list-button">
                    <div class='btn-group-table'>
                        <button class='max-sm:px-[19px!important] text-xs btn orange'>Kembalikan</button>
                        <a href='#' class='text-xs btn btn-outline'>Hapus</a>
                    </div>
                </div>
            </div>
            <div class="text-xs font-medium text-end">Note : this is note from leads</div>
        </div>
        <div class="card-list-prospek">
            <div class="list-info">
                <span class="badge-green">Low Prospek</span>
                <div class="flex items-center gap-1">
                    <i class='bx bxs-map text-lg'></i>
                    <span class="font-poppins font-medium text-xs">Jakarta Selatan</span>
                </div>
            </div>
            <div class="list-detail">
                <div class="list-bio">
                    <div class="list-profile">
                        <img src="http://127.0.0.1:8000/image/profil.jpg" alt="image" class="">
                    </div>
                    <div class="font-poppins text-sm">
                        <div class="font-semibold">Merryane</div>
                        <div class="font-medium mb-2">Brv N7X</div>
                        <button type='button' class='buttons orange py-1 text-xs rounded-md' data-modal-target="modal-detail" data-modal-toggle="modal-detail">Lihat</button>
                    </div>
                </div>
                <div class="list-button">
                    <div class='btn-group-table'>
                        <button class='max-sm:px-[19px!important] text-xs btn orange'>Kembalikan</button>
                        <a href='#' class='text-xs btn btn-outline'>Hapus</a>
                    </div>
                </div>
            </div>
            <div class="text-xs font-medium text-end">Note : this is note from leads</div>
        </div>

        <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li>
                        <a href="#" class="">
                            <span class="sr-only">Previous</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="">1</a>
                    </li>
                    <li>
                        <a href="#" class="">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="active">3</a>
                    </li>
                    <li>
                        <a href="#" class="">4</a>
                    </li>
                    <li>
                        <a href="#" class="">5</a>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- state not found -->
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-200 dark:bg-gray-700 dark:text-red-400" role="alert">
            <span class="font-medium">Mohon Maaf.. hasil pencarian Anda tidak dapat ditemukan.</span> <br>
            Silakan lakukan pencarian dengan kata kunci / filter lain.
        </div>

    </div>
</div>

<!-- Filter modal -->
<div id="modal-filter" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-ibm dark:text-white">
                    Filter
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-filter">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 px-6">
                <form action="#" class="space-y-4">
                    <div>
                        <label for="date_range" class="form-label">Pilih Tanggal</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class='bx bxs-calendar text-xl dark:text-gray-300'></i>
                            </div>
                            <input type="text" name="date_range" id="date_range" class="form-control group form-validation" required>
                        </div>
                    </div>
                    <div>
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control form-validation" required="">
                    </div>
                    <div class="space-y-4 divide-gray-300 divide-y">
                        <div>
                            <!-- model yg nampil hanya yg ada di arsip -->
                            <label class="form-label mt-3">Model</label>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="model" class="text-sm form-label mb-0">Brio</label>
                                <input id="model" name="model[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                        </div>
                        <div>
                            <label class="form-label mt-3">Kategori Arsip</label>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="beli_tempat_lain" class="text-sm form-label mb-0">Beli Tempat Lain</label>
                                <input id="beli_tempat_lain" name="kategori[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="tidak_bisa_dihubungi" class="text-sm form-label mb-0">Tidak Bisa Dihubungi</label>
                                <input id="tidak_bisa_dihubungi" name="kategori[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="dana_tidak_cukup" class="text-sm form-label mb-0">Dana Tidak Cukup</label>
                                <input id="dana_tidak_cukup" name="kategori[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="ditolak_leasing" class="text-sm form-label mb-0">Ditolak Leasing</label>
                                <input id="ditolak_leasing" name="kategori[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="lain_lain" class="text-sm form-label mb-0">Lain Lain</label>
                                <input id="lain_lain" name="kategori[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                        </div>
                        <div>
                            <label class="form-label mt-3">Kualitas Prospek</label>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="very_low" class="text-sm form-label mb-0">Very Low</label>
                                <input id="very_low" name="kualitas[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="low" class="text-sm form-label mb-0">Low</label>
                                <input id="low" name="kualitas[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                        </div>
                        <div>
                            <label class="form-label mt-3">Sumber Prospek</label>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="pameran" class="text-sm form-label mb-0">Pameran/Movex</label>
                                <input id="pameran" name="sumber[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="referensi" class="text-sm form-label mb-0">Referensi</label>
                                <input id="referensi" name="sumber[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="repeat_order" class="text-sm form-label mb-0">Repeat Order</label>
                                <input id="repeat_order" name="sumber[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="rajamobil" class="text-sm form-label mb-0">Rajamobil</label>
                                <input id="rajamobil" name="sumber[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="iklan_online" class="text-sm form-label mb-0">Iklan Online Lainnya</label>
                                <input id="iklan_online" name="sumber[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="iklan_media" class="text-sm form-label mb-0">Iklan Media Cetak</label>
                                <input id="iklan_media" name="sumber[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="canvasing" class="text-sm form-label mb-0">Canvasing</label>
                                <input id="canvasing" name="sumber[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                            <div class="flex items-center justify-between mb-2 md:max-w-[50%]">
                                <label for="sumber_lain" class="text-sm form-label mb-0">Sumber Lainnya</label>
                                <input id="sumber_lain" name="sumber[brio]" type="checkbox" value="" class="form-checkbox">
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2 py-4">
                        <button type="submit" class="buttons w-full py-2.5 bg-orange-500 hover:bg-orange-600 rounded-md text-base">Filter</button>
                        <button type="submit" class="buttons-outline w-full py-2.5 rounded-md text-base hover:bg-gray-500 hover:text-white dark:text-gray-300 dark:border-gray-500">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Detail modal -->
<div id="modal-detail" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-ibm dark:text-white">
                    Detail Customer
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-detail">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 px-6">
                <div class="flex items-center justify-end gap-1">
                    <i class='bx bxs-map text-lg'></i>
                    <span class="font-poppins font-medium text-xs">Jakarta Selatan</span>
                </div>
                <div class="flex items-center gap-4">
                    <div>
                        <img src="http://127.0.0.1:8000/image/profil.jpg" alt="image" class="w-[80px] h-[80px] rounded-md shadow-md">
                    </div>
                    <div class="font-poppins text-xs">
                        <div class="text-sm font-semibold mb-1">Merryane</div>
                        <div class="">ID : 565652</div>
                        <div class="mb-1">3 bulan yang lalu</div>
                        <a href="mailto:Merryane@gmail.com?subject=Penawaran Honda&body=Hai, Test3" class="badge-blue">Merryane@gmail.com</a>
                    </div>
                </div>
                <div class="font-poppins text-sm mt-6 font-medium space-y-4">
                    <div class="relative overflow-x-auto">
                        <table class="table border border-gray-300">
                            <thead>
                                <tr class="bg-primarys">
                                    <th>Model</th>
                                    <th>TDP</th>
                                    <th>Tenor</th>
                                    <th>Angsuran</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-300">
                                <tr>
                                    <td>Brv N7X</td>
                                    <td>Rp. 33.333.333</td>
                                    <td>1 Thn (12x)</td>
                                    <td>Rp. 22.222.222</td>
                                </tr>
                                <tr>
                                    <td>Brv N7X</td>
                                    <td>Rp. 33.333.333</td>
                                    <td>1 Thn (12x)</td>
                                    <td>Rp. 22.222.222</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>Sumber Prospek - <span class="font-semibold">RajaMobil</span></div>
                    <div>Status Histori - <span class="font-semibold">Baru</span></div>
                    <div class="text-xs">Prospek Tersedia dari Website Dealer id 1425</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            
        }, 1000);

        flatpickr("#date_range", {
            mode: "range",
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "today",
            onChange: function(selectedDates, dateStr, instance) {
                console.log("change");
            },
        });
    });
</script>
@endsection