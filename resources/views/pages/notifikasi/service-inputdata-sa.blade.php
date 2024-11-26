@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="flex items-end justify-between">
        <div class="max-sm:w-full">
            <label class="form-label">Cari per Minggu</label>
            <div class="inline-flex rounded-md shadow-sm max-sm:w-full" role="group">
                <button type="button" class="px-4 py-2 text-sm font-medium bg-secondarys border border-gray-400 rounded-s-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-all duration-150 ease-in">
                    <i class='bx bx-left-arrow-alt text-xl'></i>
                </button>
                <button type="button" disabled class="px-4 py-2.5 text-sm font-medium max-sm:w-full bg-gray-50 border-t border-b border-gray-400 focus:z-10 dark:bg-gray-800 dark:border-gray-700">
                    {{ $data_period['start'] .' - '. $data_period['end'] }}
                </button>
                <button type="button" class="px-4 py-2 text-sm font-medium bg-secondarys border border-gray-400 rounded-e-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-all duration-150 ease-in">
                    <i class='bx bx-right-arrow-alt text-xl'></i>
                </button>
            </div>
        </div>
        <div class="">
            <button class="buttons-outline green py-2.5 rounded-md" id="dropdownDownload" data-dropdown-toggle="btn-download">
                <i class='bx bxs-file'></i>
                Export Xls
            </button>
            <!-- Dropdown menu -->
            <div id="btn-download" class="z-10 hidden bg-secondarys divide-y divide-gray-100 rounded-lg shadow w-56 dark:bg-gray-700">
                <ul class="py-2 text-xs text-gray-700 dark:text-gray-300 divide-y divide-gray-400 dark:divide-gray-600" aria-labelledby="dropdownDownload">
                    <li>
                        <a href="#" class="flex items-center gap-1 px-4 py-2 hover:bg-primarys dark:hover:bg-gray-600">
                            <span>Export minggu ke 140 ( 26 - 01 Februari 2025 )</span>
                            <i class='bx bxs-download'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-1 px-4 py-2 hover:bg-primarys dark:hover:bg-gray-600">
                            <span>Export minggu ke 120 ( 26 - 01 Februari 2025 )</span>
                            <i class='bx bxs-download'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-1 px-4 py-2 hover:bg-primarys dark:hover:bg-gray-600">
                            <span>Export minggu ke 110 ( 26 - 01 Februari 2025 )</span>
                            <i class='bx bxs-download'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div class="table-input-service">
            <div class="time-tipe">
                <div class="label-service">Pukul</div>
                @foreach (["07:00", "07:30", "08:00", "08:30", "09:00", "09:30", "10:00"] as $key => $time)
                <div class="time-service">{{ $time }}</div>
                @endforeach
            </div>
            <div class="time-tipe">
                <div class="label-service">Tipe Service</div>
                @foreach (["07:00", "07:30", "08:00", "08:30", "09:00", "09:30", "10:00"] as $key => $time)
                <div class="divide-y divide-gray-400">
                    <div class="text-tipe">PM</div>
                    <div class="text-tipe">GR</div>
                </div>
                @endforeach
            </div>
            <div class="grow overflow-scroll">
                <div class="flex">
                    @foreach (["minggu", "senin", "selasa", "rabu", "kamis", "jumat", "sabtu"] as $key => $day)
                    <div class="table-stall">
                        <div class="label-stall">
                            <div>{{ $key+1 }}</div>
                            <div>{{ $day }}</div>
                        </div>
                        <div class="divide-y divide-gray-400">
                            @foreach (["07:00", "07:30", "08:00", "08:30", "09:00", "09:30", "10:00"] as $key => $time)
                            <div class="box-stall">
                                <div class="item-stall not-active"></div>
                                <div class="item-stall active" data-modal-target="modal-input-service" data-modal-toggle="modal-input-service"></div>
                                <div class="item-stall active" data-modal-target="modal-input-service" data-modal-toggle="modal-input-service"></div>
                                <div class="item-stall active" data-modal-target="modal-input-service" data-modal-toggle="modal-input-service"></div>
                            </div>
                            <div class="box-stall">
                                <div class="item-stall active" data-modal-target="modal-input-service" data-modal-toggle="modal-input-service"></div>
                                <div class="item-stall not-active"></div>
                                <div class="item-stall booked @if($loop->even) green @endif" data-modal-target="modal-info-service" data-modal-toggle="modal-info-service">@if($loop->even) Web @else Dealer @endif</div>
                                <div class="item-stall active" data-modal-target="modal-input-service" data-modal-toggle="modal-input-service"></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-10 flex flex-wrap justify-end gap-1 max-w-[30%] ml-auto">
            <small class="bg-orange-500 text-gray-100 capitalize rounded-md px-3 py-1 text-[11px]">sudah dibooking</small>
            <small class="bg-green-600 text-gray-100 capitalize rounded-md px-3 py-1 text-[11px]">sudah dibooking</small>
            <small class="bg-gray-800 text-gray-100 capitalize rounded-md px-3 py-1 text-[11px] dark:border dark:border-gray-300">Belum di setting</small>
            <small class="bg-gray-50 border border-gray-400 capitalize rounded-md px-3 py-1 text-[11px] dark:text-gray-800">siap diisi</small>
        </div>
    </div>
</div>

<!-- Main modal -->
<div id="modal-input-service" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Input Data Service <span id="time-input-service"></span>
                </h3>
                <button type="button" id="input-close" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-input-service">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4 hidden" id="input-content">
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
                                <input type="text" name="nohp" id="nohp" class="form-control group" placeholder="123-45-678" required>
                            </div>
                        </div>
                        <div>
                            <label for="nohp_lain" class="form-label">Telepon Lainnya <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <span class="font-medium">+62</span>
                                </div>
                                <input type="text" name="nohp_lain" id="nohp_lain" class="form-control group" placeholder="123-45-678" required>
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
                            <select name="model" class="form-control" id="model" required="">
                                <option value="">Pilih</option>
                                <option label="Brv" value="0" selected>Brv</option>
                                <option label="Hrv" value="1">Hrv</option>
                                <option label="Wrv" value="2">Wrv</option>
                            </select>
                        </div>
                        <div>
                            <label for="jam_service" class="form-label">Tahun <span class="text-red-500">*</span></label>
                            <select name="jam_service" class="form-control" id="jam_service" required="">
                                <option value="">Pilih</option>
                                <option value="2024" selected>2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
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

                    <div>&nbsp;</div>
                    <div class="pb-4">
                        <button type="submit" class="buttons py-2.5 bg-orange-500 hover:bg-orange-600 w-full rounded-md text-base">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- info service modal -->
<div id="modal-info-service" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Info Data Service <span id="time-info-service"></span>
                </h3>
                <button type="button" id="info-close" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-info-service">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4 text-sm hidden" id="info-content">
                
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            tableService.init();
        }, 1000);

        let tableService = {
            init: function() {
                tableService.inputService();
                tableService.infoService();
            },
            inputService: function() {
                let boxs = document.querySelectorAll(".item-stall.active");
                let inputTime = document.querySelector("#time-input-service");
                let inputContent = document.querySelector("#input-content");
                let inputClose = document.querySelector("#input-close");

                boxs.forEach(element => {
                    element.addEventListener("click", function() {
                        // example for get data with ajax
                        let listime = ["07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00"];
                        let random = listime[Math.floor(Math.random() * listime.length)];
                        setTimeout(() => {
                            inputTime.innerHTML = `(${random} - GR)`;
                            inputContent.classList.remove("hidden");
                        }, 1000);
                    });
                });

                inputClose.addEventListener("click", function() {
                    inputTime.innerHTML = "";
                    inputContent.classList.add("hidden");
                });
            },
            infoService: function() {
                let boxs = document.querySelectorAll(".item-stall.booked");

                let infoTime = document.querySelector("#time-info-service");
                let infoContent = document.querySelector("#info-content");
                let infoClose = document.querySelector("#info-close");

                boxs.forEach(element => {
                    element.addEventListener("click", function() {
                        // example for get data with ajax
                        let listime = ["07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00"];
                        let random = listime[Math.floor(Math.random() * listime.length)];
                        setTimeout(() => {
                            infoTime.innerHTML = `(${random} - GR)`;
                            infoContent.classList.remove("hidden");
                            infoContent.innerHTML = tableService.infoTemplate();
                        }, 1000);
                    });
                });

                infoClose.addEventListener("click", function() {
                    infoTime.innerHTML = "";
                    infoContent.classList.add("hidden");
                    infoContent.innerHTML = "";
                });
            },
            infoTemplate: function() {
                return `<div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <a href="{{ route('requestservice.showsa', ['language' => app()->getLocale(), 'id' => 1]) }}" class="buttons-outline rounded-md text-xs py-1.5">Lihat Data</a>
                            <button class="buttons-outline rounded-md text-xs py-1.5">Arsipkan</button>
                        </div>
                        <div class="text-xs text-right">*Created time 2024-10-08 10:41:27</div>
                    </div>
                    <div>
                        <span class="badge-blue">Customer</span>
                        <div>Marianti</div>
                        <div>08128472812</div>
                    </div>
                    <div>
                        <span class="badge-blue">Info</span>
                        <div>Perawatan Berkala</div>
                        <div>Honda BR-V</div>
                        <div>B 1234 CCC</div>
                    </div>
                    <div>
                        <span class="badge-blue">Tanggal Service</span>
                        <div>Kamis, 12 Oktober 2024</div>
                        <div>08:00</div>
                    </div>
                    <div>
                        <div class="flex">
                            <div class="w-20">Sumber</div>
                            <div>: Dealer</div>
                        </div>
                        <div class="flex">
                            <div class="w-20">SA</div>
                            <div>: Tanto</div>
                        </div>
                    </div>
                    <div>
                        <label for="writenote" class="ms-1">Tulis Catatan</label>
                        <textarea name="note" id="writenote" class="form-control mt-1.5" cols="2"></textarea>
                    </div>
                </div>`;
            }
        }
    });
</script>
@endsection