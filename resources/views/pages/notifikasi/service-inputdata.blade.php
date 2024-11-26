@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="flex items-end justify-between max-sm:flex-col max-sm:gap-4">
        <div class="max-sm:w-full">
            <label class="form-label">Cari per Bulan</label>
            <div class="inline-flex rounded-md shadow-sm max-sm:w-full" role="group">
                <button type="button" class="px-4 py-2 text-sm font-medium bg-secondarys border border-gray-400 rounded-s-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-all duration-150 ease-in">
                    <i class='bx bx-left-arrow-alt text-xl'></i>
                </button>
                <button type="button" disabled class="px-4 py-2.5 text-sm font-medium max-sm:w-full w-40 bg-gray-50 border-t border-b border-gray-400 focus:z-10 dark:bg-gray-800 dark:border-gray-700">
                    Oktober 2024
                </button>
                <button type="button" class="px-4 py-2 text-sm font-medium bg-secondarys border border-gray-400 rounded-e-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-all duration-150 ease-in">
                    <i class='bx bx-right-arrow-alt text-xl'></i>
                </button>
            </div>
        </div>
        <div class="max-sm:w-full flex items-center gap-2">
            <div class="relative w-[250px]">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class='bx bx-search'></i>
                </div>
                <input type="text" name="nohp" id="nohp" class="form-control group py-2.5" placeholder="Cari data" required>
            </div>
            <div class="w-1/4 md:w-32">
                <select name="sortType" id="sortType" class="form-control py-2.5">
                    <option value="monthly" selected>Monthly</option>
                    <option value="weekly">Weekly</option>
                </select>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div class="content-period overflow-scroll" id="content-monthly">
            <div class="calendar-wrapper">
                <!-- Header hari dalam seminggu -->
                @foreach (['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'] as $dayName)
                    <div class="day-name">{{ $dayName }}</div>
                @endforeach

                <!-- Offset kosong untuk hari sebelum tanggal 1 -->
                @for ($i = 0; $i < $startOfMonth->dayOfWeek; $i++)
                    <div class="day-emtpy"></div>
                @endfor

                <!-- Menampilkan setiap tanggal di bulan -->
                @foreach ($daysInMonth as $day)
                    <div class="day" data-date="{{ $day['date'] }}">{{ $day['day'] }}</div>
                @endforeach

                <!-- Offset kosong untuk hari setelah tanggal 28/29/30/31 -->
                @for ($i = 0; $i < (35 - count($daysInMonth) - $startOfMonth->dayOfWeek); $i++)
                    <div class="day-emtpy"></div>
                @endfor
            </div>
            <div class="mt-10 space-y-2 hidden" id="show-action">
                <div class="font-medium" id="show-date">13 Nov 2024</div>
                <div>
                    <button class="buttons orange py-2.5 rounded-md text-sm tambah-stall" data-modal-target="modal-input-service" data-modal-toggle="modal-input-service">Tambah Data Service</button>
                </div>
                <div>
                    <button class="buttons py-2.5 rounded-md text-sm" id="stall-penuh">Stall Penuh</button>
                </div>
            </div>
        </div>
        <!-- CONTENT WEEKLY -->
        <div class="hidden content-period" id="content-weekly">
            <div class="flex border border-gray-400 items-start">
                <div class="flex-[0_0_100px] border-r border-gray-400 divide-y divide-gray-400">
                    <div class="h-[50px] bg-primarys flex-center dark:bg-gray-800">Pukul</div>
                    @foreach (["07:00", "07:30", "08:00", "08:30", "09:00", "09:30", "10:00"] as $key => $time)
                    <div class="h-[40px] flex-center">{{ $time }}</div>
                    @endforeach
                </div>
                <div class="grow overflow-scroll">
                    <div class="flex">
                        @foreach ($daysInMonth as $day)
                        <div class="flex-[0_0_80px] text-center divide-y divide-gray-400">
                            <div class="h-[50px] bg-primarys flex-center border-r border-gray-400 divide-x divide-gray-400 dark:bg-gray-800">{{ $day['day'] }}</div>
                            <div class="divide-y divide-gray-400">
                                @foreach (["07:00", "07:30", "08:00", "08:30", "09:00", "09:30", "10:00"] as $key => $time)
                                <div class="tambah-stall h-[39.8px] p-4 border-r border-gray-400 cursor-pointer hover:bg-secondarys transition-all duration-150 ease-in dark:bg-gray-500" data-modal-target="modal-input-service" data-modal-toggle="modal-input-service"></div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
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
                    Input Data Service
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

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            monthlyDate.init();
        }, 1000);

        let monthlyDate = {
            init: function() {
                monthlyDate.sortType();
                monthlyDate.inputService();
                monthlyDate.stallFull();
                monthlyDate.dayList();
            },
            dayList: function() {
                let days = document.querySelectorAll(".day");
                let content = document.querySelector("#show-action");
                let date = document.querySelector("#show-date");

                days.forEach(day => {
                    day.addEventListener("click", function() {
                        let attr = day.getAttribute("data-date");
                        date.innerHTML = `${attr}`;
                        content.classList.remove("hidden");
                    });
                });
            },
            inputService: function() {
                let button = document.querySelectorAll(".tambah-stall");
                let inputContent = document.querySelector("#input-content");
                let inputClose = document.querySelector("#input-close");

                button.forEach(element => {
                    element.addEventListener("click", function() {
                        // example for get data with ajax
                        let listime = ["07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00"];
                        let random = listime[Math.floor(Math.random() * listime.length)];
                        setTimeout(() => {
                            inputContent.classList.remove("hidden");
                        }, 1000);
                    });
    
                    inputClose.addEventListener("click", function() {
                        inputContent.classList.add("hidden");
                    });
                });
            },
            sortType: function() {
                let sort = document.querySelector("select[name='sortType']");
                let content = document.querySelectorAll(".content-period");
                let detailMonthly = document.querySelector("#show-action");

                sort.addEventListener("change", function(e) {
                    var val = e.target.value;

                    disableContentPeriod();
                    detailMonthly.classList.add("hidden");
                    document.querySelector("#content-"+val).classList.remove("hidden");
                });

                function disableContentPeriod() {
                    content.forEach(element => {
                        element.classList.add("hidden");
                    });
                }
            },
            stallFull: function() {
                let btn = document.querySelector("#stall-penuh");

                btn.addEventListener("click", function() {
                    Swal.fire({
                        title: "Apakah stall service sudah penuh ?",
                        icon: "question",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Set Full!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: "Set Full!",
                                text: "Your data stall has been full.",
                                icon: "success"
                            });
                        }
                    });
                });
            }
            // getDaysInMonth: function(month, year) {
            //     var date = new Date(year, month, 1);
            //     var days = [];
            //     while (date.getMonth() === month) {
            //         days.push(new Date(date));
            //         date.setDate(date.getDate() + 1);
            //     }
            //     return days;
            // }
        }

    });
</script>
@endsection