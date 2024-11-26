@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="grid-show-data grid-cols-3">
    <a href="{{ route('myprospect', ['language' => app()->getLocale(), 'slug' => 'baru']) }}" class="item-grid @if (\Request::segment(count(Request::segments())) == 'baru') active @endif">
        <div class="item-title">50</div>
        <div class="item-subtitle">Baru</div>
    </a>
    <a href="{{ route('myprospect', ['language' => app()->getLocale(), 'slug' => 'prospek']) }}" class="item-grid @if (\Request::segment(count(Request::segments())) == 'prospek') active @endif">
        <div class="item-title">5</div>
        <div class="item-subtitle">Prospek</div>
    </a>
    <a href="{{ route('myprospect', ['language' => app()->getLocale(), 'slug' => 'outstanding-spk']) }}" class="item-grid @if (\Request::segment(count(Request::segments())) == 'outstanding-spk') active @endif">
        <div class="item-title">1</div>
        <div class="item-subtitle">Outstanding SPK</div>
    </a>
</div>
<div class="wrapper-card">
    <div class="flex justify-end items-end gap-4">
        <div>
            <!-- refresh page setelah pilih -->
            <select name="filter_prospek" id="filter_prospek" class="form-control py-2.5" required="">
                <option value="Semua" selected>Semua</option>
                <option value="Personal">Personal</option>
                <option value="Promo Saya">Promo Saya</option>
                <option value="Promo Dealer">Promo Dealer</option>
                <option value="Prospek Umum">Prospek Umum</option>
            </select>
        </div>
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
                        <a href="{{ route('myprospect.detail', ['language' => app()->getLocale(), 'id' => 1234, 'slug' => 'detail']) }}">
                            <img src="http://127.0.0.1:8000/image/profil.jpg" alt="image" class="">
                        </a>
                    </div>
                    <div class="font-poppins text-sm">
                        <a href="{{ route('myprospect.detail', ['language' => app()->getLocale(), 'id' => 1234, 'slug' => 'detail']) }}" class="font-semibold">Merryane</a>
                        <div class="font-medium mb-2">Brv N7X</div>

                        <a href='#' class='buttons orange py-1 text-xs rounded-md'>
                            <i class='bx bxs-phone'></i>
                            Telephone
                        </a>
                    </div>
                </div>
                <div class="list-button">
                    <div class='btn-group-table'>
                        <button class='max-sm:px-[19px!important] text-xs btn orange' data-modal-target="modal-arsip" data-modal-toggle="modal-arsip">Pindahkan ke Arsip</button>
                        <a href='#' class='text-xs btn btn-outline'>Hapus</a>
                    </div>
                </div>
            </div>
            <div class="text-xs font-medium text-end">Update : 23 Oktober 2024</div>
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
                        <a href="{{ route('myprospect.detail', ['language' => app()->getLocale(), 'id' => 1234, 'slug' => 'detail']) }}">
                            <img src="http://127.0.0.1:8000/image/profil.jpg" alt="image" class="">
                        </a>
                    </div>
                    <div class="font-poppins text-sm">
                        <a href="{{ route('myprospect.detail', ['language' => app()->getLocale(), 'id' => 1234, 'slug' => 'detail']) }}" class="font-semibold">Merryane</a>
                        <div class="font-medium mb-2">Brv N7X</div>

                        <a href='#' class='buttons orange py-1 text-xs rounded-md'>
                            <i class='bx bxs-phone'></i>
                            Telephone
                        </a>
                    </div>
                </div>
                <div class="list-button">
                    <div class='btn-group-table'>
                        <button class='max-sm:px-[19px!important] text-xs btn orange' data-modal-target="modal-arsip" data-modal-toggle="modal-arsip">Pindahkan ke Arsip</button>
                        <a href='#' class='text-xs btn btn-outline'>Hapus</a>
                    </div>
                </div>
            </div>
            <div class="text-xs font-medium text-end">Update : 23 Oktober 2024</div>
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
                        <label for="model" class="form-label">Pilih Model</label>
                        <select name="model" id="model" class="form-control form-validation" required="">
                            <option value="" disabled="" selected="">Pilih</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Honda">Honda</option>
                            <option value="Mitsubisi">Mitsubisi</option>
                        </select>
                    </div>
                    <div>
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control form-validation" required="">
                    </div>
                    <div>
                        <label for="date_range" class="form-label">Pilih Tanggal</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class='bx bxs-calendar text-xl dark:text-gray-300'></i>
                            </div>
                            <input type="text" name="date_range" id="date_range" class="form-control group form-validation" required>
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

<!-- Arsip modal -->
<div id="modal-arsip" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-ibm dark:text-white">
                    Arsip
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-arsip">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 px-6 dark:text-gray-300">
                <p class="text-sm mb-4">Prospek Anda akan kami arsipkan demi kenyamanan Anda. Jika Anda memiliki ulasan tentang prospek ini silahkan pilih pilihan berikut.</p>
                <form action="#" class="space-y-4">
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center border border-gray-400 rounded-md px-4 py-2">
                            <input type="radio" checked id="beli_tempat_lain" value="beli_tempat_lain" name="arsipkan" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                            <label for="beli_tempat_lain" class="mb-0 ml-4 flex flex-col cursor-pointer">
                                <span class="text-sm font-ibm">Beli Tempat Lain</span>
                            </label>
                        </div>
                        <div class="flex items-center border border-gray-400 rounded-md px-4 py-2">
                            <input type="radio" id="tidak_bisa_dihubungi" value="tidak_bisa_dihubungi" name="arsipkan" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                            <label for="tidak_bisa_dihubungi" class="mb-0 ml-4 flex flex-col cursor-pointer">
                                <span class="text-sm font-ibm">Tidak Bisa Dihubungi</span>
                            </label>
                        </div>
                        <div class="flex items-center border border-gray-400 rounded-md px-4 py-2">
                            <input type="radio" id="dana_tidak_cukup" value="dana_tidak_cukup" name="arsipkan" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                            <label for="dana_tidak_cukup" class="mb-0 ml-4 flex flex-col cursor-pointer">
                                <span class="text-sm font-ibm">Dana Tidak Cukup</span>
                            </label>
                        </div>
                        <div class="flex items-center border border-gray-400 rounded-md px-4 py-2">
                            <input type="radio" id="ditolak_leasing" value="ditolak_leasing" name="arsipkan" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                            <label for="ditolak_leasing" class="mb-0 ml-4 flex flex-col cursor-pointer">
                                <span class="text-sm font-ibm">Ditolak Leasing</span>
                            </label>
                        </div>
                        <div class="flex items-center border border-gray-400 rounded-md px-4 py-2">
                            <input type="radio" id="lain_lain" value="lain_lain" name="arsipkan" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                            <label for="lain_lain" class="mb-0 ml-4 flex flex-col cursor-pointer">
                                <span class="text-sm font-ibm">Lain Lain</span>
                            </label>
                        </div>
                    </div>
                    <div class="hidden arsip-lain-lain">
                        <textarea name="alasan_lain_lain" class="form-control" cols="2"></textarea>
                    </div>
                    <div class="space-y-2 py-4">
                        <button type="submit" class="buttons w-full py-2.5 bg-orange-500 hover:bg-orange-600 rounded-md text-base">Arsipkan</button>
                        <button type="submit" class="buttons-outline w-full py-2.5 rounded-md text-base hover:bg-gray-500 hover:text-white dark:text-gray-300 dark:border-gray-500">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            arsipkan.showreason();
        }, 1000);
        
        let arsipkan = {
            showreason: function() {
                let radio = document.querySelectorAll("input[name='arsipkan']");
                let reason = document.querySelector(".arsip-lain-lain");

                radio.forEach(element => {
                    element.addEventListener("click", function(e) {
                        if (e.target.value == "lain_lain") {
                            reason.classList.remove("hidden");
                            document.querySelector(".arsip-lain-lain textarea").setAttribute("required", "");
                        } else {
                            reason.classList.add("hidden");
                            document.querySelector(".arsip-lain-lain textarea").removeAttribute("required");
                        }
                    });
                });
            }
        }

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