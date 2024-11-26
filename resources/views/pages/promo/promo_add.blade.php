@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <form action="#" class="space-y-4">
        <div>
            <label for="model" class="form-label">Pilih Model</label>
            <select name="model" id="model" class="form-control" required="">
                <option value="" disabled="" selected="">Pilih Model</option>
                <option value="Toyota">Toyota</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Honda">Honda</option>
                <option value="Mitsubisi">Mitsubisi</option>
            </select>
        </div>
        <div>
            <!-- dp >= 20 jt -->
            <label for="dp" class="form-label">DP</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <span class="font-medium">Rp</span>
                </div>
                <input type="text" name="dp" id="dp" class="form-control group" required>
            </div>
        </div>
        <div>
            <!-- angsuran >= 1 jt -->
            <label for="angsuran" class="form-label">Angsuran</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <span class="font-medium">Rp</span>
                </div>
                <input type="text" name="angsuran" id="angsuran" class="form-control group" required>
            </div>
        </div>
        <div>&nbsp;</div>
        <div class="">
            <button type="submit" class="buttons bg-orange-500 hover:bg-orange-600 rounded-md text-sm w-full">Simpan</button>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {

        }, 1000);

    });
</script>
@endsection