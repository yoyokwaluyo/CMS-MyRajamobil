@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="grid md:grid-cols-2 gap-4">
        <div class="border border-gray-400 rounded-md p-4">
            <form action="#" class="space-y-4">
                <div>
                    <label for="days" class="form-label">Pilih Hari</label>
                    <select name="days" id="days" class="form-select">
                        <option value="" selected disabled>Pilih Hari</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <label for="waktuBuka" class="form-label">Waktu Buka</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class='bx bx-time text-xl dark:text-gray-300'></i>
                            </div>
                            <input type="text" name="time_appointment" id="waktuBuka" class="form-control group form-validation" required>
                        </div>
                    </div>
                    <div>
                        <label for="waktuTutup" class="form-label">Waktu Tutup</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class='bx bx-time text-xl dark:text-gray-300'></i>
                            </div>
                            <input type="text" name="time_appointment" id="waktuTutup" class="form-control group form-validation" required>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="enable" value="" id="enable" class="sr-only peer">
                        <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                    <label for="enable" class="form-label ms-4 mb-0">Tutup Buka</label>
                </div>
                <div>&nbsp;</div>
                <div>
                    <button class="buttons orange py-2.5 rounded-md">Simpan</button>
                </div>
            </form>
        </div>
        <div class="border border-gray-400 rounded-md text-sm p-4 divide-y divide-gray-400">
            @foreach (['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'] as $dayName)
            <div class="grid grid-cols-2 gap-4 pt-3">
                <div class="font-medium">{{ $dayName }}</div>
                <div class="">08:00 WIB - 14:00 WIB</div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {

        }, 1000);

        flatpickr("#waktuBuka", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            minTime: "07:00",
            maxTime: "17:00",
            time_24hr: true,
            onChange: function(selectedDates, dateStr, instance) {
                console.log("change");
            },
        });

        flatpickr("#waktuTutup", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            minTime: "08:00",
            maxTime: "18:00",
            time_24hr: true,
            onChange: function(selectedDates, dateStr, instance) {
                console.log("change");
            },
        });
    });
</script>
@endsection