@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="text-end">
        <a href="{{ route('voucher.addVoucher', app()->getLocale()) }}" class="buttons-outline orange py-2.5 rounded-md text-sm">Buat E-Voucher</a>
    </div>
    <form action="#" class="space-y-6 md:w-1/2">
        <div>
            <label for="target" class="form-label">Target Customer</label>
            <input type="text" name="target" id="target" class="form-control" required>
        </div>
        <div>
            <button class="buttons orange py-2.5 text-sm rounded-md">Simpan</button>
        </div>
    </form>

    <div class="mt-10">
        <div class="text-xl font-medium mb-3">Master Zone Terdaftar / Tersedia</div>
        <div class="overflow-x-scroll overflow-y-hidden border border-gray-300 dark:border-gray-700">
            <table class="table">
                <tbody>
                    <tr>
                        <td>ABC Zone</td>
                        <td>
                            <a href="#" class="flex items-center gap-1 hover:text-red-600">
                                <i class='bx bxs-trash text-xl'></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Campaign Free Service 10K,30K KM</td>
                        <td>
                            <a href="#" class="flex items-center gap-1 hover:text-red-600">
                                <i class='bx bxs-trash text-xl'></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
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