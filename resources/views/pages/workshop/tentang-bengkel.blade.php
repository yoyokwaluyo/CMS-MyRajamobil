@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <form action="#" class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="link" class="form-label">Link 360</label>
            <input type="text" class="form-control" id="link">
        </div>
        <div>
            <label for="link_google" class="form-label">Google Map Link</label>
            <input type="text" class="form-control" id="link_google">
        </div>
        <div>
            <label for="nohp1" class="form-label">Telepon 1</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <span class="font-medium">+62</span>
                </div>
                <input type="text" name="nohp1" id="nohp1" class="form-control group" placeholder="123-45-678" required>
            </div>
        </div>
        <div>
            <label for="nohp2" class="form-label">Telepon 2</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <span class="font-medium">+62</span>
                </div>
                <input type="text" name="nohp2" id="nohp2" class="form-control group" placeholder="123-45-678" required>
            </div>
        </div>
        <div>
            <label for="nowa1" class="form-label">Whatsapp 1</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <span class="font-medium">+62</span>
                </div>
                <input type="text" name="nowa1" id="nowa1" class="form-control group" placeholder="123-45-678" required>
            </div>
        </div>
        <div>
            <label for="nowa2" class="form-label">Whatsapp 2</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <span class="font-medium">+62</span>
                </div>
                <input type="text" name="nowa2" id="nowa2" class="form-control group" placeholder="123-45-678" required>
            </div>
        </div>
        <div>
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" cols="2"></textarea>
        </div>
        <div>
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="2"></textarea>
        </div>
        <div>&nbsp;</div>
        <div class="col-span-2 text-center">
            <button class="buttons orange py-2.5 rounded-md md:w-1/2">Simpan</button>
        </div>
    </form>
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