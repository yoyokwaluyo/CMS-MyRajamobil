@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="flex rounded-md justify-end" role="group">
        <a href="{{ asset('files/kelolaservicexls.xlsx') }}" download="kelolaservicexls.xlsx" title="Download Format Xls" class="px-4 py-2.5 text-sm font-medium bg-secondarys border border-gray-400 rounded-s-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-all duration-150 ease-in">
            <i class='bx bxs-download'></i>
            Download Format
        </a>
        <div class="file-button">
            <label for="import-file-service">
                <i class='bx bxs-file'></i>
                Import Xls
            </label>
            <input id="import-file-service" type="file" />
        </div>
    </div>

    <div class="flex items-center justify-between max-sm:flex-col max-sm:gap-4 mt-6">
        <div>
            <label class="form-label">Tipe Service</label>
            <div class="flex gap-6">
                <div class="flex items-center border border-gray-400 rounded-md">
                    <input type="radio" checked id="perawatan_berkala" value="perawatan_berkala" name="tipe_service" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                    <label for="perawatan_berkala" class="flex flex-col cursor-pointer p-3">
                        <span class="text-sm font-ibm">Perawatan Berkala (PM)</span>
                    </label>
                </div>
                <div class="flex items-center border border-gray-400 rounded-md">
                    <input type="radio" id="perbaikan_umum" value="perbaikan_umum" name="tipe_service" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2 ml-2">
                    <label for="perbaikan_umum" class="flex flex-col cursor-pointer p-3">
                        <span class="text-sm font-ibm">Perbaikan Umum (GR)</span>
                    </label>
                </div>
            </div>
        </div>

        <div>
            <label class="form-label">Tentukan Hari</label>
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="button" class="px-4 py-2 text-sm font-medium bg-secondarys border border-gray-400 rounded-s-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-all duration-150 ease-in">
                    <i class='bx bx-left-arrow-alt text-xl'></i>
                </button>
                <button type="button" disabled class="px-4 py-2.5 text-sm font-medium bg-gray-50 border-t border-b border-gray-400 focus:z-10 dark:bg-gray-800 dark:border-gray-700">
                    {{ $data_period['start'] .' - '. $data_period['end'] }}
                </button>
                <button type="button" class="px-4 py-2 text-sm font-medium bg-secondarys border border-gray-400 rounded-e-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-all duration-150 ease-in">
                    <i class='bx bx-right-arrow-alt text-xl'></i>
                </button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-sm:gap-y-6 mt-10" id="dayinweek">
        <div class="days md:border border-gray-300 rounded-md md:shadow-sm md:p-3" id="day-0">
            <div class="text-sm font-medium capitalize">Minggu</div>
            <div class="grid grid-cols-2 gap-4 mt-4 text-xs font-medium px-1">
                <div>Waktu</div>
                <div>Slot</div>
            </div>
            <div class="max-h-52 overflow-y-scroll overflow-x-hidden space-y-2 p-1" id="timeslot-0">
                <div class="timeandslot grid grid-cols-2 gap-2 md:gap-4">
                    <div>
                        <select name="time_minggu[]" id="" class="form-control py-2 max-sm:text-xs max-sm:px-2">
                            @foreach ($time_show as $time)
                            <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input type="number" name="slot_minggu[]" class="form-control py-2 max-sm:text-xs">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-3 p-1">
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="minus-0"><i class='bx bx-minus'></i></button>
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="plus-0"><i class='bx bx-plus'></i></button>
            </div>
        </div>
        <div class="days md:border border-gray-300 rounded-md md:shadow-sm md:p-3" id="day-1">
            <div class="text-sm font-medium capitalize">Senin</div>
            <div class="grid grid-cols-2 gap-4 mt-4 text-xs font-medium px-1">
                <div>Waktu</div>
                <div>Slot</div>
            </div>
            <div class="max-h-52 overflow-y-scroll overflow-x-hidden space-y-2 p-1" id="timeslot-1">
                <div class="timeandslot grid grid-cols-2 gap-2 md:gap-4">
                    <div>
                        <select name="time_senin[]" id="" class="form-control py-2 max-sm:text-xs max-sm:px-2">
                            @foreach ($time_show as $time)
                            <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input type="number" name="slot_senin[]" class="form-control py-2 max-sm:text-xs">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-3 p-1">
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="minus-1"><i class='bx bx-minus'></i></button>
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="plus-1"><i class='bx bx-plus'></i></button>
            </div>
        </div>
        <div class="days md:border border-gray-300 rounded-md md:shadow-sm md:p-3" id="day-2">
            <div class="text-sm font-medium capitalize">Selasa</div>
            <div class="grid grid-cols-2 gap-4 mt-4 text-xs font-medium px-1">
                <div>Waktu</div>
                <div>Slot</div>
            </div>
            <div class="max-h-52 overflow-y-scroll overflow-x-hidden space-y-2 p-1" id="timeslot-2">
                <div class="timeandslot grid grid-cols-2 gap-2 md:gap-4">
                    <div>
                        <select name="time_selasa[]" id="" class="form-control py-2 max-sm:text-xs max-sm:px-2">
                            @foreach ($time_show as $time)
                            <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input type="number" name="slot_selasa[]" class="form-control py-2 max-sm:text-xs">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-3 p-1">
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="minus-2"><i class='bx bx-minus'></i></button>
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="plus-2"><i class='bx bx-plus'></i></button>
            </div>
        </div>
        <div class="days md:border border-gray-300 rounded-md md:shadow-sm md:p-3" id="day-3">
            <div class="text-sm font-medium capitalize">Rabu</div>
            <div class="grid grid-cols-2 gap-4 mt-4 text-xs font-medium px-1">
                <div>Waktu</div>
                <div>Slot</div>
            </div>
            <div class="max-h-52 overflow-y-scroll overflow-x-hidden space-y-2 p-1" id="timeslot-3">
                <div class="timeandslot grid grid-cols-2 gap-2 md:gap-4">
                    <div>
                        <select name="time_rabu[]" id="" class="form-control py-2 max-sm:text-xs max-sm:px-2">
                            @foreach ($time_show as $time)
                            <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input type="number" name="slot_rabu[]" class="form-control py-2 max-sm:text-xs">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-3 p-1">
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="minus-3"><i class='bx bx-minus'></i></button>
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="plus-3"><i class='bx bx-plus'></i></button>
            </div>
        </div>
        <div class="days md:border border-gray-300 rounded-md md:shadow-sm md:p-3" id="day-4">
            <div class="text-sm font-medium capitalize">Kamis</div>
            <div class="grid grid-cols-2 gap-4 mt-4 text-xs font-medium px-1">
                <div>Waktu</div>
                <div>Slot</div>
            </div>
            <div class="max-h-52 overflow-y-scroll overflow-x-hidden space-y-2 p-1" id="timeslot-4">
                <div class="timeandslot grid grid-cols-2 gap-2 md:gap-4">
                    <div>
                        <select name="time_kamis[]" id="" class="form-control py-2 max-sm:text-xs max-sm:px-2">
                            @foreach ($time_show as $time)
                            <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input type="number" name="slot_kamis[]" class="form-control py-2 max-sm:text-xs">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-3 p-1">
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="minus-4"><i class='bx bx-minus'></i></button>
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="plus-4"><i class='bx bx-plus'></i></button>
            </div>
        </div>
        <div class="days md:border border-gray-300 rounded-md md:shadow-sm md:p-3" id="day-5">
            <div class="text-sm font-medium capitalize">Jumat</div>
            <div class="grid grid-cols-2 gap-4 mt-4 text-xs font-medium px-1">
                <div>Waktu</div>
                <div>Slot</div>
            </div>
            <div class="max-h-52 overflow-y-scroll overflow-x-hidden space-y-2 p-1" id="timeslot-5">
                <div class="timeandslot grid grid-cols-2 gap-2 md:gap-4">
                    <div>
                        <select name="time_jumat[]" id="" class="form-control py-2 max-sm:text-xs max-sm:px-2">
                            @foreach ($time_show as $time)
                            <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input type="number" name="slot_jumat[]" class="form-control py-2 max-sm:text-xs">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-3 p-1">
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="minus-5"><i class='bx bx-minus'></i></button>
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="plus-5"><i class='bx bx-plus'></i></button>
            </div>
        </div>
        <div class="days md:border border-gray-300 rounded-md md:shadow-sm md:p-3" id="day-6">
            <div class="text-sm font-medium capitalize">Sabtu</div>
            <div class="grid grid-cols-2 gap-4 mt-4 text-xs font-medium px-1">
                <div>Waktu</div>
                <div>Slot</div>
            </div>
            <div class="max-h-52 overflow-y-scroll overflow-x-hidden space-y-2 p-1" id="timeslot-6">
                <div class="timeandslot grid grid-cols-2 gap-2 md:gap-4">
                    <div>
                        <select name="time_sabtu[]" id="" class="form-control py-2 max-sm:text-xs max-sm:px-2">
                            @foreach ($time_show as $time)
                            <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input type="number" name="slot_sabtu[]" class="form-control py-2 max-sm:text-xs">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-3 p-1">
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="minus-6"><i class='bx bx-minus'></i></button>
                <button class="buttons py-1.5 max-sm:px-2 rounded-md" id="plus-6"><i class='bx bx-plus'></i></button>
            </div>
        </div>
    </div>

    <div class="mt-10 space-y-2">
        <button class="buttons-outline py-2.5 text-sm rounded-md">
            <i class='bx bx-duplicate'></i>
            Salin Hari Berikutnya
        </button>
        <button class="buttons orange py-2.5 text-sm rounded-md w-full">Update</button>
        <a href="{{ route('requestservice', app()->getLocale()) }}" class="buttons-outline py-2.5 text-sm rounded-md w-full block text-center">
            Lihat Daftar Permintaan Service
        </a>
    </div>
</div>

<div class="wrapper-card mt-10">
    <div class="font-ibm text-xl mb-4">List Data Service</div>

    <div class="text-sm space-y-4" id="data-pm">
        @for ($a = 1; $a <= 3; $a++)
        <div class="border border-gray-300 rounded-md shadow-sm py-3 pl-4 pr-1 space-y-2 dark:border-gray-600">
            <div class="float-right">
                <!-- id dropdown must be dynamyic -->
                <i class='bx bx-dots-vertical-rounded text-xl rounded-md cursor-pointer hover:bg-secondarys transition-all duration-150 ease-in' id="button-setting-{{$a}}" data-dropdown-toggle="dropdown-setting-{{$a}}"></i>
                <!-- Dropdown menu -->
                <div id="dropdown-setting-{{$a}}" class="z-10 hidden bg-primarys divide-y divide-gray-100 rounded-lg shadow w-20 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-300" aria-labelledby="button-setting-0">
                        <li>
                            <a href="#edit" class="block px-4 py-2 hover:bg-secondarys dark:hover:bg-gray-600">Edit</a>
                        </li>
                        <li>
                            <a href="#delete" class="block px-4 py-2 hover:bg-secondarys dark:hover:bg-gray-600">Delete</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="min-w-24">Periode</div>
                <div class="font-medium">: 26 January - 01 February 2025</div>
            </div>
            <div class="flex gap-4">
                <div class="min-w-24">Tipe Service</div>
                <div class="font-medium">: Perawatan Berkala (PM)</div>
            </div>
            <div class="flex gap-4">
                <div class="min-w-24">Jadwal Service</div>
                <div class="inline-flex items-center gap-1 space-x-1.5">
                    :
                    <!-- id dropdown must be dynamyic -->
                    @foreach (["minggu", "senin", "selasa", "rabu", "kamis", "jumat", "sabtu"] as $key => $day)
                    <div>
                        <button class="buttons py-1.5 px-3 text-xs rounded-md inline-flex items-center capitalize" id="button-pm-{{ $a.'-'.$key }}" data-dropdown-toggle="dropdown-pm-{{ $a.'-'.$key }}">
                            {{ $day }}
                            <svg class="w-2.5 h-2.5 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown-pm-{{ $a.'-'.$key }}" class="z-10 hidden bg-primarys divide-y divide-gray-100 rounded-lg shadow min-w-20 dark:bg-gray-700">
                            <ul class="py-2 text-xs text-gray-700 dark:text-gray-300" aria-labelledby="button-pm-{{ $a.'-'.$key }}">
                                <li class="grid grid-cols-2 gap-4 p-2 hover:bg-secondarys transition-all duration-150 ease-in">
                                    <div>Jam : 07:00</div>
                                    <div>SA : 2</div>
                                </li>
                                <li class="grid grid-cols-2 gap-4 p-2 hover:bg-secondarys transition-all duration-150 ease-in">
                                    <div>Jam : 08:00</div>
                                    <div>SA : 2</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            scheduleService.init();
            uploadFile.submit();
        }, 1000);


        const scheduleService = {
            init: function() {
                scheduleService.plusminus();
            },
            plusminus: function() {
                let dayinweek = document.querySelectorAll("#dayinweek .days");

                dayinweek.forEach((element, key) => {
                    let timeslot = document.querySelector("#timeslot-" + key);
                    let btnMinus = document.querySelector("#minus-" + key);
                    let btnPlus = document.querySelector("#plus-" + key);

                    btnPlus.addEventListener("click", function() {
                        $("#timeslot-" + key).append(scheduleService.elementFormTimeSlot(key));
                    });
                    btnMinus.addEventListener("click", function() {
                        let timeandslot = document.querySelectorAll("#timeslot-" + key + " .timeandslot");

                        if ((timeandslot.length - 1) >= 0) {
                            timeandslot[(timeandslot.length - 1)].remove()
                        };
                    });
                });
            },
            elementFormTimeSlot: function(key) {
                let nameDay = scheduleService.convertDays(key);
                return `<div class="timeandslot grid grid-cols-2 gap-2 md:gap-4">
                    <div>
                        <select name="time_${nameDay}[]" id="" class="form-control py-2 max-sm:text-xs max-sm:px-2">
                            @foreach ($time_show as $time)
                            <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input type="number" name="slot_${nameDay}[]" class="form-control py-2 max-sm:text-xs">
                    </div>
                </div>`;
            },
            convertDays: function(key) {
                var day = ["minggu", "senin", "selasa", "rabu", "kamis", "jumat", "sabtu"];

                return day[key] ?? day[0];
            }
        }

        const uploadFile = {
            submit: function() {
                let files = document.querySelector("#import-file-service");

                files.addEventListener("change", function(e) {
                    console.log(e.target.value);
                });
            }
        }
    });
</script>
@endsection